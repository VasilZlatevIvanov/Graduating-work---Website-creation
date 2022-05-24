<!DOCTYPE html>
<html>
<head>
<!--<?php include ($_SERVER["DOCUMENT_ROOT"]."/constants/head.php");?>-->
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
	  <div id="top_border_mainframe">Нормативни документи</div>
	  <p style="font-size: 12px; font-weight:bold; font-family:arial; text-align:center; margin-left:14px; color:red;">
		Mоже да изтеглите документите от <a href="normativni_download.php">ТУК</a>.
	</p>
	</br>
	<img src="img/icon_pdf.png" id="pdf">
	<a href="javascript:unhide('1-zkn_prosveta'); javascript:toggle('1-zkn_prosveta')">
<p_normativni>ЗАКОН за народната просвета
</p_normativni>
</a>
  <div id="1-zkn_prosveta" class="hidden" style="margin-top:20px;">
    <object data="files/normativni/1-zkn_prosveta.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/normativni/1-zkn_prosveta.pdf" type="application/pdf"  />
    </object>
  </div>
	</br>
	</br>
	<img src="img/icon_pdf.png" id="pdf">
	 <a href="javascript:unhide('2-prvlnk_zkn_prosveta'); javascript:toggle('2-prvlnk_zkn_prosveta')">
<p_normativni>ПРАВИЛНИК за прилагане на ЗАКОНА за народната просвета
</p_normativni>
</a>
  <div id="2-prvlnk_zkn_prosveta" class="hidden" style="margin-top:20px;">
    <object data="files/normativni/2-prvlnk_zkn_prosveta.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/normativni/2-prvlnk_zkn_prosveta.pdf" type="application/pdf"  />
    </object>
  </div>
  </br>
  </br>
  <img src="img/icon_pdf.png" id="pdf">
	<a title="" href="javascript:unhide('3-zkn_prof_obucenieEU'); javascript:toggle('3-zkn_prof_obucenieEU')">
	<p_normativni>ЗАКОН за професионалното образование и обучение
	</p_normativni>
	</a>
     <div id="3-zkn_prof_obucenieEU" class="hidden" style="margin-top:20px;">
      <object data="files/normativni/3-zkn_prof_obucenieEU.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
       <embed src="files/normativni/3-zkn_prof_obucenieEU.pdf" type="application/pdf" />
      </object>
     </div>
	 </br></br>
	 <img src="img/icon_pdf.png" id="pdf">
  <a href="javascript:unhide('4-zkn_obr_minimun'); javascript:toggle('4-zkn_obr_minimun')">
  <p_normativni>ЗАКОН за степента на образование, общообразователния минимум и учебния план
  </p_normativni>
  </a>
  <div id="4-zkn_obr_minimun" class="hidden" style="margin-top:20px;">
    <object data="files/normativni/4-zkn_obr_minimun.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/normativni/4-zkn_obr_minimun.pdf" type="application/pdf"  />
    </object>
  </div>
  </br></br>
  <img src="img/icon_pdf.png" id="pdf">
<a href="javascript:unhide('5-Zkn_nas_zaetostta'); javascript:toggle('5-Zkn_nas_zaetostta')">
<p_normativni>ЗАКОН за насърчаване на заетостта
</p_normativni>
</a>
  <div id="5-Zkn_nas_zaetostta" class="hidden" style="margin-top:20px;">
    <object data="files/normativni/5-Zkn_nas_zaetostta.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/normativni/5-Zkn_nas_zaetostta.pdf" type="application/pdf"  />
    </object>
  </div>
  <br/><br/>
  <img src="img/icon_pdf.png" id="pdf">
<a href="javascript:unhide('6-PP_Zkn_nas_zaetostta'); javascript:toggle('6-PP_Zkn_nas_zaetostta')">
<p_normativni>ПРАВИЛНИК за прилагане на Закона за насърчаване на
заетостта
</p_normativni>
</a>
  <div id="6-PP_Zkn_nas_zaetostta" class="hidden" style="margin-top:20px;">
    <object data="files/normativni/6-PP_Zkn_nas_zaetostta.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/normativni/6-PP_Zkn_nas_zaetostta.pdf" type="application/pdf"  />
    </object>
  </div>
  <br/>
  <br/>
  <img src="img/icon_pdf.png" id="pdf">
<a href="javascript:unhide('7-P_Deinostta_NAPOO'); javascript:toggle('7-P_Deinostta_NAPOO')">
<p_normativni>ПРАВИЛНИК за дейността на националната агенция за професионално образование и обучение
</p_normativni>
</a>
  <div id="7-P_Deinostta_NAPOO" class="hidden" style="margin-top:20px;">
    <object data="files/normativni/7-P_Deinostta_NAPOO.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/normativni/7-P_Deinostta_NAPOO.pdf" type="application/pdf"  />
    </object>
  </div>
  <br/>
  <br/>
  <img src="img/icon_pdf.png" id="pdf">
<a href="javascript:unhide('8-Nar3_Ocenjavane'); javascript:toggle('8-Nar3_Ocenjavane')">
<p_normativni>НАРЕДБА № 3 от 15.04.2003г. за системата за оценяване (Загл. - ДВ,
бр. 73 от 2009г., в сила от 15.09.2009г.)
</p_normativni>
</a>
  <div id="8-Nar3_Ocenjavane" class="hidden" style="margin-top:20px;">
    <object data="files/normativni/8-Nar3_Ocenjavane.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/normativni/8-Nar3_Ocenjavane.pdf" type="application/pdf"  />
    </object>
  </div>
  <br/>
  <br/>
  <img src="img/icon_pdf.png" id="pdf">
<a href="javascript:unhide('9-Nar4_Documents'); javascript:toggle('9-Nar4_Documents')">
<p_normativni>НАРЕДБА № 4 от 16.04.2003г. за документите за системата на народната просвета
</p_normativni>
</a>
  <div id="9-Nar4_Documents" class="hidden" style="margin-top:20px;">
    <object data="files/normativni/9-Nar4_Documents.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/normativni/9-Nar4_Documents.pdf" type="application/pdf"  />
    </object>
  </div>
	    <br/>
  <br/>
  <img src="img/icon_pdf.png" id="pdf">
<a href="javascript:unhide('10-Nar7_Zavarjavane'); javascript:toggle('10-Nar7_Zavarjavane')">
<p_normativni>НАРЕДБА № 7 от 11 октомври 2002г. за условията и реда за придобиване и признаване на правоспособност по заваряване (Загл. ДОП. - ДВ, бр. 37 от 2006г.)
</p_normativni>
</a>
  <div id="10-Nar7_Zavarjavane" class="hidden" style="margin-top:20px;">
    <object data="files/normativni/10-Nar7_Zavarjavane.pdf" type="application/pdf" style="width:794px; height:954px; border-style: none;">
        <embed src="files/normativni/10-Nar7_Zavarjavane.pdf" type="application/pdf"  />
    </object>
  </div>
	</div>
<?php include("constants/copy.php");?>
</section>
</body>
</html>