<?php
$bell=require 'cfg.php';
$assetsHeader=$bell->plugin("assetsHeader",$bell);
$dbInfo=$bell->model("info");
$name="🔔";
$bell->view('home',$name,$assetsHeader,$dbInfo);
?>
