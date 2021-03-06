
<html>
<?php

include "views/header.php";


?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travel &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->


</head>
<body>
<script>
$(document).ready(function(){
	
	$("#cform").submit(function(e){
		
		var cemail=$("#cemail").val();
		var ctext=$("#ctext").val();
		
		 $.ajax({
        type: "POST",
        url: "ajaxing.php?",
       data: {cemail: cemail, ctext: ctext},
        success: function (data) {
            $("#resultdiv").html(data);
        },
		error: function(jqXHR, textStatus, errorThrown) {
    alert(jqXHR.status);
    alert(textStatus);
    alert(errorThrown);
}
    });
		
		e.preventDefault();
	})
	

	
	
})


</script>
<div id="formdiv" style="width;600px;height:300px;">


<div id="regdiv" style="width:250px;float:left;margin-left:70px;margin-bottom:50px;">
<h2>Contact </h2>
<form method="post"  id="cform">
<input type="text" name="email" placeholder="Enter your email" id="cemail"><br><br>

<textarea type="text" name="text" placeholder="Enter your message here" id="ctext"></textarea><br><br>

<input type="submit" name="csubmit" id="csubmit">

</form>
<div id="resultdiv"></div>
</div>
</div>
</body>

<br><br>
<?php

include "views/footer.php";


?>
</html>



