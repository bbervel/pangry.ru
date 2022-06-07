<?php
$person=$_POST['person'];
$theme=$_POST['theme'];
$message=$_POST['message'];

$link = mysqli_connect("localhost", "pavel_pangry", "ADsW4TCFfqqQu8vy",'pavel_pangry');

if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}

$sql = "INSERT INTO messages (person, theme, msg) values ('$person','$theme', '$message')";
$result = mysqli_query($link, $sql);

if ($result == false) {
    print("Произошла ошибка при выполнении запроса");
} else{
    echo "<p style='font-size:35px'>Надеюсь тебе стало легче, когда выговорился!<br>
    Хочешь еще? <a style='text-decoration: auto;' href='https://pangry.ru'>Возвращайся на pangry.ru</a></p>";
}

?>