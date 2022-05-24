<!DOCTYPE html>
<html>
<head>
<?php include("constants/head.php");?>
<script src="./js/jquery-1.2.6.min"></script>
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
    parent.alertsize(document.body.scrollHeight);
}
</script>
</head>
<body>
<?php include("constants/header.php");?>
<section id="wrapper">
<?php include("constants/menu.php");?>
	<div id="mainframe">
	<div id="top_border_mainframe">Рамкови програми</div>
	<p style="font-size: 12px; font-weight:bold; font-family:arial; text-align:center; margin-left:14px; color:red;">
		Mоже да изтеглите документите от <a href="ramkovi_programi_download.php">ТУК</a>.
	</p>
	</br>
	<img src="img/icon_pdf.png" id="pdf">
	<a href="javascript:unhide('zapoved_promiana_ramkovaB_29_07_2011'); javascript:toggle('zapoved_promiana_ramkovaB_29_07_2011')">
<p_ramkova_programa>Заповед № РД09-1075/29.07.2011 г.
</p_ramkova_programa>
</a>
  <div id="zapoved_promiana_ramkovaB_29_07_2011" class="hidden" style="margin-top:20px;">
  <p_ramkova_programa_p> &nbsp &nbsp За изменение и допълнение на Рамкова програма В за професионално образование с придобиване на 
  втора или трета степен на професионална квалификация.
</p_ramkova_programa_p>
</br></br>
    <object data="files/ramkovi_programi/zapoved_promiana_ramkovaB_29_07_2011.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/ramkovi_programi/zapoved_promiana_ramkovaB_29_07_2011.pdf" type="application/pdf"  />
    </object>
  </div>
	</br>
	</br>
	<img src="img/icon_pdf.png" id="pdf">
	 <a href="javascript:unhide('zapoved_promiana_AxV_15_07_2009'); javascript:toggle('zapoved_promiana_AxV_15_07_2009')">
<p_ramkova_programa>Заповед № РД09-1155/15.07.2009 г.
</p_ramkova_programa>
</a>
  <div id="zapoved_promiana_AxV_15_07_2009" class="hidden" style="margin-top:20px;">
  <p_ramkova_programa_p> &nbsp &nbsp За изменение и допълнение на Рамкова програма А за начално професионално обучение с придобиване 
  на първа степен на професионална квалификация и на Рамкова програма В за професионално образование с придобиване на втора или
  трета степен на професионална квалификация
</p_ramkova_programa_p>
</br></br>
    <object data="files/ramkovi_programi/zapoved_promiana_AxV_15_07_2009.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/ramkovi_programi/zapoved_promiana_AxV_15_07_2009.pdf" type="application/pdf"  />
    </object>
  </div>
  </br>
  </br>
  <img src="img/icon_pdf.png" id="pdf">
	<a title="" href="javascript:unhide('ramkova_programa_a'); javascript:toggle('ramkova_programa_a')">
	<p_ramkova_programa>Рамкова програма А
	</p_ramkova_programa>
	</a>
     <div id="ramkova_programa_a" class="hidden" style="margin-top:20px;">
	 <p_ramkova_programa_p> &nbsp &nbsp За начално професионално обучение с придобиване на първа степен на професионална квалификация. 
	</p_ramkova_programa_p>
	</br></br>
      <object data="files/ramkovi_programi/ramkova_programa_a.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
       <embed src="files/ramkovi_programi/ramkova_programa_a.pdf" type="application/pdf" />
      </object>
     </div>
	 </br></br>
	 <img src="img/icon_pdf.png" id="pdf">
  <a href="javascript:unhide('ramkova_programa_b'); javascript:toggle('ramkova_programa_b')">
  <p_ramkova_programa>Рамкова програма Б
  </p_ramkova_programa>
  </a>
  <div id="ramkova_programa_b" class="hidden" style="margin-top:20px;">
  <p_ramkova_programa_p> &nbsp &nbsp За начално професионално обучение с придобиване на втора степен на професионална квалификация.
  </p_ramkova_programa_p>
  </br></br>
    <object data="files/ramkovi_programi/ramkova_programa_b.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/ramkovi_programi/ramkova_programa_b.pdf" type="application/pdf"  />
    </object>
  </div>
  </br></br>
  <img src="img/icon_pdf.png" id="pdf">
<a href="javascript:unhide('ramkova_programa_v'); javascript:toggle('ramkova_programa_v')">
<p_ramkova_programa>Рамкова програма В
</p_ramkova_programa>
</a>
  <div id="ramkova_programa_v" class="hidden" style="margin-top:20px;">
  <p_ramkova_programa_p> &nbsp &nbsp За професионално образование с придобиване на втора или трета степен на професионална квалификация.
</p_ramkova_programa_p>
</br></br>
    <object data="files/ramkovi_programi/ramkova_programa_v.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/ramkovi_programi/ramkova_programa_v.pdf" type="application/pdf"  />
    </object>
  </div>
  <br/><br/>
  <img src="img/icon_pdf.png" id="pdf">
<a href="javascript:unhide('ramkova_programa_v1'); javascript:toggle('ramkova_programa_v1')">
<p_ramkova_programa>Рамков учебен план за професионално образование по рамкова програма В
</p_ramkova_programa>
</a>
  <div id="ramkova_programa_v1" class="hidden" style="margin-top:20px;">
<p_ramkova_programa_p> &nbsp &nbsp За учениците, постъпили в VIII клас през учебната 2004 - 2005 година за обучение по Рамкова програма
В за придобиване на трета степен на професионална квалификация с продължителност 6
години след завършен VII клас и учениците, постъпили в IХ клас през учебната 2005 - 2006
година за обучение по Рамкова програма В за придобиване на трета степен на професионална
квалификация с продължителност 5 години следзавършено основно образование - за
задочна форма на обучение в XIII клас през учебната 2009-2010 година. 
</p_ramkova_programa_p>
</br></br>
    <object data="files/ramkovi_programi/ramkova_programa_v1.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/ramkovi_programi/ramkova_programa_v1.pdf" type="application/pdf"  />
    </object>
  </div>
  <br/>
  <br/>
  <img src="img/icon_pdf.png" id="pdf">
<a href="javascript:unhide('ramkova_programa_g'); javascript:toggle('ramkova_programa_g')">
<p_ramkova_programa>Рамкова програма Г
</p_ramkova_programa>
</a>
  <div id="ramkova_programa_g" class="hidden" style="margin-top:20px;">
  <p_ramkova_programa_p> &nbsp &nbsp За професионално обучение с придобиване на четвърта степен на професионална квалификация.
</p_ramkova_programa_p>
</br></br>
    <object data="files/ramkovi_programi/ramkova_programa_g.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/ramkovi_programi/ramkova_programa_g.pdf" type="application/pdf"  />
    </object>
  </div>
  <br/>
  <br/>
  <img src="img/icon_pdf.png" id="pdf">
<a href="javascript:unhide('ramkova_programa_d'); javascript:toggle('ramkova_programa_d')">
<p_ramkova_programa>Рамкова програма Д
</p_ramkova_programa>
</a>
  <div id="ramkova_programa_d" class="hidden" style="margin-top:20px;">
  <p_ramkova_programa_p> &nbsp &nbsp За начално професионално обучение с придобиване на квалификация по част от професията.
</p_ramkova_programa_p>
</br></br>
    <object data="files/ramkovi_programi/ramkova_programa_d.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/ramkovi_programi/ramkova_programa_d.pdf" type="application/pdf"  />
    </object>
  </div>
  <br/>
  <br/>
  <img src="img/icon_pdf.png" id="pdf">
<a href="javascript:unhide('ramkova_programa_e'); javascript:toggle('ramkova_programa_e')">
<p_ramkova_programa>Рамкова програма Е
</p_ramkova_programa>
</a>
  <div id="ramkova_programa_e" class="hidden" style="margin-top:20px;">
  <p_ramkova_programa_p> &nbsp &nbsp За непрекъснато професионално обучение за актуализиране или разширяване на придобита професионална квалификация, 
както и за придобиване на първа, втора и трета степен на професионална квалификация.
</p_ramkova_programa_p>
</br></br>
    <object data="files/ramkovi_programi/ramkova_programa_e.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/ramkovi_programi/ramkova_programa_e.pdf" type="application/pdf"  />
    </object>
  </div>
	</div>
<?php include("constants/copy.php");?>
</section>
</body>
</html>