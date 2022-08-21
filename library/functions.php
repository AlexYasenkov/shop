<?php

/* Функция для загрузки страницы */
function loadPage($smarty, $controllerName, $actionName)
{
    /* Подключаем контроллер */
    require_once CONTROLLER_PATH_PREFIX . $controllerName . CONTROLLER_PATH_POSTFIX;

    /* Формируем название метода */
    $functionName = $actionName . 'Action';

    /* Вызываем функцию */
    $functionName($smarty);
}

/* Функция для загрузки шаблона */
function loadTemplate($smarty, $template)
{
    $templateName = $template . TEMPLATE_PATH_POSTFIX;

    $smarty->display($templateName);
}

/* Функция преобразует данные в ассоциативный массив */
function dataQueryToArray($link, $dataQuery)
{
    if (! $dataQuery) {
        echo 'Error: ' . mysqli_error($link);
        exit();
    }

    $result = [];
    while ($row = mysqli_fetch_assoc($dataQuery)) {
        $result[] = $row;
    }

    return $result;
}

/* Функция вернет запись в виде ассоциативного массива */
function rowQueryToArray($link, $rowQuery)
{
    if (! $rowQuery) {
        echo 'Error: ' . mysqli_error($link);
        exit();
    }

    return mysqli_fetch_assoc($rowQuery);
}

/* Функция для защиты от sql - инъекций */
function clearStr($link, $string)
{
    return htmlspecialchars(mysqli_real_escape_string($link, $string));
}

/* Функция убирает пробелы и проверяет данные из поста */
function getInputByPostData($name)
{
    return (isset($_POST[$name]) && !empty($_POST[$name])) ? trim($_POST[$name]) : null;
}

/* Перенаправление на необходимую страницу */
function redirect($url = '/')
{
    header("Location: {$url}");
    exit();
}

/* Функция работает в связке с методом dd() */
function debugOut($val)
{
    echo '<div>'
            .'<span><b>'.basename($val['file']).'</b> </span>'
            .'<span>('.$val['line'].') </span>'
            .'<span>'.$val['function'].'()</span>'
            .'<span> - '.dirname($val['file']).'.</span>'
        .'</div>';
}
function dd($value = null, $die = true)
{
    echo '<pre>';
        $trace = debug_backtrace();
        array_walk($trace, 'debugOut');
        var_dump($value);
    echo '</pre>';

    if ($die) die;
}

/* Функция для импорта данных из бд в xml файл */
function createXmlFile($products)
{
    $xml = new DOMDocument('1.0', 'UTF-8');

    $xmlProducts = $xml->appendChild($xml->createElement('products'));
    foreach ($products as $product) {
        $xmlProduct = $xmlProducts->appendChild($xml->createElement('product'));
        foreach ($product as $key => $val) {
            $xmlName = $xmlProduct->appendChild($xml->createElement($key));
            $xmlName->appendChild($xml->createTextNode($val));
        }
    }

    $xml->save($_SERVER['DOCUMENT_ROOT'] . '/xml/products.xml');
}

/* Функция для загрузки файла */
function uploadFile($file, $path)
{
    /* 2мб */
    $maxSize = 2 * 1024 * 1024;
    if ($file['size'] > $maxSize) return false;

    $path = $_SERVER['DOCUMENT_ROOT'].$path;
    if (! file_exists($path)) mkdir($path);

    $newFileName = time().'_'.$file['name'];

    if (is_uploaded_file($file['tmp_name'])) {
        return move_uploaded_file($file['tmp_name'], $path . $newFileName);
    }
}