<?php 

session_start(); 

include "dbconn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['username']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        

        exit();

    }else if(empty($pass)){

       

        exit();

    }else{

        $sql = "SELECT * FROM msdir WHERE msdir_username='$uname' AND msdir_pwd ='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['msdir_username'] === $uname && $row['msdir_pwd'] === $pass) {

                echo '<script>alert("Logged In")</script>';

                $_SESSION['msdir_username'] = $row['msdir_username'];

                $_SESSION['msdir_name'] = $row['msdir_name'];

                $_SESSION['msdir_id'] = $row['msdir_id'];

                header("Location: music.php");

                exit();

            }else{

                echo '<script>alert("Wrong Details")</script>';
                header("Location: index.html");
                

                exit();

            }

        }else{
            echo '<script>alert("Wrong Details")</script>';
            header("Location: index.html");

            exit();

        }

    }

}else{
    echo '<script>alert("Wrong Details")</script>';
    header("Location: index.php");

    exit();

}
?>
<!DOCTYPE HTML>
<html>
        <head>
		<link rel=" stylesheet" type = "text/css" href = "siva.css">
		<style type="text/css">
		body{
		background-image: url(tune2.jpg);
		background-size: cover;
		background-attachment: fixed;
		}
		.content{
		
		width: 50%;
		padding: 40px;
		margin: 100px auto;
		font-family: calibri;
		}
		</style>

		</head>
<body>
<div class="content"> 
<div id="login-box">
  <div class="left">
    <h1>Sign in</h1>
    
    <input type="text" name="username" placeholder="Username" />
   
    <input type="password" name="password" placeholder="Password" />
    
    <input type="submit" name="signup_submit" value="Sign in" />
  </div>
  
  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>
    
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button>
  </div>
  <div class="or">OR</div>
</div>
</div>
</body>

</html>