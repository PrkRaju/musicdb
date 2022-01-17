<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Artist's Page</title>
  <link rel="stylesheet" href="music.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <link rel="icon" href="htmllogo.png">
  <script src="music.js">
  </script>

</head>
<body>
<body>
  <div class="leftnav">
    <div class="logo">
      <a href="#"><img height="240" width="200" src="logo.jpg"></a>
    </div>
    <div class="menu">
      <a href="yt.php">
        <div id="home-bar"></div><span>YT</span>
      </a>
      <br>
      <a href="music.php">
        <div id="home-bar"></div><span>SONGS</span>
      </a>
      <br>
      <a href="artist.php" target="_blank">
        <div id="home-bar"></div><span>ARTISTS</span>
      </a>
    </div>
    <br>
    <div class="buttons">
      <a href="upload.html"><button type="button" class="btn btn-light">Upload Your Song</button></a>
      <br><br>
      <a href="album.php"><button type="button" class="btn btn-dark">ALBUMS</button></a>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="cookie">
      <div class="col">
        <a href="#">Terms and Conditions</a>
      </div>
    </div>
  </div>
<main>

<h1><strong>Listen to the Top Artists</strong></h1>
<?php
 $db=mysqli_connect("localhost","root","","music");
 $sql = "SELECT * FROM msdir";
 $sql1 = "SELECT * FROM singer";
 $ext = ".php";
 $result = mysqli_query($db, $sql);
 $result1 = mysqli_query($db, $sql1);
 
echo"<div class='container-flex text-center'>";

while ($row = mysqli_fetch_array($result)){
    
    echo"<div class='artist-card'>";
        echo"<img src='artist/".$row['msdir_thumbnail']."'class='image' >";   
        echo "<p><a href=".$row['msdir_username'].$ext.">".$row['msdir_name']."</a></p>";
    echo"</div>";

}

    
    

      

echo"</div>";
?>

</main>
<footer>
   

  </footer>

</body>
</html>
