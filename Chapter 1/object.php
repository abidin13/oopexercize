<?php
 include_once("class.emailer.php");
 include_once("class.extendedemailer.php");
 $xemailer = new ExtendedEmailer();
 $xemailer->sender = "test@gmail.com";
?>