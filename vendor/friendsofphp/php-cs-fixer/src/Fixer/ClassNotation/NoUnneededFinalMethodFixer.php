<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace MolliePrefix\PhpCsFixer\Fixer\ClassNotation;

use MolliePrefix\PhpCsFixer\AbstractFixer;
use MolliePrefix\PhpCsFixer\FixerDefinition\CodeSample;
use MolliePrefix\PhpCsFixer\FixerDefinition\FixerDefinition;
use MolliePrefix\PhpCsFixer\Tokenizer\Tokens;
/**
 * @author Filippo Tessarotto <zoeslam@gmail.com>
 */
final class NoUnneededFinalMethodFixer extends \MolliePrefix\PhpCsFixer\AbstractFixer
{
    /**
     * {@inheritdoc}
     */
    public function getDefinition()
    {
        return new \MolliePrefix\PhpCsFixer\FixerDefinition\FixerDefinition('A `final` class must not have `final` methods and `private` methods must not be `final`.', [new \MolliePrefix\PhpCsFixer\FixerDefinition\CodeSample('<?php
final class Foo
{
    final public function foo1() {}
    final protected function bar() {}
    final private function baz() {}
}

class Bar
{
    final private function bar1() {}
}
')], null, 'Risky when child class overrides a `private` method.');
    }
    /**
     * {@inheritdoc}
     */
    public function isCandidate(\MolliePrefix\PhpCsFixer\Tokenizer\Tokens $tokens)
    {
        return $tokens->isAllTokenKindsFound([\T_CLASS, \T_FINAL]);
    }
    public function isRisky()
    {
        return \true;
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, \MolliePrefix\PhpCsFixer\Tokenizer\Tokens $tokens)
    {
        $tokensCount = \count($tokens);
        for ($index = 0; $index < $tokensCount; ++$index) {
            if (!$tokens[$index]->isGivenKind(\T_CLASS)) {
                continue;
            }
            $classOpen = $tokens->getNextTokenOfKind($index, ['{']);
            $prevToken = $tokens[$tokens->getPrevMeaningfulToken($index)];
            $classIsFinal = $prevToken->isGivenKind(\T_FINAL);
            $this->fixClass($tokens, $classOpen, $classIsFinal);
        }
    }
    /**
     * @param int  $classOpenIndex
     * @param bool $classIsFinal
     */
    private function fixClass(\MolliePrefix\PhpCsFixer\Tokenizer\Tokens $tokens, $classOpenIndex, $classIsFinal)
    {
        $tokensCount = \count($tokens);
        for ($index = $classOpenIndex + 1; $index < $tokensCount; ++$index) {
            // Class end
            if ($tokens[$index]->equals('}')) {
                return;
            }
            // Skip method content
            if ($tokens[$index]->equals('{')) {
                $index = $tokens->findBlockEnd(\MolliePrefix\PhpCsFixer\Tokenizer\Tokens::BLOCK_TYPE_CURLY_BRACE, $index);
                continue;
            }
            if (!$tokens[$index]->isGivenKind(\T_FINAL)) {
                continue;
            }
            if (!$classIsFinal && !$this->isPrivateMethodOtherThanConstructor($tokens, $index, $classOpenIndex)) {
                continue;
            }
            $tokens->clearAt($index);
            ++$index;
            if ($tokens[$index]->isWhitespace()) {
                $tokens->clearAt($index);
            }
        }
    }
    /**
     * @param int $index
     * @param int $classOpenIndex
     *
     * @return bool
     */
    private function isPrivateMethodOtherThanConstructor(\MolliePrefix\PhpCsFixer\Tokenizer\Tokens $tokens, $index, $classOpenIndex)
    {
        $index = \max($classOpenIndex + 1, $tokens->getPrevTokenOfKind($index, [';', '{', '}']));
        $private = \false;
        while (!$tokens[$index]->isGivenKind(\T_FUNCTION)) {
            if ($tokens[$index]->isGivenKind(\T_PRIVATE)) {
                $private = \true;
            }
            $index = $tokens->getNextMeaningfulToken($index);
        }
        return $private && '__construct' !== \strtolower($tokens[$tokens->getNextMeaningfulToken($index)]->getContent());
    }
}