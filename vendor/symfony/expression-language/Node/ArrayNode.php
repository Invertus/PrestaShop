<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper5eddef0da618a\Symfony\Component\ExpressionLanguage\Node;

use _PhpScoper5eddef0da618a\Symfony\Component\ExpressionLanguage\Compiler;
/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
class ArrayNode extends \_PhpScoper5eddef0da618a\Symfony\Component\ExpressionLanguage\Node\Node
{
    protected $index;
    public function __construct()
    {
        $this->index = -1;
    }
    public function addElement(\_PhpScoper5eddef0da618a\Symfony\Component\ExpressionLanguage\Node\Node $value, \_PhpScoper5eddef0da618a\Symfony\Component\ExpressionLanguage\Node\Node $key = null)
    {
        if (null === $key) {
            $key = new \_PhpScoper5eddef0da618a\Symfony\Component\ExpressionLanguage\Node\ConstantNode(++$this->index);
        }
        \array_push($this->nodes, $key, $value);
    }
    /**
     * Compiles the node to PHP.
     */
    public function compile(\_PhpScoper5eddef0da618a\Symfony\Component\ExpressionLanguage\Compiler $compiler)
    {
        $compiler->raw('[');
        $this->compileArguments($compiler);
        $compiler->raw(']');
    }
    public function evaluate($functions, $values)
    {
        $result = [];
        foreach ($this->getKeyValuePairs() as $pair) {
            $result[$pair['key']->evaluate($functions, $values)] = $pair['value']->evaluate($functions, $values);
        }
        return $result;
    }
    public function toArray()
    {
        $value = [];
        foreach ($this->getKeyValuePairs() as $pair) {
            $value[$pair['key']->attributes['value']] = $pair['value'];
        }
        $array = [];
        if ($this->isHash($value)) {
            foreach ($value as $k => $v) {
                $array[] = ', ';
                $array[] = new \_PhpScoper5eddef0da618a\Symfony\Component\ExpressionLanguage\Node\ConstantNode($k);
                $array[] = ': ';
                $array[] = $v;
            }
            $array[0] = '{';
            $array[] = '}';
        } else {
            foreach ($value as $v) {
                $array[] = ', ';
                $array[] = $v;
            }
            $array[0] = '[';
            $array[] = ']';
        }
        return $array;
    }
    protected function getKeyValuePairs()
    {
        $pairs = [];
        foreach (\array_chunk($this->nodes, 2) as $pair) {
            $pairs[] = ['key' => $pair[0], 'value' => $pair[1]];
        }
        return $pairs;
    }
    protected function compileArguments(\_PhpScoper5eddef0da618a\Symfony\Component\ExpressionLanguage\Compiler $compiler, $withKeys = \true)
    {
        $first = \true;
        foreach ($this->getKeyValuePairs() as $pair) {
            if (!$first) {
                $compiler->raw(', ');
            }
            $first = \false;
            if ($withKeys) {
                $compiler->compile($pair['key'])->raw(' => ');
            }
            $compiler->compile($pair['value']);
        }
    }
}
