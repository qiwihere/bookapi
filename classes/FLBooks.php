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
        $html = file_get_html('http://flibusta.is/booksearch?ask='.urlencode($query));
        echo(htmlspecialchars($html));
    }
}