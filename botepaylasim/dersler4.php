<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Dersler</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
  <div class="header">
    <a href="kayit.php"><img src="images/sing_up.gif" alt="picture" width="200" height="34" border="0" class="sing" /></a>
      <div class="menu">
        <ul>
        <li><a href="anasayfa.php" ><span>Ana Sayfa</span></a></li>
          <li><a href="hakkimizda.php"><span>Hakkımızda</span></a></li>
          <li><a href="icerik.php"><span>İçerikler</span></a></li>
          <li><a href="dersler.php"class="active"><span>Dersler</span></a></li>
          <li><a href="iletisim.php"><span>Bize Ulaşın</span></a></li>
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
  <div class="header_text2">
    <div class="header_text_resize2">
      <h2>Dersler</h2>
      <div class="clr"></div>
    </div>
  </div>
  <div class="clr"></div>
  <div class="body">
    <div class="body_resize">
      <div class="right">
        <div class="right_top">
          <div class="right_bottom">
            <h4>Programlama Dilleri</h4>
            <p><img src="images/proj_1.jpg" alt="picture" width="272" height="138" /> </p>
            <p><strong>Programlama dilleri dersi notları...</strong></p>
            
            <div class="clr"></div>
          </div>
        </div>
      </div>
      <div class="right">
        <div class="right_top">
          <div class="right_bottom">
            <h4>Materyal Tasarımı</h4>
            <p><img src="images/proj_2.jpg" alt="picture" width="272" height="138" /> </p>
            <p><strong>Materyal Tasarımı dersi notları...</strong>. </p>
            
            <div class="clr"></div>
          </div>
        </div>
      </div>
      <div class="right">
        <div class="right_top">
          <div class="right_bottom">
            <h4>Ölçme ve Değerlendirme</h4>
            <p><img src="images/proj_3.jpg" alt="picture" width="272" height="138" /> </p>
            <p><strong>Ölçme ve Değerledirme dersi notları...</strong>. </p>
            
            <div class="clr"></div>
          </div>
        </div>
      </div>
      <div class="clr"></div>
      <div class="right">
        <div class="right_top">
          <div class="right_bottom">
            <h4>Flash Uygulamaları </h4>
            <p><img src="images/proj_4.jpg" alt="picture" width="278" height="149" /> </p>
            <p><strong>Flash Uygulamaları dersi notları...</strong>. </p>
            
            <div class="clr"></div>
          </div>
        </div>
      </div>
      <div class="right">
        <div class="right_top">
          <div class="right_bottom">
            <h4>İnternet Tabanlı Programlama </h4>
            <p><img src="images/proj_5.jpg" alt="picture" width="272" height="138" /> </p>
            <p><strong>İnternet Tabanlı Programlama dersi notları...</strong>. </p>
            
            <div class="clr"></div>
          </div>
        </div>
      </div>
      <div class="right">
        <div class="right_top">
          <div class="right_bottom">
            <h4>Özel Eğitimde Teknoloji Uygulamaları </h4>
            <p><img src="images/proj_6.jpg" alt="picture" width="272" height="138" /> </p>
            <p><strong>Özel Eğitimde Teknoloji Uygulamaları dersi notları...</strong>. </p>
            
            <div class="clr"></div>
          </div>
        </div>
      </div>
      
      <div class="clr"></div>
      <div class="line"></div>
      <div class="bottoms"> <a href="dersler.php">1</a> <a href="dersler2.php">2</a> <a href="dersler3.php">3</a> <a href="dersler4.php">4</a></div>
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