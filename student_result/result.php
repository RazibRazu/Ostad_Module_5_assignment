<?php
//Sample array of marks
$marks =[10,10,10,10,10];  //example mark

//Calculate total marks
$total_mark = array_sum($marks);

//Calculate average marks
$average = $total_mark/ count ($marks);

//Grade based on switch case

switch (true) {
    case ($average<=100 && $average>80):
        $grade = 'A+';
        break;
    case ($average<79 && $average>=70);
        $grade = 'A';
        break;   
    case ($average<69 && $average>=60);
        $grade = 'A-';
        break;
    case ($average<59 && $average>=50);
        $grade = 'B';
        break;
    case ($average<49 && $average>=40);
        $grade = 'C';
        break;                
    case ($average<33 && $average>=39);
        $grade = 'D';
        break;   
    case ($average>100);
        $grade = 'You entered Invalid Number';
        break;
    default:
        $grade = 'F';
        break;
}
//Output
echo "Total Marks: " . $total_mark . "<br>";
echo "Average Marks: " .$average . "<br>";
echo "Grade:" . $grade;

