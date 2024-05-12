<?php

# Task#1
# SQL Syntax
# SELECT * FROM students;
$student = DB::table('student')->get();

# Task#2
# SQL Syntax
# SELECT * FROM students WHERE grade = '10';
$student = DB::table('student')->where('grade', '10')->get();

# Task#3
# SQL Syntax
# SELECT * FROM students WHERE age BETWEEN 15 AND 18;
$student = DB::table('student')->whereBetween('age', [15, 18])->get();

# Task#4
# SQL Syntax
# SELECT * FROM students WHERE city = 'Manila';
$student = DB::table('student')->where('city', 'Manila')->get();

# Task#5
# SQL Syntax
# SELECT * FROM students ORDER BY age DESC;
$student = DB::table('student')->orderBy('age', 'desc')->get();

# Task#6
# SQL Syntax
# SELECT students.*, teachers.name AS teacher_name
# FROM students 
# LEFT JOIN teachers ON students.teacher_id = teachers.id;
$student = DB::table('student')
    ->leftJoin('teachers', 'student.teacher_id', '=', 'teachers.id')
    ->select ('student.*', 'teachers.name AS teacher_name')->get();

# Task#7
# SQL Syntax
# SELECT teachers.*, COUNT(students.id) AS student_count
# FROM teachers
# LEFT JOIN students ON teachers.id = students.teacher_id
# GROUP BY teachers.id;
$teachers = DB::table('teachers')->select('teachers.*', DB::raw('COUNT(students.id) AS student_count'))
    ->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
    ->groupBy('teachers.id')
    ->get();

# Task#8
# SQL Syntax
# SELECT students.*, subjects.name AS subject_name 
# FROM students 
# INNER JOIN subjects ON students.subject_id = subjects.id;
$students = DB::table('students')
    ->select('students.*', 'subjects.name AS subject_name')
    ->join('subjects', 'students.subject_id', '=', 'subjects.id')
    ->get();

# Task#9
# SELECT students.*, AVG(scores.score) AS average_score 
# FROM students 
# LEFT JOIN scores ON students.id = scores.student_id 
# GROUP BY students.id;
$students = DB::table('students')
    ->select('students.*', DB::raw('AVG(scores.score) AS average_score'))
    ->leftJoin('scores', 'students.id', '=', 'scores.student_id')
    ->groupBy('students.id')
    ->get();

# Task#10
# SELECT teachers.*, COUNT(students.id) AS student_count 
# FROM teachers 
# LEFT JOIN students ON teachers.id = students.teacher_id 
# GROUP BY teachers.id 
# ORDER BY student_count DESC 
# LIMIT 5;
$teachers = DB::table('teachers')
    ->select('teachers.*', DB::raw('COUNT(students.id) AS student_count'))
    ->leftJoin('students', 'teachers.id', '=', 'students.teacher_id')
    ->groupBy('teachers.id')
    ->orderBy('student_count', 'DESC')
    ->limit(5)
    ->get();

?>