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

 <!-- <?php //foreach (Model_Portfolio::GetInfo() AS $index): ?>
    id: <?=$index['id']?>
    last_name: <?=$index['last_name']?>
		first_name: <?=$index['first_name']?>
		description: <?=$index['description']?>
<?php //endforeach; ?>  -->


<?php
	$connection = mysqli_connect("localhost", "root", "");
	$select_db = mysqli_select_db($connection,'appusers');
	mysqli_query($connection, "SET CHARACTER SET 'utf8'");

	$result=mysqli_query($connection, "SELECT first_name FROM userinfo;");
	while($row=mysqli_fetch_array($result))
	{
		if($row['first_name'] !== NULL && $row['first_name']!==''){
			echo "<p>".$row['first_name']."</p>";
		}
	}
	?>
