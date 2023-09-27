

<?php

    $studentGrades = [
        ['Math' => 85, 'English' => 92, 'Science' => 78],
        ['Math' => 88, 'English' => 95, 'Science' => 90],
        ['Math' => 75, 'English' => 80, 'Science' => 88]
    ];

    function calculateAverageGrades($gradeArray){
        foreach($gradeArray as $key=>$value){
            $total = array_sum($value);
            $average = $total / count($value);
            echo " Student " . ($key + 1) . " - Average Grade: " . $average . "</br>";
        }
    };

    calculateAverageGrades($studentGrades);


?>