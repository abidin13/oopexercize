<?php
 include_once("class.emailer.php");
 $hm = new HtmlEmailer();
 //...etc
 $hm->sendEmail();
 $hm->sendHTMLEmail();
?>