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
        $main_wrapper = phpQuery::newDocument($html->find('ul'));
        $list = pq($main_wrapper[1]);
        echo('<pre>');
        var_dump($list->html());
        echo('</pre>');


    }
}