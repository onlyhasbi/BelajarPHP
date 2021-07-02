<?php

class Person {
    const AUTHOR = "Muhammad Hasbi";

    var string $name;
    var ?string $address = null; //menggunakan tanda tanya didepean type data menandakan data ini boleh kosong (tidak ada value)
    var string $country = "Indonesia";

    function __construct(string $name,?string $address){
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(?string $name=null){
        //echo "Hello, $nama".PHP_EOL;
        if(is_null($name)){
            echo "Hi, my name is $this->name".PHP_EOL;
        } else {
            echo "Hi, my name is $name".PHP_EOL;
        }
    }

    function info(){
        echo "Author : ".self::AUTHOR.PHP_EOL;
    }

    function __destruct(){
        echo "Objek $this->name ini dihapus".PHP_EOL;
    }
}