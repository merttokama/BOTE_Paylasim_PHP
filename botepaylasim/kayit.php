<?php
session_start(); 
$_SESSION["yetki"]=false; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Üye Ol</title>
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
    <div class="header_resize">
      
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
  <div class="clr"></div>
  <div class="body">
    <div class="body_resize">
      <div class="clr"></div>
    </div>
  </div>
  <div>
  <h2>Üye Ol</h2>
  
  <form action="kayitol.php" method="post" id="contactform">
    <ol>
      <li>
        <label for="email">Eposta Adresiniz<span class="black">*</span></label>
       <span class="black"> <input  name="eposta" class="text" /> </span>
      </li>
      <li>
 <p> <label for="company">Kullanıcı Adı<span class="red">*</span></label>
        <input  name="kullaniciadi" class="text" />
      </li>
      <li>
        <label for="subject">Şifreniz <span class="red">*</span></label>
        <input  name="sifre" type="password" />
      </li>
      
      <li class="buttons">
        <input name="buton" type="submit" class="button" value="gönder" />
      </li>
    </ol>
  </form>
  <p> Kullanıcı mısınız? <a href="giris.php">Giriş Yap </a>
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