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

<h1 id="h">Enter your payment details</h1>
<div class="float-container">
	<div id="float-child">
			<div class="loginbox">
<form action="payment.php" method="post">


	<?php
	$connect=mysqli_connect('localhost','root');
	mysqli_select_db($connect,"ott1");

	$sub_type=$_POST['sub_type'];
	$duration=$_POST['duration'];
 $query1="insert into user_subscription(sub_type,duration_in_months,start_date,due_date) values('$sub_type','$duration',curdate(),date_add(start_date,interval '$duration' month))";
	mysqli_query($connect,$query1);

	$query2="select * from subscription_detail";
	$result=mysqli_query($connect,$query2);

	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			if($row['sub_type']==$sub_type)
			{
        $query3="select payment_calc($row[amount_per_month],$duration)";
         $result1=mysqli_query($connect,$query3);
          if(mysqli_num_rows($result1)>0)
          {
            while($row1=mysqli_fetch_assoc($result1))
            {
              echo "<h1 style=color:red;>Amount to be paid : Rs. " . $row1["payment_calc($row[amount_per_month],$duration)"]."</h1><br>";
            }
         }
    
					
			}
		}
	}
	?>


  <p>Card Number</p>
    <input type="password" placeholder="card no." required>
  <p>First name</p>
      <input type="text"placeholder="First name" required>
  <p>Last name</p>
      <input type="text" placeholder="Last name" required><br>
  <p>Expiry date</p>
      <input type="text" placeholder="Expiry" required><br>
</div>
</div id="float-child">

<div id="float-child"><br><br><br><br><br>
	<div class="loginbox">
  <p>CVV</p>
        <input type="password" placeholder="CVV" required>
 <p>Amount</p>
<input type="text" name="amount_paid" placeholder="Amount" required>

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


