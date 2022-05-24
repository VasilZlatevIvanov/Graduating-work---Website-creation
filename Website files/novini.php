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
	<div id="top_border_mainframe">Новини</div>
	
	<?php 
$con= mysqli_connect("127.0.0.1", "root", "", "db_database") or die ("Cannot connect to MySQL Server!");
$result=mysqli_query ($con, 'SELECT * FROM news ORDER BY id DESC');
while ($output = mysqli_fetch_array($result))
echo '
<div id="novini"> 
			<font id="novini_zaglavie">'.$output['header'].'</font>
				<div style="height: auto; margin-top:8px;">
	<div style="position:relative; overflow:hidden;float:left;"><a href="img/novini/'.$output['picture'].'" target="_blank"><img src="img/novini/'.$output['picture'].'" style="max-width: 350px; max-height: 350px; float: left; margin-right: 5px; padding: 10px; padding-top:0px; clear: left; position:relative; display:block;"></a></div>
			<div id="text_novini" style="color:#003366; margin-left:10px; font-size:14px;positon:relative;">'.$output['text'].'</div>
				</div>
		<div style="position:relative; overflow:hidden;clear:both;"><p id="novini_avtor">Автор: '.$output['author'].' &nbsp&nbsp|&nbsp&nbsp Публикувано на: '. date('H:i d.m.Y\г.', $output['date']).'</p></div>
</div>';
mysqli_close($con);
?>
	</div>
<?php include("constants/copy.php");?>
</section>
</body>
</html>
