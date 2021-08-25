
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>user details</title>
    
  </head>
  <body >
  	<br>
    <form class="container">
	<table border=1 align=center class="table table-hover" >
		   <tr>
		      <th>USER NAME</th>
		      <th>USER PHONE</th>
		      <th>USER EMAIL</th>
		      <th>SUBSCRIPTION TYPE</th>
		      <th>START DATE</th>
		      <th>DUE DATE</th>
		      <th>AMOUNT PAID</th>
		   </tr>
		   

<?php
$connect=mysqli_connect('localhost','root');
mysqli_select_db($connect,"ott1");
$query="select * from total_user1";
$result=mysqli_query($connect,$query);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "
		  <tr>
		   <td>".$row['user_name']."</td>
		   <td>".$row['user_phone']."</td>
		   <td>".$row['user_email']."</td>
		   <td>".$row['sub_type']."</td>
		   <td>".$row['start_date']."</td>
		   <td>".$row['due_date']."</td>
		   <td>".$row['amount_paid']."</td>
		  </tr>"; 
		   
	}
}

?>

</table>
<!--<form action="index.html" method="post"align="bottom">
              <pre>   <input type="submit"value="exit"><br></pre>
        
</form>-->
<center>
<button type="button" class="btn btn-primary"><a href="admin_choose.html" style="color: white"> Exit</button>
</center>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</form>
  </body>
</html>