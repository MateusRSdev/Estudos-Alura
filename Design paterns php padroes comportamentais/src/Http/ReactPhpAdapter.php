<?php 
namespace Alura\DesignPatern\Http;

class ReactPhpAdapter implements HttpAdapter{
    public function post(String $url, array $data = []) : void{
        //implementacao do react php
        echo "React Php";
    }
}