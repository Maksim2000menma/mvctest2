<h1>Регистрация</h1>
<p>Необходимо заполнить все поля для регистрации</p>

<form  action="" method="post"><!--action="/application/views/registration_view.php"   or  /controller_registration.php-->
  <p><label>Фамилия&emsp;</label><br><input type="text" name="last_name" placeholder="Фамилия" required></p>
  <p><label>Имя&emsp;</label><br><input type="text" name="first_name" placeholder="Имя"></p>
  <p><label>Дата рожднения  (мб сменю)&emsp;</label><br><input type="date" name="date" placeholder="Дата рожднения  (мб сменю)"></p>
  <p><label>Имя пользователя&emsp;</label><br><input type="text" name="login" placeholder="Имя пользователя"></p>
  <p><label>Пароль &emsp;</label><br><input type="password" name="password" id="pass" placeholder="Пароль"></p>
  <!-- <p><label>Повторите пароль&emsp;</label><br><input type="text" name="" placeholder="Повторите пароль"></p> -->
  <p><label>Описание о себе&emsp;</label><br><input type="text" name="description" placeholder="Описание о себе"></p>
  <p><label>Адресс проживания&emsp;</label><br><input type="text" name="address" placeholder="Адресс проживания"></p>
  <br>

  <input name="submitadd" type="submit" required value="Отправить">
</form>

<?php
// $connection = mysqli_connect("localhost", "root", "");
// $select_db = mysqli_select_db($connection,'appusers');
//
// if (isset($_POST['submitadd'])){
// 			$last_name = $_POST['last_name'];
// 			$query = "INSERT INTO userinfo (last_name) VALUES ('$last_name')";
// 			$result = mysqli_query($connection, $query);
// 			if($result){
// 				$smsg="Добавление прошло успешно";
// 			echo $smsg;
// 		}
// 		else {
// 			$fsmsg="Ошибка";
// 		}
// 		}
 ?>
