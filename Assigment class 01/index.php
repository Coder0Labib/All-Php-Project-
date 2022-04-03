<?php

/* First assignment 01:
Let’s make a result grade calculator…
Rishita’s subject marks: SubjectA = 75, SubjectB = 80, SubjectC = 65, SubjectD = 90.
Result Calculation formula: Sum all subjects marks and divided by total subject quantity. 
From this given formula, you will get a mark. Show the Grade message by the mark.
    A+ = 80 - 100 
    // A  = 70 - 79
    // A- = 60 - 69
    B  = 50 - 59
    C  = 40 - 49
    F  = 01 - 39 
Firstly you have to calculate the average mark of Rishita.
Secondly you have to show the grade message (Like as: “You got A+”) by following this grading range.*/

// Rishita’s subject marks

 $SubjectA = 5;
 $SubjectB = 1000;
 $SubjectC = 5;
 $SubjectD = 0;

 $TotalMarks=$SubjectA+$SubjectB+$SubjectC+$SubjectD;
//  calculate the Average mark of Rishita
 $RishitaMarkAverage = $TotalMarks/4;

  echo "Average mark of Rishita:$RishitaMarkAverage";
 echo "<br>";
 echo "<br>";
//   Show the grade message Condition


if ($RishitaMarkAverage >=0 && $RishitaMarkAverage <=39 ) 
 {
     echo "You are Fail";   //F = 01 - 39 
 }
if ($RishitaMarkAverage >=40 && $RishitaMarkAverage <=49 ) 
 {
     echo "You Got C ";   //    C  = 40 - 49
 }
if ($RishitaMarkAverage >=50 && $RishitaMarkAverage <=59 ) 
 {
     echo "You Got B";   //    B  = 50 - 59
 }
if ($RishitaMarkAverage >=60 && $RishitaMarkAverage <=79 ) 
 {
     echo "You Got A-";      // A- = 60 - 69
 }
if ($RishitaMarkAverage >=70 && $RishitaMarkAverage <=79 ) 
    {
         echo "You Got A-";     // A  = 70 - 79
 }
if ($RishitaMarkAverage >=80 && $RishitaMarkAverage <=100 ) 
 {
     echo "You are A+";      //  A+ = 80 - 100 
 }
elseif($SubjectA >=0 || $SubjectB >=0 || $SubjectC >=0 || $SubjectD >=0 
) {
    echo "You got less than 39 in  subject that's why we are not found your results";
    }
elseif($SubjectA >=39 || $SubjectB >=39 || $SubjectC >=39 || $SubjectD >=39
) {
    echo "You got less than 39 in  subject that's why we are not found your results";
}

 else{
     echo "You got less than 39 in  subject that's why we are not found your results";
     }

 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "Second Assignment Start";
 echo "<br>";
 echo "<br>";

// Second Assigment Start Here

$bike = "signal_button";

//Switch Case Condition
switch ( $bike )
{
 case 'start';
      echo "Bike is Start";
      Break;
 case 'stop';
      echo "Bike is stop";
      Break;
 case 'break';
      echo "Bike take break";
      Break;
 case 'gear';
      echo "Bike move faster and faster";
      Break;
 case 'signal_On';
      echo "Bike on a signal light";
      Break;
 case 'headlight_Start';
      echo "bike’s headlight will start.";
      Break;

 default:
 echo "You don't have bike key That's why you don't start Bike ";
}

?>
