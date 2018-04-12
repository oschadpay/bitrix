<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php
include(GetLangFileName(dirname(__FILE__) . "/", "/.description.php"));


$psTitle = "Oschadpay";
$psDescription = "<a href=\"https://www.oschadbank.ua\" target=\"_blank\">https://www.oschadbank.ua</a>";

$array = array(
    'oschadpay_onpage',
    'oschadpay_preauth',
    'oschadpay_merchant',
    'oschadpay_secret_key',
    'oschadpay_price_currency',
    'oschadpay_server_callback_url',
    'oschadpay_response_url',
    'oschadpay_language'
);


$arPSCorrespondence = array(
    "ONPAGE" => array(
        "NAME" => GetMessage("OSCHADPAY_ONPAGE"),
        'SORT' => 900,
        "INPUT" => array(
            'TYPE' => 'Y/N'
        )
    ),
    "PREAUTH" => array(
        "NAME" => GetMessage("OSCHADPAY_PREAUTH"),
        'SORT' => 900,
        "INPUT" => array(
            'TYPE' => 'Y/N'
        )
    ),
    'ORDER_ID' => array(
        'NAME'  => GetMessage('OSCHADPAY_ORDER_ID'),
        'DESCR' => '',
        'VALUE' => 'ID',
        'TYPE'  => 'ORDER'
    ),
    "MERCHANT" => array(
        "NAME" => GetMessage("OSCHADPAY_MERCHANT"),
        "DESCR" => GetMessage("OSCHADPAY_MERCHANT"),
        "VALUE" => "",
        "TYPE" => ""
    ),
    "SECURE_KEY" => array(
        "NAME" => GetMessage("OSCHADPAY_SECURE_KEY"),
        "DESCR" => GetMessage("OSCHADPAY_SECURE_KEY"),
        "VALUE" => "",
        "TYPE" => ""
    ),
    'SHOULD_PAY' => array(
        'NAME' => GetMessage('OSCHADPAY_AMOUNT'),
        'DESCR' => '',
        'VALUE' => 'SHOULD_PAY',
        'TYPE' => 'ORDER'
    ),
    "SERVER_CALLBACK_URL" => array(
        "NAME" => GetMessage("OSCHADPAY_SERVER_CALLBACK_URL"),
        "DESCR" => GetMessage("OSCHADPAY_DESC_SERVER_CALLBACK_URL"),
        "VALUE" => "",
        "TYPE" => ""
    ),
    "RESPONSE_URL" => array(
        "NAME" => GetMessage("OSCHADPAY_RESPONSE_URL"),
        "DESCR" => GetMessage("OSCHADPAY_DESC_RESPONSE_URL"),
        "VALUE" => "",
        "TYPE" => ""
    ),
    "LANGUAGE" => array(
        "NAME" => GetMessage("OSCHADPAY_LANGUAGE"),
        "DESCR" => GetMessage("OSCHADPAY_DESC_LANGUAGE"),
        "VALUE" => "RU",
        "TYPE" => ""
    ),
    "PRICE_CURRENCY" => array(
        "NAME" => GetMessage("OSCHADPAY_PRICE_CURRENCY"),
        "DESCR" => GetMessage("OSCHADPAY_DESC_PRICE_CURRENCY"),
        "VALUE" => "CURRENCY",
        "TYPE" => "ORDER"
    ),
);
?>