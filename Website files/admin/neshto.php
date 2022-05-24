<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/admin_panel.css">
<script type="text/javascript">
function checknews(id){
 if (confirm("Сигурни ли сте, че желаете да изтирете тази новина?"))
  this.location.href = "?id="+$id;
}</script>

<script type="text/javascript">
function checkqueries(id){
 if (confirm("Сигурни ли сте, че желаете да изтирете тази заявка?"))
  this.location.href = "?id="+$id;
}</script>
</head>
<body style="margin-top:30px;">
<?php
if (isset($_GET['act'])) $linkchoice=$_GET['act']; 
else $linkchoice=''; 
switch ($linkchoice)
{
case 'newsadd': AddNews(); break;
case 'newsaddcomplete': AddNewsInfo(); break;
case 'newsedit': EditNews(); break;
case 'newseditcomplete': EditNewsInfo(); break;
case 'newssave' : SaveNews(); break;
case 'newsdelete': DeleteNews(); break;
case 'newsdeletecomplete': DeleteNewsInfo(); break;
case 'queries': ShowQuery(); break;
case 'queryedit': ShowQueryInfo(); break;
case 'queryeditcomplete': EditQueryInfo(); break;
case 'querysave': SaveQueryInfo(); break;
case 'querydelete': DeleteQuery(); break;
case 'querydeletecomplete': DeleteQueryInfo(); break;
case 'logged': Logged(); break;
case 'news': NewsMenu(); break;
default:{
$con=mysqli_connect("127.0.0.1", "root", "", "db_database") or die (mysqli_error($con));
echo'<div id="wrapper"></br></br><p_admin_panel_header>АДМИНИСТРАТОРСКИ ПАНЕЛ</p_admin_panel_header></br>
    	<div id="login-box"><br />
    	<form action="?login" method="post">
            <font style="color: #003366;">&nbsp&nbspПотребител : </font> <input name="username" class="login" type="text" value="" style="width:20%; margin-right:5%;">
			<font style="color: #003366;">Парола : </font> <input name="password" class="login" type="password" value="" style="width:20%;">
			<input name="login" type="submit" value="Влез" style="margin-left:5%;">
        </form>
        </div>
	</div>';
if(isset($_POST['login'])){
$con= mysqli_connect("127.0.0.1", "root", "", "db_database")or die("Cannot connect MySQL server!"); 
$username=$_POST['username']; 
$password=$_POST['password']; 
$username = stripslashes($username);
$password = stripslashes($password);
$sha1_password = sha1($password);
$query=mysqli_query($con, "SELECT username, sha1_password FROM users WHERE username='$username' and sha1_password='$sha1_password'") or die (mysqli_error($con));
$count=mysqli_num_rows($query);
if($count==1){
header("location:neshto.php?act=logged");
}
else {
echo "<p class='bad'>Грешно потребителско име или парола!</p>";
}}}}

function AddNews(){
$con=mysqli_connect("127.0.0.1", "root", "", "db_database") or die (mysqli_error($con));
NewsMenu();
echo '<form action="upload.php" method="post"
enctype="multipart/form-data" style="margin-top:20px;" target="_blank">
<label for="file">Прикачване на снимка:</label>
<input type="file" name="file" id="file">
<input type="submit" name="submit" value="Качи снимката" style="margin-left:0%; background:transparent;">
</form>
<form action="?act=newsaddcomplete" method="post">
<label>Име на снимката</label><input type="text" name="picture" placeholder="снимка.jpg"><br />
<label>Заглавие</label><textarea rows="1" cols="50" type="text" name="header"></textarea><br />
<label>Основен Текст</label><textarea rows="10" cols="50" type="text" name="text"></textarea><br />
<label>Автор</label><input type="text" name="author"><br />
<input type="submit" value="Добави"></form>';
mysqli_close($con);}

function AddNewsInfo(){
$con=mysqli_connect("127.0.0.1", "root", "", "db_database") or die (mysqli_error($con));
NewsMenu();
echo '<p class="good">Новината е добавена успешно!</p>';
echo '<form action="upload.php" method="post"
enctype="multipart/form-data" style="margin-top:20px;" target="_blank">
<label for="file">Прикачване на снимка:</label>
<input type="file" name="file" id="file">
<input type="submit" name="submit" value="Качи снимката" style="margin-left:0%; background:transparent;">
</form>
<form action="#" method="post">
<label>Име на снимката</label><input type="text" name="picture" value="'.$_POST['picture'].'"><br />
<label>Заглавие</label><textarea rows="1" cols="50" type="text" name="header">'.$_POST['header'].'</textarea><br />
<label>Основен Текст</label><textarea rows="10" cols="50" type="text" name="text">'.$_POST['text'].'</textarea><br />
<label>Автор</label><input type="text" name="author" value="'.$_POST['author'].'"><br />
<input type="submit" value="Добави"></form>';
$header=$_POST['header'];
$text=$_POST['text'];
$author=$_POST['author'];
$picture=$_POST['picture'];
$date = mktime();
mysqli_query($con, "INSERT INTO news (header, text, author, picture, date) VALUES ('$header', '$text', '$author', '$picture', '$date');");
mysqli_close($con);}

function EditNews(){
$con=mysqli_connect("127.0.0.1", "root", "", "db_database") or die (mysqli_error($con));
NewsMenu();
echo'<form action="?act=newseditcomplete" method="post"><select name="editnews">';
$news_result=mysqli_query ($con, 'SELECT * FROM news ORDER BY id DESC');
while ($news_output = mysqli_fetch_array($news_result))
echo '<option value="'.$news_output['id'].'">'.$news_output['header'].'</option>';
echo '</select><input type="submit" value="Редактирай"></form>';}

function EditNewsInfo(){
$con=mysqli_connect("127.0.0.1", "root", "", "db_database") or die (mysqli_error($con));
NewsMenu();
$id=$_POST['editnews'];
$news_result=mysqli_query ($con, "SELECT * FROM news WHERE id='$id' LIMIT 1;");
while ($news_output = mysqli_fetch_array($news_result))
echo '<form action="upload.php" method="post"
enctype="multipart/form-data" style="margin-top:20px;" target="_blank">
<label for="file">Прикачване на снимка:</label>
<input type="file" name="file" id="file">
<input type="submit" name="submit" value="Качи снимката" style="margin-left:0%; background:transparent;">
</form>
<form action="?act=newssave" method="post">
<input type="text" name="id" value="'.$news_output['id'].'" style="display: none;">
<label>Име на снимката</label><input type="text" name="picture" value="'.$news_output['picture'].'"><br />
<label>Заглавие</label><textarea rows="1" cols="50" type="text" name="header">'.$news_output['header'].'</textarea><br />
<label>Основен Текст</label><textarea rows="10" cols="50" type="text" name="text">'.$news_output['text'].'</textarea><br />
<label>Автор</label><input type="text" name="author" value="'.$news_output['author'].'"><br />
<input type="submit" value="Редактирай"></form>';
mysqli_close($con);}

function SaveNews(){
$con=mysqli_connect("127.0.0.1", "root", "", "db_database") or die (mysqli_error($con));
NewsMenu();
echo '<p class="good">Новината е редактирана успешно!</p>';
echo '<form action="upload.php" method="post"
enctype="multipart/form-data" style="margin-top:20px;" target="_blank">
<label for="file">Прикачване на снимка:</label>
<input type="file" name="file" id="file">
<input type="submit" name="submit" value="Качи снимката" style="margin-left:0%; background:transparent;">
</form>
<form action="#" method="post">
<input type="text" name="id" value="'.$_POST['id'].'" style="display: none;"><br />
<label>Име на снимката</label><input type="text" name="picture" value="'.$_POST['picture'].'"><br />
<label>Заглавие</label><textarea rows="1" cols="50" type="text" name="header">'.$_POST['header'].'</textarea><br />
<label>Основен Текст</label><textarea rows="10" cols="50" type="text" name="text">'.$_POST['text'].'</textarea><br />
<label>Автор</label><input type="text" name="author" value="'.$_POST['author'].'"><br />
<input type="submit" value="Редактирай"></form>';
$id=$_POST['id'];
$header=$_POST['header'];
$text=$_POST['text'];
$picture=$_POST['picture'];
$author=$_POST['author'];
mysqli_query($con, "UPDATE news SET header='$header', text='$text', picture='$picture', author='$author' WHERE id='$id';");
mysqli_close($con);}

function DeleteNews(){
$con=mysqli_connect("127.0.0.1", "root", "", "db_database") or die (mysqli_error($con));
NewsMenu();
echo'<form action="?act=newsdeletecomplete" method="post"><select name="deletenews">';
$news_result=mysqli_query ($con, 'SELECT id, header FROM news ORDER BY id DESC');
while ($news_output = mysqli_fetch_array($news_result))
echo '<option value="'.$news_output['id'].'">'.$news_output['header'].'</option>';
echo '</select><input type="submit" value="Изтрий" onclick="checknews('.$output['id'].'); return false;"></form>';}

function DeleteNewsInfo(){
$con=mysqli_connect("127.0.0.1", "root", "", "db_database") or die (mysqli_error($con));
NewsMenu();
echo '<p class="good">Новината е изтрита успешно!</p>';
$id=$_POST['deletenews'];
mysqli_query($con, "DELETE FROM news WHERE id='$id';");
mysqli_close($con);
}

function ShowQuery(){
$con=mysqli_connect("127.0.0.1", "root", "", "db_database") or die (mysqli_error($con));
QueryMenu();
echo '<table class="Query"><tr class="top">
<td>Име</td>
<td>Презиме</td>
<td>Фамилия</td>
<td>E-mail</td>
<td>Телефон</td>
<td>Образование</td>
<td>Град</td>
<td>Специалност</td></tr>';
$query_result=mysqli_query ($con, 'SELECT * FROM queries ORDER BY name');
while ($query_output = mysqli_fetch_array($query_result))
echo '<tr>
<td>'.$query_output['name'].'</td>
<td>'.$query_output['secondname'].'</td>
<td>'.$query_output['lastname'].'</td>
<td>'.$query_output['email'].'</td>
<td>'.$query_output['phone'].'</td>
<td>'.$query_output['education'].'</td>
<td>'.$query_output['city'].'</td>
<td>'.$query_output['specialty'].'</td></tr>';
echo '</table>';
}

function ShowQueryInfo(){
$con=mysqli_connect("127.0.0.1", "root", "", "db_database") or die (mysqli_error($con));
QueryMenu();
echo'<form action="?act=queryeditcomplete" method="post"><select name="editquery">';
$query_result=mysqli_query ($con, 'SELECT * FROM queries ORDER BY name');
while ($query_output = mysqli_fetch_array($query_result))
echo '<option value="'.$query_output['id'].'">'.$query_output['name'].' '.$query_output['secondname'].' '.$query_output['lastname'].'</option>';
echo '</select><input type="submit" value="Редактирай"></form>';}

function EditQueryInfo(){
$con=mysqli_connect("127.0.0.1", "root", "", "db_database") or die (mysqli_error($con));
QueryMenu();
$id=$_POST['editquery'];
$query_result=mysqli_query ($con, "SELECT * FROM queries WHERE id='$id' LIMIT 1;");
while ($query_output = mysqli_fetch_array($query_result))
echo '
<form action="?act=querysave" method="post">
<input type="text" name="id" value="'.$query_output['id'].'" style="display: none;">
<label>Име</label><input type="text" name="name" value="'.$query_output['name'].'"><br />
<label>Презиме</label><input type="text" name="secondname" value="'.$query_output['secondname'].'"><br />
<label>Фамилия</label><input type="text" name="lastname" value="'.$query_output['lastname'].'"><br />
<label>Е-mail</label><input type="text" name="email" value="'.$query_output['email'].'"><br />
<label>Телефон</label><input type="text" name="phone" value="'.$query_output['phone'].'"><br />
<label>Образование</label><input type="text" name="education" value="'.$query_output['education'].'"><br />
<label>Град</label><input type="text" name="city" value="'.$query_output['city'].'"><br />
<label>Специалност</label><input type="text" name="specialty" value="'.$query_output['specialty'].'"><br />
<input type="submit" value="Редактирай"></form>';
mysqli_close($con);}

function SaveQueryInfo(){
$con=mysqli_connect("127.0.0.1", "root", "", "db_database") or die (mysqli_error($con));
QueryMenu();
echo '<p class="good">Заявката е редактирана успешно!</p>';
echo '<form action="?act=#" method="post">
<input type="text" name="id" value="'.$_POST['id'].'" style="display: none;">
<label>Име</label><input type="text" name="name" value="'.$_POST['name'].'"><br />
<label>Презиме</label><input type="text" name="name" value="'.$_POST['secondname'].'"><br />
<label>Фамилия</label><input type="text" name="lastname" value="'.$_POST['lastname'].'"><br />
<label>Е-mail</label><input type="text" name="email" value="'.$_POST['email'].'"><br />
<label>Телефон</label><input type="text" name="phone" value="'.$_POST['phone'].'"><br />
<label>Образование</label><input type="text" name="education" value="'.$_POST['education'].'"><br />
<label>Град</label><input type="text" name="city" value="'.$_POST['city'].'"><br />
<label>Специалност</label><input type="text" name="specialty" value="'.$_POST['specialty'].'"><br />
<input type="submit" value="Редактирай"></form>';
$id=$_POST['id'];
$name=$_POST['name'];
$secondname=$_POST['secondname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$education=$_POST['education'];
$city=$_POST['city'];
$specialty=$_POST['specialty'];
mysqli_query($con, "UPDATE queries SET name='$name', secondname='$secondname', lastname='$lastname', email='$email', phone='$phone', education='$education', city='$city', specialty='$specialty' WHERE id='$id';");
mysqli_close($con);}

function DeleteQuery(){
$con=mysqli_connect("127.0.0.1", "root", "", "db_database") or die (mysqli_error($con));
QueryMenu();
echo'<form action="?act=querydeletecomplete" method="post"><select name="deletequery">';
$query_result=mysqli_query ($con, 'SELECT * FROM queries ORDER BY name');
while ($query_output = mysqli_fetch_array($query_result))
echo '<option value="'.$query_output['id'].'">'.$query_output['name'].' '.$query_output['secondname'].' '.$query_output['lastname'].'</option>';
echo '</select><input type="submit" value="Изтрий" onclick="checkqueries('.$output['id'].'); return false;"></form>';}

function DeleteQueryInfo(){
$con=mysqli_connect("127.0.0.1", "root", "", "db_database") or die (mysqli_error($con));
QueryMenu();
echo '<p class="good">Заявката е изтрита успешно!</p>';
$id=$_POST['deletequery'];
mysqli_query($con, "DELETE FROM queries WHERE id='$id';");
mysqli_close($con);
}

function Logged(){
echo '
</br></br>
<p_admin_panel_header>ДОБРЕ ДОШЛИ В АДМИНИСТРАТОРСКИЯ ПАНЕЛ</p_admin_panel_header></br>
<p style="text-align:center;">
<a href="?act=news">Премини към админ панел - новини</a>
<a href="?act=queries">Премини към админ панел - заявки</a></p></br>';}

function QueryMenu(){
echo '
<p style="text-align:right;">
<a href="?act=news">Премини към админ панел - новини</a></p></br>
<p_admin_panel_header>Администраторски панел - ЗАЯВКИ</p_admin_panel_header>
<p style="text-align:center;"><a href="?act=queries">Покажи</a>
<a href="?act=queryedit">Редактирай</a>
<a href="?act=querydelete">Изтрий</a></p></br></p>
';}

function NewsMenu(){
echo '
<p style="text-align:right;">
<a href="?act=queries">Премини към админ панел - заявки</a></p></br>
<p_admin_panel_header>Администраторски панел - НОВИНИ</p_admin_panel_header>
<p style="text-align:center;"><a href="?act=newsadd">Добави</a>
<a href="?act=newsedit">Редактирай</a>
<a href="?act=newsdelete">Изтрий</a></p></br></p>';
}

?>
</body>
</html>

