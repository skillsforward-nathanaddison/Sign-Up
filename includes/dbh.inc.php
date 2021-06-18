<?php

function databaseConn() {
    $serverName ="localhost";
    $dbUserName ="root";
    $dbPassword ="";
    $dbName ="loginsystem";

    return mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);
}