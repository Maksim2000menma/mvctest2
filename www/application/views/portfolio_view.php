<h1>Страница 2</h1>
<p>Спикок пользователей</p>


<?php
 	foreach($data as $row)
 	{
		// $str = '<p>-'.$row['id'].'-'.$row['first_name'].'-'.$row['last_name'].'-'.$row['date'].'-'.$row['login'].'-'.$row['password'].
		// '-'.$row['description'].'-'.$row['address'].'-'.$row['role_id'].'</p>';
		// echo $str;?>
		<div class="fon_user">
			<div class="line_info_user">
					<div class="small siz" style="line-height:1;">
						<p class="small_size"><?php echo $row['login']?></p>
						<p class="small_size"><?php echo $row['password']?></p>
					</div>
				<p class="big_size"><?php echo $row['first_name'].' '.$row['last_name']?></p>
			</div>
			<div class="line_info_user">
				<p class="normal_size"><?php echo $row['date']?></p>
				<p class="normal_size"><?php echo $row['address']?></p>
				<p class="small_size"><?php echo $row['description']?></p>
				<p class="small_size"><?php echo $row['role_id']?></p>
			</div>
		</div>
 	<?php }
?>
