<?php

namespace App;

class Test
{
    public function hello(): string
    {
        $fname = 'John ';
        $lname = 'Doe';

        return $fname . ' '. $lname;
    }
}
