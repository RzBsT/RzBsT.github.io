<?php
    //Вся процедура работает на сессиях.
    //Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();

    //заносим введенное пользователем имя в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['name'])) { $name = $_POST['name']; if ($name == '') { unset($name);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
    if (empty($name)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
      exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }

    //если почта и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $name = stripslashes($name);
    $name = htmlspecialchars($name);

//удаляем лишние пробелы
    $name = trim($name);

// подключаемся к базе
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь

$result2 = mysqli_query ($db,"INSERT INTO Users (Name) VALUES('$name')");
$result = mysqli_query($db,"SELECT * FROM Users WHERE Name='$name'");  //извлекаем из базы все данные о пользователе с введенным логином
    $myrow = mysqli_fetch_array($result, MYSQLI_BOTH);
    $_SESSION['email']=$myrow['email'];
?>
<title>Главная страница</title>
<h2>Главная страница</h2>
<?php
echo "Вы успешно вошли на сайт! Здравствуйте, $name</a>";
?>
<form action="reg.php" method="post">
<a href='reg.php'><button>Лекции</button></a>
</form>
<form action="save_user.php" method="post">
<a href='save_user.php'><button>Лабораторные</button></a>
</form>
<form action="test.php" method="post">
<a href='test.php'><button>Тестирование</button></a>
</form>
<p>
Работа выполнена студентами г. Нижневартовск НВГУ 3-го курса направление ИиВТ. Паркаланов В.В., Желудков Н.П.
</p>