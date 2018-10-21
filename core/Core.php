<?php
class Core{

    public function run(){
    	$url = '/';
    	if(isset($_GET['url'])){
    		$url .= $_GET['url'];
    	}
    	$params = array();
    	if(!empty($url) && $url != '/'){
    		$url = explode('/', $url);
    		array_shift($url); // retira o primeiro valor do array
    		// para tirar o ultimo valor usar array_pop($url)
    		$currentController = $url[0].'Controller';
    		array_shift($url);

    		//print_r($url);
    		if(isset($url[0]) && !empty($url[0])){
    			$currentAction = $url[0];
    			array_shift($url);
    		}else{
    			$currentAction = "index";
    		}
    		if(count($url) > 0){
    			$params = $url;
    		}
    	}else{
    		$currentController = "homeController";
    		$currentAction = "index";
    	}

    	echo "Controller: ".$currentController."<br/>";
    	echo "Action: ".$currentAction."<br/>";
    	echo "Parametros:".print_r($params, true);

    }
}