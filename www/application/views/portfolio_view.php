<h1>Страница 2</h1>
<p>Спикок пользователей</p>
<p>
<table>
<tr><td>id</td><td>Имя</td><td>Фамилия</td><td>Дата рождения</td></tr>
<?php
$count = 0;
	foreach($data as $row)
	{
		$count++;
		echo '<tr><td>'.$count.'</td><td>'.$row['firstname'].'</td><td>'.$row['lastname'].'</td><td>'.$row['date'].'</td></tr>';
	}
?>
</table>
</p>
