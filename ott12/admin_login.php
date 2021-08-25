<!DOCTYPE html>
<html>
<head>
  <title>admin login</title>
  <link  type="text/css" rel="stylesheet" href="style4.css">
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

   <main>

     <div class="loginbox">
       <img src="avatar.jpeg" alt="avtar" class="avatar">

      <h1 class="lo" style="color:black">Your email or password is incorrect please try again!!</h1>
        <form action="admin_login.php" method="post">
          <p style="color:black">Email</p>
          <input type="email" name="admin_email" placeholder="email" required>
          <p style="color:black">Password</p>
          <input type="password" name="admin_password" placeholder="password" required>
          <input  type="submit" value="login" style="font-family:serif">
        </form>
</div>
</main>
  </body>
  </html>
<?php
$connect=mysqli_connect('localhost','root');
mysqli_select_db($connect,"ott1");

$admin_email=$_POST["admin_email"];
$admin_password=$_POST["admin_password"];

$query2="select * from admin_info";
$result=mysqli_query($connect,$query2);


  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_assoc($result))
    {
      if($row['admin_email']==$admin_email && $row['admin_password']==$admin_password )
      {
        $p=1;
              break;
      }
      else
      {
          $p=0;
      }


    }
  }
  if($p==0)
  {
    exit;

  }
?>
</h3>
<script type="text/javascript">

  window.open("admin_choose.html");
</script>