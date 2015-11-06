<?php
/**
 * Created by PhpStorm.
 * User: Gitc
 * Date: 24.07.2015
 * Time: 11:11
 */
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
