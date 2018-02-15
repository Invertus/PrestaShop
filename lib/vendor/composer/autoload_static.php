<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit361f7850479446367c2ae3a5a978d48c
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Mollie' => 
            array (
                0 => __DIR__ . '/..' . '/mollie/mollie-api-php/src',
            ),
        ),
    );

    public static $classMap = array (
        'Mollie_API_Autoloader' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Autoloader.php',
        'Mollie_API_Client' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Client.php',
        'Mollie_API_CompatibilityChecker' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/CompatibilityChecker.php',
        'Mollie_API_Exception' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Exception.php',
        'Mollie_API_Exception_IncompatiblePlatform' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Exception/IncompatiblePlatform.php',
        'Mollie_API_Object_Customer' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Object/Customer.php',
        'Mollie_API_Object_Customer_Mandate' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Object/Customer/Mandate.php',
        'Mollie_API_Object_Customer_Subscription' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Object/Customer/Subscription.php',
        'Mollie_API_Object_Issuer' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Object/Issuer.php',
        'Mollie_API_Object_List' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Object/List.php',
        'Mollie_API_Object_Method' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Object/Method.php',
        'Mollie_API_Object_Organization' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Object/Organization.php',
        'Mollie_API_Object_Payment' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Object/Payment.php',
        'Mollie_API_Object_Payment_Refund' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Object/Payment/Refund.php',
        'Mollie_API_Object_Permission' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Object/Permission.php',
        'Mollie_API_Object_Profile' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Object/Profile.php',
        'Mollie_API_Object_Profile_APIKey' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Object/Profile/APIKey.php',
        'Mollie_API_Object_Settlement' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Object/Settlement.php',
        'Mollie_API_Resource_Base' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Resource/Base.php',
        'Mollie_API_Resource_Customers' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Resource/Customers.php',
        'Mollie_API_Resource_Customers_Mandates' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Resource/Customers/Mandates.php',
        'Mollie_API_Resource_Customers_Payments' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Resource/Customers/Payments.php',
        'Mollie_API_Resource_Customers_Subscriptions' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Resource/Customers/Subscriptions.php',
        'Mollie_API_Resource_Issuers' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Resource/Issuers.php',
        'Mollie_API_Resource_Methods' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Resource/Methods.php',
        'Mollie_API_Resource_Organizations' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Resource/Organizations.php',
        'Mollie_API_Resource_Payments' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Resource/Payments.php',
        'Mollie_API_Resource_Payments_Refunds' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Resource/Payments/Refunds.php',
        'Mollie_API_Resource_Permissions' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Resource/Permissions.php',
        'Mollie_API_Resource_Profiles' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Resource/Profiles.php',
        'Mollie_API_Resource_Profiles_APIKeys' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Resource/Profiles/APIKeys.php',
        'Mollie_API_Resource_Refunds' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Resource/Refunds.php',
        'Mollie_API_Resource_Settlements' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Resource/Settlements.php',
        'Mollie_API_Resource_Undefined' => __DIR__ . '/..' . '/mollie/mollie-api-php/src/Mollie/API/Resource/Undefined.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit361f7850479446367c2ae3a5a978d48c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit361f7850479446367c2ae3a5a978d48c::$classMap;

        }, null, ClassLoader::class);
    }
}
