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
     <h3> Bilgilendirme</h3>
	 
	 
      <?php
        include "vtbaglan.php";
        var_dump($_POST);
        var_dump($_FILES);
        $etiket = $vt-> real_escape_string ($_POST["etiket"]);
        $yukleyen = $_SESSION["kullaniciadi"];
		

		chdir("yuklenenler/");
		mkdir($yukleyen , "0777"); 
		chdir($yukleyen);
		$klasoryolu = getCwd();
		$hedefKlasor = chdir($klasoryolu);
        $hedefKlasor = $hedefKlasor.basename($_FILES['dosya']['name']); 

        //basename ile sadece dosyanın ismi alınıyor. 
        
        
        if (!(file_exists($hedefKlasor))) {
            $dosyabiricik = true;
        } else {
            $dosyabiricik = false;
            echo "<script type=\"text/javascript\"> alert(\"Lütfen dosyanın adını değiştirip yükleyiniz!\"); window.location.href='icerik.php';  </script> ";
        }
        
        
        if ((move_uploaded_file($_FILES['dosya']['tmp_name'], $hedefKlasor)) AND $dosyabiricik)
            { 
                    echo basename( $_FILES['dosya']['name'])." ismindeki dosya başarı ile yüklendi."; 
                    $herseytamam = true;
            }else{ 
                    echo "Bir hata oluştu!"; 
                    $herseytamam = false;
            } 
        if ($herseytamam) {
            $sql = "insert into icerik (baslik, htmlkod, yukleyen) VALUES ('$etiket', '$hedefKlasor', '$yukleyen')";
            $vt->query($sql);
            if ($vt->error) {echo $vt->error;
                            echo $sql;
            } else {
                echo "<script type=\"text/javascript\"> alert(\"Başarıyla yüklendi!\"); window.location.href='dersler.php';  </script> ";
            }
        }
            //$sonuc->free();
        $vt->close();
        ?>
		
		
<p> <a href="icerik.php">Geri dön. </a>
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