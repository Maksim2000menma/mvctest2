<h1>Панель администрирования</h1>
<table style="width:100%;">
  <tr>
      <th>id</th>
      <th>first_name</th>
      <th>last_name</th>
      <th>date</th>
      <th>login</th>
      <th>password</th>
      <th>role_id</th>
      <th>function</th>
     </tr>
     <?php
      	foreach($data as $row)
      	{
     		?>
      <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['first_name']?></td>
        <td><?php echo $row['last_name']?></td>
        <td><?php echo $row['date']?></td>
        <td><?php echo $row['login']?></td>
        <td><?php echo $row['password']?></td>
        <td><?php echo $row['role_id']?></td>
        <td>
          <center>
          <a href="/user/allinfo/<?=$row['id']?>"><img class="small_ico in_row" src="/images/more_info.jpg"></a>
          <a href="/user/edit/<?=$row['id']?>"><img class="small_ico in_row" src="/images/edit_info.png"></a>
          <a href="/user/delete/<?=$row['id']?>"><img class="small_ico in_row" src="/images/delete_info.png"></a>
        </center>
        </td>
      </tr>
    <?php }
 ?>
</table>
<br>
<br>
<br>
<div id="user_table">
</div>
