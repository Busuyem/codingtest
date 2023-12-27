<?php

//QUESTION
/*

HackerLand University has the following grading policy:

Every student receives a grade  in the inclusive range from  to .
Any grade  less than 40  is a failing grade.
Sam is a professor at the university and likes to round each student's  according to these rules:

If the difference between the grade  and the next multiple of 5  is less than 3 , round grade  up to the next multiple of 5 .
If the value of  is less than 38 , no rounding occurs as the result will still be a failing grade.
Examples

grade = 84 round to  (85 - 84 is less than 3)
grade = 29 do not round (result is less than 40)
grade = 57  do not round (60 - 57 is 3 or higher)
Given the initial value of  for each of Sam's  students, write code to automate the rounding process.

*/

function roundGrade($grade) {
    // Define the rounding threshold
    $roundingThreshold = 3;

    // If the grade is less than 38, no rounding occurs
    if ($grade < 38) {
        return $grade;
    }

    // Calculate the next multiple of 5
    $nextMultipleOf5 = ceil($grade / 5) * 5;

    // If the difference between the next multiple of 5 and the grade is less than the threshold, round up
    if ($nextMultipleOf5 - $grade < $roundingThreshold) {
        return $nextMultipleOf5;
    } else {
        // Otherwise, no rounding occurs
        return $grade;
    }
}

// Example usage with an array of grades
$grades = [84, 29, 57];

foreach ($grades as $grade) {
    $roundedGrade = roundGrade($grade);
    echo "Original Grade: $grade, Rounded Grade: $roundedGrade\n";
}

?>
