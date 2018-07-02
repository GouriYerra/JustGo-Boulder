<?php
    include("config.php");
    session_start();
    if(isset($_POST['submit']))
    {
      $uname = mysqli_real_escape_string($db,$_POST['username']);
      $pwd = mysqli_real_escape_string($db,$_POST['password']); 
    
      if (empty($uname) || empty($pwd))
      {
        header("Location: ./index.html?login=empty");
        exit();
      } 

      $sql = "SELECT * FROM admins WHERE adminUser = '$uname' and adminPass = '$pwd'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result);

      $count = mysqli_num_rows($result);

      if ($count == 1)
      {
        $_SESSION['loggedin'] = true;
        $_SESSION['login_admin'] = $row['firstName'];

        header("Location: ./admin/dash.php?login=success");

        exit();
      }
      else 
      {
        header("Location: ./index.html?login=error");
        exit();
      }
    }
    else {
      header("Location: ./index.html?login=idkwat");
      exit();
    }
?>