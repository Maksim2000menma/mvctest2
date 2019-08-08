<!-- <h1>Страница авторизации</h1>

<form action="" method="post">
<table class="login">
	<tr>
		<th colspan="2">Авторизация</th>
	</tr>
	<tr>
		<td>Логин</td>
		<td><input type="text" name="login"></td>
	</tr>
	<tr>
		<td>Пароль</td>
		<td><input type="password" name="password"></td>
	</tr>
	<th colspan="2" style="text-align: right">
	<input type="submit" value="Войти" name="btn" style="width: 150px; height: 30px;"></th>
</table>
</form> -->



<form action="" method="post">
<div class="row justify-content-center">
   <div class="col-md-6 col-sm-10 col-xs-10 form_window">
     <br>
     <h1>Авторизация</h1>
		 <br>

		 <div class="form-group row">
	     <label for="inputPassword" class="col-sm-4 col-form-label">Логин</label>
	     <div class="col-sm-8">
	       <input type="text" name="login" class="form-control" placeholder="Логин" required>
	     </div>
	   </div>

	   <div class="form-group row">
	     <label for="inputPassword" class="col-sm-4 col-form-label">Пароль</label>
	     <div class="col-sm-8">
	       <input type="password" name="password" class="form-control" placeholder="Пароль" required>
	     </div>
	   </div>

		 <input name="btn" class="btn btn-outline-primary full_width" type="submit" required value="Отправить">
	 <br>
	 <br>

	 </div>
 </div>
</form>


<div class="row justify-content-center">
   <div class="col-md-6 col-sm-10 col-xs-10">
<?php extract($data); ?>
<?php if($login_status=="access_granted") { ?>
<p style="color:green">Авторизация прошла успешно.</p>
<?php } elseif($login_status=="access_denied") { ?>
<p style="color:red">Логин и/или пароль введены неверно.</p>
<?php } ?>
</div>
</div>
