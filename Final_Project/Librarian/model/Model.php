<?php 
	require_once('db.php');

	function validate($uid, $password){

		$con = getConnection();
		$sql = "select * from users where uid='{$uid}' and password='{$password}' and type='l' and status='a'";

		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if($user != null){
			return true;
		}else{
			return false;
		}
	}
  
	function insertLibrarian($user){
		$con = getConnection();
		$sql = "insert into users values ('', '{$user['uid']}', '{$user['password']}', '{$user['name']}', '{$user['dob']}', '{$user['gender']}', '', '', '{$user['address']}', '{$user['email']}', '{$user['picture']}', '{$user['type']}', '{$user['status']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllLibrarians(){
		$con = getConnection();
		$sql = "select * from users where type='l'";
		$result = mysqli_query($con, $sql);
		return $result;
	}

    function getValidLibrarians(){
		$con = getConnection();
		$sql = "select * from users where type='l' and status='a'";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getLibrarianById($id){
		$con = getConnection();
		$sql = "select * from users where type='l' and id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function editLibrarian($user){
		$con = getConnection();
		$sql = "update users set name='{$user['name']}', dob='{$user['dob']}', address='{$user['address']}', email='{$user['email']}', picture='{$user['picture']}' where type='l' and id={$user['id']}";
		
		//echo $sql;

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function deleteLibrarian($id){
		$con = getConnection();
		$sql = "delete from teacher where type='l' and id={$id}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function getAllBooks(){
		$con = getConnection();
		$sql = "select * from book";
		$result = mysqli_query($con, $sql);
		return $result;
	}


	function getValidBooks(){
		$con = getConnection();
		$sql = "select * from book where status='a'";

		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getBookById($bid){
		$con = getConnection();
		$sql = "select * from book where bid={$bid}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

    function insertBook($user){
		$con = getConnection();
		$sql = "insert into book values ('', '{$user['bname']}', '{$user['author']}', '{$user['category']}', '{$user['status']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function editBook($user){
		$con = getConnection();
		$sql = "update book set bname='{$user['bname']}', author='{$user['author']}', status='{$user['status']}' where bid={$user['bid']}";
		
		//echo $sql;

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteBook($bid){
		$con = getConnection();
		$sql = "delete from book where bid={$bid}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getNotice(){
		$con = getConnection();
		$sql = "select * from dashboard";

		$result = mysqli_query($con, $sql);
		return $result;
	}

	function addCard($user){
		$con = getConnection();
		$sql = "insert into librarycard values ('', '{$user['uid']}', '{$user['name']}', '{$user['balance']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getCard(){
		$con = getConnection();
		$sql = "select * from librarycard";

		$result = mysqli_query($con, $sql);
		return $result;
	}


	
?>