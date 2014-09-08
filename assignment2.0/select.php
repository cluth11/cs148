<!DOCTYPE html>
<html lang="en">
<head>
<title>CS 148 Tables</title>
<meta charset="utf-8">
<meta name="author" content="Bob">
<meta name="description" content="index page for assignment two">


<!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
<![endif]-->
    
</head>


<?php

$phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
$path_parts = pathinfo($phpSelf);
print '<body id="' . $path_parts['filename'] . '">';

?>

<p>Assignment 2.0</p>

<p>q01. <a href="q01.php">SQL:</a> SELECT * FROM tblTeachers</p>

<p>q02. <a href="">SQL:</a> SELECT * FROM tblCourses</p>

<p>q03. <a href="q">SQL:</a> SELECT * FROM tblSections</p>

</body>
</html>
