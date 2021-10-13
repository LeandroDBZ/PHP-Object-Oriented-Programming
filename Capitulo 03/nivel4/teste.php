<?php
$conn = mysqli_connect('127.0.0.1', 'root', '', 'livro');
$query = 'SELECT * FROM pessoa ORDER BY id';
$result = mysqli_query($conn, $query);
$list = mysqli_fetch_array($result);
mysqli_close($conn);
var_export($list);