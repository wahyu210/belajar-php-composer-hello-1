<?php
namespace MochamadWahyu\Belajar;
class Customer{
    public function __construct(private string $name='guest'){

    }
    public function sayHello(string $name){
        return "hello $name, my name is $this->name";
    }
}