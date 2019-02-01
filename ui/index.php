<?php
/**
 * Created by PhpStorm.
 * User: lipovoi
 * Date: 01.02.2019
 * Time: 14:57
 */

require_once('../classes/PGWrapper.php');

$pg = new PGWrapper();
$res = $pg->getTotalQueries();
var_dump($res);