<?php
class SearchModel extends Model{
	public function housedistsearch(){

		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if($post['submit']){
	
		$_SESSION['HouseID']=$post['HouseID'];
		

	header('Location: '.ROOT_URL.'search/housedistsearchresult');

}
	}
	public function housedistsearchresult(){

//$ID= $_SESSION['HouseID'];
$qry="SELECT H.HouseID, PL.user, H.Location, PL.ProductID, C.CategoryID, C.CategoryName, PL.CompanyName, PL.Model, PL.PurchaseDate, PL.Status FROM Product P JOIN ProductManual PL ON P.ProductID = PL.ProductID  JOIN Houses H ON P.HouseID = H.HouseID JOIN Categories C ON P.CategoryID = C.CategoryID WHERE H.HouseID= :HouseID";
	$this->query($qry);
	$this->bind(':HouseID', $_SESSION['HouseID']);
	//$this->execute();
	$row=$this->resultset();

return $row;
	}
}