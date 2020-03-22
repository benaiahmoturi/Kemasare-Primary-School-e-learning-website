<html>
<head> <title>PHP</title>

</head>

<body>
Fill in the Form Below:<br>
<form action="site.php" method="post">
Name: <input type="text" name="name" placeholder="Enter your name"><br><br>
Email: <input type="email" name="email" placeholder="Enter email">
Information Tech: <input type="checkbox" name="department[]" value="IT"><br>
Computer Science: <input type="checkbox" name="department[]" value="CS"><br>
Business Dept: <input type="checkbox" name="department[]" value="BS"><br>
                <input type="text" name="student_grade">
<input type="submit">
</form>
<?php
echo $_POST["name"];
echo $_POST["email"];
$department= $_POST["department"];
echo $department[0];
$grades=array("Jim"=>"A", "Ben"=>"B", "Oscar"=>"C");
echo $grades[$_POST["student_grade"]];

$boy="Benaiah";

function sayHi($boy){
  echo "Hi $boy";
}

sayHi($boy);
 ?>
</body>
</html>
