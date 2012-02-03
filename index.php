<?php

class Request { }

$req = new Request();
$req->uarg = array();
if (isset($_SERVER['PATH_INFO'])) {
  $req->uarg = explode('/', $_SERVER['PATH_INFO']);
  array_shift($req->uarg);
}
$req->restmeth = $_SERVER['REQUEST_METHOD'];
if ($req->restmeth == 'GET') {
  $req->param = $_GET;
}

print_r($req);

?>
