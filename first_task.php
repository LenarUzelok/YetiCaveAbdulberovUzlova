<?php
$is_auth = rand(0, 1);
$user_name = 'Uzlova'; // укажите здесь ваше имя (в коде это поле пустое)


<!— здесь должен быть PHP код для показа меню и данных пользователя —>
<?php

if($is_auth==1)
{
?>
<div class="user-menu__image">
<img src="img/user.jpg" width="40" height="40" alt="Пользователь">
</div>
<div class="user-menu__logged">
<p><?= $user_name ?></p>
</div>
<?php
}
else
{
?>

<ul class="user-menu__list">
<li class="user-menu__item">
<a href="#">Регистрация</a>
</li>
<li class="user-menu__item">
<a href="#">Вход</a>
</li>
</ul>
<?php
}
?>