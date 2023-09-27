
<?php

    $grades = [85, 92, 78, 88, 95];

    function gradedescending($gradeArray){
        rsort($gradeArray);
        return $gradeArray;
    };

    $sortedGrade = gradedescending($grades);

    print_r($sortedGrade);

?>