<?php
class ShareModel extends Model{
	public function Index(){
		if($_SESSION['is_logged_in']){
		$qry="SELECT C.CategoryName, COUNT( P.ProductID) AS Amount FROM Product P JOIN Categories C ON P.CategoryID = C.CategoryID GROUP BY C.CategoryID ";

			$this->query($qry);
			$row=$this->resultSet();
			
			return $row;
		}
		else{
			Messages::setMsg('Please login', 'error');
				return;
		}
		}
	
	public function HouseListD(){
if($_SESSION['is_logged_in']){
	
	$this->query('SELECT * FROM Houses');
	$row=$this->resultset();
	return $row;

}
else{
	Messages::setMsg('Please login', 'error');
				return;
}
}	

public function HouseList(){
if($_SESSION['is_logged_in']){
	$qy='SELECT H.HouseID, C.CategoryName, COUNT(P.ProductID) AS Amount FROM Product P JOIN Categories C ON P.CategoryID = C.CategoryID JOIN Houses H ON P.HouseID = H.HouseID GROUP BY CONCAT(C.CategoryID, "-", H.HouseID)';
	$this->query($qy);
	$row=$this->resultset();
	return $row;

}
else{
	Messages::setMsg('Please login', 'error');
				return;
}
}
public function HouseListP(){
	
	
	//$HouseID=$_SESSION["HouseID$id"];
	if($_SESSION['is_logged_in']){
	$qry="SELECT H.HouseID, H.HouseName, H.Location, PL.ProductID, C.CategoryID, C.CategoryName, PL.CompanyName, PL.Model, PL.PurchaseDate, PL.Status FROM Product P JOIN ProductManual PL ON P.ProductID = PL.ProductID  JOIN Houses H ON P.HouseID = H.HouseID JOIN Categories C ON PL.CategoryID = C.CategoryID ";
	$this->query($qry);
	//$this->bind(':HouseID', $_SESSION["HouseID$id"]);
	//$this->execute();
	$row=$this->resultset();
	return $row;
}
else{
	Messages::setMsg('Please login', 'error');
				return;
}
}

		

	public function add(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['title'] == '' || $post['location'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
			// Insert into MySQL
			$this->query('INSERT INTO Houses (HouseName, Location) VALUES(:HouseName, :Location)');
			$this->bind(':HouseName', $post['title']);
			$this->bind(':Location', $post['location']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'shares/HouseList');
			}
		}
		return;
	}
	public function newhouse(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['title'] == '' || $post['location'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
			// Insert into MySQL
			$this->query('INSERT INTO Houses (HouseName, Location) VALUES(:HouseName, :Location)');
			$this->bind(':HouseName', $post['title']);
			$this->bind(':Location', $post['location']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'shares/HouseList');
			}
		}
		return;
	}
	public function newcategory(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['title'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
			// Insert into MySQL
			$this->query('INSERT INTO Categories (CategoryName) VALUES(:CategoryName)');
			$this->bind(':CategoryName', $post['title']);
			//$this->bind(':Location', $post['location']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'shares/categories');
			}
		}
		return;
	}
	
public function housedelete(){
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['title'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
$this->query('DELETE FROM Houses WHERE HouseID = :HouseID');
$this->bind(':HouseID', $post['title']);
$this->execute();
header('Location: '.ROOT_URL.'shares');
// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'shares/HouseList');

}
}
	}
	public function deletecategory(){
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['cid'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
$this->query('DELETE FROM Categories WHERE CategoryID = :CategoryID');
$this->bind(':CategoryID', $post['cid']);
$this->execute();
header('Location: '.ROOT_URL.'shares/categories');
// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'shares/HouseList');

}
}
}
	public function updatehouse(){
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if($post['submit']){
	
				
			
          
              $this->query('UPDATE Houses SET HouseName= :HouseName , Location= :Location WHERE HouseID= :HouseID');
                $this->bind(':HouseName',$post['title']);
				$this->bind(':Location',$post['location']);
				$this->bind(':HouseID',$post['id']);
                $this->execute();
header('Location: '.ROOT_URL.'shares/HouseList');

          }
      }


	public function updatecategory(){
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if($post['submit']){
	
				
			
          
              $this->query('UPDATE categories SET CategoryName= :CategoryName WHERE CategoryID= :CategoryID');
                $this->bind(':CategoryName',$post['upname']);
				//$this->bind(':Location',$post['location']);
				$this->bind(':CategoryID',$post['cid']);
                $this->execute();
header('Location: '.ROOT_URL.'shares/categories');

          }


}
public function addproduct(){
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
//$this->query('SELECT CategoryName FROM Categories');
//$row=$this->resultset();
//return $row;

if($post['submit']){
if($post['cid'] == ''|| $post['cname']==''||$post['model']=''||$psot['status']=''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
			if($post['hid'] == ''){
			$this->query('INSERT INTO ProductManual(user,CategoryID,CompanyName,Model,PurchaseDate,Status) VALUES(:User,:CategoryID,:CompanyName,:Model,:PurchaseDate,:Status)');
			$this->bind(':User',$post['uname']);
			$this->bind(':CategoryID',$post['cid']);
			
				$this->bind(':CompanyName',$post['cname']);
					$this->bind(':Model',$post['modl']);
						$this->bind(':PurchaseDate',$post['pdate']);
							$this->bind(':Status',$post['status']);
							//$this->bind(':Repair',$post['repair']);
							$this->execute();
//header('Location: '.ROOT_URL.'shares');
									if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'shares/totalassests');

}

return;

}
else{
$_SESSION['hid']=$post['hid'];
$_SESSION['cid']=$post['cid'];

$this->query('INSERT INTO ProductManual (CategoryID,user,CompanyName,Model,PurchaseDate,Status)VALUES(:CategoryID,:user,:CompanyName,:Model,:PurchaseDate,:Status)');
			$this->bind(':CategoryID',$post['cid']);
			$this->bind(':user',$post['uname']);
				$this->bind(':CompanyName',$post['cname']);
					$this->bind(':Model',$post['modl']);
						$this->bind(':PurchaseDate',$post['pdate']);
							$this->bind(':Status',$post['status']);
							//$this->bind(':Repair',$post['repair']);
							$this->execute();
//header('Location: '.ROOT_URL.'shares');
									if($this->lastInsertId()){
				// Redirect
										$last_pid= $this->lastInsertId();
										$_SESSION['pid']= $last_pid; 
				header('Location: '.ROOT_URL.'shares/insertintoproduct');

}




}
}

return;
}
public function insertintoproduct(){
	$qry="INSERT INTO Product(ProductID, CategoryID, HouseID) VALUES(:ProductID, :CategoryID, :HouseID)";
$this->query($qry);
$this->bind(':ProductID', $_SESSION['pid']);
$this->bind(':CategoryID', $_SESSION['cid']);
$this->bind(':HouseID', $_SESSION['hid']);
$this->execute();

	if($this->lastInsertId()){
				// Redirect
									//	$last_pid= $this->lastInsertId();
									//	$_SESSION['pid']= $last_pid; 
				header('Location: '.ROOT_URL.'shares/totalassests');

}

return;

}
public function categories(){
if($_SESSION['is_logged_in']){
	$this->query('SELECT * FROM Categories');
$row=$this->resultset();
return $row;
}
else{
	Messages::setMsg('Please login', 'error');
}


}
public function newproduct(){

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if($post['submit']){
$this->query('INSERT INTO Product (ProductID, CategoryID, HouseID) Values (:ProductID, :CategoryID, :HouseID)');
$this->bind(':ProductID', $post['PID']);
$this->bind(':CategoryID', $post['CID']);
$this->bind(':HouseID', $post['HID']);
$this->execute();


									if($this->lastInsertId()){
				//header('Location: '.ROOT_URL.'shares/success');
}
}
	}
	public function availableproducts(){
$qry="SELECT PL.ProductID, C.CategoryID, C.CategoryName FROM ProductManual PL JOIN Categories C ON PL.CategoryID = C.CategoryID ";

$this->query($qry);
$row=$this->resultset();
return $row;

	}
	public function deleteproduct(){
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		if($post['submit']){
if($post['ProductID'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
$qry="DELETE FROM ProductManual WHERE ProductID = :ProductID";

$this->query($qry);
$this->bind(':ProductID', $post['ProductID']);
$this->execute();
header('Location: '.ROOT_URL.'shares/totalassests');
}

								//	if($this->lastInsertId()){
				// Redirect
				//header('Location: '.ROOT_URL.'shares/HouseListP');
//}

	}
	public function availablecategories(){
$qry="SELECT  * FROM  Categories C ";

$this->query($qry);
$row=$this->resultset();
return $row;

	}
	public function availablehouses(){
$qry="SELECT  * FROM  Houses  ";

$this->query($qry);
$row=$this->resultset();
return $row;

	}	
	public function totalassests(){
		if($_SESSION['is_logged_in']){
$qry="SELECT  PL.ProductID, PL.user, PL.CompanyName, PL.Model, PL.PurchaseDate, PL.Status, C.CategoryName, H.HouseID FROM  Product P JOIN Categories C ON P.CategoryID=C.CategoryID JOIN Houses H ON P.HouseID=H.HouseID JOIN ProductManual PL ON P.ProductID=PL.ProductID Order BY H.HouseID ";

$this->query($qry);
$row=$this->resultset();
return $row;

	}
	else{
		Messages::setMsg('Please login', 'error');
				return;
	}
}


	public function searchforproductid(){
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		if($post['submit']){
	$_SESSION['ProductID']=$post['ProductID'];
header('Location: '.ROOT_URL.'shares/searchproductid');
}
return;
	}
	public function searchproductid(){
	//$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
//$_SESSION['pids'];
$ID= $_SESSION['ProductID'];
$qry="SELECT H.HouseID, PL.ProductID, C.CategoryID, C.CategoryName, PL.CompanyName, PL.Model, PL.PurchaseDate, PL.Status FROM Product P JOIN ProductManual PL ON P.ProductID = PL.ProductID  JOIN Houses H ON P.HouseID = H.HouseID JOIN Categories C ON P.CategoryID = C.CategoryID WHERE PL.ProductID = :ProductID";
	$this->query($qry);
	$this->bind(':ProductID', $ID);
	//$this->execute();
	$row=$this->resultset();

return $row;
	}

	public function updatestatus(){
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if($post['submit']){
	
				
			if($post['mdl'] == ''){
             $this->query('UPDATE ProductManual SET Status= :Status AND user= :user WHERE ProductID= :ProductID');
                $this->bind(':Status',$post['Status']);
                $this->bind(':ProductID',$post['ProductID']);
                                $this->bind(':user',$post['uname']);

                $this->execute();
                 header('Location: '.ROOT_URL.'shares/totalassests');
			}
			elseif($post['uname'] == ''){
             $this->query('UPDATE ProductManual SET Status= :Status, Model= :Mdl WHERE ProductID= :ProductID');
                $this->bind(':Status',$post['Status']);
                $this->bind(':ProductID',$post['ProductID']);
                $this->bind(':Mdl',$post['mdl']);

                $this->execute();
                 header('Location: '.ROOT_URL.'shares/totalassests');
			}
          else{              $this->query('UPDATE ProductManual SET Model= :Mdl, user= :user, Status= :Status WHERE ProductID= :ProductID');
				$this->bind(':ProductID',$post['ProductID']);
                
                $this->bind(':Mdl',$post['mdl']);
				//$this->bind(':Location',$post['location']);
				$this->bind(':user',$post['uname']);
				$this->bind(':Status',$post['Status']);

                $this->execute();
header('Location: '.ROOT_URL.'shares/totalassests');
}
          }
return;

}	
}

