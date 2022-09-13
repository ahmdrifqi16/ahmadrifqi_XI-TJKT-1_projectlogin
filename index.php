<?php
    session_start();
?>
<html>
  <head>
    <title> Sistem Login Sederhana</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <?php
      if(isset($_SESSION['akses'])){
        header("location:home.php");
      }
      else{

      if(isset($_POST['proseslogin'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        if($user=='Ahmad Rifqi'AND $pass=='1611'){
          $_SESSION['akses']=$user;
          header("location:home.php");
        }
        else if($user=='Adang Somantri'AND $pass=='1116'){
          $_SESSION['akses']=$user;
          header("location:home.php");
        }
        else{
          echo "
              <script>
              alert('Maaf, Username dan Password anda salah!!'); 
              window.location.href='index.php';
              </script>
          ";
        }
      }
      else{
    ?>

    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
      <table>
        <tr>
          <td colspan="2"><h1 class="h1">HALAMAN LOGIN</h1></td>
        </tr>
        <tr>
          <td class="up">Username</td>
          <td><input type="text" name="user" placeholder="Enter Your Name"></td>
        </tr>
        <tr>
          <td class="up">Password</td>
          <td><input type="password" name="pass" placeholder="Enter Your Password"></td>
        </tr>
        <tr>
          <td colspan="2"><button type="submit" name="proseslogin">Login</button></td>
        </tr>
      </table>
    </form>
    <?php
      }
      }
    ?>
  </body>
</html>