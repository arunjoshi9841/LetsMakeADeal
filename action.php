<html>
<head><title>ARUN</title>
<link href="main.css" rel="stylesheet" type="text/css">
</head>
<?php  
 session_start();
if (isset($_POST['playAgain']))
{
  $winner= $_POST['WinnerText'];
  $fChosen= $_POST['chosenText'];
  $chosen2=$_POST['chosen2'];
  
$dsn='mysql:host=localhost;dbname=lmadStat';
$username='root';
$password='co113g3';
if( $fChosen!= $chosen2){
  $changed="yes";
}
else{
  $changed="no";
}

if( $winner== $chosen2){
  $winner="yes";
}
else{
  $winner="no";
}

try{
$db= new PDO($dsn, $username, $password);


$query= "INSERT Into stats(changedDoor,win)
VALUES ('".$changed."','".$winner."')"; 

  $queryResult= $db->query($query);   
}

catch (PDOException $e){  
  echo "Connected failed";
}
  if( $fChosen!= $chosen2){
  $changed==1;
  if( $winner== $chosen2){
  $switchwin==1;
}
}
else{
  $changed==0;
  $switchwin==0;
}
 
}


 $WinningDoor= rand (1 ,3);

 
$_SESSION["Winningnumber"] = $WinningDoor;


echo '<input required  type = "text" id="value1" name = "Winner" value="' . $WinningDoor . '" hidden/>';

?>

<script>
  function option1(){
  document.getElementById("result").value=1;  
}

function option2(){
  document.getElementById("result").value=2;  
}

function option3(){
  document.getElementById("result").value=3;  
}

function statButton(){
    
    window.location.href="stat.php";
}
</script>
<body>
<br>
<center>
  <span class="header">Let's Make A Deal </span>
</center>
<h2><center> PLEASE SELECT A DOOR YOU THINK HAS MONEY</center> </h2>




  <link href='https://fonts.googleapis.com/css?family=Sintony:400,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
<form method="post" action="next.php" >

<div id="wrapper">
 
  <div id="container1" class="container">
 <input type="image" src="1.JPG" width="330" height="500" alt="Door 1" class="image" value ="1" name="submit1" id="doorA" onclick="option1()">
  
 
  
 <div class="overlay">
    <div class="text">DOOR 1</div>
  </div>
</div>


<div id="container2" class="container">
<input type="image" src="1.JPG" width="330" height="500" alt="Door 2" class="image" value ="2" name="submit" id="doorB" onclick="option2()">
  
  <div class="overlay">
    <div class="text">DOOR 2</div>
  </div>
</div>

<div id="container3" class="container">
<input type="image" src="1.JPG" width="330" height="500" alt="Door 3" class="image" value ="3" name="submit" id="doorC" onclick="option3()">
  
  <div class="overlay">
    <div class="text">DOOR 3</div>
  </div>
</div>
 </form>
<br><br> <br><br> <br><br> <br><br> <br><br> <br><br><br><br> <br><br> <br><br> <br><br> <br><br> <br><br><br><br><br><br><br>
 

 <center>

  <h2> There is a mystery to this game. To find out the mystery check the statistics.</h2>


<input class="btn" type="button" value="Statistics" onclick="statButton()"> 
<input type="text" id="result" name="result" hidden>
</center>
</div>

</body>
</html>