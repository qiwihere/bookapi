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
        $_main = $html->find('div#main');
        $_uls = $_main->find('ul:not([class]):last')->find('li');
        foreach($_uls as $li)
        {
            #echo(htmlspecialchars(pq($li)->html()));
            $book_raw = pq($li);
            $link = $book_raw->find('a:first')->attr('href');
            $name = $book_raw->find('a:first')->text();
            $author = $book_raw->find('a:last')->text();
            $books[] = [
                'link'=>'http://flibusta.is'.$link.'/epub',
                'name'=>$name,
                'author'=>$author
            ];
        }
        return json_encode($books);
    }
}