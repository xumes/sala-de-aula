<?php namespace App\Classes;

class Configurations
{

    /**
     * Configurations constructor.
     */
    public function __construct()
    {

    }

    public function dataBaseConfiguration()
    {
        $dataConf = [
            'DSN' => 'mysql:host=localhost;dbname=application',
            'user' => 'root',
            'pwd' => '',
        ];
        return $dataConf;
    }

}
