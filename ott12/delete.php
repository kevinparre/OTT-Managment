<!DOCTYPE html>
<html>
<head>
	<title>DELETE MOVIES</title>
  <style>
    .content {
      width:35%;
      display: block;
      margin: 18px auto;
      border-radius: 4px;
      border:1px solid #999;
    
    }
    body{
      background-color: black;

    }
  
    h1{
      color: white;
    }
</style>

</head>
<body>
    <center>
    	<form action="" method="POST" class="content">
        <h1>
    		MOVIE NAME TO DELETE:<br><input type="text" name="moviename" required><br>

       </h1>
        <button><a href="admin_choose.html">BACK</button>
        <input type="submit" name="delete" value="DELETE" enctype="multipart/form-data">
        

    	</form>
      
    </center>

<?php
   $connect=mysqli_connect('localhost','root');
   mysqli_select_db($connect,"ott1");
    if(isset($_POST['delete']))
   {
    
    $mn = $_POST['moviename'];
   $query2="select * from movie_list where movie_name='$mn'";
   $result=mysqli_query($connect,$query2);
   $p=0;

  if(mysqli_num_rows($result)!=0)
  {
    while($row=mysqli_fetch_assoc($result))
    {
      unlink("$row[movie_dir]");
  
  
   	 $query = "DELETE FROM movie_list WHERE movie_name = '$mn'";

   	 $datad = 0;
   	 $datad = mysqli_query($connect,$query);

   	 if($datad)
   	 {
   	 	echo "<script type='text/javascript'>alert('Data Deleted')</script>";
   	 }
   	 else
   	 {
   	 	echo "<script type='text/javascript'>alert('Data Not Deleted')</script>";
   	 }
   	 
   }
 }}
?>

</body>
</html>