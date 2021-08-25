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

<h1 id="h">Update the movie details</h1>
<div class="float-container">
  <div id="float-child">
      <div class="loginbox">
<form action="updatem.php" method="post">

  
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
      <input type="text" placeholder="movie link" name="movielink">
   

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

   if(isset($_POST['submit']))
   {
   	  
   	 // $mn = $_POST['moviename'];


   	  $query ="UPDATE movie_list SET movie_rating = '$_POST[movierating]', movie_duration = '$_POST[movieduration]', movie_release_date = '$_POST[moviereleasedate]', genere = '$_POST[genere]',movie_link = '$_POST[movielink]',movie_desc = '$_POST[moviedesc]' WHERE movie_name = '$_POST[moviename]'" ;

        $datam = 0;
   	  $datam = mysqli_query($connect,$query);

   	  if($datam)
   	  {
   	  	 //echo "Data updated";
   	  	echo "<script type='text/javascript'>alert('Data Updated')</script>";
   	  }
   	  else
   	  {
   	  	echo "<script type='text/javascript'>alert('something went wrong')</script>";
   	  }
   }
?>

</body>
</html>