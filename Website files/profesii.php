<!DOCTYPE html>
<html>
<head>
<?php include("constants/head.php");?>
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
<?php include("constants/header.php");?>
<section id="wrapper">
<?php include("constants/menu.php");?>
	<div id="mainframe">
	<div id="top_border_mainframe">Професии</div>
	<p style="font-size: 12px; font-weight:bold; font-family:arial; text-align:center; margin-left:14px; color:red; margin-bottom:40px;">
	Mоже да изтеглите документите от <a href="profesii_download.php">ТУК</a>.
	</p>
	
	<h4 class="profesii" id="schetovoditel" style="margin-top:5px;">Счетоводител</h4>
	<ul id="profesii" style="margin-top:5px;">
		<a id="profesii" href="javascript:unhide('1-Schetovoditel'); javascript:toggle('1-Schetovoditel')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Оперативно счетоводство - III СПК (№3440101)</li>
		</a>
	</ul>
	<div id="1-Schetovoditel" class="hidden">
	<object data="files/programi_21vek/1-Schetovoditel.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/1-Schetovoditel.pdf" type="application/pdf"  />
    </object>
	</div>
		
	
	<h4 class="profesii" id="ofis_sytrudnik">Сътрудник в малък и среден бизнес</h4>
	<ul id="profesii" style="margin-top:5px;">
		<a id="profesii" href="javascript:unhide('2-Satrudnuk_MSB'); javascript:toggle('2-Satrudnuk_MSB')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Малък и среден бизнес - II СПК (№3450501)</li>
		</a>
	</ul>
	<div id="2-Satrudnuk_MSB" class="hidden">
	<object data="files/programi_21vek/2-Satrudnuk_MSB.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/2-Satrudnuk_MSB.pdf" type="application/pdf"  />
    </object>
	</div>
	
	<h4 class="profesii" id="tekstoobrabotka">Оператор на компютър</h4>
	<ul id="profesii" style="margin-top:5px;">
		<a id="profesii" href="javascript:unhide('3-op_komp_'); javascript:toggle('3-op_komp_')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Текстообработване - I СПК (№4820301)</li>
		</a>
	</ul>
	<div id="3-op_komp_" class="hidden">
	<object data="files/programi_21vek/3-op_komp_.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/3-op_komp_.pdf" type="application/pdf"  />
    </object>
	</div>
	
	<h4 class="profesii" id="zavarqvane">Заварчик</h4>
	<ul id="profesii" style="margin-top:5px;">
		<a id="profesii" href="javascript:unhide('4-Zavarchik'); javascript:toggle('4-Zavarchik')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Заваряване - I СПК (№5210901)</li>
		</a>
	</ul>
	<div id="4-Zavarchik" class="hidden">
	<object data="files/programi_21vek/4-Zavarchik.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/4-Zavarchik.pdf" type="application/pdf"  />
    </object>
	</div>
	
	<h4 class="profesii">Шлосер</h4>
	<ul id="profesii" style="margin-top:5px;">
		<a id="profesii" href="javascript:unhide('5-Shloser'); javascript:toggle('5-Shloser')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Шлосерство - I СПК (№5211101)</li>
		</a>
	</ul>
	<div id="5-Shloser" class="hidden">
	<object data="files/programi_21vek/5-Shloser.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/5-Shloser.pdf" type="application/pdf"  />
    </object>
	</div>
	
	<h4 class="profesii">Монтьор на транспортна техника</h4>
	<ul id="profesii" style="margin-top:5px;">
		<a id="profesii" href="javascript:unhide('6-PST'); javascript:toggle('6-PST')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Пътностроителна техника - II СПК (№5250202)</li>
		</a>
	</ul>
	<div id="6-PST" class="hidden">
	<object data="files/programi_21vek/6-PST.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/6-PST.pdf" type="application/pdf"  />
    </object>
	</div>
	
	<h4 class="profesii">Монтьор на подемно - транспортна техника</h4>
	<ul id="profesii" style="margin-top:5px;">
		<a id="profesii" href="javascript:unhide('7-Auto-kranist'); javascript:toggle('7-Auto-kranist')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Подемно - транспортна техника, монтирана на пътни транспортни средства - II СПК (№5250601)</li>
		</a>
		<a id="profesii" href="javascript:unhide('8-EL-kranist'); javascript:toggle('8-EL-kranist')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Подемно - транспортна техника с електрозадвижване - II СПК (№5250602)</li>
		</a>
	</ul>
	<div id="7-Auto-kranist" class="hidden">
	<object data="files/programi_21vek/7-Auto-kranist.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/7-Auto-kranist.pdf" type="application/pdf"  />
    </object>
	</div>
	<div id="8-EL-kranist" class="hidden">
	<object data="files/programi_21vek/8-EL-kranist.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/8-EL-kranist.pdf" type="application/pdf"  />
    </object>
	</div>
	
	<h4 class="profesii" id="hlebar_sladkar">Хлебар - сладкар</h4>
	<ul id="profesii" style="margin-top:5px;">
		<a id="profesii" href="javascript:unhide('9-Hlebar'); javascript:toggle('9-Hlebar')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Производство на хляб и хлебни изделия - II СПК (№5410301)</li>
		</a>
		<a id="profesii" href="javascript:unhide('10-Sladkar'); javascript:toggle('10-Sladkar')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Производство на сладкарски изделия - II СПК (№5410302)</li>
		</a>
	</ul>
	<div id="9-Hlebar" class="hidden">
	<object data="files/programi_21vek/9-Hlebar.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/9-Hlebar.pdf" type="application/pdf"  />
    </object>
	</div>
	<div id="10-Sladkar" class="hidden">
	<object data="files/programi_21vek/10-Sladkar.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/10-Sladkar.pdf" type="application/pdf"  />
    </object>
	</div>
	
	<h4 class="profesii">Шивач</h4>
	<ul id="profesii" style="margin-top:5px;">
		<a id="profesii" href="javascript:unhide('11-Shivach'); javascript:toggle('11-Shivach')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Шивачество - I СПК (№5421101)</li>
		</a>
	</ul>
	<div id="11-Shivach" class="hidden">
	<object data="files/programi_21vek/11-Shivach.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/11-Shivach.pdf" type="application/pdf"  />
    </object>
	</div>
	
	<h4 class="profesii" id="stroitel">Строител</h4>
	<ul id="profesii" style="margin-top:5px;">
		<a id="profesii" href="javascript:unhide('12-Kofraji'); javascript:toggle('12-Kofraji')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Кофражи - II СПК (№5820302)</li>
		</a>
		<a id="profesii" href="javascript:unhide('13-Arm-Beton'); javascript:toggle('13-Arm-Beton')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Армировка и бетон - II СПК (№5820303)</li>
		</a>
		<a id="profesii" href="javascript:unhide('14-Zidari'); javascript:toggle('14-Zidari')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Зидария - II СПК (№5820304)</li>
		</a>
		<a id="profesii" href="javascript:unhide('15-Mazilki'); javascript:toggle('15-Mazilki')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Мазилки и шпакловки - II СПК (№5820305)</li>
		</a>
		<a id="profesii" href="javascript:unhide('16-Vytr-Oblicovki'); javascript:toggle('16-Vytr-Oblicovki')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Вътрешни облицовки и настилки - II СПК (№5820306)</li>
		</a>
		<a id="profesii" href="javascript:unhide('17-Vynshni-Oblicovki'); javascript:toggle('17-Vynshni-Oblicovki')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Външни облицовки и настилки - II СПК (№5820307)</li>
		</a>
		<a id="profesii" href="javascript:unhide('18-Bojadjia'); javascript:toggle('18-Bojadjia')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Бояджийски работи - II СПК (№5820309)</li>
		</a>
		<a id="profesii" href="javascript:unhide('19-Stroit-dyrvodelstvo'); javascript:toggle('19-Stroit-dyrvodelstvo')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Строително дърводелство - II СПК (№5820310)</li>
		</a>
		<a id="profesii" href="javascript:unhide('20-Stroit-tenekedjiistvo'); javascript:toggle('20-Stroit-tenekedjiistvo')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Строително тенекеджийство - II СПК (№5820311)</li>
		</a>
	</ul>
	<div id="12-Kofraji" class="hidden">
	<object data="files/programi_21vek/12-Kofraji.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/12-Kofraji.pdf" type="application/pdf"  />
    </object>
	</div>
	<div id="13-Arm-Beton" class="hidden">
	<object data="files/programi_21vek/13-Arm-Beton.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/13-Arm-Beton.pdf" type="application/pdf"  />
    </object>
	</div>
	<div id="14-Zidari" class="hidden">
	<object data="files/programi_21vek/14-Zidari.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/14-Zidari.pdf" type="application/pdf"  />
    </object>
	</div>
	<div id="15-Mazilki" class="hidden">
	<object data="files/programi_21vek/15-Mazilki.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/15-Mazilki.pdf" type="application/pdf"  />
    </object>
	</div>
	<div id="16-Vytr-Oblicovki" class="hidden">
	<object data="files/programi_21vek/16-Vytr-Oblicovki.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/16-Vytr-Oblicovki.pdf" type="application/pdf"  />
    </object>
	</div>
	<div id="17-Vynshni-Oblicovki" class="hidden">
	<object data="files/programi_21vek/17-Vynshni-Oblicovki.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/17-Vynshni-Oblicovki.pdf" type="application/pdf"  />
    </object>
	</div>
	<div id="18-Bojadjia" class="hidden">
	<object data="files/programi_21vek/18-Bojadjia.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/18-Bojadjia.pdf" type="application/pdf"  />
    </object>
	</div>
	<div id="19-Stroit-dyrvodelstvo" class="hidden">
	<object data="files/programi_21vek/19-Stroit-dyrvodelstvo.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/19-Stroit-dyrvodelstvo.pdf" type="application/pdf"  />
    </object>
	</div>
	<div id="20-Stroit-tenekedjiistvo" class="hidden">
	<object data="files/programi_21vek/20-Stroit-tenekedjiistvo.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/20-Stroit-tenekedjiistvo.pdf" type="application/pdf"  />
    </object>
	</div>
	
	
		
	<h4 class="profesii">Монтажник на водоснабдителни и канализационни мрежи</h4>
	<ul id="profesii" style="margin-top:5px;">
		<a id="profesii" href="javascript:unhide('21-Vytr_ViK'); javascript:toggle('21-Vytr_ViK')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Вътрешни ВиК мрежи - II СПК (№5820501)</li>
		</a>
		<a id="profesii" href="javascript:unhide('22-Vynshni_ViK'); javascript:toggle('22-Vynshni_ViK')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Външни ВиК мрежи - II СПК (№5820502)</li>
		</a>
	</ul>
	<div id="21-Vytr_ViK" class="hidden">
	<object data="files/programi_21vek/21-Vytr_ViK.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/21-Vytr_ViK.pdf" type="application/pdf"  />
    </object>
	</div>
	<div id="22-Vynshni_ViK" class="hidden">
	<object data="files/programi_21vek/22-Vynshni_ViK.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/22-Vynshni_ViK.pdf" type="application/pdf"  />
    </object>
	</div>
	
	<h4 class="profesii" id="hotelier">Хотелиер</h4>
	<ul id="profesii" style="margin-top:5px;">
		<a id="profesii" href="javascript:unhide('23-Hotelier'); javascript:toggle('23-Hotelier')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Организация на хотелиерството - III СПК (№8110101)</li>
		</a>
	</ul>
	<div id="23-Hotelier" class="hidden">
	<object data="files/programi_21vek/23-Hotelier.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/23-Hotelier.pdf" type="application/pdf"  />
    </object>
	</div>
	
	<h4 class="profesii">Администратор в хотелиерството</h4>
	<ul id="profesii" style="margin-top:5px;">
		<a id="profesii" href="javascript:unhide('24-Administrator v hotelierstvoto'); javascript:toggle('24-Administrator v hotelierstvoto')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Организация на обслужването в хотелиерството - III СПК (№8110201)</li>
		</a>
	</ul>
	<div id="24-Administrator v hotelierstvoto" class="hidden">
	<object data="files/programi_21vek/24-Administrator v hotelierstvoto.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/24-Administrator v hotelierstvoto.pdf" type="application/pdf"  />
    </object>
	</div>
	
	<h4 class="profesii">Камериер</h4>
	<ul id="profesii" style="margin-top:5px;">
		<a id="profesii" href="javascript:unhide('25-Kamerier'); javascript:toggle('25-Kamerier')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Хотелиерство - I СПК (№8110301)</li>
		</a>
	</ul>
	<div id="25-Kamerier" class="hidden">
	<object data="files/programi_21vek/25-Kamerier.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/25-Kamerier.pdf" type="application/pdf"  />
    </object>
	</div>
	
	<h4 class="profesii" id="gotvach">Готвач</h4>
	<ul id="profesii" style="margin-top:5px;">
		<a id="profesii" href="javascript:unhide('26-Gotvach'); javascript:toggle('26-Gotvach')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Производство на кулинарни изделия и напитки - II СПК (№8110701)</li>
		</a>
	</ul>
	<div id="26-Gotvach" class="hidden">
	<object data="files/programi_21vek/26-Gotvach.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/26-Gotvach.pdf" type="application/pdf"  />
    </object>
	</div>
	
	<h4 class="profesii">Сервитьор-барман</h4>
	<ul id="profesii" style="margin-top:5px;">
		<a id="profesii" href="javascript:unhide('27-Servitior_Barman'); javascript:toggle('27-Servitior_Barman')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Обслужване на заведения в обществено хранене - II СПК (№8110801)</li>
		</a>
	</ul>
	<div id="27-Servitior_Barman" class="hidden">
	<object data="files/programi_21vek/27-Servitior_Barman.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/27-Servitior_Barman.pdf" type="application/pdf"  />
    </object>
	</div>
	
	<h4 class="profesii">Организатор на туристическа агентска дейност</h4>
	<ul id="profesii" style="margin-top:5px;">
		<a id="profesii" href="javascript:unhide('28-Organizacija_turizym'); javascript:toggle('28-Organizacija_turizym')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Организация на туризма и свободното време - III СПК (№8120101)</li>
		</a>
		<a id="profesii" href="javascript:unhide('29-Selski_turizym'); javascript:toggle('29-Selski_turizym')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Селски туризъм - III СПК (№8120102)</li>
		</a>
	</ul>
	<div id="28-Organizacija_turizym" class="hidden">
	<object data="files/programi_21vek/28-Organizacija_turizym.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/28-Organizacija_turizym.pdf" type="application/pdf"  />
    </object>
	</div>
	<div id="29-Selski_turizym" class="hidden">
	<object data="files/programi_21vek/29-Selski_turizym.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/29-Selski_turizym.pdf" type="application/pdf"  />
    </object>
	</div>
	
	<h4 class="profesii">Аниматор в туризма</h4>
	<ul id="profesii" style="margin-top:5px;">
		<a id="profesii" href="javascript:unhide('30-Animator'); javascript:toggle('30-Animator')">
		<li id="profesii"><img src="img/icon_pdf.png" id="pdf">Туристическа анимация - III СПК (№8120402)</li>
		</a>
	</ul>
	<div id="30-Animator" class="hidden">
	<object data="files/programi_21vek/30-Animator.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/programi_21vek/30-Animator.pdf" type="application/pdf"  />
    </object>
	</div>
	</div>
<?php include("constants/copy.php");?>
<time></time>
</section>
</body>
</html>