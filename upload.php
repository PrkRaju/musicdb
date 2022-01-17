<?php
$localhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "music";

$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

if (isset($_POST["sub"])) {
    

   $thumbnail = $_FILES['song_thumbnail']['name'];
   $song = $_FILES['song_file']['name'];
   $title = $_POST['song_name'];
   $msdir_nam = $_POST['msdir_name'];
   $singer_nam = $_POST['singer_name'];
   
   $sql = "INSERT INTO song (song_title, song_file, song_thumbnail, msdir_name, singer_name) VALUES ('$title', '$song', '$thumbnail', '$msdir_nam', '$singer_nam')";
   mysqli_query($conn ,$sql);
   $dir='songs/';
   $dir1='thumbnail/';
   $path=$dir.basename($_FILES['song_file']['name']);
   $path1=$dir1.basename($_FILES['song_thumbnail']['name']);


   if(move_uploaded_file($_FILES['song_file']['tmp_name'],$path)){
  echo '<script>alert("Uploading")</script>';
   }
   if(move_uploaded_file($_FILES['song_thumbnail']['tmp_name'],$path1)){
       echo '<script>alert("Sucessful")</script>';
   }
  

   
            


   
   


}
?>
