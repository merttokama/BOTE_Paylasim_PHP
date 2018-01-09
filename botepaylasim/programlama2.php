<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Programlama Dilleri</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
  <div class="header">
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
      <h2>Programlama Dilleri</h2>
      <div class="clr"></div>
    </div>
  </div>
  <div class="clr"></div>
  <div class="body">
    <div class="body_resize">
      <h2>İçerik 1</h2>
      açıklama kısmı 
      <p> dosya link </p>
      
      <h2>Yorumlar</h2>
        <p>Buse: Teşekkürler</p>
        <div class="line"></div>
        
        <p>Mert: Çok açıklayıcı olmuş ders için sağolun.</p>
        <div class="line"></div>
        
        <p>Melike: Keşke biraz daha okunaklı olsaydı.</p>
      <div class="clr"></div>
      <div class="clr"></div>
      <div class="clr"></div>
    </div>
     <div class="body_resize">
      <h2>İçerik 2</h2>
      açıklama kısmı 
      <p> dosya link </p>
      
      <h2>Yorumlar</h2>
        <p>Buse: Teşekkürler</p>
        <div class="line"></div>
        
        <p>Mert: Çok açıklayıcı olmuş ders için sağolun.</p>
        <div class="line"></div>
        
        <p>Melike: Keşke biraz daha okunaklı olsaydı.</p>
      <div class="clr"></div>
      <div class="clr"></div>
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