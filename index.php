<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>OOP Example</title>
    </head>
    <body>
	<?php
	

	final class Index {

	    public function init() {
		spl_autoload_register(array($this, 'loadClass'));
	    }

	    public function loadClass($name) {
		$classes = array(
		    'AnimalInterface' => 'model/AnimalInterface.php',
		    'Animal' => 'model/Animal.php',
		    'Cat' => 'model/Cat.php',
		    'Fish' => 'model/Fish.php'		    
		);
		if (!array_key_exists($name, $classes)) {
		    die('Class "' . $name . '" not found.');
		}
		require_once $classes[$name];
	    }

	    public function run() {
		$cat = new Cat();
		//echo "<br/>".$cat->breathe()."<br/>";
		echo $cat->move()."<br/>";
		self::respirate($cat);
				
		$fish = new Fish();
		//echo "<br/>".$fish->breathe()."<br/>";
		self::respirate($fish);
		echo $fish->move()."<br/>";
	    }
	    
	    private function respirate($animal){
		echo $animal->breathe()."<br/>";
	    }
	}

	$index = new Index();
	$index->init();	
	$index->run();
	?>
    </body>
</html>
