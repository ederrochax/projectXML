<?php
include '../services/Curl.php';

$download = new Curl();

$path = 'http://localhost/projectXML/tests/teste.xml';

return $download->resquest($path);

