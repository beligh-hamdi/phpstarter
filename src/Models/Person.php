<?php
/**
 * Created by PhpStorm.
 * User: influans
 * Date: 10/22/16
 * Time: 4:34 PM
 */

namespace Starter\Models;


class Person
{
    public $firstName;
    public $lastName;
    public $age;

    public function __construct($firstName=null, $lastName=null, $age=null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }
    

}