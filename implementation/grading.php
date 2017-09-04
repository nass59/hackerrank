<?php
/**
 * HackerLand University has the following grading policy:
 *
 * Every student receives a grade in the inclusive range from 0 to 100.
 * Any grade less than 40 is a failing grade.
 * Sam is a professor at the university and likes to round each student's grade according to these rules:
 *
 * If the difference between the grade and the next multiple of 5 is less than 3, round grade up to the next multiple of 5.
 * If the value of grade is less than 38, no rounding occurs as the result will still be a failing grade.
 * For example, grade = 84 will be rounded to 85 but grade = 29 will not be rounded because the rounding would result
 * in a number that is less than 40.
 *
 * Given the initial value of grade for each of Sam's n students, write code to automate the rounding process.
 * For each gradei, round it according to the rules above and print the result on a new line.
 *
 * Input Format
 *
 * The first line contains a single integer denoting n (the number of students).
 * Each line i of the n subsequent lines contains a single integer, gradei, denoting student i's grade.
 *
 * Output Format
 *
 * For each gradei of the n grades, print the rounded grade on a new line.
 *
 * Sample Input 0
 *
 * 4
 * 73
 * 67
 * 38
 * 33
 *
 * Sample Output 0
 *
 * 75
 * 67
 * 40
 * 33
 */

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $n);

$grades = [];

for ($gradesI = 0; $gradesI < $n; $gradesI++) {
    fscanf($handle, "%d", $grades[]);
}

function solve($grades)
{
    $results = [];

    for ($i = 0; $i <= sizeof($grades) - 1; $i++) {
        if ($grades[$i] < 38) {
            $results[] = $grades[$i];
            continue;
        }

        $gradeRounded = 5 * round($grades[$i] / 5);

        if ($gradeRounded > $grades[$i] && ($gradeRounded - $grades[$i]) < 3) {
            $results[] = $gradeRounded;
            continue;
        }

        $results[] = $grades[$i];
    }

    return $results;
}

$result = solve($grades);

echo implode("\n", $result) . "\n";
