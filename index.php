
<?php
include 'functions.php';
error_reporting (E_ALL);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Домашнее задание 4: картинки</title>
    <style>

    table {
    border-collapse: collapse;
    width: 70%;
}
    th, td {
      padding: 15px;
      text-align: left;
      border-style: solid;
      border-width: 1px;
      border-color: #ddd;
    }
      tr:hover {background-color: #e3f0f4}

    </style>
  </head>

  <body>

<?php
json_to_table ('phone_book.json');
?>

<h3>Добавить новый контакт</h3>
<form action="form.php" method="post" enctype="multipart/form-data">

        <label for="name">Имя контакта</label>
        <input itype="text" id="name" name="name" />
        <label for="phone_number">Телефон</label>
        <input type="text" id="phone_number" name="phone_number" />
        <button type="submit">Отправить</button>

</form>
</br>

<b>Просмотреть файл CSV: <a href="phone_book.json">phone_book.json</a></b>;

</body>
