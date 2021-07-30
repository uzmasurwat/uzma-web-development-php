<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title><?php echo "PHp advance class III";?></title>
    </head>
    <body>
        <h1 style= "color: blue; font-size: 50px; font-weight: 800; text-transform: uppercase; text-align: center; padding: 60px 0;">

        Functions
    
        </h1>
        <h3 style= "color: brown; font-size: 30px; font-weight: 700; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        1)  Function for conventioning big hands, small hands, both hands


        </h3>
        <?php

function transformer($txt, $type){
    if($type == "l"){
       $arm = "lowercase";
    }else if($type == "u"){
       $arm = "uppercase";
    }else{
       $arm = null;
    }
    echo "<span style=\"font-size: 24px; font-weight: 500; padding-left: 100px; text-transform: {$arm};\"> {$txt} </span> <br><br>";
 
 }
 
 $txt = "PHP is a general-purpose scripting language geared towards web development created by 
 Danish-Canadian programmer Rasmus Lerdorf in 1994.";
 transformer($txt, 'l');
 transformer($txt, 'u');
 transformer($txt, 'g');

        ?>
        
        
        <br><br><hr><br><br>

        <h3 style= "color: brown; font-size: 30px; font-weight: 700; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        2)  Make a function like the reverse function of PHP

        </h3>
        <?php
        
        $txt = "I am Uzma Surwat, a Graphic Designer, a Web Developer and an Off-Page SEO specialist.";

         echo strrev($txt);
        ?>        
        
        <br><br><hr><br><br>
        <h3 style= "color: brown; font-size: 30px; font-weight: 700; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
       3)  Create a function that can bring out field results in rectangles, bogus, and circles


        </h3>
        <?php






        ?>
        
        
        <br><br><hr><br><br>
        <h3 style= "color: brown; font-size: 30px; font-weight: 700; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        4)  Create a function that if you give an age, will be old, young, teenager, boy, child return

        </h3>
        <?php
            function lifecycle($name, $age){
                if( $age >= 50){
                   $ageGroup = 'Old';   

                }else if( $age <= 49 && $age >= 30){
                   $ageGroup = 'Young';  

                }
                else if( $age <= 29 && $age >= 20){
                   $ageGroup = 'Teen'; 

                }else if( $age <= 19 && $age >= 14){
                   $ageGroup = 'Boy';           
                
                }else  if( $age >=13){
                   $ageGroup = 'Child'; 

                }else{
                   $ageGroup = 'Born-Baby';
                   
                }
                return  "NAME = {$name}:&nbsp;&nbsp;&nbsp;&nbsp;AGE = {$age} &nbsp;&nbsp;&nbsp;&nbsp; AGE-GROUP = {$ageGroup} <br><hr><br>";
             }
             echo lifecycle('Ayan', 11 );
             echo lifecycle('Ayesh', 35);
             echo lifecycle('Uncle Hannan', 83);
             echo lifecycle('Rayad', 0);
             echo lifecycle('Badi', 23);

        ?>
        
        
        <br><br><br><br>
        <h3 style= "color: brown; font-size: 30px; font-weight: 700; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        5)  Create a function to extract grades and GPAs


        </h3>
        <?php
        function result($stdnt, $sub, $mark){
            if( $mark >=1 && $mark <= 32){
               $GPA = 0;
               $Grade = 'F';
            }else if( $mark >=33 && $mark <= 49){
               $GPA = 1;
               $Grade = 'E';
            }
            else if( $mark >=50 && $mark <= 69){
               $GPA = 2;
               $Grade = 'D';
            }else if( $mark >=70 && $mark <= 79){
               $GPA = 3;
               $Grade = 'C';
            }else if( $mark >=80 && $mark <= 89){
               $GPA = 4;
               $Grade = 'B';
            
            }else  if( $mark >=90 && $mark <= 100){
               $GPA = 5;
               $Grade = 'A';
            }else{
               $GPA = 'invalid';
               $Grade = 'invalid';
            }
            echo  "name = {$stdnt}:&nbsp;&nbsp;&nbsp;&nbsp;SUBJECT = {$sub} &nbsp;&nbsp;&nbsp;&nbsp;Marks = {$mark}
            &nbsp;&nbsp;&nbsp;&nbsp;GPA = {$GPA}&nbsp;&nbsp;&nbsp;&nbsp; GRADE = {$Grade} <br><hr><br>";
         }
         result('Neha', 'Science', 24 );
         result('Deepa', 'Geography', 62);
         result('Rustom', 'Civics', 98);
         result('Dhrubom', 'Mathematics', 48);
         result('Ameera', 'Mathematics', 75);
         result('Sara', 'English', 0);

        ?>
        
        
        <br><br><br><br>
        <h3 style= "color: brown; font-size: 30px; font-weight: 700; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        6)  Create a function in which your birth year will expose your age


        </h3>
        <?php
        function alpha($name, $age){
            if($age >= 20){
               echo "<span  style=\"font-size: 24px; font-weight: 500; color: orange; padding-left: 200px; text-transform: sentence;\">{$name} is permitted to go for because you are {$age} years old.</span> <hr>";
            }else{
               $wait = 20 - $age;
         
               echo "<span  style=\"font-size: 24px; font-weight: 500; color: green; padding-left: 200px; text-transform: sentence;\">{$name}, please wait for {$wait} years because you are {$age} years old.</span> <hr>";
            }
         }
         
            alpha('Zenap',28);
            alpha('Zara',15);
            alpha('Zeba',42);
            alpha('Zohan',17);

        ?>
        
        
        <br><br><hr><br><br>
        <h3 style= "color: brown; font-size: 30px; font-weight: 700; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        7)  Create a heading function that can create dynamic heading<br><br>
         <?php
         $cntnt = "<span style=\" font-size: 20px; color: #2e3192; padding-left: 100px; font-weight: 400;\">
         Anam is a new girl in our school. Anam comes from India. 
         Anam likes to eat chocolates & icecreams.</span> <br> ";

         echo "{$cntnt} <br>";

         echo str_replace('Anam', 'Sadaf', $cntnt);
         echo str_replace('Anam', 'Raida', $cntnt);
         echo str_replace('Anam', 'Diba', $cntnt);
         ?>

        </h3><br><br><hr><br><br>
        <h3 style= "color: brown; font-size: 30px; font-weight: 700; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        8)  Create a function where your weight and height will remove your body mass index

        </h3>
        <?php

      //function info($weight, $height, $bmi){
         
         //   $bmi = $weight / $height * $height;
         

      //echo "As your Weight is {$weight} kg and the Height is {$height} ft then your BOdy-Mass will be {$bmi}. <br>";
   //}

   //info(34, 5, $bmi);



        ?>
        
        
        <br><br><hr><br><br>
        <h3 style= "color: brown; font-size: 30px; font-weight: 700; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        9)  Make a function of convatting US dollar, Canadian dollar, pound in Bangladeshi money


        </h3>
        <?php






        ?>
        
        
        <br><br><hr><br><br>
        <h3 style= "color: brown; font-size: 30px; font-weight: 700; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        10)  Make a function by changing the color of the headings with these colors of red, green, blue, yellow, purple and black in Bengal


        </h3><br><br><hr><br><br>
        <h3 style= "color: brown; font-size: 30px; font-weight: 700; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        11)  Create an image uploading function where you can manage the picture with the name, height, and width


        </h3>
        <?php






        ?>
        
        
        <br><br><hr><br><br>
        <h3 style= "color: brown; font-size: 30px; font-weight: 700; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        12)  Create a four loop from 1000 to 5000 loop and where you print numbers bigger than 3000 and divided by 11


        </h3><br><br><hr><br><br>
        <h3 style= "color: brown; font-size: 30px; font-weight: 700; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        13) Use for loop to prepare the name of 2,3,4,5,6,7,8,9


        </h3>
        <?php






        ?>
        
        
        <br><br><hr><br><br>
       





















    </body>


   </html> 