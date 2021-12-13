<?php 
	require_once('db.php');

	function validate($uid, $password){

		$con = getConnection();
		$sql = "select * from users where uid='{$uid}' and password='{$password}' and type='a' and status='a'";

		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if($user != null){
			return true;
		}else{
			return false;
		}
	}

	function getAdmin(){
		$con = getConnection();
		$sql = "select * from users where type='a' and status='a'";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getAdminView($id){
		$con = getConnection();
		$sql = "select * from users where type='a' and id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}
  
	function getAllTeachers(){
		$con = getConnection();
		$sql = "select * from users where type='t'";
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

	function getAllStudents(){
		$con = getConnection();
		$sql = "select * from users where type='s'";
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

    function getAllLibarians(){
		$con = getConnection();
		$sql = "select * from users where type='l'";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getLibarianById($id){
		$con = getConnection();
		$sql = "select * from users where type='l' and id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function editProfile($user){
		$con = getConnection();
		$sql = "update users set name='{$user['name']}', dob='{$user['dob']}', address='{$user['address']}', email='{$user['email']}', status='{$user['status']}' where id={$user['id']}";
		
		//echo $sql;

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteProfile($id){
		$con = getConnection();
		$sql = "delete from users where id={$id}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllSubjects(){
		$con = getConnection();
		$sql = "select * from allsubjects";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getSubjectById($id){
		$con = getConnection();
		$sql = "select * from allsubjects where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function addSubject($user){
		$con = getConnection();
		$sql = "insert into allsubjects values ('', '{$user['class']}', '{$user['subject']}', '{$user['day']}', '{$user['time']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function editSubject($user){
		$con = getConnection();
		$sql = "update allsubjects set class='{$user['class']}', subject='{$user['subject']}', day='{$user['day']}', time='{$user['time']}' where id={$user['id']}";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteSubject($id){
		$con = getConnection();
		$sql = "delete from allsubjects where id={$id}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getTeacherNotice(){
		$con = getConnection();
		$sql = "select * from teachernotice";
		$result = mysqli_query($con, $sql);
		return $result;
	}

    function uploadTeacherNotice($user){
		$con = getConnection();
		$sql = "insert into teachernotice values ('', '{$user['title']}', '{$user['notice']}', '{$user['date']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getDashboard(){
		$con = getConnection();
		$sql = "select * from dashboard";
		$result = mysqli_query($con, $sql);
		return $result;
	}

    function uploadDashboard($user){
		$con = getConnection();
		$sql = "insert into dashboard values ('', '{$user['title']}', '{$user['notice']}', '{$user['date']}')";

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

	 function UploadResult($user){
		$con = getConnection();
		$sql = "insert into result values ('', '{$user['uid']}', '{$user['class']}', '{$user['subject']}', '{$user['mid']}', '{$user['final']}', '{$user['total']}', '{$user['tid']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getResult(){
		$con = getConnection();
		$sql = "select * from result";

		$result = mysqli_query($con, $sql);
		return $result;
	}

?>