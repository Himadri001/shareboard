<?php
class Home extends Controller{
	protected function loggedinhome(){
		$viewmodel = new HomeModel();
		$this->returnView($viewmodel->loggedinhome(), true);
	}
}