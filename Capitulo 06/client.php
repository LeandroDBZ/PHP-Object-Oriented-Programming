<?php
$location = 'http://localhost/Capitulo%2006/rest.php';
$parameters = [];
$parameters['class'] = 'PessoaServices';
$parameters['method'] = 'getData';
$parameters['id'] = '1';
$url = $location . '?' . http_build_query($parameters);
var_dump(json_decode(file_get_contents($url)));