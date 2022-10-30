<?php

namespace App;

class Developer {

protected $name = 'Developer';
protected $seniority = '1';
private static $instance = null;


private function __construct($name, $seniority)
{
    $this->name = $name;
    $this->seniority = $seniority;
}

public static function getInstance()
{
if (self::$instance == null)
{
self::$instance = new Developer();
}
return self::$instance;
}
}
