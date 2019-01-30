<?php
/**
 * Created by PhpStorm.
 * User: Артем
 * Date: 30.01.2019
 * Time: 16:51
 */

class FLBooks
{
    static public function GetBookList($query)
    {
        $html = phpQuery::newDocument(file_get_contents('http://flibusta.is/booksearch?ask='.urlencode($query)));
        $list = $html->find('div#main-wrapper')->find('ul')->find('li');
        echo('<pre>');
        var_dump($list);
        echo('</pre>');
    }
}