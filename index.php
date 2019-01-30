<?
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('lib/simple_html_dom.php');
require_once('classes/FLBooks.php');


FLBooks::GetBookList('Девушка в поезде');
