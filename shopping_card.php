<?php
error_reporting(0);

session_start();

$total=0;

$conn = new PDO("mysql:host=localhost;dbname=tutsplanet", 'root', '');		
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$action = isset($_GET['action'])?$_GET['action']:"";


if($action=='addcart' && $_SERVER['REQUEST_METHOD']=='POST') {
	

	$query = "SELECT * FROM products WHERE sku=:sku";
	$stmt = $conn->prepare($query);
	$stmt->bindParam('sku', $_POST['sku']);
	$stmt->execute();
	$product = $stmt->fetch();
	
	$currentQty = $_SESSION['products'][$_POST['sku']]['qty']+1; 
	$_SESSION['products'][$_POST['sku']] =array('qty'=>$currentQty,'name'=>$product['name'],'image'=>$product['image'],'price'=>$product['price']);
	$product='';
	header("Location:shopping-cart.php");
}


if($action=='emptyall') {
	$_SESSION['products'] =array();
	header("Location:shopping-cart.php");	
}


if($action=='empty') {
	$sku = $_GET['sku'];
	$products = $_SESSION['products'];
	unset($products[$sku]);
	$_SESSION['products']= $products;
	header("Location:shopping-cart.php");	
}

$query = "SELECT * FROM products";
$stmt = $conn->prepare($query);
$stmt->execute();
$products = $stmt->fetchAll();

?>
