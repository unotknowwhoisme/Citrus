<?php

namespace App\Models;

interface UsersInterface {
    public function __construct($id=null, $data=[]);
    public function getName() : string;
    public function setName($value) : void;
}