<!DOCTYPE html>
<html lang="en">
<head>
  <title>movie</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <style>
*{
  margin: 0;padding: 0; box-sizing: border-box;
  font-family: 'Josefin Sans', sans-serif;

}



nav{
  width: 100%; height: 13vh;
  background: rgba(20,20,20,0.7);
  color:red; display: flex; justify-content: space-between;
  align-items: center;
  text-transform: uppercase;
}
nav .logo{
  width: 28%;
  height: 100px;
  text-align: center;
  color: rgb(229,9,20);
  text-shadow: 2px 2px 8px black;
  font-size: 100px;
  text-transform: capitalize;
  font-weight: bolder;
}

nav .menu{
  width:40%;

  display: flex;
  justify-content: space-around;

}

nav .menu a{

  text-decoration: none;
  margin: 20px 0 20px 0;
  padding: 12px 30px;
  border-radius: 4px;
  outline: none;
  text-transform: uppercase;
  font-size: 20px;
  letter-spacing:1px;
  transition: all .5s;
}



main{
  width:100%;
  height: 85%;
  display: flex;
  justify-content:center;
  align-items: center;
  text-align: center;

}
section h1{
  font-size: 50px;font-weight:600;letter-spacing: 2px;
  font-family: 'Lato', sans-serif;!important
  word-spacing: 3px;
  text-transform: capitalize;
  color: white;
  text-shadow: 2px 2px 10px black;
}

section h2{
  margin: 10px 0 10px 0;
  letter-spacing: 1px;
  font-family: 'Lato', sans-serif;
  text-transform: capitalize;
  font size:40px;
  font-weight: 600;
  color: white;
  word-spacing: 3px;
  text-shadow: 2px 2px 10px black;
}
section h3{
  margin:10px 0 10px 0;
  letter-spacing: 1px;
  color:white;
  font-family: 'Lato', sans-serif;
  font-size: 30px;
  word-spacing: 3px;
  text-transform: capitalize;
  font-weight: 600;
  text-shadow: 2px 2px 10px black;
}

  section a{
    margin: 20px 0 20px 0;
    padding: 12px 30px;
    position: relative;top: 20px;
    border-radius: 4px;
    outline: none;
    text-transform: uppercase;
    font-size: 20px;
    text-decoration: none;
    letter-spacing:1px;
    transition: all .5s ease;
  }
  section .btthree{

    background:white;
    color:#000;
  }

  section .btthree:hover{
    transform: translateY(-2px);
    box-shadow: .5rem .5rem 3rem rgba(0,0,0,.2);
    background: rgb(220,9,20);
  }

div .btone{
  background: #fff;
  color:#000;
}

.btone:hover{
  transform: translateY(-2px);
  box-shadow: .5rem .5rem 2rem rgba(0,0,0,.2);
  background: #00b894;
  color: white;
}

div .bttwo{
  background: #fff;
  color:#000;
}

.bttwo:hover{
  transform: translateY(-2px);
  box-shadow: .5rem .5rem 2rem rgba(0,0,0,.2);
  background:  #E50914;
  color: white;
} 

img{
  overflow: hidden;
}




p{
  display: none;
  text-align:left; 
  font-weight: bold; 
  font-family:sans-serif; 
  font-size:15px; 
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;}


    
.myDIV:hover + p{
  display:block;
  color:white;


 }
</style>
</head>
<body>
  <header>
      <nav>
        <div class="logo">
          <h1>OTT</h1>

        </div>
        <div class="menu">

          
          <a href="index.html" class="bttwo">Logout</a>
          <a href="movie.html" class="bttwo">Back</a>
          <a href="#" ></a>
           <a href="#" ></a>

        </div>
      </nav>
    </header>
    <?php
$connect=mysqli_connect('localhost','root');
mysqli_select_db($connect,"ott1");
$gen=$_POST["genere"];
$query2="select * from movie_list where genere='$gen'";
$i=0;
$result=mysqli_query($connect,$query2);
if($rows=mysqli_num_rows($result)>0)
{ 
  while($row=mysqli_fetch_assoc($result))
  {
   
?>

<div class="container" style="width:140vh; ">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="<php echo $i; ?>" class="active"></li>
     
     
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
  <div class="item active" style="text-align:left";>
        <a href="<?php  echo $row['movie_link']; ?>"><img src= "<?php  echo $row['movie_dir']; ?>" alt="Chicago" style=" border-radius: 20px; margin-top:12px;overflow-y: hidden; overflow-x: hidden; object-fit: contain;"></a>
        <div class="carousel-caption">
          <div class="myDIV" style="
  
  font-weight: bold; 
  font-family:sans-serif; 
  font-size:15px; 
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;"><h1><?php echo $row["movie_name"]; ?></h1><br></div>

          
         <p > <?php echo $row["movie_desc"]; ?></p>
        <h2> <a href="<?php  echo $row['movie_link']; ?>" style="color: white;">WATCH MOVIE</a></h2>
  </div>
      

 
    </div>
</div>   
    </div>

</div>
<?php
   $i=$i+1;
   }}
  ?> 
 
  <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
 
</body>
</html>