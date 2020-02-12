<?php
$db = new PDO('mysql:host=localhost;dbname=lmadStat','root','co113g3');
    $won = "yes";
    $queryA = "Select * from stats";
    $query = "Select * from stats where changedDoor = '" . $won . "';";
    $queryC = "Select * from stats where changedDoor = '". $won . "' AND win = '". $won . "';";

    $queryResultA = $db->query($queryA);
    $queryResult = $db->query($query);
    $queryResultC = $db->query($queryC);
    
    $all_game = $queryResultA->rowCount();
    $doorChanged = $queryResult->rowCount();
    $doorChangedWon = $queryResultC->rowCount();

    $percentage = number_format((($doorChangedWon)/($doorChanged)) * 100,2);

 ?>
 <html>
<head><title>ARUN</title>
  <link href='https://fonts.googleapis.com/css?family=Sintony:400,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
<script>
function goBack() {
    window.open ('action.php','_self',false)
}
</script>
<link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>

  
  <br>
<center>
  <span class="header">Let's Make A Deal </span>
</center>

      <section>
        <div>
            <center>
       
           <h2> Total games played: <?php echo $all_game; ?> <br>
            Total number of times the door was switched: <?php echo $doorChanged; ?> <br>
              
            Percentage of wining when switching: <?php echo $percentage; ?> <br></h2>
            
           </center>
           <br>
               <br>
           <center>
             <button type="button" onclick="goBack()" class='btn'>Go Back</button>  
           
           </center>
         </div>
          </section> 
           </body>
           
           </html>