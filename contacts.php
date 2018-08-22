<?php
    $msgFail = "";
    $msgSuccess = "";

    if(filter_has_var(INPUT_POST, 'submit')){
        $name = htmlspecialchars($_POST['name']);
        $msg = htmlspecialchars($_POST['message']);
        $company = htmlspecialchars($_POST['company']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
//        $file = $_POST['file'];
          
        if(!empty($name) && !empty($msg) && !empty($email) && !empty($phone)){
            if(empty($company)){
                $company = "Частно лице";
            }
            $to = "akcent_34@abv.bg";
            $subject = "Запитване от " . $name;
            $from = $email;
            $body = "<h3>Имейл: " . $email . "</h3>" . "<h3>Фирма: " . $company . "</h3>" . "<h3>Телефон за връзка: " . $phone . "</h3>" . "<h3> Съобщение: " . $msg . "</h3>";
            $headers = "MIME-version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n;";
            mail($to, $subject, $body, $headers);
            $msgSuccess = "Благодаря за отправеното запитване. Ще получите отговор от нас в най-кратък срок.";
            $name = "";
            $msg = "";
            $company = "";
            $email = "";
            $phone = "";
            $file = "";
        }else {
            $msgFail = "Моля попълнете всички задължителни полета";
        }
    }
?>
<!DOCTYPE html>
<html>
  <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113495941-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-113495941-1');
</script>
    <meta charset="utf-8">
    <meta name="robots" content="Index,Follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="В зависимост от нуждите и желанията, може да се свържете се с нас на посочените телефони, имейл или дори да използвате контактната ни форма, както и да заповядате в офиса ни на посочения адрес. Очакваме ви.">
    <meta name="keywords" content="reklama akcent,реклама акцент,ситопечат,sitopechat,контакти,адрес,имейл,телефон,,карта,запитване,въпрси,ул.„Хан Крум“44, 8000 ж.к.Възраждане,Бургас">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="icon" href="./images/favicon.png">
    <meta name="author" content="Daniel Dushev">
    <title>Акцент - Контакти</title>
  </head>
  <body>
<header>
  <div class="container">
    <div id="branding">
  <h1><span class="highlight">Акцент</span>  Ситопечат и реклама</h1>
</div>
<nav id="nav">
<ul>
    <li ><a  href="/">Начало</a></li>
    <li ><a  href="/about">За нас</a></li>
  <li ><a href="/gallery-screen-printing">Галерия</a></li>
  <li class="current"><a href="/contacts">Контакти</a></li>
</ul>
</nav>
</div>
</header>
<section id="contacts">
  <figure>
  </figure>
  <main>
    <aside>
      <h1> Свържете се с нас</h1>
      <div>
      <img src="./images/pin.png" alt="pin">
      <p>ул. „Хан Крум“ 44, 8000 ж.к. Възраждане, Бургас</p>
    </div>
    <div>
      <img src="./images/phone.png" alt="phone">
      <p>+359 887 816 205, +359 886 838 897</p>
    </div>
    <div>
      <img src="./images/email.png" alt="email">
      <p id="nomargin">akcent_34@abv.bg</p>
    </div>
    </aside>
    <div id="map" >
      </div>
      <!-- <div id="feedback">
        <div id="form">
            <form method="post" action="<?php $location = $_SERVER['PATH_INFO']; 
echo ''.$location.'#form';?>">
              <hr>
              <fieldset>
                  <legend>Изпратете ни запитване</legend>
                  <hr>
                  <label class="labelPos">Име:<span class="requiredField">*</span></label>
                  <input value="<?php echo isset($_POST['name']) ? $name : ""; ?>" class="leftPos" type="text" name="name" required=""><br>
              <label class="msgLabel">Съобщение:<span class="requiredField">*</span></label>
              <textarea name="message" required=""><?php echo isset($_POST['message']) ? $msg : ""; ?></textarea><br>
              <label class="labelPos">Фирма:</label>
              <input value="<?php echo isset($_POST['company']) ? $company : ""; ?>" class="leftPos" type="text" name="company" ><br>
              <label class="labelPos">Имейл:<span class="requiredField">*</span></label>
              <input value="<?php echo isset($_POST['email']) ? $email : ""; ?>" class="leftPos" type="email" name="email" required=""><br>
              <label class="labelPos">Телефон:<span class="requiredField">*</span></label>
              <input value="<?php echo isset($_POST['phone']) ? $phone : ""; ?>" class="leftPos" type="phone" name="phone" required=""><br>   
<!--              <input value="" id="file" type="file" name="file"><br> -->
             <!-- <input  id="submit" type="submit" name="submit" value="Изпрати">
              </fieldset>
          </form> 
      </div>
      </div> 
      <?php if($msgFail != ""):?>
      <div class="msgSubmitFail"><?php echo $msgFail ?><span class="requiredField"> *</span></div>
      <?php endif; ?>
      <?php if($msgSuccess != ""): ?>
      <div class="msgSubmitSuccess"><?php echo $msgSuccess?></div>
      <?php endif; ?> -->

    <script>
function initMap(){
  var location = {lat: 42.490929, lng: 27.468048};
  var map =  new google.maps.Map(document.getElementById("map"),{
    zoom:15,
    center: location
  });
  var marker =new google.maps.Marker({
    position: location,
    animation:google.maps.Animation.BOUNCE,
    map: map
  });
  var infowindow = new google.maps.InfoWindow({
  content:"Очакваме ви!"
  });

infowindow.open(map,marker);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVoYqS9HS-OTMkOJNRX3TcH6FhC69qddU&callback=initMap"></script>

  </main>
</section>

<div id="spacecontainer">
</div>
<footer>
  <p>Колорис Дизайн, Copyright &copy; 2017 <a href="https://www.facebook.com/reklamaakcent/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></p>
</footer>
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/formjQuery.js"></script>
  </body>
</html>
