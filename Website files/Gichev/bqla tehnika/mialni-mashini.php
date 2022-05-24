
<html>
<head>
<title>Миялни машини</title>
<meta content="text/html; charset=UTF-8"
 http-equiv="content-type">
 <link rel="stylesheet" type="text/css" href="../css/main.css">
<link rel="stylesheet" type="text/css" href="../css/menu.css">
<script src="../js/jquery-1.2.6.min.js"></script>

<script type="text/javascript">
  function unhide(divID) {
    var item = document.getElementById(divID);
    if (item) {
      item.className=(item.className=='hidden')?'unhidden':'hidden';
    }
  }
</script>

<script>
function toggle(obj) {
    var el = document.getElementById(obj);
    if ( el.style.display != 'block' ) el.style.display = 'block';
    else el.style.display = 'none';
}
</script>

</head>
<body>
<div id="header">
	<!-- Zaglavie -->
	  <a href="./index.php"><img src="../img/header.png" align="center" alt="KRASIO”" width="996" height="284"></a>
</div>
<section id="wrapper">


<div id="menu_div">
	<a id="menu" href='../index.php'><h3>Начало</h3></a>
	<a id="menu" href="javascript:unhide('bqla-tehnika'); javascript:toggle('bqla-tehnika')"><h3>Бяла техника</h3></a>
		<div id="bqla-tehnika" class="unhidden">
		<ul>
			<li><a id="sub-menu" href='hladilnici.php'>Хладилници</a></li>
			<li><a id="sub-menu" href='peralni.php'>Перални</a></li>
			<li><a id="active-menu" href='mialni-mashini.php' style="color:blue; background:transparent;">Миялни машини</a></li>
			<li><a id="sub-menu" href='sushilni.php'>Сушилни</a></li>
			<li><a id="sub-menu" href='frizeri.php'>Фризери</a></li>
			<li><a id="sub-menu" href='peralni-sushilni.php'>Перални със Сушилни</a></li>
			<li><a id="sub-menu" href='ohladiteli.php'>Охладители</a></li>
			<li><a id="sub-menu" href='hladilni-chanti.php'>Хладилни чанти</a></li>
		</ul>
		</div>
	<a id="menu" href="javascript:unhide('uredi-za-vgrajdane'); javascript:toggle('uredi-za-vgrajdane')"><h3>Уреди за вграждане</h3></a>
		<div id="uredi-za-vgrajdane" class="hidden">
		<ul>
			<li><a id="sub-menu" href='../uredi za vgrajdane/furni-plot.php'>Фурни с плот</a></li>
			<li><a id="sub-menu" href='../uredi za vgrajdane/furni-vgrajdane.php'>Фурни</a></li>
			<li><a id="sub-menu" href='../uredi za vgrajdane/plotove.php'>Плотове</a></li>
			<li><a id="sub-menu" href='../uredi za vgrajdane/peralni-vgrajdane.php'>Перални</a></li>
			<li><a id="sub-menu" href='../uredi za vgrajdane/mialna-mashina-vgrajdane.php'>Миялна машини</a></li>
			<li><a id="sub-menu" href='../uredi za vgrajdane/hladilnici-vgrajdane.php'>Хладилници</a></li>
		</ul>
		</div>
	<a id="menu" href="javascript:unhide('sportni-stoki'); javascript:toggle('sportni-stoki')"><h3>Спортни стоки</h3></a>
		<div id="sportni-stoki" class="hidden">
		<ul>
			<li><a id="sub-menu" href='../sportni stoki/fitnes-uredi.php'>Фитнес уреди</a></li>
			<li><a id="sub-menu" href='../sportni stoki/ski.php'>Ски</a></li>
			<li><a id="sub-menu" href='../sportni stoki/ski-obuvki.php'>Ски обувки</a></li>
			<li><a id="sub-menu" href='../sportni stoki/shteki.php'>Щеки</a></li>
			<li><a id="sub-menu" href='../sportni stoki/roleri.php'>Ролери</a></li>
			<li><a id="sub-menu" href='../sportni stoki/velosipedi.php'>Велосипеди</a></li>
			<li><a id="sub-menu" href='../sportni stoki/batuti.php'>Батути</a></li>
		</ul>
		</div>
	<a id="menu" href="javascript:unhide('peralni-preparati'); javascript:toggle('peralni-preparati')"><h3>Перални препарати</h3></a>
		<div id="peralni-preparati" class="hidden">
		<ul>
			<li><a id="sub-menu" href='../peralni preparati/prahove.php'>Прахове</a></li>
			<li><a id="sub-menu" href='../peralni preparati/omekotiteli.php'>Омекотители</a></li>
			<li><a id="sub-menu" href='../peralni preparati/tabletki.php'>Таблетки</a></li>
		</ul>
		</div>
</div>
<div id="mainframe">



</div>


</section>
</body>
</html>