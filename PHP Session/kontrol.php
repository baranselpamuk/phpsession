<?php
if(isset($_POST['kullanici']) && isset($_POST['sifre'])) { // form gönderilmiş mi
   $kullanici = $_POST['kullanici'];
   $sifre = $_POST['sifre'];
 
   if(empty($kullanici) || empty($sifre)) { // gönderilenler boş mu
      echo 'Lütfen boş bırakmayın';
   } else {
      if($kullanici == 'baransel' && $sifre == '123456') { 
         session_start();
         $_SESSION['kullanici'] = 'baransel';
         $_SESSION['sifre'] = '123456';
        echo 'Başarıyla Giriş Yaptınız Panele gidebilirsiniz.';
      } else {
         echo 'Yanlış kullanıcı adı ya da şifre';
      }
   }
} else {
   echo 'Lütfen formu kullanın';
}
?>
<html><br>
<button><a href="/phpbaglanti/panel.php">Burdan Gidebilirsiniz.</button>