<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Bize Ulaşın</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
// <![CDATA[
jQuery(document).ready(function(){
	$('#contactform').submit(function(){				  
		var action = $(this).attr('action');
		$.post(action, { 
			name: $('#name').val(),
			email: $('#email').val(),
			company: $('#company').val(),
			subject: $('#subject').val(),
			message: $('#message').val()
		},
			function(data){
				$('#contactform #submit').attr('disabled','');
				$('.response').remove();
				$('#contactform').before('<p class="response">'+data+'</p>');
				$('.response').slideDown();
				if(data=='Message sent!') $('#contactform').slideUp();
			}
		); 
		return false;
	});
});
// ]]>
</script>
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
          <li><a href="dersler.php"><span>Dersler</span></a></li>
          <li><a href="iletisim.php"class="active"><span>Bize Ulaşın</span></a></li>
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
      <h2>Bize Ulaşın</h2>
      <div class="clr"></div>
    </div>
  </div>
  <div class="clr"></div>
  <div class="body">
    <div class="body_resize">
      <div class="right2">
        <h2>Bize Ulaşın</h2>
        <p><strong>Ders notlarını veya diğer istek ve önerileriniz için bize mail yollayın.</strong></p>
        <p>&nbsp;</p>
        <form action="contact.php" method="post" id="contactform">
          <ol>
            <li>
              <label for="name">Adınız Soyadınız <span class="red">*</span></label>
              <input id="name" name="name" class="text" />
            </li>
            <li>
              <label for="email">Mail Adresiniz <span class="red">*</span></label>
              <input id="email" name="email" class="text" />
            </li>
            <li>
              <label for="company">Bölümünüz</label>
              <input id="company" name="company" class="text" />
            </li>
            <li>
              <label for="subject">Sınıfınız</label>
              <input id="subject" name="subject" class="text" />
            </li>
            <li>
              <label for="message">Mesajınız <span class="red">*</span></label>
              <textarea id="message" name="message" rows="6" cols="50"></textarea>
            </li>
            <li class="buttons">
              <input type="image" name="imageField" id="imageField" src="images/send.gif" />
            </li>
          </ol>
        </form>
      </div>
      <div class="right1">
        <h2>Hazırlayanlar</h2>
        <p>Sabiha Buse DURMUŞ<br />
          <strong>Mert TOKAMA</strong><br />
          <br />
        </p>
        <div class="line"></div>
        <p><img src="images/map.jpg" alt="picture" width="286" height="203" /></p>
      </div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <ul>
        <li><a href="anasayfa.php">Ana Sayfa</a></li>
        <li><a href="hakkimizda.php">Hakkımızda</a></li>
        <li><a href="icerik.hmtl">İçerikler</a></li>
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