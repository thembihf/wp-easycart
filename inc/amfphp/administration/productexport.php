<?php 
/*
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//All Code and Design is copyrighted by Level Four Development, llc
//
//Level Four Development, LLC provides this code "as is" without warranty of any kind, either express or implied,     
//including but not limited to the implied warranties of merchantability and/or fitness for a particular purpose.         
//
//Only licensed users may use this code and storfront for live purposes. All other use is prohibited and may be 
//subject to copyright violation laws. If you have any questions regarding proper use of this code, please
//contact Level Four Development, llc and EasyCart prior to use.
//
//All use of this storefront is subject to our terms of agreement found on Level Four Development, llc's  website.
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
*/

//load our connection settings
ob_start( NULL, 4096 );
require_once( '../../../../../../wp-load.php' );
global $wpdb;

$requestID = "-1";
if( isset( $_GET['reqID'] ) )
	$requestID = $_GET['reqID'];

$user_sql = "SELECT  ec_user.*, ec_role.admin_access FROM ec_user LEFT JOIN ec_role ON (ec_user.user_level = ec_role.role_label) WHERE ec_user.password = %s AND  (ec_user.user_level = 'admin' OR ec_role.admin_access = 1)";
$users = $wpdb->get_results( $wpdb->prepare( $user_sql, $requestID ) );

if( !empty( $users ) ){
	
	$data = "";
	$sql = "SELECT * FROM ec_product ORDER BY ec_product.product_id ASC";
	$results = $wpdb->get_results( $sql, ARRAY_A );
	
	if( count( $results ) > 0 ){
		
		$keys = array_keys( $results[0] );
		
		foreach( $keys as $key ){
			
			$data .= $key . ',';
		
		}
		
		$data .= "\n";
		
		foreach( $results as $result ){
			
			foreach( $result as $value ){
			
				$data .= str_replace( '"', '""', $value ) . ",";
			
			}
			
			$data .= "\n";
		}
		
	}else{
		if( $data == "" ){
			$data = "\nno matching records found\n";
		}
	}
	
	header("Content-type: text/csv; charset=UTF-8");
	header("Content-Transfer-Encoding: binary"); 
	header("Content-Disposition: attachment; filename=products.csv");
	header("Pragma: no-cache");
	header("Expires: 0");

	echo $data;
	
}else{

	echo "Not Authorized...";

}
?>