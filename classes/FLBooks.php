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

        foreach($main_wrapper as $ul)
        {
            echo('<pre>');

            $pqul = pq($ul);
            var_dump($pqul->html());

            echo('</pre>');
        }


    }
}