<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" href="https://dovemultinationalinvnig.org/asset/img/dove.jpg">
<title>404 Page Not Found</title>
<style type="text/css">
body{
    margin:0;
    padding:0;   
    background: #f0f0f0;
    height:100vh;

}
#main {
    background: #fff;
}
#error_page {
    padding: 150px 0;
    background: #f0f0f0;
}
#error_page .error_logo {
    background: url(../asset/img/error_logo.jpg) no-repeat center center;
    height: 225px;
}
#error_page .sw {
    width: 558px;
    margin: 0 auto;
}
#error_page .error_warning {
    margin-top: 12px;
    height: 30px;
    line-height: 30px;
    background: url(../asset/img/error_warning.jpg) no-repeat left center;
    text-indent: 49px;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
    margin-bottom:14px;

}
#error_page .sw {
    width: 558px;
    margin: 0 auto;
}
#error_page .error_nav {
    text-align: center;
    margin-top: 30px;
    font-size: 18px;
    color: #727272;
}
#error_page .sw {
    width: 558px;
    margin: 0 auto;
}
#error_page .error_nav>a {
    margin: 0 36px;
    font-size: 18px;
    color: #727272;
    text-decoration:none;
}
</style>
</head>
<body>
    <div id="main">
    <div id="error_page" class="w">
		<div class="error_logo sw"></div>
		<div class="error_warning sw">		<?php echo $message; ?>
</div>
		<div class="error_nav sw" style="margin-top:17px;"><a href="https://dovemultinationalinvnig.org/">Home Page</a>|<a href="#">Go Back</a></div>
	</div>
</div>
	<!--<div id="container">-->
	<!--	<h1><?php echo $heading; ?></h1>-->
	<!--</div>-->
</body>
</html>