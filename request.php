<?php

if($_POST["submit"]) {
    $recipient="therevelator@protonmail.com";
    $subject="I have a song request, please";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["request"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!doctype html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>The Heliocentric Hootenanny</title>
	<link rel="Shortcut Icon" href="/favicon.ico" type="image/x-icon" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta name="robots" content="all" />
	<meta name="MSSmartTagsPreventParsing" content="true" />
	<meta http-equiv="imagetoolbar" content="false" />
	<meta charset="utf-8">
</head>

<body>
<!--swap out for a logo-->
<div id="monogram">
	<img src="circlingbirds.gif" />
</div>

<!--swap out for your form-->
<div id="form">
	<h1>You can request a song here.</h1>

    <?=$thankYou ?>
    <form method="post" action="request.php">
        <label>Name:</label>
        <input name="sender">

        <label>Email:</label>
        <input name="senderEmail">

        <label>Song:</label>
        <textarea rows="5" cols="20" name="request"></textarea>

        <input type="submit" name="submit">
    </form>

</body>
</html>
</div>

<!--include jquery & backstretch-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="application/javascript" src="jquery.backstretch.min.js"></script>
<script type="application/javascript">
$(function(){
     $(window).resize(function(){
         if($(this).width() >= 767){
             $.backstretch("background.jpg", {speed: 150});
         }
      })
      .resize();//trigger resize on page load
});
</script>

<!-- gradient text -->
<style>
	* { padding: 0; margin: 0; }
	p { color: #fff; font-family: Helvetica; font-size: 16px; line-height: 24px; margin-bottom: 22px; -webkit-font-smoothing: antialiased; }
	a { color: #fff; font-weight: bold; text-decoration: none; border-bottom: none solid rgba(255,255,255,0.3); }
	a:hover { color: #151B8D; border-bottom: none solid rgba(255,255,255,1); }
	#monogram { width: 50px; padding: 50px 0 0 0; margin: 0 auto 0 50px; }
	#form { width: 360px; padding: 0 0 0 150px; margin: -35px 50px 0 auto !important; }
	h1 { color: #e8fcc2; font-weight: bold; font-family: Helvetica; font-size: 16px; line-height: 24px; margin-bottom: 22px; -webkit-font-smoothing: antialiased; }
	h2 {
		color: #f35626;font-family: Helvetica; font-size: 16px; line-height: 24px; margin-bottom: 22px; -webkit-font-smoothing: antialiased;
		background-image: -webkit-linear-gradient(92deg, #f35626, #feab3a);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
		-webkit-animation: hue 10s infinite linear;
	}

	@-webkit-keyframes hue {
		from {
			-webkit-filter: hue-rotate(0deg);
		}
		to {
			-webkit-filter: hue-rotate(-360deg);
		}
	}
</style>
</body>
</html>
