<?php
/**
 * Created by PhpStorm.
 * User: romm
 * Date: 01.04.16
 * Time: 12:20
 *
 * Usage :
 *
 * http://$hostName/index.php?decode=$YourJSTP
 *
 */

require_once('JSTP.php');

if (isset($_GET['decode'])) {
    $parser = new Services_JSTP();
    var_dump($parser->decode($_GET['decode']));
}

class A {
    public $a = 10;
    public $b = "name";
    public $c = [1, 2, 3];
}

class B {
    public $b;

    function B() {
        $this->b = new A();
    }
}

if (isset($_GET['encode'])) {
    $parser = new Services_JSTP();
    echo $parser->encode(new B());
}