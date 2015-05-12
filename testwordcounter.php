<?php
 include_once("wordcounter.php");
 $wc = new WordCounter("file.txt");
 $wc->counts(WordCounter::DESC);
?>