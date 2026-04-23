<?php

declare(strict_types=1);  // to make it strong typing 
$student = array(
    "std1" => array("name" => "Raghad", "grade" => 90, "age" => "21"),
    "std2" => array("name" => "Ghada", "grade" => 85, "age" => "25"),
    "std3" => array("name" => "Afnan", "grade" => 71, "age" => "23"),
    "std4" => array("name" => "Iyad", "grade" => 55, "age" => "30"),
    "std5" => array("name" => "mohammed", "grade" => 50, "age" => "27")
);
$grade = array_column($student, "grade");  // مثود بترجع array من Association array 
$maxGrade = max($grade);
$minGrade = min($grade);
$avgGrade = array_sum($grade) / count($grade);

?>



<!-- Q1 -->
<?php
foreach ($student as $key => $value) {
    $currentGrade =  $value["grade"];
    $state = calculateStatus($currentGrade);
    echo "Student " . $value["name"] . " : "  . $state . "<br>";
}

function calculateStatus(int $grade)
{
    switch ($grade) {
        case $grade >= 90:
            return "Excellent";
            break;
        case $grade >= 80:
            return "very good";
            break;
        case $grade >= 70:
            return "good";
            break;
        case $grade >= 60:
            return "accepted";
            break;
        case $grade < 60:
            return "F";
            break;
    }
}

// Q 2
function successful(array $grade)
{
    $count = 0;
    foreach ($grade as $val) {
        if ($val >= 60)
            $count++;
    }
    return $count;
}

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" cellspacing="0" cellpadding="8">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Grade</th>
                <th>State</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($student as $ky => $value) {   ?>
                <tr>
                    <td> <?php echo $value["name"]; ?></td>
                    <td> <?php echo $value["age"]; ?></td>
                    <td> <?php echo $value["grade"]; ?></td>
                    <td> <?php echo calculateStatus($value["grade"]) ?></td>

                </tr>
            <?php
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Max Grade</th>
                <td><?php echo $maxGrade ?></td>
            </tr>

            <tr>
                <th colspan="3">Max Grade</th>
                <td><?php echo $minGrade ?></td>
            </tr>

            <tr>
                <th colspan="3">AVG Grade</th>
                <td><?php echo $avgGrade ?></td>
            </tr>

            <tr>
                <th colspan="3">successful students</th>
                <td><?php echo successful($grade); ?></td>
            </tr>
        </tfoot>

    </table>

</body>

</html>