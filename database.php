<?php
// connect to MySQL

$con = mysqli_connect("localhost","root","","yakbak");

// test connection

if(!$con){
    echo 'failed to connect to MySQL: ' .mysqli_connect_error();
}
