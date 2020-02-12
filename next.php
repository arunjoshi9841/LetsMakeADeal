<?php

session_start();
$Winningnumber=$_SESSION["Winningnumber"];
$result= $_POST['result'];

echo '<input type = "text" id="value1" value="'.$Winningnumber.'" hidden>';
echo '<input type = "text" id="value2" value="'.$result.'" hidden>';


?>
<html>

<head>

  <title>ARUN</title>

<link href="main.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
<script >
  var winningnumber = document.getElementById("value1").value;
var chosennumber = document.getElementById("value2").value;

function checkLosingDoor(){  
  var randomNum = Math.floor((Math.random() * 2) + 1);

  if (winningnumber=="1" && chosennumber=="1"){  
    if  (randomNum==1){
      document.getElementById("bdoor2").disabled=true;
      document.getElementById("door2").src="pig.JPG";
    }
    
    if  (randomNum==2){
      document.getElementById("bdoor3").disabled=true;
      document.getElementById("door3").src="pig.JPG";
      
      
    }
  } 
  if (winningnumber=="1" && chosennumber=="2"){
    document.getElementById("door3").src="pig.JPG";
    document.getElementById("bdoor3").disabled=true;
    
  }

  if (winningnumber=="1" && chosennumber=="3"){
     
    document.getElementById("door2").src="pig.JPG";
    document.getElementById("bdoor2").disabled=true;
    
  }
  if (winningnumber=="2" && chosennumber=="1"){
    document.getElementById("door3").src="pig.JPG";
    document.getElementById("bdoor3").disabled=true;
  
  
  }

  if (winningnumber=="2" && chosennumber=="2"){
    if  (randomNum==1){
      document.getElementById("bdoor1").disabled=true;
      document.getElementById("door1").src="pig.JPG";
      
    
    }
    if  (randomNum==2){
      document.getElementById("door3").src="pig.JPG";
      document.getElementById("bdoor3").disabled=true;
        } 
  }
  if (winningnumber=="2" && chosennumber=="3"){
    document.getElementById("door1").src="pig.JPG";
    document.getElementById("bdoor1").disabled=true;
  
  }

  if (winningnumber=="3" && chosennumber=="1"){
    document.getElementById("door2").src="pig.JPG";
    document.getElementById("bdoor2").disabled=true;
    }
    if (winningnumber=="3" && chosennumber=="2"){
    document.getElementById("door1").src="pig.JPG";
    document.getElementById("bdoor1").disabled=true;
  
  }
  
  if (winningnumber=="3" && chosennumber=="3"){
    
    if  (randomNum==1){
      document.getElementById("door1").src="pig.JPG";
      document.getElementById("bdoor1").disabled=true;
      }
    if  (randomNum==2){
      document.getElementById("door2").src="pig.JPG";
      document.getElementById("bdoor2").disabled=true;
      
    }
  }
  
  
  
  }
  
  
  
  
  
  

function option1(){
  checkWinningnumber(1);
  document.getElementById("value3").value=1;
  }

function option2(){
  checkWinningnumber(2);
  document.getElementById("value3").value=2;
  
  
}

function option3(){
  checkWinningnumber(3);
  document.getElementById("value3").value=3;
  
  
}

function checkWinningnumber(doornum){
  document.getElementById("playagain").hidden=false;
  
  
  document.getElementById("bdoor1").disabled=true;
  document.getElementById("bdoor2").disabled=true;
  document.getElementById("bdoor3").disabled=true;
  
  
  var winningnumber = document.getElementById("value1").value;
  if (doornum==1){
    
    if (winningnumber==1){
      document.getElementById("door1").src="gold.PNG";
      document.getElementById("WinText").innerHTML="Congratulations!!!! You Won 10 millions dollars";
      
    }
    else{
      
      document.getElementById("door1").src="pig.JPG";
      document.getElementById("WinText").innerHTML="Bad luck. Sorry Try Again!";
      
    }   
  }
  
  if (doornum==2){
    
    if (winningnumber==2){
      document.getElementById("door2").src="gold.PNG";
      document.getElementById("WinText").innerHTML="Congratulations!!! You Won 10 millions dollars";
    }
    else{
      
      document.getElementById("door2").src="pig.JPG";
      
    document.getElementById("WinText").innerHTML="Bad luck. Sorry Try Again!";
    }   
  } 
  if (doornum==3){
    
    if (winningnumber==3){
      document.getElementById("door3").src="gold.PNG";
      document.getElementById("WinText").innerHTML="Congratulations!!! You Won 10 millions dollars"; 
      
    }
    else{
      
      document.getElementById("door3").src="pig.JPG";
  
    document.getElementById("WinText").innerHTML="Bad luck. Sorry Try Again!";  
    }   
  }
  
}

function statButton(){
    
    window.location.href="stat.php";
}

</script>
</head>



<body onload="checkLosingDoor()">
  <br>
  <center>
  <span class="header">Let's Make A Deal </span>
</center>
  <h2><center> PLEASE SELECT A DOOR YOU THINK HAS MONEY</center> </h2>
  <form name="sender" method="post" action="action.php">
    <?php
echo '<input type = "text"  name ="WinningnumberText" value="'.$Winningnumber.'" hidden/> ';
echo '<input type = "text"  name ="chosennumberText" value="'.$result.'" hidden/>';
?>
    <input type = "text" id="value3" name ="chosennumber2" hidden/>

    <div id="wrapper">
      <div id="container1" class="container">
    <button id="bdoor1" name="submit2" onclick="option1()">
      <img id="door1" src="1.JPG" width="330" height="500" alt="Door 1" class="image">
    </button>
    <div class="overlay">
    <div class="text">DOOR 1</div>
  </div>
</div>

<div id="container2" class="container">
    <button id="bdoor2"  name="sumbit2"  onclick="option2()">
      <img id="door2" src="1.JPG" width="330" height="500" alt="Door 2" class="image">
    </button>
<div class="overlay">
    <div class="text">DOOR 2</div>
  </div>
</div>
<div id="container2" class="container">
    <button id="bdoor3" name="sumbit2" onclick="option3()">
      <img id="door3" src="1.JPG" width="330" height="500" alt="Door 3" class="image">
    </button>

<div class="overlay">
    <div class="text">DOOR 3</div>
  </div>
</div><br>
<br><br> <br><br> <br><br> <br><br> <br><br> <br><br><br><br> <br><br> <br><br> <br><br> <br><br> <br><br><br><br><br><br><br>
<center><h2 id="WinText">
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
We have removed one door for you. Do you want to switch?</h2></center>
<br>
<br>
<center>
  <br>
<br>
<input id="playagain" class="btn" type="submit" name="playAgain" value="Play Again" hidden />
</center>
   

</div>

</form>

</div>

</body>
</html>
