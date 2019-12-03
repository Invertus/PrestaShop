{**
* Copyright (c) 2012-2019, Mollie B.V.
* All rights reserved.
*
* Redistribution and use in source and binary forms, with or without
* modification, are permitted provided that the following conditions are met:
*
* - Redistributions of source code must retain the above copyright notice,
*    this list of conditions and the following disclaimer.
* - Redistributions in binary form must reproduce the above copyright
*    notice, this list of conditions and the following disclaimer in the
*    documentation and/or other materials provided with the distribution.
*
* THIS SOFTWARE IS PROVIDED BY THE AUTHOR AND CONTRIBUTORS ``AS IS'' AND ANY
* EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
* WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
* DISCLAIMED. IN NO EVENT SHALL THE AUTHOR OR CONTRIBUTORS BE LIABLE FOR ANY
* DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
* (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
* SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
* CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
* LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY
* OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH
* DAMAGE.
*
* @author     Mollie B.V. <info@mollie.nl>
* @copyright  Mollie B.V.
* @license    Berkeley Software Distribution License (BSD-License 2) http://www.opensource.org/licenses/bsd-license.php
* @category   Mollie
* @package    Mollie
* @link       https://www.mollie.nl
*}


<div class="mollie-iframe-container">
    <input type="hidden" value="{$methodId}" name="method-id">
    <div class="container">
        <article class="alert alert-danger" role="alert" data-alert="danger" style="display: none">
            <li class="js-mollie-alert"></li>
        </article>
    </div>
    <label class="mollie-information-label">{l s='Enter your card information' mod='mollie'}</label>
    <div class="form-group form-group--card-holder">
        <label class="mollie-label">{l s='Card holder' mod='mollie'}</label>
        <div id="card-holder-{$methodId}" class="mollie-input card-holder" style="height: 40px">
        </div>
        <div role="alert" id="card-holder-{$methodId}-error" class="error">
            <label class="mollie-input-error"></label>
        </div>
    </div>
    <div class="inline-form-group">
        <div class="form-group form-group--card-number">
            <label class="mollie-label">{l s='Card number' mod='mollie'}</label>
            <div id="card-number-{$methodId}" class="mollie-input card-number"style="height: 40px">
            </div>
            <div role="alert" id="card-number-{$methodId}-error" class="error">
                <label class="mollie-input-error"></label>
            </div>
        </div>
        <div class="form-group form-group--expiry-date">
            <div id="expiry-date-{$methodId}" class="mollie-input expiry-date"style="height: 40px">
            </div>
            <div role="alert" id="expiry-date-{$methodId}-error" class="error">
                <label class="mollie-input-error"></label>
            </div>
        </div>
        <div class="form-group form-group--verification-code">
            <label class="mollie-label">{l s='CVC' mod='mollie'}</label>
            <div id="verification-code-{$methodId}" class="mollie-input verification-code"style="height: 40px">
            </div>
            <div role="alert" id="verification-code-{$methodId}-error" class="error">
                <label class="mollie-input-error"></label>
            </div>
        </div>
    </div>
</div>


