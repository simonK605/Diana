<?php

require "index.php";
$obj = new Blog($_POST);
$obj->setImg($obj->getImg());

if(isset($_POST["submit"])){
	if(!empty($_POST["id"])){
		echo $obj->update();
	}
	else{
		echo $obj->insert();
	}
}
if(!empty($_GET["id"])){
	echo $obj->delete($_GET["id"], $_GET["img"]);
}
if(!empty($_GET["search"])){
	echo $obj->search($_POST["blogSearchInp"]);
}