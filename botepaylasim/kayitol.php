<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
            <input name="q" type="text" class="keywords" id="textfield" maxlength="50" value="Search..." />
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
  <h2>Bilgilendirme</h2>
  <p>&nbsp;</p>

 <?php
            include 'vtbaglan.php';
            $kullaniciAdi = $vt->real_escape_string($_REQUEST["kullaniciadi"]);
            $sifre = sha1($_REQUEST["sifre"]);  
            $eposta = $vt->real_escape_string($_REQUEST["eposta"]);            
            $sql = "insert into uye (kullaniciadi, sifre, eposta) VALUES ('$kullaniciAdi', '$sifre', '$eposta')";
            $vt->query($sql);
            if ($vt->error) {echo $vt->error;
                            echo $sql;
            } else {
				$_SESSION['kullaniciadi'] = $_REQUEST["kullaniciadi"]; 
				$_SESSION["yetki"]=true;
                echo "Başarıyla kayıt oldunuz";
            }
            //$sonuc->free();
            $vt->close();
        ?>


<p><a href="anasayfa.php"> Geri Dön </a>
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
