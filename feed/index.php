<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../feed/css/feed.css" />
    <title>FeedBack Form</title>
</head>
<body>

<div class="container">
    <div class="block">
        <form method='get' action=''>
            <p>Спасибо за Ваш FeedBack:)</p>
            <p><textarea name="feed" cols="48" rows="5"></textarea></p>
            <p><input type="submit" value="Отправить">
                <input type="reset" value="Очистить"></p>
        </form>
    </div>
</div>
<?php
if ($_GET) {
    echo '<div class="feed">Ваш фидбек принят. Спасибо.</div>';} ?>
</body>
</html>