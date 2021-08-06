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
        <h3 style= "color: brown; font-size: 30px; font-weight: 400; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        1)  Function for conventioning big hands, small hands, both hands.</h3>
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

        <h3 style= "color: brown; font-size: 30px; font-weight: 400; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        2)  Make a function like the reverse function of PHP.</h3>
        <?php
        
        $txt = "My name is Uzma Surwat.";

      
        echo strrev($txt);
        ?>        
        
        <br><br><hr><br><br>
        <h3 style= "color: brown; font-size: 30px; font-weight: 400; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
       3)  Create a function that can bring out field results in rectangles, Square, and circles.</h3>
        <?php

        function area($fig, $L, $B){

            switch($fig){
               case 'r':
               $fig = 'rectangle';
               $area = ($L * $B);
               break;

               case 'sq':
               $fig = 'square';
               $area = ($L * $L);
               break;


               case 'cir':
               $fig = 'circle';
               $area = (3.14 * ($L * $L));
               break;

               default:
               $fig = 'invalid';
               $area = 'not found';
               break;

            }

            echo "<span style=\"padding: 50px 100px; font-size: 25px; color: #0862a5; text-transform: sentence; font-weight: 500; \">
              {$fig} : {$area} sq.unit. </span> <br><br>";
        }

        area('r', 20, 15);
        area('cir', 20, null);
        area('sq', 20, null);
        area('p', 20, 30);
        area('r', 450, 1500);
        area('cir', 450, null);
        area('sq', 450, null);
        area('g', 450, null);
        area('r', 75, null);

        ?>
        
        
        <br><br><hr><br><br>
        <h3 style= "color: brown; font-size: 30px; font-weight: 400; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        4)  Create a function that if you give an age, will be old, young, teenager, boy, child return.</h3>
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
        <h3 style= "color: brown; font-size: 30px; font-weight: 400; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        5)  Create a function to extract grades and GPAs.</h3>
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
        <h3 style= "color: brown; font-size: 30px; font-weight: 400; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        6)  Create a function in which your birth year will expose your age.
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
        <h3 style= "color: brown; font-size: 30px; font-weight: 400; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        7)  Create a heading function that can create dynamic heading<br><br>
         <?php
            function title($txt, $tag, $align, $color, $size, $weight){

               echo " <$tag style= \" text-align: {$align}; color: {$color}; font-size: {$size}; font-weight: {$weight}; \"> {$txt}</$tag><br><br>";
            }

            title('The Crying Globe', 'h1', 'center', '#1169a5', '70px', 800);

            title('Let us practise GO Green and help our endangered Mother Earth. Let us start with our ECO-Friendly Embankment Project. Let us make a Better Breathing.', 'h2', 'left', '#106d06', '30px', 500);
            
            title('Total expected cost = $650 Billions (minimum).', 'h5', 'right', '#f90618', '20px', 600);
         ?>

        </h3><br><br><hr><br><br>
        <h3 style= "color: brown; font-size: 30px; font-weight: 400; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        8)  Create a function where your weight and height will remove your body mass index

        </h3>
        <?php

        function massValue($H, $W, $BMI){ 

         switch($BMI){

            case 'bmi':
               $BMI = ($W / ($H * $H));
            break;
         }

         Echo "When a person is of height {$H} meter weighs {$W} kg, the Body Mass Index = {$BMI}. <br>";
        }

        massValue(2, 65, 'bmi');
        massValue(3, 45, 'bmi');

        ?>
        
        
        <br><br><hr><br><br>
        <h3 style= "color: brown; font-size: 30px; font-weight: 400; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        9)  Make a function of convatting US dollar, Canadian dollar, pound in Bangladeshi money.
        </h3>
        <?php
        function money($val, $code, $xchng){

         switch($xchng){

            case 'u':
               $code = 'USD';
               $xchng = ($val * 84.83);
               break;

               case 'c':
                  $code = 'CAD';
                  $xchng = ($val * 67.60);
                  break;

                  case 'p':
                     $code = 'GBP';
                     $xchng = ($val * 117.98);
                     break;

                  default:
                  $code = 'invalid';
                  $xchng = 'error';
                  break;               
         }
         echo "<h3 style=\"padding: 10px 100px; font-size: 30px; font-weight: 400; color: #f90618;\">{$val} {$code} : {$xchng} BDT</h3> <br>";
        }

        money(1000, 'USD', 'u');
        money(1000, 'CAD', 'c');
        money(1000, 'GBP', 'p');
        money(1000, 'Rs', 'r');

        ?>
        
        
        <br><br><hr><br><br>
        <h3 style= "color: brown; font-size: 30px; font-weight: 400; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        10)  Make a function by changing the color of the headings with these colors of red, green, blue, yellow, purple and black in Bengali</h3>
        <br><br><br>
        <?php
         function heading($txt, $align, $color){

            echo "<h2 style=\"font-size: 24px; text-align: {$align}; color: {$color}; padding: 0 100px; \">{$txt}</h2> <br>";

            
         }
         heading('মুদ্রা রূপান্তরকারী সিস্টেমt', 'center', '#fc031c');
         heading('মুদ্রা রূপান্তরকারী সিস্টেমt', 'left', '#04aa04');
         heading('মুদ্রা রূপান্তরকারী সিস্টেমt', 'right', '#06067c');
         heading('মুদ্রা রূপান্তরকারী সিস্টেমt', 'left', '#e5e503');
         heading('মুদ্রা রূপান্তরকারী সিস্টেমt', 'right', '#000000');

        ?>


        <br><br><hr><br><br>
        <h3 style= "color: brown; font-size: 30px; font-weight: 400; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        11)  Create an image uploading function where you can manage the picture with the name, height, and width.</h3>
        <?php

        function pic($src, $alt = null, $width, $height){

         echo "<img src=\"{$src}\" alt=\"{$alt}\" width=\"{$width}\" height=\"{$height}\" ><br><br>";
        }
        pic('nature1.jpg', null, '400px', '400px');
        pic('nature2.jpg', null, '600px', '600px');
        pic('nature3.jpg', null, '1000px', '800px');

        ?>        
        
        <br><br><hr><br><br>
        <h3 style= "color: brown; font-size: 24px; font-weight: 400; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        12)  Create a for loop from 1000 to 5000 loop and where you print numbers bigger than 3000 and divided by 11.
             </h3><br><br>
             <?php
            for($i = 1000; $i < 5000; $i++){
               if($i = $i + 2999 / 11){
               
                  echo "loop num ={$i} <br>";
               }
               
            }
             ?>
        
        
        <br><br><hr><br><br>
        <h3 style= "color: brown; font-size: 30px; font-weight: 400; text-transform: captalize; text-align: left; padding: 0 auto 60px 100px;">
        13) Use for loop to prepare the name of 2,3,4,5,6,7,8,9
        </h3>
        <b>multiples of 2</b><br>
        <?php

        for($i = 1; $i <= 40; $i++){

         if($i % 2 == 0){

            echo  "<h3 style=\" padding: 0 100px; color: #c13366;\">the loop number = {$i}</h3><br>";

         }
         
        }

        ?><br><br>

<b>multiples of 3</b><br>

<?php

for($i = 1; $i <= 40; $i++){

 if($i % 3 == 0){

    echo "<h3 style=\" padding: 0 100px; color: #b611ed;\">the loop number = {$i}</h3><br>";

 }
 
}

?><br><br>
 <b>multiples of 4</b><br>

<?php

for($i = 1; $i <= 50; $i++){

 if($i % 4 == 0){

    echo "<h3 style=\" padding: 0 100px; color: silver;\">the loop number = {$i}</h3><br>";

 }
 
}

?><br><br>
 <b>multiples of 5</b><br>

<?php

for($i = 1; $i <= 60; $i++){

 if($i % 5 == 0){

    echo "<h3 style=\" padding: 0 100px; color: orange;\">the loop number = {$i}</h3><br>";

 }
 
}

?><br><br>
<b>multiples of 6</b><br>

<?php

for($i = 1; $i <= 80; $i++){

 if($i % 6 == 0){

    echo "<h3 style=\" padding: 0 100px; color: #fc065f;\">the loop number = {$i}</h3><br>";

 }
 
}

?><br><br><b>multiples of 7</b><br>

<?php

for($i = 1; $i <= 90; $i++){

 if($i % 7 == 0){

    echo "<h3 style=\" padding: 0 100px; color: #066cb2;\">the loop number = {$i}</h3><br>";

 }
 
}

?><br><br>
<b>multiples of 8</b><br>
<?php

for($i = 1; $i <= 100; $i++){

 if($i % 8 == 0){

    echo "<h3 style=\" padding: 0 100px; color: gold;\">the loop number = {$i}</h3><br>";

 }
 
}

?><br><br>
<b>multiples of 9</b><br>
<?php

for($i = 1; $i <= 120; $i++){

 if($i % 9 == 0){

    echo "<h3 style=\" padding: 0 100px; color: #cc2f05;\">the loop number = {$i}</h3><br>";

 }
 
}

?>
        
        
        <br><br><hr><br><br>
       





















    </body>


   </html> 