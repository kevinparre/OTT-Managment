<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
  <link  type="text/css" rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=David+Libre:wght@500&display=swap" rel="stylesheet">
  <meta charset="UTF-8">

</head>
 <body>

   <header>
      <nav>
          <div class="logo">
            <h1>OTT</h1>

          </div>
          <div class="menu">

            <a href="index.html" class="bttwo">home </a>

          </div>
        </nav>  
<?php
$connect=mysqli_connect('localhost','root');
mysqli_select_db($connect,"ott1");

$user_email=$_POST["user_email"];
$user_password=$_POST["user_password"];

$query2="select * from user_info where user_email='$user_email'";
$result=mysqli_query($connect,$query2);
$p=0;

	if(mysqli_num_rows($result)!=0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
      $p=1;
			if($row['user_email']==$user_email && $row['user_password']==$user_password )
			 { $result=0;
         $query4="delete from user_subscription where sub_id=$row[user_id]";
         $result=mysqli_query($connect,$query4);
         if($result)
         {
           ?>  <main>
               <div>

                      <p style="padding: 20px 0 20px;
                      font-weight: bolder;
                      font-size: 30px;
                      width: 500px;
                      height: 300px;
                      background: white;
                      float: center;
                      display: flex;
                      justify-content:center;
                      align-items: center;
                      text-align: center;
                      box-shadow: 1px 2px 8px;
                      ">OPPS:( IT SEEMS LIKE YOUR SUBSCRIPTION HAS ENDED.
                      RENEW YOUR MEMBERSHIP TO HAVE ACCESS TO YOUR CONTENT!!!
                    </p>
                      
                </div>
        <?php
          break;}
          else{
        ?>

  
<main>
     <section>
              <h1>choose what you want to do!! </h1>
              
              <a href="movie.html" class="btthree"> watch movies </a>
            </section>

  <




</form>
</div>
</main>
</header>
</body>
 </html>

				
	           <?php }break;
			}
			else
			{
			    $p=2;
			}


		}
	}
  else 
  {?>


   <main>

     <div class="loginbox">
       <img src="avatar.jpeg" alt="avtar" class="avatar">

      <h6 class="lo">This email doesn't belong to an Account please try again !!</h6>
        <form action="user_signin.php" method="post">
          <p>Email</p>
          <input type="email" name="user_email" placeholder="email" required>
          <p>Password</p>
          <input type="password" name="user_password" placeholder="password" required>
          <input type="submit" value="login" style="font-family:serif">
        </form>
</div>
</main>
  </body>
  </html>
  <?php
  
  }
	if($p==2)
	{?>


   <main>

     <div class="loginbox">
       <img src="avatar.jpeg" alt="avtar" class="avatar">

      <h1 class="lo">Your password is incorrect please try again!!</h1>
        <form action="user_signin.php" method="post">
          <p>Email</p>
          <input type="email" name="user_email" placeholder="email" required>
          <p>Password</p>
          <input type="password" name="user_password" placeholder="password" required>
          <input type="submit" value="login" style="font-family:serif">
        </form>
</div>
</main>
  </body>
  </html>

	<?php
}
?>

