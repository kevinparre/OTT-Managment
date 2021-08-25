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

         <a href="index.html" class="bttwo">home </a>

       </div>
     </nav>

  <main>

<div id="money">
<form action="user_signin.html" method="post">
<?php
$connect=mysqli_connect('localhost','root');
mysqli_select_db($connect,"ott1");
$amount_paid=$_POST["amount_paid"];
$query="insert into payment_detail(amount_paid) values('$amount_paid')";
$result=mysqli_query($connect,$query);
?>
YOUR TRANSACTION IS SUCCESSFUL!!!
<div id="sublm">
<input type="submit" value="proceed">
</div>
</form>
</div>
</main>
</header>
</body>
</html>
