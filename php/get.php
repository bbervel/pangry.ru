<?php
$link = mysqli_connect("localhost", "pavel_pangry", "ADsW4TCFfqqQu8vy",'pavel_pangry');

if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}


/*$sqlRequest = 'SELECT * FROM messages';

$result = mysqli_query($link, $sqlRequest);

while ($row = mysqli_fetch_array($result)) {
    echo "<p>";
        echo "<span class='sent-header'>". $row['dateTime']. ' - ' .$row["person"]. ' - ' .$row["theme"];
        echo "</span>";
        echo "<span class='sent-text'>".$row["msg"];
        echo "</span></p>";
}



$sqlRequest = "SELECT * FROM messages";
$result = mysqli_query($link, $sqlRequest);
echo $result;
if($result = mysqli_query($link, $sqlRequest)){    
    foreach($result as $row){
        echo "<p>";
        echo "<span class='sent-header'>". $row['dateTime']. ' - ' .$row["person"]. ' - ' .$row["theme"];
        echo "</span>";
        echo "<span class='sent-text'>".$row["msg"];
        echo "</span></p>";
    }
}*/
?>