<div id="ec_account_register">
<div class="ec_cart_left">

    <?php $this->display_account_register_form_start( ); ?>

    <div class="ec_cart_header ec_top">
		<?php echo $GLOBALS['language']->get_text( 'account_register', 'account_register_title' )?>
    </div>

    <div class="ec_cart_input_row">
        <label for="ec_account_register_first_name"><?php echo $GLOBALS['language']->get_text( 'cart_contact_information', 'cart_contact_information_first_name' ); ?>*</label>
        <?php $this->display_account_register_first_name_input( ); ?>
        <div class="ec_cart_error_row" id="ec_account_register_first_name_error">
            <?php echo $GLOBALS['language']->get_text( 'cart_form_notices', 'cart_notice_please_enter_your' ); ?> <?php echo $GLOBALS['language']->get_text( 'cart_contact_information', 'cart_contact_information_first_name' ); ?>
        </div>
    </div>

    <div class="ec_cart_input_row">
        <label for="ec_account_register_last_name"><?php echo $GLOBALS['language']->get_text( 'cart_contact_information', 'cart_contact_information_last_name' ); ?>*</label>
        <?php $this->display_account_register_last_name_input( ); ?>
        <div class="ec_cart_error_row" id="ec_account_register_last_name_error">
            <?php echo $GLOBALS['language']->get_text( 'cart_form_notices', 'cart_notice_please_enter_your' ); ?> <?php echo $GLOBALS['language']->get_text( 'cart_contact_information', 'cart_contact_information_last_name' ); ?>
        </div>
    </div>

    <div class="ec_cart_input_row">
        <label for="ec_account_register_email"><?php echo $GLOBALS['language']->get_text( 'cart_contact_information', 'cart_contact_information_email' ); ?>*</label>
        <?php $this->display_account_register_email_input( ); ?>
        <div class="ec_cart_error_row" id="ec_account_register_email_error">
            <?php echo $GLOBALS['language']->get_text( 'cart_form_notices', 'cart_notice_please_enter_valid' ); ?> <?php echo $GLOBALS['language']->get_text( 'cart_contact_information', 'cart_contact_information_email' ); ?>
        </div>
    </div>

    <div class="ec_cart_input_row">
        <label for="ec_account_register_email_retype"><?php echo $GLOBALS['language']->get_text( 'cart_contact_information', 'cart_contact_information_retype_email' ); ?>*</label>
        <?php $this->display_account_register_retype_email_input( ); ?>
        <div class="ec_cart_error_row" id="ec_account_register_email_retype_error">
            <?php echo $GLOBALS['language']->get_text( 'cart_form_notices', 'cart_notice_emails_do_not_match' ); ?>
        </div>
    </div>

    <div class="ec_cart_input_row">
        <label for="ec_account_register_password"><?php echo $GLOBALS['language']->get_text( 'cart_contact_information', 'cart_contact_information_password' ); ?>*</label>
        <?php $this->display_account_register_password_input( ); ?>
        <div class="ec_cart_error_row" id="ec_account_register_password_error">
            <?php echo $GLOBALS['language']->get_text( 'cart_form_notices', 'cart_notice_length_error' ); ?>
        </div>
    </div>

    <div class="ec_cart_input_row">
        <label for="ec_account_register_password_retype"><?php echo $GLOBALS['language']->get_text( 'cart_contact_information', 'cart_contact_information_retype_password' ); ?>*</label>
        <?php $this->display_account_register_retype_password_input( ); ?>
        <div class="ec_cart_error_row" id="ec_account_register_password_retype_error">
            <?php echo $GLOBALS['language']->get_text( 'cart_form_notices', 'cart_notice_passwords_do_not_match' ); ?>
        </div>
    </div>
	
    <div class="ec_cart_input_row">
    	<?php $this->display_account_register_is_subscriber_input( ); ?>

    	<?php echo $GLOBALS['language']->get_text( 'account_register', 'account_register_subscribe' )?>
    </div>
    
    <?php // OPTIONAL BILLING ADDRESS FIELDS

	if( get_option( 'ec_option_require_account_address' ) ){ ?>

    <div class="ec_cart_header">
        <?php echo $GLOBALS['language']->get_text( 'cart_billing_information', 'cart_billing_information_title' ); ?>
    </div>
    <?php if( get_option( 'ec_option_display_country_top' ) ){ ?>
    <div class="ec_cart_input_row">
        <label for="ec_account_billing_information_country"><?php echo $GLOBALS['language']->get_text( 'cart_billing_information', 'cart_billing_information_country' ); ?>*</label>
        <?php $this->display_account_billing_information_country_input( "country" ); ?>
        <div class="ec_cart_error_row" id="ec_account_billing_information_country_error">
            <?php echo $GLOBALS['language']->get_text( 'cart_form_notices', 'cart_notice_please_select_your' ); ?> <?php echo $GLOBALS['language']->get_text( 'cart_billing_information', 'cart_billing_information_country' ); ?>
        </div>
    </div>
    <?php }?>
    <div class="ec_cart_input_row">
        <div class="ec_cart_input_left_half">
            <label for="ec_account_billing_information_first_name"><?php echo $GLOBALS['language']->get_text( 'cart_billing_information', 'cart_billing_information_first_name' ); ?>*</label>
            <?php $this->display_account_billing_information_first_name_input( ); ?>
        	<div class="ec_cart_error_row" id="ec_account_billing_information_first_name_error">
                <?php echo $GLOBALS['language']->get_text( 'cart_form_notices', 'cart_notice_please_enter_your' ); ?> <?php echo $GLOBALS['language']->get_text( 'cart_billing_information', 'cart_billing_information_first_name' ); ?>
            </div>
        </div>
        <div class="ec_cart_input_right_half">
            <label for="ec_account_billing_information_last_name"><?php echo $GLOBALS['language']->get_text( 'cart_billing_information', 'cart_billing_information_last_name' ); ?>*</label>
            <?php $this->display_account_billing_information_last_name_input( ); ?>
            <div class="ec_cart_error_row" id="ec_account_billing_information_last_name_error">
                <?php echo $GLOBALS['language']->get_text( 'cart_form_notices', 'cart_notice_please_enter_your' ); ?> <?php echo $GLOBALS['language']->get_text( 'cart_billing_information', 'cart_billing_information_last_name' ); ?>
            </div>
        </div>
    </div>
    <?php if( get_option( 'ec_option_enable_company_name' ) ){ ?>
    <div class="ec_cart_input_row">
        <label for="ec_account_billing_information_company_name"><?php echo $GLOBALS['language']->get_text( 'cart_billing_information', 'cart_billing_information_company_name' ); ?></label>
        <?php $this->display_account_billing_information_company_name_input( ); ?>
    </div>
    <?php }?>
    <div class="ec_cart_input_row">
        <label for="ec_account_billing_information_address"><?php echo $GLOBALS['language']->get_text( 'cart_billing_information', 'cart_billing_information_address' ); ?>*</label>
        <?php $this->display_account_billing_information_address_input( ); ?>
    </div>
    <div class="ec_cart_error_row" id="ec_account_billing_information_address_error">
		<?php echo $GLOBALS['language']->get_text( 'cart_form_notices', 'cart_notice_please_enter_your' ); ?> <?php echo $GLOBALS['language']->get_text( 'cart_billing_information', 'cart_billing_information_address' ); ?>
    </div>
    <?php if( get_option( 'ec_option_use_address2' ) ){ ?>
    <div class="ec_cart_input_row">
        <?php $this->display_account_billing_information_address2_input( ); ?>
    </div>
    <?php }?>
    <div class="ec_cart_input_row">
        <label for="ec_account_billing_information_city"><?php echo $GLOBALS['language']->get_text( 'cart_billing_information', 'cart_billing_information_city' ); ?>*</label>
        <?php $this->display_account_billing_information_city_input( ); ?>
        <div class="ec_cart_error_row" id="ec_account_billing_information_city_error">
            <?php echo $GLOBALS['language']->get_text( 'cart_form_notices', 'cart_notice_please_enter_your' ); ?> <?php echo $GLOBALS['language']->get_text( 'cart_billing_information', 'cart_billing_information_city' ); ?>
        </div>
    </div>
    <div class="ec_cart_input_row">
        <div class="ec_cart_input_left_half">
            <label for="ec_account_billing_information_state"><?php echo $GLOBALS['language']->get_text( 'cart_billing_information', 'cart_billing_information_state' ); ?><span id="ec_billing_state_required">*</span></label>
            <?php $this->display_account_billing_information_state_input( ); ?>
            <div class="ec_cart_error_row" id="ec_account_billing_information_state_error">
                <?php echo $GLOBALS['language']->get_text( 'cart_form_notices', 'cart_notice_please_enter_your' ); ?> <?php echo $GLOBALS['language']->get_text( 'cart_billing_information', 'cart_billing_information_state' ); ?>
            </div>
        </div>
        <div class="ec_cart_input_right_half">
            <label for="ec_account_billing_information_zip"><?php echo $GLOBALS['language']->get_text( 'cart_billing_information', 'cart_billing_information_zip' ); ?>*</label>
            <?php $this->display_account_billing_information_zip_input( ); ?>
            <div class="ec_cart_error_row" id="ec_account_billing_information_zip_error">
                <?php echo $GLOBALS['language']->get_text( 'cart_form_notices', 'cart_notice_please_enter_your' ); ?> <?php echo $GLOBALS['language']->get_text( 'cart_billing_information', 'cart_billing_information_zip' ); ?>
            </div>
        </div>
    </div>
    <?php if( !get_option( 'ec_option_display_country_top' ) ){ ?>
    <div class="ec_cart_input_row">
        <label for="ec_account_billing_information_country"><?php echo $GLOBALS['language']->get_text( 'cart_billing_information', 'cart_billing_information_country' ); ?>*</label>
        <?php $this->display_account_billing_information_country_input( ); ?>
        <div class="ec_cart_error_row" id="ec_account_billing_information_country_error">
            <?php echo $GLOBALS['language']->get_text( 'cart_form_notices', 'cart_notice_please_select_your' ); ?> <?php echo $GLOBALS['language']->get_text( 'cart_billing_information', 'cart_billing_information_country' ); ?>
        </div>
    </div>
    <?php }?>
    <?php if( get_option( 'ec_option_collect_user_phone' ) ){ ?>
    <div class="ec_cart_input_row">
        <label for="ec_account_billing_information_phone"><?php echo $GLOBALS['language']->get_text( 'cart_billing_information', 'cart_billing_information_phone' ); ?>*</label>
        <?php $this->display_account_billing_information_phone_input( ); ?>
        <div class="ec_cart_error_row" id="ec_account_billing_information_phone_error">
            <?php echo $GLOBALS['language']->get_text( 'cart_form_notices', 'cart_notice_please_enter_your' ); ?> <?php echo $GLOBALS['language']->get_text( 'cart_billing_information', 'cart_billing_information_phone' ); ?>
        </div>
    </div>

	<?php }?>

	<?php }?>

	<?php if( get_option( 'ec_option_enable_user_notes' ) ){ ?>
    
    <div class="ec_cart_input_row">
        <label for="ec_account_billing_information_user_notes"><?php echo $GLOBALS['language']->get_text( 'account_register', 'account_billing_information_user_notes' ); ?>*</label>
        <textarea name="ec_account_register_user_notes" id="ec_account_register_user_notes"></textarea>
        <div class="ec_cart_error_row" id="ec_account_register_user_notes_error">
            <?php echo $GLOBALS['language']->get_text( 'cart_form_notices', 'cart_notice_please_enter_your' ); ?> <?php echo $GLOBALS['language']->get_text( 'account_register', 'account_billing_information_user_notes' ); ?>
        </div>
    </div>
    
    <?php }?>

    <div class="ec_cart_button_row">

		<input type="submit" value="<?php echo $GLOBALS['language']->get_text( 'account_register', 'account_register_button' ); ?>" class="ec_cart_button" onclick="return ec_account_register_button_click2( );" />

    </div>

    <?php $this->display_account_register_form_end( ); ?>

</div>

<div class="ec_cart_right">
	
    <div class="ec_cart_header ec_top">
    	<?php echo $GLOBALS['language']->get_text( 'account_login', 'account_login_title' )?>
    </div>
        
    <?php $this->display_account_login_form_start(); ?>
    
    <div class="ec_cart_input_row">
        <label for="ec_account_login_email"><?php echo $GLOBALS['language']->get_text( 'account_login', 'account_login_email_label' )?>*</label>
        <?php $this->display_account_login_email_input(); ?>
    </div>
    
    <div class="ec_cart_error_row" id="ec_account_login_email_error">
        <?php echo $GLOBALS['language']->get_text( 'cart_form_notices', 'cart_notice_please_enter_your' ); ?> <?php echo $GLOBALS['language']->get_text( 'cart_login', 'cart_login_email_label' ); ?>
    </div>
    
    <div class="ec_cart_input_row">
        <label for="ec_account_login_password"><?php echo $GLOBALS['language']->get_text( 'account_login', 'account_login_password_label' )?>*</label>
        <?php $this->display_account_login_password_input(); ?>
    </div>
    <div class="ec_cart_error_row" id="ec_account_login_password_error">
        <?php echo $GLOBALS['language']->get_text( 'cart_form_notices', 'cart_notice_please_enter_your' ); ?> <?php echo $GLOBALS['language']->get_text( 'cart_login', 'cart_login_password_label' ); ?>
    </div>
    
     <div class="ec_cart_button_row">
        <input type="submit" value="<?php echo $GLOBALS['language']->get_text( 'account_login', 'account_login_button' ); ?>" class="ec_cart_button" onclick="return ec_account_login_button_click( );" />
    </div>
    
    <div class="ec_cart_input_row">
		<?php $this->display_account_login_forgot_password_link( $GLOBALS['language']->get_text( 'account_login', 'account_login_forgot_password_link' ) ); ?>
	</div>
    
    <?php $this->display_account_login_form_end(); ?>
    
</div>

</div>