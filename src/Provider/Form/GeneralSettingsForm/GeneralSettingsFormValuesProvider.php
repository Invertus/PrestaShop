<?php

namespace Mollie\Provider\Form\GeneralSettingsForm;

use Configuration;
use Mollie\Config\Config;
use Mollie\Provider\Form\FormValuesProvider;

class GeneralSettingsFormValuesProvider implements FormValuesProvider
{
	public function getFormValues()
	{
		$formValues = [
			Config::MOLLIE_IFRAME => Configuration::get(Config::MOLLIE_IFRAME),
			Config::MOLLIE_SINGLE_CLICK_PAYMENT => Configuration::get(Config::MOLLIE_SINGLE_CLICK_PAYMENT),
			Config::MOLLIE_ISSUERS => Configuration::get(Config::MOLLIE_ISSUERS),
			Config::MOLLIE_BUTTON_ORDER_TOTAL_REFRESH => Configuration::get(Config::MOLLIE_BUTTON_ORDER_TOTAL_REFRESH),
		];

		$formValues = array_merge($formValues, $this->getPaymentMethodsSettingsFormValues());

		return $formValues;
	}

	/**
	 * @return array
	 */
	private function getPaymentMethodsSettingsFormValues()
	{
		return [
			Config::METHODS_CONFIG => Configuration::get(Config::METHODS_CONFIG),
		];
	}
}