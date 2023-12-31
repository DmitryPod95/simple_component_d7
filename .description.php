<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentDescription = array(
    // название компонента
    'NAME' => 'Главный слайдер на странице',
    // описание компонента
    'DESCRIPTION' => 'Выводит главный слайдер в шапке страницы',
    // путь к иконке компонента относительно папки компонента
    'ICON' => '/images/eaddlist.gif',
    // показывать кнопку очистки кеша
    'CACHE_PATH' => 'Y',
    // порядок сортировки в визуальном редакторе
    'SORT' => 30,
    // признак комплексного компонента
    'COMPLEX' => 'N',
    // расположение компонента в визуальном редакторе
    'PATH' => array(
        // идентификатор верхнего уровеня в редакторе                                        
        'ID' => 'slajder',
        // название верхнего уровня в редакторе                                 
        'NAME' => 'Слайдеры',
        // в элементе может быть задана подчиненная ветка дерева с той же структурой, что и родительская ветка                               
        'CHILD' => '',
    )
);
