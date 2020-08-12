<?php

//Debugando RouteCollection
//Function definePattern
//$pattern = "/Agenda/src/app/debug";
//$pattern = explode('/', $pattern);
//$pattern = array_filter($pattern);
//$pattern = implode('/', $pattern);
//$pattern = '/^' . str_replace('/','\/',$pattern) . '$/';
//$pattern = implode('/', array_filter(explode('/', $pattern)));
//var_dump($pattern);

//Debugando RouteCollection
//Function paseUri
//$uri = "/Agenda/src/app/debug";
//$uri = explode('/', $uri);
//$uri = array_filter($uri);
//$uri = implode('/', $uri);
//var_dump($uri);

//Debugando Request
//Function setData
//Transforma as passagens da uri para variavel e depois passa um array, cada variavel para posição do array
var_dump(parse_str(file_get_contents('php://input')));