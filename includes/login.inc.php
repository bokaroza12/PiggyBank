<?php
session_start();
	
	include("connection.php");
	include("functions.php");
	
	if($_SERVER['REQUEST_METHOD']== "POST")
	{
		//something was posted
		$username=$_POST['uid'];
		$password=$_POST['pwd'];

		
		if (emptyInputLogin($username, $password) !== false) {
		header("location: ../index.html?error=emptyinput");
		echo '<script>alert("Empty input")</script>';

		exit();
		}

		if(!empty($username) && !empty($password)  && !is_numeric($username) )
		{
			//read to server
			$query ="SELECT * from user where username = '$username' limit 1" ;
			//$query2 ="SELECT * from admin where username = '$username' limit 1" ;
			
			$result=mysqli_query($con,$query);
			//$result2=mysqli_query($con,$query2);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
		
					$user_data=mysqli_fetch_assoc($result);
					if($user_data['password']== $password)
					{
						$_SESSION['id'] = $user_data['user_id'];



						$tmp_id=$user_data['user_id'];
						mysqli_query($con,$query);
 										

					
						header("location: ../FrontPage/user/main.html");
						die;

					}
				}
			}
		/*	if($result2)
			{
				if($result2 && mysqli_num_rows($result2) > 0)
				{
					$user_data=mysqli_fetch_assoc($result2);
					if($user_data['password']== $password)
					{
						$_SESSION['id'] = $user_data['admin_id'];
						header("location: ../admin/adminpage.php");
						die;
					}
				}
			}*/
		echo '<script>alert("Wrong login")</script>';
		header("location: ../index.html?error=wronglogin");
		exit();
			
		}

		else
		{
			header("location: ../index.html");
			exit();
		}
	
	}

?>