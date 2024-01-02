<?php
require 'Products.php';
require 'Testing.php';

function wow(){
	echo "WOW From Index File";
}


use Pro\V1\Command as Cmd; 
$object = new Cmd\Product(); // USE Product Class From Product Page 



?> 