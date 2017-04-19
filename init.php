<?php
require 'vendor/autoload.php';

//New app//
$app=new \atk4\ui\App('Contact Form');
///////////

//Layout//
$layout = $app->initLayout('Admin');
//////////

//DB Connection//
$db = new 
\atk4\data\Persistence_SQL('mysql:dbname=money;host=localhost','MySite','12345');
