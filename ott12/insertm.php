  <!DOCTYPE html>
<html>
<head>
  <link type="text/css" rel="stylesheet" href="style1.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
</head>
<body>
 <header>
   <nav>
       <div class="logo">
         <h1>OTT</h1>

       </div>
       <div class="menu">
           <a href="index.html" class="bttwo">Home</a>
         <a href="admin_choose.html" class="bttwo">Back</a>

       </div>
     </nav>

<main>

<h1 id="h">Enter the movie details</h1>
<div class="float-container">
  <div id="float-child">
      <div class="loginbox">
<form action="insertm.php" method="post" enctype="multipart/form-data">

  
  <p>Movie Name</p>
    <input type="text" placeholder="Movie name" name="moviename">
  <p>Movie Rating</p>
      <input type="text"placeholder="Movie rating" name="movierating">
  <p>Movie Duration</p>
      <input type="text" placeholder="Movie duration" name="movieduration"><br>
 <p>Movie description</p>
      <input type="text" placeholder="movie description" name="moviedesc">
</div>
</div id="float-child">

<div id="float-child">
  <div class="loginbox">
<p>Movie Release Date</p>
        <input type="text" placeholder="Movie Release Date" name="moviereleasedate">
  <p>Genere</p>
        <input type="text" placeholder="Genere" name="genere">
  <p>Movie Link</p>
      <input type="text" placeholder="movielink" name="movielink">
  <p>Movie Directory</p>
      <input type="file" placeholder="movie directory"  name="fileToUpload" id="fileToUpload">

</div id="float-child">


<div id="subl">

<input type="submit" name="submit">
</div>
</div>
</div>
</form>
</main>
</header>
 </body>

</html>



<?php
$connect=mysqli_connect('localhost','root');
mysqli_select_db($connect,"ott1");
error_reporting(0);

if($_POST['submit'])
{
   
   $mn = $_POST['moviename'];
   $mr = $_POST['movierating'];
   $md = $_POST['movieduration'];
   $mrd = $_POST['moviereleasedate'];
   $g = $_POST['genere'];
   $l=$_POST['movielink'];
   $desc=$_POST['moviedesc'];
   $file=$_FILES['fileToUpload'];

$filename=$file['name'];
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}


if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}
else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    
      $dir='images/'.$filename;
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

   if($mn!="" && $mr!="" && $md!="" && $mrd!="" && $g!=""&& $l!=""&& $desc!=""&& $dir!="" )
   {
       $query = "INSERT INTO movie_list VALUES(NULL,'$mn','$mr','$md','$mrd','$g','$l','$desc','$dir')";
       $data = 0;
       $data = mysqli_query($connect,$query);
       echo $data;
       if( $data )
      {
       	
        echo "<script type='text/javascript'>alert('Data Inserted Successfully !!')</script>";
       }
   }
   else
   {
   	 
     echo "<script type='text/javascript'>alert('Something Went Wrong !')</script>";
   }
}
?>

</body>
</html>