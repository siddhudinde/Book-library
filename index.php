<?php ob_start();?>
<?php 
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="Assets/book.ico/favicon.ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Yeon+Sung&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua&family=Lobster&family=Yeon+Sung&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Inknut+Antiqua&family=Lobster&family=Yeon+Sung&display=swap" rel="stylesheet">
    
    <title>Login page !!</title>
  </head>
  <body class="bg-dark">

    <img src="Assets/back2.jpg" height="660vh" width="100%" alt="">

    <div class="heading">
        <p class="text-white">VINAYA CHAL GRANTHALAY</p>
    </div>
    <div class="login">
        <p>Login Here</p>
    </div>

    <div class="container">
        
        <form action="" method="POST">
           <div>
            <label class="form-group" for="user_email">Email ID</label>
            <input  type="email" name="U_email" class="form-control" placeholder="username99@gmail.com">
           </div> 
           <div>
               <br>
            <label class="form-group" for="user_password">Password</label>
            <input  type="password" name="U_password" class="form-control" placeholder="****">
           </div> 
           <br>
           <button type="submit" name="login_btn" class="btn btn-primary btn-group">
               Login
           </button>
           <br>
            <a href="register.php">
              For Register click here
            </a>
        </form>
          <?php
            if(isset($_POST['login_btn']))
            {
              $email =$_POST['U_email'];
              $password =$_POST['U_password'];

              $connection = mysqli_connect('localhost','root','','cdu_library');

              if($connection)
              {
                $login_query = "SELECT * FROM library WHERE user_email='$email' and user_password ='$password'";
                
                $result = mysqli_query($connection,$login_query);

                if($result)
                {
                  $num_rows = mysqli_num_rows($result); 
                        if($num_rows == 1)
                        {
                          while($row = mysqli_fetch_array($result))
                          {
                              $id = $row['id'];                    
                              $user_email = $row['user_email'];                    
                              $user_password = $row['user_password'];  
                              
                              $_SESSION["id"] = $id;             // global variable ,browser cookies 
                              $_SESSION["user_email"] = $user_email;
                              $_SESSION["user_password"] = $user_password;
                          
                          
                          }
      
                 header("Location:dashboard.php");
                }
              }
                else 
                {
                  echo "Error";
                }
              }
            }
          ?>

    </div>
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>