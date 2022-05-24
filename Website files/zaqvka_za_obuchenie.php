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
	  <div id="top_border_mainframe">Заявка за обучение</div>
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
<label>Какво е вашето образование?</label><select name="education">';
$edu_result=mysqli_query ($con, 'SELECT * FROM education ORDER BY id');
while ($edu_output = mysqli_fetch_array($edu_result))
echo '<option value="'.$edu_output['education'].'">'.$edu_output['education'].'</option>';
echo '</select><br />
<label>За кой град кандидатствате?</label><select name="city">';
$city_result=mysqli_query ($con, 'SELECT * FROM city ORDER BY id');
while ($city_output = mysqli_fetch_array($city_result))
echo '<option value="'.$city_output['city'].'">'.$city_output['city'].'</option>';
echo '</select><br />
<label>За коя специалност кандидатствате?</label><select name="specialty">';
$spec_result=mysqli_query ($con, 'SELECT * FROM specialty ORDER BY id');
while ($spec_output = mysqli_fetch_array($spec_result))
echo '<option value="'.$spec_output	['specialty'].'">'.$spec_output['specialty'].'</option>';
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
    if(empty($_POST['name'])) echo '<p class="bad">Не сте въвели лично име! Щрактнете <a id="back_button_zaqvka"href="zaqvka_za_obuchenie.php">тук</a> за да се върнете обратно към заявката!</p>';
    elseif(empty($_POST['secondname'])) echo '<p class="bad">Не сте въвели презиме! Щрактнете <a id="back_button_zaqvka"href="zaqvka_za_obuchenie.php">тук</a> за да се върнете обратно към заявката!</p>';
	elseif(empty($_POST['lastname'])) echo '<p class="bad">Не сте въвели фамилия! Щрактнете <a id="back_button_zaqvka"href="zaqvka_za_obuchenie.php">тук</a> за да се върнете обратно към заявката!</p>';   
    elseif(empty($_POST['email'])) echo '<p class="bad">Не сте въвели email! Щрактнете <a id="back_button_zaqvka"href="zaqvka_za_obuchenie.php">тук</a> за да се върнете обратно към заявката!</p>';
	elseif(empty($_POST['phone'])) echo '<p class="bad">Не сте въвели телефонен номер! Щрактнете <a id="back_button_zaqvka"href="zaqvka_za_obuchenie.php">тук</a> за да се върнете обратно към заявката!</p>';
	elseif(empty($_POST['education'])) echo '<p class="bad">Не сте избрали образование! Щрактнете <a id="back_button_zaqvka"href="zaqvka_za_obuchenie.php">тук</a> за да се върнете обратно към заявката!</p>';
	elseif(empty($_POST['city'])) echo '<p class="bad">Не сте избрали град за който кандидатствате! Щрактнете <a id="back_button_zaqvka"href="zaqvka_za_obuchenie.php">тук</a> за да се върнете обратно към заявката!</p>';
	elseif(empty($_POST['specialty'])) echo '<p class="bad">Въведете специалност!</p><a href="zaqvka_za_obuchenie.php">Назад</a>';
else {
$con=mysqli_connect("127.0.0.1","root","","db_database");
$insert="INSERT INTO queries (name, secondname, lastname, email, phone, education, city, specialty) VALUES ('$name', '$secondname', '$lastname', '$email', '$phone', '$education', '$city', '$specialty');";
mysqli_query($con, $insert);
echo '<p style="display: block; padding: 10px; border: 1px solid green; font-weight: bold;">Вашата заявка е добавена!</p><br />';
mysqli_close($con);}}

?></div>
<?php include("constants/copy.php");?>
</section>
</body>
</html>