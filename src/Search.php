<?php

namespace pedroloureiro\digitalCep;

class Search{ // buscar
    private $url = "https://viacep.com.br/ws/";

    public function getAddresFromZipcod(string $zipCode): array {// buscar pelo cep
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        $get = file_get_contents($this -> url . $zipCode . "/json" );
        return (array) json_decode($get);

     
    } 
}

