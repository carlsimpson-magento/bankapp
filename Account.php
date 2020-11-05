<?php
/**
 * Created by PhpStorm.
 * User: carlsimpson
 * Date: 05/11/2020
 * Time: 10:04
 */

class Account
{
    private $id;
    private $name;
    private $authenticated;



    public function __construct()
    {
        $this->id = NULL;
        $this->name = NULL;
        $this->authenticated = FALSE;
    }

    public function __destruct()
    {

    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function isAuthenticated()
    {
        return $this->authenticated;
    }




}