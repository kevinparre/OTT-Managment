<?php
$connect=mysqli_connect('localhost','root');
mysqli_select_db($connect,"ott1");
$user_name=$_POST['user_name'];
$user_email=$_POST['user_email'];
$user_phone=$_POST['user_phone'];
$user_password=$_POST['user_password'];

$query="insert into user_info(user_name,user_email,user_password,user_phone) values('$user_name','$user_email','$user_password','$user_phone')";

$result=mysqli_query($connect,$query);

if($result)
{
?>
<!DOCTYPE>
<html>
<head>
  <link  type="text/css" rel="stylesheet" href="style.css">
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

          <a href="index.html" class="bttwo">home </a>

        </div>
      </nav>
    <main>
      <div class="sub"
      style="width: 820px;
      height: 230px;
      justify-content: center;
      text-transform: capitalize;
      color: rgb(229,9,20);
      font-size: 1.2rem;
      text-shadow: 2px 2px 8px black;">
  <h1>step1:done!!!</h1><br>
  <h1>YOU HAVE SUCCESSFULLY ENTERED YOUR DETAILS </h1><br>
  <h1>plz click on the button to select your subscription type!!</h1>
    <a style="  margin: 20px 0 20px 0;
      padding: 12px 30px;
      position: relative;top: 20px;
      border-radius: 4px;
      outline: none;
      text-transform: uppercase;
      font-size: 20px;
      text-decoration: none;
      letter-spacing:1px;
      background: rgb(229, 9, 20);
      text-shadow:none;
      color:white;
      z-index:999;
      transition:all .5s;" href="subscription.html">See the plans</a>
  </div>
  </main>
</header>
  </body>
  </html>
<?php
}
?>
