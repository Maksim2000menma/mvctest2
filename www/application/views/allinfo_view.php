


     <?php foreach($data as $row) {?>
       <p class="huge_size">Подробная информация о пользователе <b>"<?php echo $row['first_name'],' ', $row['last_name']?>"</b></p>

       <div class="norm_mar_vert">
        <p class="normal_size">Номер пользователя:&nbsp;<?php echo $row['id']?></p>
        <p class="normal_size">Имя пользователя:&nbsp;<b><?php echo $row['first_name']?></b></p>
        <p class="normal_size">Фамилия пользователя:&nbsp;<b><?php echo $row['last_name']?></b></p>
        <p class="normal_size">Дата рождения:&nbsp;<?php echo $row['date_b']?></p>
        <p class="normal_size">Логин:&nbsp;<b><?php echo $row['login']?></b></p>
        <p class="normal_size">Пароль:&nbsp;<b><?php echo $row['password']?></b></p>
        <p class="normal_size">Описание о себе:&nbsp;<?php echo $row['description']?></p>
        <p class="normal_size">Адресс проживания:&nbsp;<?php echo $row['address']?></p>
        <p class="normal_size">Статус пользователя:&nbsp;<b>
          <?php
          switch ($row['role_id']) {
              case 1:
              echo "Гость";
              break;
              case 2:
              echo "Зарегистрированный пользователь";
              break;
              case 3:
              echo "Модератор";
              break;
              case 4:
              echo "Администратор";
              break;
            }
          ?>
        </b></p>
      </div>
    <?php } ?>
