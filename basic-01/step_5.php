<?php
    $course_name = "php course";
    $enrolled_students = 40;
    $price = 104.5;
    $on_discount = true;

    echo "Course title: " . $course_name . "<br>";
    echo "Enrolled Students: " . $enrolled_students . "<br>";
    echo "Course price: " . $price . "$ USD<br>";
    echo "Course on discount: " . ($on_discount ? "Yes" : "No") . "<br>";
?>