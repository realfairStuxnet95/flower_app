<?php 
define("ROOT_URL", $_SERVER['DOCUMENT_ROOT'].'flower/');
define("VIEWS", ROOT_URL.'App/Views/');
define("APP_URL", ROOT_URL.'/Dashboard/');
define("LOADER", APP_URL.'App/Views/Utils/classes_loader.php');
define("APP_NAME", 'Arums Flowers');
require LOADER;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
    <meta name="robots" content="noindex, follow" />

	<title>About Us-<?php echo APP_NAME; ?> || Flower Delivery Services </title>
	<?php include VIEWS.'Utils/style.php'; ?>  
</head>

<body>
	<?php include VIEWS.'Utils/header.php'; ?>
	<?php include VIEWS.'About/breadcrumb.php'; ?>
	<?php include VIEWS.'About/about.php'; ?>
	<?php include VIEWS.'Utils/footer.php'; ?>
    <div id="back-to-top"></div>
    <div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
<?php include VIEWS.'Utils/script.php'; ?>     
</body>
</html>