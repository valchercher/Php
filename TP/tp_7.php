<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="c.css">
    <title>Document</title>
</head>
<body>
    <form method="post" id="containt">
        <label for="">Saisir une date</label>
         <input type="text" name='date' >
       <button type="submit">soumettre</button>
       
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $recurdate=$_POST['date'];
        if(strtotime($recurdate) ==''){
            echo 'la date est invalide';
        }
        else{
  
            $date_precedent =date ('Y-m-d',strtotime("-1 day",strtotime($recurdate) )); 
            $date_suivant =date ('Y-m-d',strtotime("+1 day",strtotime($recurdate)));

            echo "date actuelle :", $recurdate."<br>";
            echo "date precedent :", $date_precedent."<br>";
            echo "date suivant :", $date_suivant."<br>";
        }
    
   
        }
        ?>
        </form>
    
</body>
<style>
    *{
    margin:0;
 }
 body{
     background: gray;
     padding:0;
     display:flex;
     justify-content:center;
     align-items:center;
     text-align:center;

 }
 #containt{
     display: flex;
     margin-top:400px;
     align-items:center;
     justify-content:center;
     text-align:center;
     flex-direction: column;
     gap:10px;
 }
 label{
     font-size: 35px;
 }
 input{
     width: 250px;
     height: 40px;
     border-radius:5%;
 }
 button{
    background:green;
    width: 150px;
    height:30px;
    font-size:25px;
 }
 
</style>
</html>
