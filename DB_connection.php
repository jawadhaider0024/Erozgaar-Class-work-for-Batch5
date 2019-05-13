<?php 


try {
	
$con = new PDO("mysql:host=localhost;dbname=company", "root", "");

echo "connected";

if (isset($_POST['signup'])) 
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$Password = $_POST['Password'];


$insert = $con->prepare ("INSERT INTO user (name,email,Password) values(:name,:email,:Password) ");

$insert->bindParam(':name',$name);

$insert->bindParam(':email',$email);

$insert->bindParam(':Password',$Password);

$insert->execute();
echo "Record Inserted";

	}





} catch (PDOException $e) { 

	echo "error";
}


 ?>
 <div class="container">
	<div class="card mt-5">

		<div class="card-header">
			
<h2>Create a Person</h2>
		</div>
		<div class="card-body">
			
	<div class="alert alert-success">
	
		
	</div>
	
			
			<form method="post">
				
<div class="form-group">
	<label for="name">Name</label>
	<input type="text" name="name" id="name" placeholder="User Name" class="form-control">

</div>
<div class="form-group">
	<label for="email">email</label>
	<input type="email" name="email" id="email" placeholder="example@example.com" class="form-control">

</div>
<div class="form-group">
	<label for="password">password</label>
	<input type="Password" name="Password" id="Password" placeholder="*******" class="form-control">

</div>
<div class="form-group">
	<input type="submit"class="btn btn-info" name="signup" value="signup">

</div>


			</form>
			