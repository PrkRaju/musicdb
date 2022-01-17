<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>OnePlus Music</title>
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
  <div class="leftnav">
    <div class="logo">
      <a href="albums.html"><img height="240" width="200" src="logo.jpg"></a>
    </div>
    <div class="menu">
      <a href="yt.php">
        <div id="home-bar"></div><span>Video-Songs</span>
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
<?php
  echo"<main>";
  

    echo"<h1><strong> &nbsp; Watch and Listen to Top Songs</strong></h1>";
    echo"<div class='container-flex text-center'>";
      
    
    $db=mysqli_connect("localhost","root","","music");
    $sql = "SELECT * FROM song WHERE msdir_name = 'Justin Bieber'";
    $result = mysqli_query($db, $sql);
    

    while ($row = mysqli_fetch_array($result)){
    echo "<div class='artist-card'>";
   
  
    echo 
    "<img src='thumbnail/".$row['song_thumbnail']."'  >";
    echo "<p style='color:white;'>".$row['song_title']."</p></a>";
    echo"<a onclick=cs_change_music('songs/".$row['song_file']."')>Play</a>";
    
   
    

  
    


    echo"</div>";
    
    }
    
      
      

    echo"</div>";


  echo"</main>";

  echo"<footer>";
    echo"<div class='playmusic text-center'>";
      
        echo"<audio id='my-audio' controls>";
          echo"<source src='songs/halli.mp3' >";

        echo"</audio>";
      
    echo"</div>";

  echo"</footer>";
  ?>

</body>

</html>