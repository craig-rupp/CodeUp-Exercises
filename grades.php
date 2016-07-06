<?php

function name(){
    do {
        fwrite(STDOUT, "What's your name ");
        $name = trim(fgets(STDIN));
    } while($name == '');
    return $name;
}
function addGrade($grades){
    fwrite(STDOUT, "What's your grade ");
    $grade = (int)(fgets(STDIN));
    array_push($grades, $grade);
    return $grades;
}
function addSubjects($subjects){
    fwrite(STDOUT, "Which subject did you receive this grade ");
    $subject = trim(fgets(STDIN));
    array_push($subjects, $subject);
    return $subjects;
}
function calculateAverage($grades, $subjects){
    $average = array_sum($grades) / count($subjects);
    return $average;
}
function start(){
    $subjects = [];
    $grades = [];
    $average;
    do {
        $grades = addGrade($grades);
        $subjects = addSubjects($subjects);
        fwrite(STDOUT, "Would you like to add another grade or subject \\ PRESS Y if yes ");
        $continue = trim(fgets(STDIN));
    } while ($continue == 'y');
    return calculateAverage($grades, $subjects);
}
$awesomeGrade = 80;
$name = name();
$average = start();

if ($average > $awesomeGrade) {
    fwrite(STDOUT, "You're Awesome " . $name . " your average was " . $average . "\n");
} else {
    fwrite(STDOUT, "You need more practice. Your average was " . $average . "\n");
}


// (function () {
//     'use strict';
//     // Variables
//     var name, grade, average;
//     // Input
//     student.name = prompt("What's your name");
//     do {
//         name = prompt("What's the name of the subject?");
//         grade = Number(prompt("What's your grade?"));
//         student.addSubject(name, grade);
//     } while (confirm('Do you want to add another grade?'));
//     // Process
//     average = student.calculateAverage().toFixed(2);
//     // Output
//     if (student.isAwesome()) {
//         alert(student.name + " you're Awesome!!!! Your average was " + average);
//     } else {
//         alert(student.name + " you need more practice. Your average was " + average);
//     }
// })();

