<?php
session_start();
require_once "pdo.php";

if ( isset($_POST['student_name']) && isset($_POST['current_marks'])
     && isset($_POST['previous_marks']) && isset($_POST['difference']) && isset($_POST['teacher_comment'])) {
    $sql = "INSERT INTO students (student_name, current_marks, previous_marks, difference, teacher_comment)
              VALUES (:student_name, :current_marks, :previous_marks, :difference, :teacher_comment)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':student_name' => $_POST['student_name'],
        ':current_marks' => $_POST['current_marks'],
        ':previous_marks' => $_POST['previous_marks'],
        ':difference' => $_POST['difference'],
        ':teacher_comment' => $_POST['teacher_comment']));
}

if ( isset($_POST['delete']) && isset($_POST['student_id']) ) {
    $sql = "DELETE FROM students WHERE student_id = :zip";

    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':zip' => $_POST['student_id']));
}

$stmt = $pdo->query("SELECT student_name, current_marks, previous_marks, difference, teacher_comment, student_id FROM students");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
