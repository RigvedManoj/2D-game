<?php
if (isset($_GET['id']))
{
  $control=$_GET['id'];
}
$host    = "127.0.0.1";
$port    = 22039;
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
$result = socket_connect($socket, $host, $port) or die("Could not connect to server\n");
socket_write($socket, $control, strlen($control)) or die("Could not send data to server\n");
?>
