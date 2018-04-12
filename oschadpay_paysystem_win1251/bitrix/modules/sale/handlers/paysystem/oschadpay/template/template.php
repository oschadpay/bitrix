<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

?>

    <div class="sale-paysystem-wrapper">
	<span class="tablebodytext">
		<?= Loc::getMessage('SALE_HANDLERS_PAY_SYSTEM_OSCHADPAY_DESCRIPTION') . " " . SaleFormatCurrency($params['SHOULD_PAY'], $params['currency']); ?>
	</span>
        <form id="oschadpay_payment_form" name="form" action="https://api.oschadpay.com.ua/api/checkout/redirect/" method="post">

            <input name="order_id" value="<?= $params['order_id']; ?>" type="hidden">
            <input name="merchant_id" value="<?= $params['merchant_id']; ?>" type="hidden">
            <input name="order_desc" value="<?= htmlspecialcharsbx($params['order_desc']); ?>" type="hidden">
            <input name="amount" value="<?= $params['amount'] ?>" type="hidden">
            <input name="currency" value="<?= htmlspecialcharsbx($params['currency']); ?>" type="hidden">
            <input name="server_callback_url" value="<?= htmlspecialcharsbx($params['server_callback_url']) ?>"
                   type="hidden">
            <input name="preauth" value="<?= htmlspecialcharsbx($params['preauth']) ?>" type="hidden">
            <input name="signature" value="<?= htmlspecialcharsbx($params['signature']) ?>" type="hidden">
            <input name="response_url" value="<?= htmlspecialcharsbx($params['response_url']) ?>" type="hidden">
            <input name="lang" value="<?= htmlspecialcharsbx($params['lang']) ?>" type="hidden">
            <input name="sender_email" value="<?= htmlspecialcharsbx($params['sender_email']) ?>" type="hidden">
        </form>
        <div class="sale-paysystem-oschadpay-button-container">
			<span class="sale-paysystem-oschadpay-button">
				<button style="margin: 10px" class="btn btn-default oschadpay" type="submit" form="oschadpay_payment_form"><?= Loc::getMessage('SALE_HANDLERS_PAY_SYSTEM_OSCHADPAY_BUTTON_PAID') ?></button>
			</span>
            <span
                class="sale-paysystem-oschadpay-button-descrition"><?= Loc::getMessage('SALE_HANDLERS_PAY_SYSTEM_OSCHADPAY_REDIRECT_MESS'); ?></span>
        </div>
        <p>
            <span
                class="tablebodytext sale-paysystem-description"><?= Loc::getMessage('SALE_HANDLERS_PAY_SYSTEM_OSCHADPAY_WARNING_RETURN'); ?></span>
        </p>

    </div>
<?php if(strpos($_SERVER['REQUEST_URI'], 'make') !== false) {
    echo "<script> setTimeout(function() {
            document.getElementById('oschadpay_payment_form').submit();
        }, 100);
    </script>";
}?>