<?php
$db_host: "us-cluster-east-01.k8s.cleardb.net"
$db_user: "bdf27f4bfc0305"
$db_pass: "932c3912"
$db_name: "heroku_37ed812309da6b8"

$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("database connection error");
