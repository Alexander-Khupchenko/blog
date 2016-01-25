<?php
	function articles_all(){
		$art1 = ["id"=>1, "title"=>"Title1", "date"=>"2016-01-25", "content"=>"Content1"];
		$art2 = ["id"=>2, "title"=>"Title2", "date"=>"2016-01-24", "content"=>"Content2"];
		
		$arr[0] = $art1;
		$arr[1] = $art2;
		
		return $arr;
	}

	function articles_get($id){
		return ["id"=>1, "title"=>"Это простой заголовок", "date"=>"2016-01-25", "content"=>"Здесь будет статья"];
	}

	function articles_new($title, $data, $content){
		
	}
	
	function articles_edit($id, $title, $data, $content){
		
	}
	
	function articles_delete($id){
		
	}
?>