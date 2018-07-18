<?php
class Search extends Controller{
protected function housedistsearch(){

$viewmodel = new SearchModel();
		$this->returnView($viewmodel->housedistsearch(), true);
        //header('Location: '.ROOT_URL.'shares'.ROOT_PATH.'search');
	}
	protected function housedistsearchresult(){

$viewmodel = new SearchModel();
		$this->returnView($viewmodel->housedistsearchresult(), true);
        //header('Location: '.ROOT_URL.'shares'.ROOT_PATH.'search');
	}
}