<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> <meta charset="utf8" />
<title>Ana Sayfa</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/easySlider1.5.js"></script>
<script type="text/javascript" charset="utf-8">
// <![CDATA[
$(document).ready(function(){	
	$("#slider").easySlider({
		controlsBefore:	'<p id="controls">',
		controlsAfter:	'</p>',
		auto: true, 
		continuous: true
	});	
});
// ]]>
</script>
<style type="text/css">
.gallery { width:890px; height:355px; margin:0 auto; }
#slider { margin:0; padding:0; list-style:none; }
#slider ul,
#slider li { margin:0; padding:0; list-style:none; }
/* 
    define width and height of list item (slide)
    entire slider area will adjust according to the parameters provided here
*/
#slider li { width:890px; height:355px; overflow:hidden; }
p#controls { margin:0; padding:0; position:relative; }
#prevBtn { display:block; margin:0; overflow:hidden; width:25px; height:48px; position:absolute; left:-41px; top:-230px; }
#nextBtn { display:block; margin:0; overflow:hidden; width:25px; height:48px; position:absolute; left: 906px; top:-230px; }
#prevBtn a { display:block; width:25px; height:48px; background:url(images/l_arrow.gif) no-repeat 0 0; }
#nextBtn a { display:block; width:25px; height:48px; background:url(images/r_arrow.gif) no-repeat 0 0; }
</style>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize"><a href="kayit.php"><a href="kayit.php"><a href="kayit.php"></a><a href="kayit.php"><img src="images/sing_up.gif" alt="picture" width="200" height="25" border="0" class="sing" /></a>
    <a href="giris.php"><img src="images/giris.jpg" alt="picture" width="200" height="25" border="0" class="sing" /></a>
      <div class="menu">
        <ul>
          <li><a href="anasayfa.php"class="active" ><span>Ana Sayfa</span></a></li>
          <li><a href="hakkimizda.php"><span>Hakkımızda</span></a></li>
          <li><a href="icerik.php"><span>İçerikler</span></a></li>
          <li><a href="dersler.php"><span>Dersler</span></a></li>
          <li><a href="iletisim.php"><span>Bize Ulaşın</span></a></li>
        </ul>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="logo"><a href="index.php"><img src="images/logo.gif" width="293" height="84" border="0" alt="logo" /></a></div>
      <div class="search">
        <form id="form1" name="form1" method="post" action="">
          <label> <span>
            <input name="q" type="text" class="keywords" id="textfield" maxlength="50" value="Ara..." />
            </span>
            <input name="b" type="image" src="images/search.gif" class="button" />
          </label>
        </form>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="header_text">
    <div class="header_text_resize">
      <div class="gallery">
        <div id="slider">
          <ul>
            <li>
              <div class="div"> <img src="images/simple_img_1.jpg" alt="screen 1" width="569" height="339" border="0" class="screen"  />
                <div class="left1">
                  <h2>BÖTE NOTLARI</h2>
                  <p>Böte için aradığınız bütün notlar burda... </p>
                  <br />
                  <br />
                  <a href="icerik.php"><img src="images/more_inform_up.gif" alt="picture" width="133" height="30" border="0" class="button" /></a></div>
              </div>
            </li>
            <li>
              <div class="div"><img src="images/simple_img_2.jpg" alt="screen 1" width="569" height="339" border="0" class="screen"  />
                <div class="left1">
                  <h2>DERSLER</h2>
                  <p>Bilgisayar ve Öğretim Teknolojileri Eğitmenliği dersleri... </p>
                  <br />
                  <br />
                  <a href="dersler.php"><img src="images/more_inform_up.gif" alt="picture" width="133" height="30" border="0" class="button" /></a></div>
              </div>
            </li>
            <li>
              <div class="div"><img src="images/simple_img_3.jpg" alt="screen 1" width="569" height="339" border="0" class="screen"  />
                <div class="left1">
                  <h2>BÖLÜMÜMÜZ</h2>
                  <p>Bağımsız paylaşım platformu. </p>
                  <br />
                  <br />
                  <a href="hakkimizda.php"><img src="images/more_inform_up.gif" alt="picture" width="133" height="30" border="0" class="button" /></a></div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="clr"></div>
  <div class="body">
    <div class="body_resize">
      <div class="right1">
        <h2>Son Yüklenenler</h2>
        <p>Programlama Dersi vize notları için <a href="programlama.php"> tıklayınız </a> </p>
        <div class="line"></div>
        <p>Flash Uygulamaları Dersi vize notları için <a href="icerik.php"> tıklayınız </a> </p>
        <div class="line"></div>
        <p>Ölçme ve Değerlendirme Dersi vize notları için <a href="icerik.php"> tıklayınız </a> </p>
        <div class="line"></div>
        <p>İşletim Sistemleri Dersi vize notları için <a href="icerik.php"> tıklayınız </a> </p>
      </div>
      <div class="right1">
        <h2>Son Yapılan Yorumlar</h2>
        <p>Programlama Dersi vize notlarına yapılan son yorum:</p>
        <p>Buse: Teşekkürler</p>
        <div class="line"></div>
        <p>Flash Uygulamaları Dersi vize notlarına yapılan son yorum:</p>
        <p>Mert: Çok açıklayıcı olmuş ders için sağolun.</p>
        <div class="line"></div>
        <p>Flash Uygulamaları Dersi vize notlarına yapılan son yorum:</p>
        <p>Buse: Keşke biraz daha okunaklı olsaydı.</p>
      </div>
      <div class="right1">
        <h2>Yüklenen İçerikler </h2>
        <p><a href="#"><strong>14 / April / 09</strong></a><br />
          içerik 1<a href="icerik.php"> &gt;&gt;</a></p>
        <div class="line"></div>
        <p><a href="#"><strong>14 / April / 09</strong></a><br />
          içerik 2<a href="icerik.php"> &gt;&gt;</a></p>

        <div class="line"></div>
        <p><a href="#"><strong>14 / April / 09</strong></a><br />
          içerik 3.<a href="icerik.php"> &gt;&gt;</a></p>
        <div class="line"></div>
        <p>&nbsp;</p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <ul>
        <li><a href="anasayfa.php">Ana Sayfa</a></li>
        <li><a href="hakkimizda.php">Hakkımızda</a></li>
        <li><a href="icerik.php">İçerikler</a></li>
        <li><a href="dersler.php">Dersler</a></li><p>
        <li><a href="iletisim.php">BizeUlaşın</a></li>
        
      </ul>
      
      <div class="clr"></div>
    </div>
  </div>
  <div class="clr"></div>
</div>
</body>
</html>