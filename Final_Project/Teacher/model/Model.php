<?php 
	require_once('db.php');

	function validate($uid, $password){

		$con = getConnection();
		$sql = "select * from users where uid='{$uid}' and password='{$password}' and type='t' and status='a'";

		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if($user != null){
			return true;
		}else{
			return false;
		}
	}
  
	function insertTeacher($user){
		$con = getConnection();
		$sql = "insert into users values ('', '{$user['uid']}', '{$user['password']}', '{$user['name']}', '{$user['dob']}', '{$user['gender']}', '', '', '{$user['address']}', '{$user['email']}', '{$user['picture']}', '{$user['type']}', '{$user['status']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllTeachers(){
		$con = getConnection();
		$sql = "select * from users where type='t'";
		$result = mysqli_query($con, $sql);
		return $result;
	}

    function getValidTeachers(){
		$con = getConnection();
		$sql = "select * from users where type='t' and status='a'";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getTeacherById($id){
		$con = getConnection();
		$sql = "select * from users where type='t' and id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function editTeacher($user){
		$con = getConnection();
		$sql = "update users set name='{$user['name']}', dob='{$user['dob']}', address='{$user['address']}', email='{$user['email']}', picture='{$user['picture']}' where type='t' and id={$user['id']}";
		
		//echo $sql;

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function deleteTeacher($id){
		$con = getConnection();
		$sql = "delete from teacher where type='t' and id={$id}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function getAllClass(){
		$con = getConnection();
		$sql = "select * from allsubjects";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getTeacherNotice(){
		$con = getConnection();
		$sql = "select * from teachernotice";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getAllBooks(){
		$con = getConnection();
		$sql = "select * from book";
		$result = mysqli_query($con, $sql);
		return $result;
	}


	function getValidStudents(){
		$con = getConnection();
		$sql = "select * from users where type='s' and status='a'";

		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getStudentById($id){
		$con = getConnection();
		$sql = "select * from users where type='s' and id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}


    function uploadStudentNotice($user){
		$con = getConnection();
		$sql = "insert into studentnotice values ('', '{$user['class']}', '{$user['subject']}', '{$user['title']}', '{$user['notice']}', '{$user['date']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getStudentsNotice(){
		$con = getConnection();
		$sql = "select * from studentnotice";

		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getResult(){
		$con = getConnection();
		$sql = "select * from result";

		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getResultById($id){
		$con = getConnection();
		$sql = "select * from result where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	 function uploadResult($user){
		$con = getConnection();
		$sql = "insert into result values ('', '{$user['uid']}', '{$user['class']}', '{$user['subject']}', '{$user['mid']}', '{$user['final']}', '{$user['total']}', '{$user['tid']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function editResult($user){
		$con = getConnection();
		$sql = "update result set mid='{$user['mid']}', final='{$user['final']}', total='{$user['total']}' where id={$user['id']}";
		
		//echo $sql;

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	
	
?>