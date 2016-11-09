<?php

// Функция преобразования JSON в табличку
function json_to_table ($jsonFilePath) {
  $json = file_get_contents($jsonFilePath);
  $profiles = json_decode($json, true);

  echo "<table>";

  foreach ($profiles as $arr) {
    foreach($arr as $header => $content) {
      echo "<tr>";
      $header = headers_rus($header);
      echo "<td>$header</td><td>$content</td>";
      echo "</tr>";

    }
  }

  echo "</table>";
}

/* Функция на случай ошибки при парсинге JSON

function json_error () {
    switch(json_last_error()) {
        case JSON_ERROR_NONE:
            echo ' - Keine Fehler';
        break;
        case JSON_ERROR_DEPTH:
            echo ' - Maximale Stacktiefe überschritten';
        break;
        case JSON_ERROR_STATE_MISMATCH:
            echo ' - Unterlauf oder Nichtübereinstimmung der Modi';
        break;
        case JSON_ERROR_CTRL_CHAR:
            echo ' - Unerwartetes Steuerzeichen gefunden';
        break;
        case JSON_ERROR_SYNTAX:
            echo ' - Syntaxfehler, ungültiges JSON';
        break;
        case JSON_ERROR_UTF8:
            echo ' - Missgestaltete UTF-8 Zeichen, möglicherweise fehlerhaft kodiert';
        break;
        default:
            echo ' - Unbekannter Fehler';
        break;
    }
}

*/

// Функция для преобразования ключей из массива в заголовки на русском
function headers_rus ($header) {
  switch ($header) {
      case 'name':
          $header = "Имя контакта";
      break;
      case 'phoneNumber':
          $header = "Телефон";
      break;
    }
    return $header;
}

// Функция для добавления нового контакта в JSON-файл
function newContact($jsonFilePath, $name, $phoneNumber)
{
$json = file_get_contents($jsonFilePath);
$data = json_decode($json, true);
$data[] = array('name' => "$name", 'phoneNumber' => "$phoneNumber");
file_put_contents($jsonFilePath, json_encode($data, JSON_FORCE_OBJECT));
}

?>
