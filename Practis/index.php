<?php
// вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя,
// пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
session_start();
?>
<html>
<head>
  <title>Авторизация</title>
</head>
<body>

  <form action="testreg.php" method="post">
    <!--testreg.php - это адрес обработчика. То есть, после нажатия на кнопку  "Войти",
    данные из полей отправятся на страничку testreg.php методом  "post"-->
    <!--В текстовое поле (name="email" type="text") пользователь вводит свою почту-->
    <p>
      <label>Ваше Имя:</label><br>
      <input name="name" type="text" size="30" maxlength="30">
    </p>
    <!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** -->
    <!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** -->
    <p>
      <input type="submit" name="submit" value="Войти">
      <br>
    </p>
  </form>
  <br>
  <?php
  /*// Проверяем, пуста ли переменная почты
  if (empty($_SESSION['email']))
  {
    // Если пуста, то мы не выводим ссылку
    //echo "Вы вошли на сайт, как гость<br><a href='#'>Эта ссылка  доступна только зарегистрированным пользователям</a>";
  }
  else
  {
    // Если не пуста, то мы выводим ссылку
    echo "Вы вошли на сайт, как ".$_SESSION['email']."<br><a  href='http://tvpavlovsk.sk6.ru/'>Эта ссылка доступна только  зарегистрированным пользователям</a>";
  }*/
  ?>
  <p>
Работа выполнена студентами г. Нижневартовск НВГУ 3-го курса направление ИиВТ. Паркаланов В.В., Желудков Н.П.
</p>
</body>
</html>
