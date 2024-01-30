<?php 
namespace Alura\DesignPatern\Http;

interface HttpAdapter{
    public function post(String $url, array $data = []) : void;
    
}