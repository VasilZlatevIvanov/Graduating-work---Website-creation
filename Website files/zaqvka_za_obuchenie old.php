<!DOCTYPE html>
<html>
<head>
<?php include("constants/head.php");?>
</head>
<body>
<?php include("constants/header.php");?>
<section id="wrapper">
<?php include("constants/menu.php");?>
	<div id="mainframe">
	  <div id="top_border_mainframe">Заявка за обучение</div></br></br>
	  <?php
if (isset($_GET['action'])) $linkchoice=$_GET['action']; 
else $linkchoice=''; 
switch ($linkchoice)
{
case 'add': Add(); break;
default:{
$con=mysqli_connect("127.0.0.1","root","","db_database") or die (mysqli_error($con));
echo '<form action="?action=add" method="post">
<label>Име</label><input type="text" name="name"><br />
<label>Презиме</label><input type="text" name="secondname"><br />
<label>Фамилия</label><input type="text" name="lastname"><br />
<label>E-mail</label><input type="email" name="email" placeholder="exmaple@example.com"><br />
<label>Телефон</label><input type="text" name="phone" placeholder=""><br />
<label>Вашето образование</label><select name="education">';
$edu_result=mysqli_query ($con, 'SELECT * FROM education ORDER BY id');
while ($edu_output = mysqli_fetch_array($edu_result))
echo '<option value="'.$edu_output['education'].'">'.$edu_output['education'].'</option>';
echo '</select><br />
<label>За кой град кандидатствате</label><select name="city">';
$city_result=mysqli_query ($con, 'SELECT * FROM city ORDER BY id');
while ($city_output = mysqli_fetch_array($city_result))
echo '<option value="'.$edu_output['city'].'">'.$city_output['city'].'</option>';
echo '</select><br />
<label>За коя специалност кандидатствате</label><select name="specialty">';
$spec_result=mysqli_query ($con, 'SELECT * FROM specialty ORDER BY id');
while ($spec_output = mysqli_fetch_array($spec_result))
echo '<option value="'.$edu_output['specialty'].'">'.$spec_output['specialty'].'</option>';
echo '</select><br />
<input type="submit" value="Добави"></form>';}}


function Add(){
$name = $_POST['name'];
$secondname = $_POST['secondname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$education = $_POST['education'];
$city = $_POST['city'];
$specialty = $_POST['specialty'];

$con=mysqli_connect("127.0.0.1","root","","db_database");
$insert="INSERT INTO queries (name, secondname, lastname, email, phone, education, city, specialty) VALUES ('$name', '$secondname', '$lastname', '$email', '$phone', '$education', '$city', '$specialty');";
mysqli_query($con, $insert);
echo '<p style="display: block; padding: 10px; border: 1px solid green; font-weight: bold;">Вашата заявка е добавена!</p><br />';
echo '<form action="?action=add" method="post">
<label>Име</label><input type="text" name="name" value="'.$name.'"><br />
<label>Презиме</label><input type="text" name="secondname" value="'.$secondname.'"><br />
<label>Фамилия</label><input type="text" name="lastname" value="'.$lastname.'"><br />
<label>E-mail</label><input type="email" name="email" value="'.$email.'"><br />
<label>Телефон</label><input type="text" name="phone" value="'.$phone.'"><br />
<label>Образование</label><select name="education"><option value="'.$education.'">'.$education.'</option></select><br />
<label>Град</label><select name="city"><option value="'.$city.'">'.$city.'</option></select><br />
<label>Специалност</label><select name="specialty"><option value="'.$specialty.'">'.$specialty.'</option></select><br />
<input type="submit" value="Добави"></form>';
mysqli_close($con);}

?> 
	</div>
<?php include("constants/copy.php");?>
</section>
</body>
</html>