<!DOCTYPE html>

<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	
	</head>
	
<div class="header">
		<h2> Please Log In </h2>
		
	</div>	
<div class="content">
<h3> Enter your username & password, please </h3>

<form action="login.php" method="POST">
  <input type="text" name="username"/>
  <br>
  <br>
  <input type="password" name="password"/>
  <br>
  <br>
  <input type="submit"/>
  </form>
  
  <?php
  $user1 = "Yasmeen";
  $user2 = "Kyle";
  $user3 = "Kyle2";
  $user4 = "Gouri";
  $user5 = "Ali";
  
  $password1 = "Yasmeen";
  $password2 = "Kyle";
  $password3 = "Kyle2";
  $password4 = "Gouri";
$password5 = "Gouri";
  
  if(!$_POST['username'] || !$_POST['password']) {
  die('Some fields have been left blank');
  
  }
  
  
  if (isset ( $_POST ['username'] ) &&  (isset ( $_POST ['password'] ))) {
  
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    if(($username==$user1) && (md5($password)==$password1) || ($username==$user2) && (md5($password)==$password2)) {
      echo "Login Successful";
    
     } else{
       die('Username and password do not match, please try again!');
    }
  }
  ?>
  </div>
 
  <div>  
  
 <div class="footer">
<?php if (! isset ( $_SESSION ['startTime'] )) {
	$_SESSION ['startTime'] = time ();
}
?>
 <p align="center">User <?php echo $_SESSION['username'] ?> 
     logged in for
     <?php echo time() - $_SESSION['startTime']?> seconds.
     
     <span style="font-style:italics"></span>
      </p>
 <p> Yasmin Alshafai CT310 Spring18 </p>
 </div> 
  
  
  
  </div>