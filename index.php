<?php
//code seen on the slide
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require that autoload file
require_once ('vendor/autoload.php');

//create an instance of the Base Class -
// instantiating f3 and storing it in a variable $f3
$f3 = Base:: instance();


//define a default route - this step is done before we invoke the run method
$f3->route('GET /', function(){
   echo '<h1>Hello World!</h1>';
});

//run fat free ->invokes run method like dot in Java
$f3->run();

