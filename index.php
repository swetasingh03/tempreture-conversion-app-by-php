<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>temreture conversion app</title>
    <link rel="stylesheet" href="style.css">
</head>                                                                                                                                 
<body>
    <div class="main-div">
        <div class="left">
         <img src="img.png" alt="">
        </div>
        <div class="right">
         <form method="POST">
             <input type="text" name="temp" placeholder="Enter the tempreture" class="select">
             <div class="slection">
                celius <input type="radio" name="select" value="cel">
                fahrenheit <input type="radio" name="select" value="fehr">
             </div>
             <input type="submit" value="convert now" name="submit" class="submit">
         </form>
         <p>
             <?php
               if(isset($_POST['submit'])){
                   $num=$_POST['temp'];
                   $temp=$_POST['select'];

                   if($temp == "cel"){
                       $result= $num * 9/5+32;         
                       echo "The conversion value of celcius to fahrenheit is ".$result;
                   }
               else{
                   $result= ($num-32)*5/9;
                   echo "The conversion value of fehrenheit to celcius is ".$result;
               }
            }
             ?>
         </p>
        </div>
    </div>
</body>
</html>