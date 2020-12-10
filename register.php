<?php ob_start();?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
    <link rel="shortcut icon" href="Assets/book.ico/B.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Yeon+Sung&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua&family=Lobster&family=Yeon+Sung&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Inknut+Antiqua&family=Lobster&family=Yeon+Sung&display=swap" rel="stylesheet">
    
    <title>Register page !!</title>
  </head>
  <body class="bg-dark">

    <img src="Assets/back2.jpg" height="880vh" width="100%" alt="">

    <div class="heading">
        <p class="text-white">VINAYA CHAL GRANTHALAY</p>
    </div>
    <div class="login">
        <p>Register Here</p>
    </div>

    <div class="container">
        
        <form action="" method="POST">
           <div>
            <label class="form-group" for="user_email">User Fullname :</label>
            <input required type="text" name="U_name" class="form-control" placeholder="asdfasdf">
           </div> 
           <div>
            <label class="form-group" for="user_email">Date of Birth</label>
            <input required type="date" name="U_dob" class="form-control" placeholder="username99@gmail.com">
           </div> 
           <div>
            <label class="form-group" for="user_email">Mobile No:</label>
            <input required type="number" name="U_number" class="form-control" placeholder="000000000">
           </div> 
           <div>
            <label class="form-group" for="user_email">Email ID</label>
            <input required type="email" name="U_email" class="form-control" placeholder="username99@gmail.com">
           </div> 
           <div>
            <label class="form-group" for="user_password">Password</label>
            <input required type="password" name="U_password" class="form-control" placeholder="****">
           </div> 
           <br>
           <button type="submit" name="register_btn" class="btn btn-success btn-group">
               Register
           </button>
        </form>
        <?php
              if(isset($_POST['register_btn']))
              {
               $name = $_POST['U_name'];
               $dob =$_POST['U_dob'];
               $mobile =$_POST['U_number'];
               $email =$_POST['U_email'];
               $password =$_POST['U_password'];

                    $connection = mysqli_connect('localhost','root','','cdu_library');

                    if($connection)
                    {
                      $create_query= "INSERT INTO library(user_name,user_date,user_mobile,user_email,user_password) VALUES('$name','$dob','$mobile','$email','$password')";

                      $result = mysqli_query($connection,$create_query);

                      if($result)
                      {
                       header("Location:index.php");
                      }
                      else
                      {
                        echo "Error in code";
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