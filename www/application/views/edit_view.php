<a href="/user">&larr; назад</a>
<br>
<br>
<h1>Изменение данных</h1>

<table style="width:100%;">
  <tr>
      <th>id</th>
      <th>first_name</th>
      <th>last_name</th>
      <th>date</th>
      <th>login</th>
      <th>password</th>
      <th>role_id</th>
      <th>Отправка</th>
  </tr>
<form  action="" method="post">
     <?php foreach($data as $row){ ?>
      <tr>
        <td><input class="full_all form-control" type="text" readonly name="id" value="<?php echo $row['id']?>"></td>
        <td><input class="full_all form-control" type="text" name="first_name" value="<?php echo $row['first_name']?>"></td>
        <td><input class="full_all form-control" type="text" name="last_name" value="<?php echo $row['last_name']?>"></td>
        <td><input class="full_all form-control" type="date" name="date" value="<?php echo $row['date']?>"></td>
        <td><input class="full_all form-control" type="text" name="login" value="<?php echo $row['login']?>"></td>
        <td><input class="full_all form-control" type="text" name="password" value="<?php echo $row['password']?>"></td>
        <td><?php echo $row['role_id']?></td>
        <td><input class="btn btn-outline-primary size_button" type="submit" name="submitapp" style="width:100px;"  value="ОК"></td>
      </tr>
    <?php }?>
</form>
</table>
