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
}