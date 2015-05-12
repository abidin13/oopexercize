<?php
 class ExtndedEmailer extends emailer
 {
     function __construct(){}
     public function setSender($sender)
     {
         $this->sender = $sender;
     }
 }
    
?>