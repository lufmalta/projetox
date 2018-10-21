<?php
class Core{

    public function run(){
    	$url = '/';
    	if(isset($_GET['url'])){
    		$url .= $_GET['url'];
    	}
    	if(!empty($url) && $url != '/'){
    		$url = explode('/', $url);
    		array_shift($url); // retira o primeiro valor do array
    		// para tirar o ultimo valor usar array_pop($url)
    		$currentController = $url[0].'Controller';
    		array_shift($url);

    		//print_r($url);
    		if(isset($url[0]) && !empty($url[0])){
    			$currentAction = $url[0];
    		}else{
    			$currentAction = "index";
    		}
    	}else{
    		$currentController = "homeController";
    		$currentAction = "index";
    	}

    	echo "Controller: ".$currentController;
    	echo "<br/>Action: ".$currentAction;

    }
}