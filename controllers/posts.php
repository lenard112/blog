<?php

class posts extends Controller{

	function index(){
        $this->posts = get_all("select * from post");
	}

    function index_ajax(){
		echo "\$_POST:<br>";
        var_dump($_POST);
    }

	function index_post(){
		echo "\$_POST:<br>";
		var_dump($_POST);
	}
}