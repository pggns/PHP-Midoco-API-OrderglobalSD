<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/OrderglobalSDService.wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/OrderglobalSDService.wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Pggns\MidocoApi\OrderglobalSD\ClassMap::get(),
];
/**
 * Samples for Get ServiceType
 */
$get = new \Pggns\MidocoApi\OrderglobalSD\ServiceType\Get($options);
$get->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for getAirportDescription operation/method
 */
if ($get->getAirportDescription(new \Pggns\MidocoApi\OrderglobalSD\StructType\GetAirportDescriptionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAirportDescriptionWithLanguage operation/method
 */
if ($get->getAirportDescriptionWithLanguage(new \Pggns\MidocoApi\OrderglobalSD\StructType\GetAirportDescriptionWithLanguageRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAirportFullDescription operation/method
 */
if ($get->getAirportFullDescription(new \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoAirportFullDescriptionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableAirportDescriptions operation/method
 */
if ($get->getAvailableAirportDescriptions(new \Pggns\MidocoApi\OrderglobalSD\StructType\GetAvailableAirportDescriptionsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableAirlineDescriptions operation/method
 */
if ($get->getAvailableAirlineDescriptions(new \Pggns\MidocoApi\OrderglobalSD\StructType\GetAvailableAirlineDescriptionsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getVATPercents operation/method
 */
if ($get->getVATPercents(new \Pggns\MidocoApi\OrderglobalSD\StructType\GetVATPercentsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCurrencyForCountry operation/method
 */
if ($get->getCurrencyForCountry(new \Pggns\MidocoApi\OrderglobalSD\StructType\GetCurrencyForCountryRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAccountPlan operation/method
 */
if ($get->getAccountPlan(new \Pggns\MidocoApi\OrderglobalSD\StructType\GetAccountPlanRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCurrencyForOrgUnit operation/method
 */
if ($get->getCurrencyForOrgUnit(new \Pggns\MidocoApi\OrderglobalSD\StructType\GetCurrencyForOrgUnitRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAirlineForBSPCode operation/method
 */
if ($get->getAirlineForBSPCode(new \Pggns\MidocoApi\OrderglobalSD\StructType\GetAirlineForBSPCodeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAirlineByCode operation/method
 */
if ($get->getAirlineByCode(new \Pggns\MidocoApi\OrderglobalSD\StructType\GetAirlineByCodeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getValidVatCodes operation/method
 */
if ($get->getValidVatCodes(new \Pggns\MidocoApi\OrderglobalSD\StructType\GetValidVatCodesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAirportCountry operation/method
 */
if ($get->getAirportCountry(new \Pggns\MidocoApi\OrderglobalSD\StructType\GetAirportCountryRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMergedServiceStatus operation/method
 */
if ($get->getMergedServiceStatus(new \Pggns\MidocoApi\OrderglobalSD\StructType\GetMergedServiceStatusRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMergedServiceStati operation/method
 */
if ($get->getMergedServiceStati(new \Pggns\MidocoApi\OrderglobalSD\StructType\GetMergedServiceStatiRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableCurrencies operation/method
 */
if ($get->getAvailableCurrencies(new \Pggns\MidocoApi\OrderglobalSD\StructType\GetAvailableCurrenciesRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDbiUpdate operation/method
 */
if ($get->getDbiUpdate(new \Pggns\MidocoApi\OrderglobalSD\StructType\GetDbiUpdateRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDbiDefinitionHistory operation/method
 */
if ($get->getDbiDefinitionHistory(new \Pggns\MidocoApi\OrderglobalSD\StructType\GetDbiDefinitionHistoryRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCurrencyByISOCode operation/method
 */
if ($get->getCurrencyByISOCode(new \Pggns\MidocoApi\OrderglobalSD\StructType\GetCurrencyByISOCodeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getCurrency operation/method
 */
if ($get->getCurrency(new \Pggns\MidocoApi\OrderglobalSD\StructType\GetCurrencyRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDistributionMethodDescription operation/method
 */
if ($get->getDistributionMethodDescription(new \Pggns\MidocoApi\OrderglobalSD\StructType\GetDistributionMethodDescriptionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Save ServiceType
 */
$save = new \Pggns\MidocoApi\OrderglobalSD\ServiceType\Save($options);
$save->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for saveServiceStatus operation/method
 */
if ($save->saveServiceStatus(new \Pggns\MidocoApi\OrderglobalSD\StructType\SaveServiceStatusRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveCurrency operation/method
 */
if ($save->saveCurrency(new \Pggns\MidocoApi\OrderglobalSD\StructType\SaveCurrencyRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveDbiUpdate operation/method
 */
if ($save->saveDbiUpdate(new \Pggns\MidocoApi\OrderglobalSD\StructType\SaveDbiUpdateRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveDbiDefs operation/method
 */
if ($save->saveDbiDefs(new \Pggns\MidocoApi\OrderglobalSD\StructType\SaveDbiDefsRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \Pggns\MidocoApi\OrderglobalSD\ServiceType\Delete($options);
$delete->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for deleteServiceStatus operation/method
 */
if ($delete->deleteServiceStatus(new \Pggns\MidocoApi\OrderglobalSD\StructType\DeleteServiceStatusRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteCurrency operation/method
 */
if ($delete->deleteCurrency(new \Pggns\MidocoApi\OrderglobalSD\StructType\DeleteCurrencyRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteDbiUpdate operation/method
 */
if ($delete->deleteDbiUpdate(new \Pggns\MidocoApi\OrderglobalSD\StructType\DeleteDbiUpdateRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteDbiDefs operation/method
 */
if ($delete->deleteDbiDefs(new \Pggns\MidocoApi\OrderglobalSD\StructType\DeleteDbiDefsRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Tokenize ServiceType
 */
$tokenize = new \Pggns\MidocoApi\OrderglobalSD\ServiceType\Tokenize($options);
$tokenize->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for tokenizeAllDbiData operation/method
 */
if ($tokenize->tokenizeAllDbiData(new \Pggns\MidocoApi\OrderglobalSD\StructType\TokenizeAllDbiDataRequest()) !== false) {
    print_r($tokenize->getResult());
} else {
    print_r($tokenize->getLastError());
}
/**
 * Samples for Check ServiceType
 */
$check = new \Pggns\MidocoApi\OrderglobalSD\ServiceType\Check($options);
$check->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for checkIfTocSupplier operation/method
 */
if ($check->checkIfTocSupplier(new \Pggns\MidocoApi\OrderglobalSD\StructType\CheckIfTocSupplierRequest()) !== false) {
    print_r($check->getResult());
} else {
    print_r($check->getLastError());
}
