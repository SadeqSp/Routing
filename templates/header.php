<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    if(!function_exists('get_title')) {
        function get_title() {
            return APP_TITLE;
        }
    }
    ?>
    <title><?php echo get_title(); ?></title>

    <meta name="keywords" content="...">
	<meta name="description" content="...">
    
    <!--<link rel="icon" href="_img/favicon.png" type="image/png" sizes="16x8">-->
 
</head>
<body>
    <?php include_once('nav.php'); ?>