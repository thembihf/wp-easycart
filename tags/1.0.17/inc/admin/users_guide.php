<?php 

$validate = new ec_validation; 
$license = new ec_license;

?>
<div class="wrap">
<?php if(!$license->is_registered()) {; ?>
<div class="ribbon">This banner appears when you have a WordPress EasyCart FREE version installed. To purchase the FULL version, you must purchase a license at <a href="http://www.wpeasycart.com?ecid=admin_console" target="_blank">www.wpeasycart.com</a></div>
<h2>
  <?php }?>
  <img src="<?php echo plugins_url('images/WP-Easy-Cart-Logo.png', __FILE__); ?>" /></h2>
<div class="ec_contentwrap">
   
    <h2>Support and Online Documentation</h2>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="55" colspan="2">The WordPress EasyCart wouldn't be easy if we did not support it. So we provide you with many levels of support and documentation to ensure your eCommerce project reaches it's full potential. Start by checking our community forums for already asked questions and latest releases of topics by our EasyCart support staff. Then you can try our online documentation and users manual, where you can find each panel and each process of creating your products, taking orders, and administrating the system well documentated and informative. Licensed users upgrade to further online support and we offer live chat assistance via our website.</td>
      </tr>
      <tr>
        <td height="10" colspan="2"></td>
      </tr>
      <tr>
        <td width="600" height="66">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td><table width="90%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td rowspan="2"><img src="<?php echo plugins_url('images/system-users.png', __FILE__); ?>" /></td>
                <td><strong>COMMUNITY FORUMS</strong></td>
              </tr>
              <tr>
                <td>Get Answers from Others!</td>
              </tr>
              <tr>
                <td height="50">&nbsp;</td>
                <td><span class="submit">
                  <input type="button" class="button-primary" value="Visit Forums" onClick="window.open('http://www.wpeasycart.com/forums', '_blank')" />
                </span></td>
              </tr>
            </table></td>
            <td><table width="90%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td rowspan="2"><img src="<?php echo plugins_url('images/help-browser.png', __FILE__); ?>" /></td>
                <td><strong>ONLINE DOCUMENTATION</strong></td>
              </tr>
              <tr>
                <td>Extensive Users Manual!</td>
              </tr>
              <tr>
                <td height="50">&nbsp;</td>
                <td><span class="submit">
                  <input type="button" class="button-primary" value="View Users Manual" onClick="window.open('http://www.wpeasycart.com/docs', '_blank')"  />
                </span></td>
              </tr>
            </table></td>
            <td><table width="90%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td rowspan="2"><img src="<?php echo plugins_url('images/multimedia-player.png', __FILE__); ?>" /></td>
                <td><strong>VIDEO TUTORIALS</strong></td>
              </tr>
              <tr>
                <td>Watch our Media Library!</td>
              </tr>
              <tr>
                <td height="50">&nbsp;</td>
                <td><span class="submit">
                  <input type="button" class="button-primary" value="Watch Videos"  onClick="window.open('http://www.wpeasycart.com/video-tutorials', '_blank')"  />
                </span></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <p>&nbsp;</p>
</div>
</div>