<?php
	if(isset($_COOKIE['flag'])){
		include('header.php');
		require_once('../model/libraryModel.php');
	$result = getAllBooks();
	$count = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
	<style>
.lightBlueButton {
	box-shadow:inset 0px 0px 0px 0px #dcecfb;
	background:linear-gradient(to bottom, #bddbfa 5%, #80b5ea 100%);
	background-color:#bddbfa;
	border-radius:20px;
	border:3px solid #3488db;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	color: black;
	font-size:15px;
	font-weight:bold;
	padding:12px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #528ecc;
}
.lightBlueButton:hover,.lightBlueButton:active,.lightBlueButton:focus {
	background: #43A047;
}		

.darkBlueButton {
	/*background-color:#2063b0;*/
	background-color:#2778d6;
	border-radius:20px;
	border:3px solid #08298a;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	padding:12px 20px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
}
.darkBlueButton:hover,.darkBlueButton:active,.darkBlueButton:focus {
	background: #ff0000;
}

table.customTable {
  
  /*background-color: #FFFFFF;*/
  border-collapse: collapse;
  border-width: 3px;
  border-color: #5EA6F8;
  border-style: solid;
  color: #000000;
}

table.customTable td, table.customTable th {
  border-width: 3px;
  border-color: #5EA6F8;
  border-style: solid;
  text-align: center;
}

table.customTable thead {
  background-color: #2F79F8;

}
	</style>
	<meta charset="utf-8">
	<title>LIBRARY</title>
</head>
<body>

	<h3><table  class="customTable" border="5" align="center" width="80%" cellspacing="4" cellpadding="4">
		<thead>
		<tr height="80px">
			<td colspan="6" align="center">
				<h3>Search Book : <input type="text" id="search" name="search" value=""></h3>
			</td>
		</tr>

		<tr height="50px" align="center">
			<td><h3>ID</h3></td>
			<td width="35%"><h3>Book Name</h3></td>
			<td><h3>Author Name</h3></td>
			<td><h3>Category</h3></td>
			<!--<td>Issue Date</td>
			<td>Due Date</td>
			<td>Return Date</td>-->
		</tr>
		</thead>

		<!-- <tr>
			<td id="table-data">
				
			</td>
		</tr> -->
		<?php while($data =mysqli_fetch_assoc($result)){ ?>

				<tbody>
				<tr>
					<td><?=$data['bid']?></td>
					<td><?=$data['bname']?></td>
					<td><?=$data['author']?></td>
					<td><?=$data['category']?></td>
				</tr>
				</tbody>

		<?php } ?>

		<tr height="60px" >
			<td colspan="6" align="center">
				<a href="home.php" class="lightBlueButton">HOME</a>
				<a href="../controller/logout.php" class="darkBlueButton">LOGOUT</a>
			</td>
		</tr>
	</table></h3>


</body>
</html>
<?php
 
 }else{
 	header('location: login.html');
 }
?>

<!-- <script type="text/javascript" src="jquery-3.6.0.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("$search").on.("keyup",function(){
			var search_term = $(this).val();

			$.ajax({
				url: "ajax-search.php";
				type: "POST",
				data : {search: search_term},
				success: function(data){
					$("#table-data").html(data)
				}
			})
		});
	});
</script> -->