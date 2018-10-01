<?php

Class Foo
{
    public $foo;

    public function __construct()
    {
        $this->foo = 'foo';
    }


}

$foo = new Foo();
$func = function () {
    echo $this->foo;
};

// bindTo 返回一个绑定对象的函数，不改变原来的函数对象
$func = $func->bindTo($foo);


$func();


