<?php
namespace controllers;

use config\dbcon;

class Add extends dbcon
{
    function __construct()
    {
        parent::__construct();
    }


    function getAll()
    {
        $result =  $this->getAllFromDb();
        return $result;
    }

}
