<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>İçerikler</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
    if ($_SESSION["yetki"]=true) { ?>
<div class="main">
  <div class="header">
    <a href="kayit.php"><img src="images/sing_up.gif" alt="picture" width="200" height="34" border="0" class="sing" /></a>
      <div class="menu">
        <ul>
   <li><a href="anasayfa.php" ><span>Ana Sayfa</span></a></li>
          <li><a href="hakkimizda.php"><span>Hakkımızda</span></a></li>
          <li><a href="icerik.php"class="active"><span>İçerikler</span></a></li>
          <li><a href="dersler.php"><span>Dersler</span></a></li>
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
      <h2>İçerikler</h2>
      <div class="clr"></div>
    </div>
  </div>
  <div class="clr"></div>
  <div class="body">
    <div class="body_resize">
      <div class="clr"></div>
       <form enctype="multipart/form-data" action="ibilgi.php"  method="POST">
 
<table width="376" border="1" align="center" cellpadding="4">
<tr>
<td width="120">Dosya Seçiniz:</td>
<td colspan="2"><input type="FILE" name="dosya"></td>
</tr>
<tr>
<td>Dosya İsimi Giriniz:</td>
<td width="144"><input type="text" name="etiket"></td>
<td width="72"><input type="submit" value="Yukle" /></td>
</tr>
</table>
</form>
<?php
    } else {
            echo "<script type=\"text/javascript\"> alert(\"Dosya yüklemek için giriş yapmış olmanız lazım!\"); window.location.href='giris.php';  </script> ";
    }
    ?>
      <p>&nbsp;</p>
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