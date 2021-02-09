<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	"<br/>";
	            session_start();
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<h3>Transaction status is success</h3>" . "<br/>";	

		if(isset($_POST['ORDERID'],$_POST['TXNAMOUNT']))
		{


			$gen_order_id=$_POST['ORDERID'];
			$customer_id= $_SESSION['customer_email'];
			$amount = $_POST['TXNAMOUNT'];
			$txn_no = $_POST['TXNID'];
			//$quantity = $_POST['RESPCODE']
			$order_date = $_POST['TXNDATE'];
			$order_status = $_POST['STATUS'];
			 $product_id = $_SESSION['product_id'];
			$product_quantity = $_SESSION['product_quantity'];
			
		}
		require_once '../../admin_area/includes/db.php';

		$sql = "INSERT INTO orders (order_id,gen_order_id,customer_id,product_id,product_quantity, amount,txn_no,order_date,order_status) VALUES ('.NULL.','$gen_order_id','$customer_id','$product_id','$product_quantity','$amount','$txn_no','$order_date','$order_status')";
		
		$result = mysqli_query($con,$sql);

		header( "refresh:0.01;url=http://localhost/swadesh_fab/successful.php" );
	}
	else {
		echo "<h3>Transaction Failed For Some Reason</h3>" . "<br/>";
		if(isset($_POST['ORDERID'],$_POST['TXNAMOUNT']))
		{

            echo $_POST['TXNID'];
			$gen_order_id=$_POST['ORDERID'];
			$customer_id= $_SESSION['customer_email'];
			$amount = $_POST['TXNAMOUNT'];
			$txn_no = $_POST['TXNID'];
			//$quantity = $_POST['RESPCODE']
			$order_date = $_POST['TXNDATE'];
			$order_status = $_POST['STATUS'];
			$product_id = $_SESSION['product_id'];
			$product_quantity = $_SESSION['product_quantity'];
		
		}
		require_once '../../admin_area/includes/db.php';

		$sql = "INSERT INTO orders (order_id,gen_order_id,customer_id,product_id,product_quantity,amount,txn_no,order_date,order_status) VALUES ('.NULL.','$gen_order_id','$customer_id','$product_id','$product_quantity','$amount','$txn_no','$order_date','$order_status')";
		
		$result = mysqli_query($con,$sql);

	// header( "refresh:0.01;url=http://localhost/swadesh_fab/failed.php");
		
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
				echo "<br/>" . $paramName . " = " . $paramValue;
		}
	}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>