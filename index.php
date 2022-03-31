
<!-- Let's make a result grade calculator..
Rishita's subject marks: 
SubjectA = 75, SubjectB = 80, SubjectC = 65, SubjectD = 90.
Result Calculation formula: Sum all subjects marks and divided by total subject quantity. 
From this given formula, you will get a mark. 
Show the Grade message by the mark.
A+ = 80 - 100 
A   = 70 - 79
A-  = 60 - 69
B   = 50 - 59
C   = 40 - 49
F   = 01 - 39 
Firstly you have to calculate the average mark of Rishita.
Secondly you have to show the grade message (Like as: “You got A+”) by following this grading range. -->
<?php
    $SubjectA = 10;
    $SubjectB = 60;
    $SubjectC = 95;
    $SubjectD = 46;
    // total mark 
    $RishitasTotalMark = $SubjectA+$SubjectB+$SubjectC+$SubjectD;
    //Mark Average
    $RishitaMarkAverage = $RishitasTotalMark/4;
    echo "<h2>Rishita's Subject Marks Average:$RishitaMarkAverage </h2>";
    echo "<br>";
    echo "<br>";
  //Condition Set

  if ($SubjectA <39 || $SubjectB <39 ||  $SubjectC <39 || $SubjectD <39 )
  {
    echo "Results Not Found";
  }
  elseif ($SubjectA >100 || $SubjectB >100 ||  $SubjectC >100 || $SubjectD >100 )
  {
    echo "Results is Not Found";
  }
   elseif ( $RishitaMarkAverage >=0 && $RishitaMarkAverage <=39 )
    {
     echo 'You are Fail';
    }
    elseif ( $RishitaMarkAverage >=40 && $RishitaMarkAverage <=49 )
    {
     echo "You got C";
    }
    elseif ( $RishitaMarkAverage >=50 && $RishitaMarkAverage <=59 )
    {
     echo "You got B";
    }
    elseif ( $RishitaMarkAverage >=60 && $RishitaMarkAverage <=69 )
    {
     echo "You got A-";
    }
    elseif ( $RishitaMarkAverage >=70 && $RishitaMarkAverage <=79 )
    {
     echo "You got A";
    }
    elseif ( $RishitaMarkAverage >=80 && $RishitaMarkAverage <=100 )
    {
     echo "You got A+";
    }
    else{
      echo "skjfhsf";
    }
?>
