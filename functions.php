<?php

//Функция шаблонизатор
function include_template($name, $data)
{

    $name = 'templates/' . $name; //Переданному имени файла конкотинируется путь к папке
    $result = '';

    if (!file_exists($name)) { //file_exists - Проверяет наличие указанного файла или каталога
        return $result;
    }

    ob_start(); //Включение буферизации вывода
    extract($data); //Импортирует переменные из массива в текущую таблицу символов
    require $name; //Подключаем файл

    $result = ob_get_clean(); //Получить содержимое текущего буфера и удалить его
    return $result;
}
