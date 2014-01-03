<?php
$isupdate = false;
if( isset( $_GET['ec_panel'] ) && $_GET['ec_panel'] == "payment-settings" && isset( $_GET['ec_action'] ) && $_GET['ec_action'] == "save_options" ){
	ec_update_payment_info( );
	$isupdate = true;
}
?>

<?php if( $isupdate ) { ?>
	<div id='setting-error-settings_updated' class='updated settings-success'><p><strong>Settings saved.</strong></p></div>
<?php }?>

<?php $license = new ec_license( ); ?>

<div class="ec_admin_page_title">Payment Setup</div>
<div class="ec_adin_page_intro"><ul>
                  <li><strong>Manual or Direct Deposit(Free, Lite, and Full Versions)</strong> - Customer orders are placed, but receipt of payment is manual and must be verified by you the business owner.</li>
                  <li><strong>Third Party Payment Gateway(Lite and Full Versions)</strong> - Customers orders are placed and the customer is redirected to the payment page. Customers will leave your website and pay, business owners should verify payment before shipping.</li>
                  <li><strong>Live Payment Gateway(Full Version Only)</strong> - Customer orders are verified immediately using a gateway. Customers will never leave your website and pay directly via your EasyCart payment page.</li>
                </ul></div>

<form action="admin.php?page=ec_adminv2&ec_page=store-setup&ec_panel=payment-settings&ec_action=save_options" method="POST">
<div class="ec_payment_section_title"><div class="ec_payment_section_title_padding"><a href="#" onclick="ec_show_payment_section( 'ec_manual_payment' ); return false;" id="ec_manual_payment_expand" class="ec_payment_expand_button"></a><a href="#" onclick="ec_hide_payment_section( 'ec_manual_payment' ); return false;" id="ec_manual_payment_contract" class="ec_payment_contract_button"></a>Manual Payments/Direct Deposit</div></div>

<div class="ec_payment_section" id="ec_manual_payment">
    <div class="ec_payment_section_padding">
        <div class="ec_adin_page_intro">Manual payments or direct deposits allow you to accept orders on your website, however, payment is accepted by either invoicing the customer or by a direct deposit. Many countries outside the U.S. benefit from direct deposit, and you may use the following section to enter a message to your customers, such as direct deposit directions, or manual billing instructions and what to expect from your store. If operating where a payment gateway is provided, we recommend disabling this feature and using the availability of the payment processing system.</div>
        
        <div class="ec_payment_row"><span class="ec_payment_row_label">Show Manual Payments to Customers:</span><span class="ec_payment_row_input"><select name="ec_option_use_direct_deposit" id="ec_option_use_direct_deposit" onchange="toggle_direct_deposit();">
                        <option value="1" <?php if (get_option('ec_option_use_direct_deposit') == 1) echo ' selected'; ?>>Yes</option>
                        <option value="0" <?php if (get_option('ec_option_use_direct_deposit') == 0) echo ' selected'; ?>>No</option>
                      </select></span></div>
        <div class="ec_payment_row"><span class="ec_payment_row_label">Manual or Direct Deposit Message:</span><span class="ec_payment_row_input"><textarea name="ec_option_direct_deposit_message" id="ec_option_direct_deposit_message"><?php echo get_option('ec_option_direct_deposit_message'); ?></textarea></span></div>
    </div>
</div>

<div class="ec_payment_section_title"><div class="ec_payment_section_title_padding"><a href="#" onclick="ec_show_payment_section( 'ec_third_party' ); return false;" id="ec_third_party_expand" class="ec_payment_expand_button"></a><a href="#" onclick="ec_hide_payment_section( 'ec_third_party' ); return false;" id="ec_third_party_contract" class="ec_payment_contract_button"></a>Third Party(e.g. PayPal Standard)</div></div>

<div class="ec_payment_section" id="ec_third_party">
    <div class="ec_payment_section_padding">
		<?php if( !$license->is_registered( ) ){ ?>
        Your store is currently not registered. Please purchase a Lite or Full version and register your store before setting up your third party payment gateway.
        <a href="http://www.wpeasycart.com/products/wp-easycart-lite-version/" target="_blank" class="ec_lite_version_link"></a><a href="http://www.wpeasycart.com/products/wp-easycart-full-version/" target="_blank" class="ec_full_version_link"></a>
        <? }else{ ?>
        <div class="ec_selected_payment_title<?php if( get_option( 'ec_option_payment_third_party' ) != "0" ){ echo '_inactive'; } ?>" id="none_title">No Third Party Selected</div>
        <div class="ec_selected_payment_title<?php if( get_option( 'ec_option_payment_third_party' ) != "paypal" ){ echo '_inactive'; } ?>" id="paypal_title">PayPal Standard</div>
        <div class="ec_selected_payment_title<?php if( get_option( 'ec_option_payment_third_party' ) != "skrill" ){ echo '_inactive'; } ?>" id="skrill_title">Skrill</div>
        <div class="ec_selected_payment_title<?php if( get_option( 'ec_option_payment_third_party' ) != "realex_thirdparty" ){ echo '_inactive'; } ?>" id="realex_thirdparty_title">Realex</div>
        <div class="ec_selected_payment_title<?php if( get_option( 'ec_option_payment_third_party' ) != "paymentexpress_thirdparty" ){ echo '_inactive'; } ?>" id="paymentexpress_thirdparty_title">Payment Express PxPay 2.0</div>
        <div class="ec_payment_type_selector">Select a Payment Type: 
        	<select name="ec_option_payment_third_party" id="ec_option_payment_third_party" onchange="toggle_third_party()">
                <option value="0" <?php if (get_option('ec_option_payment_third_party') == 0) echo ' selected'; ?>>No Third Party Processor</option>
                <option value="paypal" <?php if (get_option('ec_option_payment_third_party') == "paypal") echo ' selected'; ?>>PayPal</option>
                <option value="skrill" <?php if (get_option('ec_option_payment_third_party') == "skrill") echo ' selected'; ?>>Skrill</option>
                <option value="realex_thirdparty" <?php if (get_option('ec_option_payment_third_party') == "realex_thirdparty") echo ' selected'; ?>>Realex</option>
                <option value="paymentexpress_thirdparty" <?php if (get_option('ec_option_payment_third_party') == "paymentexpress_thirdparty") echo ' selected'; ?>>Payment Express PxPay 2.0</option>
            </select>
        </div>
        <?php include( WP_PLUGIN_DIR . "/" . EC_PLUGIN_DIRECTORY . "/inc/admin/assets/elements/paypal.php" ); ?>
        <?php include( WP_PLUGIN_DIR . "/" . EC_PLUGIN_DIRECTORY . "/inc/admin/assets/elements/skrill.php" ); ?>
        <?php include( WP_PLUGIN_DIR . "/" . EC_PLUGIN_DIRECTORY . "/inc/admin/assets/elements/realex_thirdparty.php" ); ?>
        <?php include( WP_PLUGIN_DIR . "/" . EC_PLUGIN_DIRECTORY . "/inc/admin/assets/elements/paymentexpress_thirdparty.php" ); ?>
        <?php } ?>
    </div>
</div>

<div class="ec_payment_section_title"><div class="ec_payment_section_title_padding"><a href="#" onclick="ec_show_payment_section( 'ec_live_payment' ); return false;" id="ec_live_payment_expand" class="ec_payment_expand_button"></a><a href="#" onclick="ec_hide_payment_section( 'ec_live_payment' ); return false;" id="ec_live_payment_contract" class="ec_payment_contract_button"></a>Live Payment Gateway(e.g. Authorize.Net)</div></div>

<div class="ec_payment_section" id="ec_live_payment">
    <div class="ec_payment_section_padding">
		<?php if( $license->is_registered( ) && $license->is_lite_version( ) ){ ?>
        Your store is registered, but you have the Lite version. To use live payment gateways, you need the full version. Click the link below to upgrade to upgrade and unlock this feature.
        <a href="http://www.wpeasycart.com/products/?model_number=ec120" target="_blank" class="ec_lite_to_full_version_link"></a>
        <?php }else if( !$license->is_registered( ) ){ ?>
        Your store is currently not registered. Please purchase the Full version and register your store before setting up your live payment gateway.
        <a href="http://www.wpeasycart.com/products/wp-easycart-full-version/" target="_blank" class="ec_full_version_link"></a>
        <? }else{ ?>
        <div class="ec_selected_payment_title<?php if( get_option( 'ec_option_payment_process_method' ) != "0" ){ echo '_inactive'; } ?>" id="none_live_title">No Live Gateway Selected</div>
        <div class="ec_selected_payment_title<?php if( get_option( 'ec_option_payment_process_method' ) != "authorize" ){ echo '_inactive'; } ?>" id="authorize_title">Authorize.Net</div>
        <div class="ec_selected_payment_title<?php if( get_option( 'ec_option_payment_process_method' ) != "braintree" ){ echo '_inactive'; } ?>" id="braintree_title">Braintree S2S</div>
        <div class="ec_selected_payment_title<?php if( get_option( 'ec_option_payment_process_method' ) != "chronopay" ){ echo '_inactive'; } ?>" id="chronopay_title">Chronopay</div>
        <div class="ec_selected_payment_title<?php if( get_option( 'ec_option_payment_process_method' ) != "eway" ){ echo '_inactive'; } ?>" id="eway_title">Eway</div>
        <div class="ec_selected_payment_title<?php if( get_option( 'ec_option_payment_process_method' ) != "firstdata" ){ echo '_inactive'; } ?>" id="firstdata_title">First Data Global Gateway e4</div>
        <div class="ec_selected_payment_title<?php if( get_option( 'ec_option_payment_process_method' ) != "goemerchant" ){ echo '_inactive'; } ?>" id="goemerchant_title">GoeMerchant</div>
        <div class="ec_selected_payment_title<?php if( get_option( 'ec_option_payment_process_method' ) != "paymentexpress" ){ echo '_inactive'; } ?>" id="paymentexpress_title">Payment Express PxPost</div>
        <div class="ec_selected_payment_title<?php if( get_option( 'ec_option_payment_process_method' ) != "paypal_pro" ){ echo '_inactive'; } ?>" id="paypal_pro_title">PayPal PayFlow Pro</div>
        <div class="ec_selected_payment_title<?php if( get_option( 'ec_option_payment_process_method' ) != "paypal_payments_pro" ){ echo '_inactive'; } ?>" id="paypal_payments_pro_title">payPal Payments Pro</div>
        <div class="ec_selected_payment_title<?php if( get_option( 'ec_option_payment_process_method' ) != "paypoint" ){ echo '_inactive'; } ?>" id="paypoint_title">PayPoint</div>
        <div class="ec_selected_payment_title<?php if( get_option( 'ec_option_payment_process_method' ) != "realex" ){ echo '_inactive'; } ?>" id="realex_title">Realex</div>
        <div class="ec_selected_payment_title<?php if( get_option( 'ec_option_payment_process_method' ) != "sagepay" ){ echo '_inactive'; } ?>" id="sagepay_title">Sagepay</div>
        <div class="ec_selected_payment_title<?php if( get_option( 'ec_option_payment_process_method' ) != "securepay" ){ echo '_inactive'; } ?>" id="securepay_title">SecurePay</div>
        <div class="ec_payment_type_selector">Select a Payment Type: 
        	<select id="paymentmethod" name="ec_option_payment_process_method" onchange="toggle_live_gateways();" value="<?php echo get_option('ec_option_payment_process_method'); ?>" style="width:250px;">
                <option value="0" <?php if( get_option('ec_option_payment_process_method') == "0" ){ echo " selected"; } ?>>No Live Payment Processor</option>
                <option value="authorize" <?php if( get_option('ec_option_payment_process_method') == "authorize" ){ echo " selected"; } ?>>Authorize.net</option>
                <option value="braintree" <?php if( get_option('ec_option_payment_process_method') == "braintree" ){ echo " selected"; } ?>>Braintree S2S</option>
                <option value="chronopay" <?php if( get_option('ec_option_payment_process_method') == "chronopay" ){ echo " selected"; } ?>>Chronopay</option>
                <option value="eway" <?php if( get_option('ec_option_payment_process_method') == "eway" ){ echo " selected"; } ?>>Eway</option>
                <option value="firstdata" <?php if( get_option('ec_option_payment_process_method') == "firstdata" ){ echo " selected"; } ?>>First Data Global Gateway e4</option>
                <option value="goemerchant" <?php if( get_option('ec_option_payment_process_method') == "goemerchant" ){ echo " selected"; } ?>>GoeMerchant</option>
                <option value="paymentexpress" <?php if( get_option('ec_option_payment_process_method') == "paymentexpress" ){ echo " selected"; } ?>>Payment Express PxPost</option>
                <option value="paypal_pro" <?php if( get_option('ec_option_payment_process_method') == "paypal_pro" ){ echo " selected"; } ?>>PayPal PayFlow Pro</option>
                <option value="paypal_payments_pro" <?php if( get_option('ec_option_payment_process_method') == "paypal_payments_pro" ){ echo " selected"; } ?>>PayPal Payments Pro</option>
                <option value="paypoint" <?php if( get_option('ec_option_payment_process_method') == "paypoint" ){ echo " selected"; } ?>>PayPoint</option>
                <option value="realex" <?php if( get_option('ec_option_payment_process_method') == "realex" ){ echo " selected"; } ?>>Realex</option>
                <option value="sagepay" <?php if( get_option('ec_option_payment_process_method') == "sagepay" ){ echo " selected"; } ?>>Sagepay</option>
                <option value="securepay" <?php if( get_option('ec_option_payment_process_method') == "securepay" ){ echo " selected"; } ?>>SecurePay</option>
            </select>
        </div>
        <?php include( WP_PLUGIN_DIR . "/" . EC_PLUGIN_DIRECTORY . "/inc/admin/assets/elements/authorize.php" ); ?>
        <?php include( WP_PLUGIN_DIR . "/" . EC_PLUGIN_DIRECTORY . "/inc/admin/assets/elements/braintree.php" ); ?>
        <?php include( WP_PLUGIN_DIR . "/" . EC_PLUGIN_DIRECTORY . "/inc/admin/assets/elements/chronopay.php" ); ?>
        <?php include( WP_PLUGIN_DIR . "/" . EC_PLUGIN_DIRECTORY . "/inc/admin/assets/elements/eway.php" ); ?>
        <?php include( WP_PLUGIN_DIR . "/" . EC_PLUGIN_DIRECTORY . "/inc/admin/assets/elements/firstdata.php" ); ?>
        <?php include( WP_PLUGIN_DIR . "/" . EC_PLUGIN_DIRECTORY . "/inc/admin/assets/elements/goemerchant.php" ); ?>
        <?php include( WP_PLUGIN_DIR . "/" . EC_PLUGIN_DIRECTORY . "/inc/admin/assets/elements/paymentexpress.php" ); ?>
        <?php include( WP_PLUGIN_DIR . "/" . EC_PLUGIN_DIRECTORY . "/inc/admin/assets/elements/payflowpro.php" ); ?>
        <?php include( WP_PLUGIN_DIR . "/" . EC_PLUGIN_DIRECTORY . "/inc/admin/assets/elements/paymentspro.php" ); ?>
        <?php include( WP_PLUGIN_DIR . "/" . EC_PLUGIN_DIRECTORY . "/inc/admin/assets/elements/paypoint.php" ); ?>
        <?php include( WP_PLUGIN_DIR . "/" . EC_PLUGIN_DIRECTORY . "/inc/admin/assets/elements/realex.php" ); ?>
        <?php include( WP_PLUGIN_DIR . "/" . EC_PLUGIN_DIRECTORY . "/inc/admin/assets/elements/sagepay.php" ); ?>
        <?php include( WP_PLUGIN_DIR . "/" . EC_PLUGIN_DIRECTORY . "/inc/admin/assets/elements/securepay.php" ); ?>
        <?php } ?>
    </div>
</div>

<div class="ec_payment_section_title"><div class="ec_payment_section_title_padding"><a href="#" onclick="ec_show_payment_section( 'ec_credit_cards' ); return false;" id="ec_credit_cards_expand" class="ec_payment_expand_button"></a><a href="#" onclick="ec_hide_payment_section( 'ec_credit_cards' ); return false;" id="ec_credit_cards_contract" class="ec_payment_contract_button"></a>Accepted Credit Cards</div></div>

<div class="ec_payment_section" id="ec_credit_cards">
    <div class="ec_payment_section_padding">
		<?php if( $license->is_registered( ) && $license->is_lite_version( ) ){ ?>
        	Your store is registered, but you have the Lite version. To use live payment gateways, you need the full version. Click the link below to upgrade to upgrade and unlock this feature.
        	<a href="http://www.wpeasycart.com/products/?model_number=ec120" target="_blank" class="ec_lite_to_full_version_link"></a>
        <?php }else if( !$license->is_registered( ) ){ ?>
       		Your store is currently not registered. Please purchase the Full version and register your store before setting up your live payment gateway.
        	<a href="http://www.wpeasycart.com/products/wp-easycart-full-version/" target="_blank" class="ec_full_version_link"></a>
        <? }else{ ?>
    		<?php include( WP_PLUGIN_DIR . "/" . EC_PLUGIN_DIRECTORY . "/inc/admin/assets/elements/credit_cards.php" ); ?>
        <?php } ?>
    </div>
</div>

<div class="ec_payment_section_title"><div class="ec_payment_section_title_padding"><a href="#" onclick="ec_show_payment_section( 'ec_proxy' ); return false;" id="ec_proxy_expand" class="ec_payment_expand_button"></a><a href="#" onclick="ec_hide_payment_section( 'ec_proxy' ); return false;" id="ec_proxy_contract" class="ec_payment_contract_button"></a>Payment Proxy</div></div>

<div class="ec_payment_section" id="ec_proxy">
    <div class="ec_payment_section_padding">
    	 <?php include( WP_PLUGIN_DIR . "/" . EC_PLUGIN_DIRECTORY . "/inc/admin/assets/elements/proxy.php" ); ?>
    </div>
</div>

<div class="ec_save_changes_row"><input type="submit" value="SAVE CHANGES" class="ec_save_changes_button" /></div>
</form>

<script>
function ec_show_payment_section( section ){
	jQuery( '#' + section ).slideDown( "slow" );
	jQuery( '#' + section + "_expand" ).hide( );
	jQuery( '#' + section + "_contract" ).show( );
}

function ec_hide_payment_section( section ){
	jQuery( '#' + section ).slideUp( "slow" );
	jQuery( '#' + section + "_expand" ).show( );
	jQuery( '#' + section + "_contract" ).hide( );
}

var last_thirdparty = '<?php echo get_option( 'ec_option_payment_third_party' ); ?>';

function toggle_third_party( ){
	var type = jQuery( '#ec_option_payment_third_party option:selected' ).val( );
	if( last_thirdparty == 0 ){
		jQuery( '#none_title' ).hide(  );
	}else{
		jQuery( '#' + last_thirdparty + "_title" ).hide( );
		jQuery( '#' + last_thirdparty ).slideUp( "slow" );
	}
	
	last_thirdparty = type;
	if( type == 0 ){
		jQuery( '#none_title' ).show( );
	}else{
		jQuery( '#' + type + "_title" ).show( );
		jQuery( '#' + type ).slideDown( "slow" );
	}
}

var last_livegateway = '<?php echo get_option( 'ec_option_payment_process_method' ); ?>';
function toggle_live_gateways( ){
	var type = jQuery( '#paymentmethod option:selected' ).val( );
	if( last_livegateway == 0 ){
		jQuery( '#none_live_title' ).hide(  );
	}else{
		jQuery( '#' + last_livegateway + "_title" ).hide( );
		jQuery( '#' + last_livegateway ).slideUp( "slow" );
	}
	
	last_livegateway = type;
	if( type == 0 ){
		jQuery( '#none_live_title' ).show( );
	}else{
		jQuery( '#' + type + "_title" ).show( );
		jQuery( '#' + type ).slideDown( "slow" );
	}
}
</script>