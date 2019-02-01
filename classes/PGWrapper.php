<?php
/**
 * Created by PhpStorm.
 * User: lipovoi
 * Date: 01.02.2019
 * Time: 14:56
 */

class PGWrapper
{
    function __construct()
    {
        $dbconn = pg_connect("host=ec2-54-228-224-37.eu-west-1.compute.amazonaws.com
                                              dbname=d3rih3oc2410p6 
                                              user=cpwgmmalrxjxwn 
                                              password=8264d475eee01c4080f157d8d260adbdc15f9133138424f0438f24ff3f8288e3")
        or die('Не удалось соединиться: ' . pg_last_error());
    }

    function pushNewElement($chat_id,$query)
    {
        $pg_query = '
            INSERT INTO "stats" ("chat_id", "query","date")
            VALUES (\''.$chat_id.'\', \''.$query.'\',\''.date("d.m.Y").'\');
        ';
        $result = pg_query($pg_query);
    }

    function getTotalQueries()
    {
        $pg_query = 'SELECT * FROM stats';
        $result = pg_query($pg_query);
        $ar_users = [];
        $total_queries = 0;
        while($line = pg_fetch_array($result, null, PGSQL_ASSOC))
        {
            if(!in_array($line['chat_id'], $ar_users))
            {
                $ar_users[] = $line['chat_id'];
            }
        }

    }
}