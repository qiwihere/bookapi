<?

require_once('lib/phpQuery.php');
require_once('classes/FLBooks.php');

$query = $_GET['query'];
if($query)
{
    echo(FLBooks::GetBookList($query));
}
