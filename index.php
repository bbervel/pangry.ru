<!DOCTYPE html>
<?php
    include 'php/get.php';
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>pangry.ru - дешевле психолога однозначно</title>
    <script src="js/script.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="main">
    <div class="header">
        <div class="logo block">
            <section class="name">pangry.ru</section>
            <section class="phrase">Дешевле психолога, однозначно</section>
        </div>
        <div class="mails-sent block">
            <section class="count">ОТПРАВЛЕНО - 1 552 сообщений</section>
            <section class="mails-sent text">такому количеству людей стало легче</section>
        </div>
        <div class="phrase block">
            <section class="text">"Написать письмо на pangry.ru проще чем думать об этом постоянно"</section>
            <section class="sign">Ницше в письме к Юнгу 1925 год</section>
        </div>
    </div>

        <div class="text-block">
            <p>Ты замечаешь, что думаешь о чем то несколько раз в день или в неделю? А было такое, что после какой-то ситуации тебе хочется вернуться и сделать все по другому? 
                Нахамили, а ты так растерялся, что не нашел адекватных слов, что бы ответить и защитить свою психику от мудаков? 
                Или кто-то говорил явную чушь и оскорблял тебя, но не было возможности ответить адекватно? 
                А было такое, что до тебя что-то “дошло” про кого то, но говорить об этом с этим человеком уже поздно или странно и это не дает тебе покоя?
                Тогда ты там где нужно.
            </p>    
            <p>Написать письмо самое простое, что можно для спасения своей психики. Разные психологи это называют по-разному, но общий смысл - проговорить. Да, можно проговорить за 5000р в час с психологом, а можно и дешевле. Сильно дешевле, по цене, которую считаешь нужной заплатить за свое спокойствие.</p>
                
            <p>И посмотри о чем пишут люди - внизу есть раздел с последними 50 сообщениями. Они злятся, они признаются в любви, они говорят что другой не прав, они пишут письма себе, что бы не вел себя как кретин. И все это обезличено, так как тут нет регистрации или персональных данных. Только поля “Кому”, “О чем” и “Текст” ну и кнопка отправить. И не стесняйся писать об одном и том же по несколько раз - некоторые темы требуют долгого выхода, такие как конфликты с родителями, например.</p>
        </div>
            <div class="message">
                <h2>Отправь свое сообщение</h2>
                <form>
                    <label class="input-label" for="person">Кому</label>
                    <input class="input-text" type="text" size="41px" name="person" id="person" maxlength="255" autocomplete="off" placeholder="Кто адресат?">
                    
                    <label class="input-label" for="theme">Тема</label>
                    <input class="input-text" type="text" size="41px" name="theme" id="theme" maxlength="255" autocomplete="off" placeholder="О чем сообщение?">
                    
                    <label class="input-label" for="message">Сообщение</label>
                    <textarea required class="textarea-text"  name="message" id="message" maxlength="1700"></textarea>
                    <br>
                    <input type="button" name="preview" id="preview-btn" value="Готово!"   
                        data-sitekey="6LfBjEsgAAAAAPQmvTBr-ncpMZmHjgvvKTUqv1ec" 
                        data-callback='onSubmit' 
                        data-action='submit'>
                </form>
            </div>
        <div class="sent-block">
            <h3>Отправленные кем-то письма</h3>
            <?php
                $sqlRequest = 'SELECT * FROM messages';
                $result = mysqli_query($link, $sqlRequest);
                    while ($row = mysqli_fetch_array($result)) {
                    echo "<p>";
                    echo "<span class='sent-header'>". $row['dateTime']. ' - ' .$row["person"]. ' - ' .$row["theme"];
                    echo "</span>";
                    echo "<span class='sent-text'>".$row["msg"];
                    echo "</span></p>";
                }
            ?>
        </div>

    <div class="mudule">
        <div class="content">
            <div class="close-cross"></div>
            <h2>Вот что получилось</h2>             
                <p><b>кому</b> - <span class="content-item"></span></p>
                <p><b>тема</b> - <span class="content-item"></span></p>
                <p><b>сообщение</b> - <span class="content-item"></span></p>
                <input type="button" name="preview" id="save-btn" value="Отправляем!"
                data-sitekey="6LfBjEsgAAAAAPQmvTBr-ncpMZmHjgvvKTUqv1ec" 
                data-callback='onSubmit' 
                data-action='submit'>
                
                
        </div>
    </div>

</div>
</body>
</html>

