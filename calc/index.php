<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
</head>
<body>
<form method=POST action='action.php'>
    <label for="first">Чиcло "а"<br></label>
    <input type="text" id="first" name="a"><br>
    <label for="second">Чиcло "b"<br></label>
    <input type="text"id="second" name="b"><br>
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>
    </select><br><br>
    <input type="submit" value="Равно"><br><br>
</form>
</body>
</html>