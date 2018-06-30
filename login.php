<?php
    include("config.php");
    session_start();
  
    if(isset($_POST['submit']) 
    {
      $uname = mysqli_real_escape_string($db,$_POST['username']);
      $pwd = mysqli_real_escape_string($db,$_POST['password']); 
    
      if (empty($uname) || empty($pwd))
      {
        header("Location: index.php?login=empty")
        exit();
      } 

      $sql = "SELECT adminID FROM admins WHERE adminUser = '$uname' and adminPass = '$pwd'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);

      if ($count == 1)
      {
        session_register("row['firstName']");
        $_SESSION['login_admin'] = $row['firstName'];

        header("Location: welcome.php");
        exit();
      }
      else 
      {
        header("Location: index.php?login=error")
        exit();
      }
    }
    else
    {
      header("Location: index.php?login=error")
      exit();
    }
?>