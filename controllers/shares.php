<?php
class Shares extends Controller{
	protected function Index(){
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->Index(), true);
	}

	protected function add(){
		
		//	header('Location: '.ROOT_URL.'shares');
		
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->add(), true);
	}
	protected function HouseListD(){
$viewmodel=new ShareModel();
$this->returnView($viewmodel-> HouseListD(),true);


	}
	
	protected function HouseList(){
$viewmodel=new ShareModel();
$this->returnView($viewmodel-> HouseList(),true);


	}
	
	protected function HouseListP(){
$viewmodel=new ShareModel();
$this->returnView($viewmodel-> HouseListP(),true);


	}
	protected function categories(){
$viewmodel=new ShareModel();
$this->returnView($viewmodel-> categories(),true);


	}
	protected function newhouse(){
		
		//	header('Location: '.ROOT_URL.'shares');
		
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->newhouse(), true);
	}
	
	protected function houseDelete(){
		
		//	header('Location: '.ROOT_URL.'shares');
		
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->housedelete(), true);
	}

protected function updatehouse(){
		
		//	header('Location: '.ROOT_URL.'shares');
		
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->updatehouse(), true);
	}
	protected function updatecategory(){
		
		//	header('Location: '.ROOT_URL.'shares');
		
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->updatecategory(), true);
	}
	protected function addproduct(){
		
		//	header('Location: '.ROOT_URL.'shares');
		
		$viewmodel = new ShareModel();
		//$this->executeAction();
		$this->returnView($viewmodel->addproduct(),true);
		//$this->returnView($viewmodel->addproduct(), true);
//$this->returnView($viewmodel->addiproduct(),true);
	}

	protected function newproduct(){
		
		//	header('Location: '.ROOT_URL.'shares');
		
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->newproduct(), true);
	}
	protected function insertintoproduct(){
		
		//	header('Location: '.ROOT_URL.'shares');
		
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->insertintoproduct(), true);
	}
	protected function newcategory(){
		
		//	header('Location: '.ROOT_URL.'shares');
		
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->newcategory(), true);
	}
	protected function availableproducts(){
		
		//	header('Location: '.ROOT_URL.'shares');
		
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->availableproducts(), true);
	}
	protected function availablecategories(){
		
		//	header('Location: '.ROOT_URL.'shares');
		
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->availablecategories(), true);
	}
	protected function availablehouses(){
		
		//	header('Location: '.ROOT_URL.'shares');
		
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->availablehouses(), true);
	}
	protected function deleteproduct(){
		
		//	header('Location: '.ROOT_URL.'shares');
		
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->deleteproduct(), true);
	}
	protected function deletecategory(){
		
		//	header('Location: '.ROOT_URL.'shares');
		
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->deletecategory(), true);
	}
	protected function totalassests(){
		
		//	header('Location: '.ROOT_URL.'shares');
		
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->totalassests(), true);
	}
	protected function searchproductid(){
		
		//	header('Location: '.ROOT_URL.'shares');
		
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->searchproductid(), true);
	}
	protected function searchforproductid(){
		
		//	header('Location: '.ROOT_URL.'shares');
		
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->searchforproductid(), true);
	}
	protected function updatestatus(){
		
		//	header('Location: '.ROOT_URL.'shares');
		
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->updatestatus(), true);
	}
}
