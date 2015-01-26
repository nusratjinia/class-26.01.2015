<?php
ini_set('display errors','on');
error_reporting(E_ALL);


function __autoload($class_name){


    include_once("classes1/".$class_name.".php");


}

$bkiict=new Bkiict();
echo $bkiict->bkiict;

$student=new Student();
$course=new Course();


//include_once('classes1/Bkiict.php');

