<?php
$bell=require 'config.php';
$dbInfo=$bell->model("info");
$name="🔔";
$data=[
    'dbInfo'=>$dbInfo,
    'name'=>$name
];
$bell->view('home',$data);
?>
