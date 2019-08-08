<h1>Добро пожаловать!</h1>
<a href="/">Главная</a>
<br>



<?php if($_SESSION['login'] == ''){?>
  <center><a href="/registration"><button><p style="font-size: 20pt;">Регистрация</p></button></a></center>
  <br>
  <hr>
  <center>
    <a href="/login">
      <h2>Авторизация</h2>
    </a>
  </center>
<?php } else { ?>
  <br>
  <p class="big_size">Тут была Регистрация и Авторизация но сейчас в этом нет нужны т к ты авторизирован</p>
<?php }?>
