<?php

require_once __DIR__ . '/Observer/Classroom.php';
require_once __DIR__ . '/Observer/EmailStudent.php';
require_once __DIR__ . '/Observer/SMSStudent.php';

require_once __DIR__ . '/Strategy/GradeCalculator.php';
require_once __DIR__ . '/Strategy/StrictGrading.php';
require_once __DIR__ . '/Strategy/LenientGrading.php';


require_once __DIR__ . '/Command/AssignmentBoard.php';
require_once __DIR__ . '/Command/TeacherRemote.php';
require_once __DIR__ . '/Command/PostAssignment.php';
require_once __DIR__ . '/Command/DeleteAssignment.php';

echo "=== 👀 OBSERVER ===\n";
// =============================
$classroom = new Classroom();

$rahul = new EmailStudent("Rahul");
$priya = new SMSStudent("Priya");

$classroom->attach($rahul);
$classroom->attach($priya);
$classroom->detach($priya);

$classroom->postAssignment("PHP Design Patterns");
$classroom->postAssignment("SOLID Principles");


// =============================
echo "\n=== 🎯 STRATEGY ===\n";
// =============================
$calculator = new GradeCalculator();

echo "\n-- Strict Grading --\n";
$calculator->setStrategy(new StrictGrading());
$calculator->calculate(85);
$calculator->calculate(65);
$calculator->calculate(45);

echo "\n-- Lenient Grading --\n";
$calculator->setStrategy(new LenientGrading());
$calculator->calculate(85);
$calculator->calculate(65);
$calculator->calculate(45);


// =============================
echo "\n=== ⚡ COMMAND ===\n";
// =============================
$board   = new AssignmentBoard();
$teacher = new TeacherRemote();

$teacher->executeCommand(new PostAssignment($board, "Arrays in PHP"));
$teacher->executeCommand(new PostAssignment($board, "OOP Basics"));
$teacher->executeCommand(new DeleteAssignment($board, "Arrays in PHP"));

echo "\n-- Undo Actions --\n";
$teacher->undo();
$teacher->undo();