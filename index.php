<?php
$file = 'text.txt';
if (!file_exists($file)) {
    echo "Створіть файл";
} else {
    file_put_contents($file, 'Я вивчаю PHP');

    $content = file_get_contents($file);
    echo nl2br($content);

    file_put_contents($file, "Пробую писати програми", FILE_APPEND);
    echo "Запис виконано";

    $file_content = file_get_contents($file);
    echo nl2br($file_content);

    $file_size = filesize($file);
    echo "Розмір файлу: " . $file_size . " байт";

    $last_modified = filemtime($file);
    echo "Останні зміни в файлі були зроблені: " . date("F d Y H:i:s.", $last_modified);

    $created_time = filectime($file);
    echo "Файл був створений: " . date("F d Y H:i:s.", $created_time);

    $file2 = 'text2.txt';
    $new_file = fopen($file2, "w");
    fclose($new_file);

    file_put_contents($file2, "другий файл готовий");

    $file2_content = file_get_contents($file2);
    $file2_size = filesize($file2);
    echo nl2br($file2_content);
    echo "Розмір файлу text2.txt: " . $file2_size / 1024 . " KB";
}
