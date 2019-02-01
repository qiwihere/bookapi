<?

require_once('lib/phpQuery.php');
require_once('classes/FLBooks.php');
require_once('classes/PGWrapper.php');
$query = $_GET['query'];
$chat_id = $_GET['chat_id'];
if($query)
{
    $pg = new PGWrapper();
    $pg->pushNewElement($chat_id,$query);

    echo(FLBooks::GetBookList($query));
}
