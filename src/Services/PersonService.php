<?php
/**
 * Created by PhpStorm.
 * User: influans
 * Date: 10/22/16
 * Time: 4:34 PM
 */

namespace Starter\Services;

use Starter\Models\Person;

class PersonService
{
    
    private $person;

    public function __construct()
    {
        $this->person = new Person();
    }
    
    public function getFullName()
    {
        return ucfirst(strtolower($this->person->firstName)).' '.strtoupper($this->person->lastName);
    }

}