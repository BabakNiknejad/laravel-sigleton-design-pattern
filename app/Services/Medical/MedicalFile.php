<?php

namespace App\Services\Medical;


class MedicalFile
{
    private $patient_id;

    private static $instance;

    private function __construct()
    {
    }


    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function setPatientId($id)
    {
        $this->patient_id = $id;
    }

    public function getPatientId()
    {
        return $this->patient_id;
    }
}
