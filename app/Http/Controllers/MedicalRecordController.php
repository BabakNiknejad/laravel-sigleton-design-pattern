<?php

namespace App\Http\Controllers;

use App\Services\Medical\MedicalFile;

class MedicalRecordController extends Controller
{
    public function showMedicalRecord($id)
    {

       $medical_file = MedicalFile::getInstance();
        $medical_file->setPatientId($id);
        $patientId = $medical_file->getPatientId();

        return response()->json([
           'data' => $patientId
        ]);
    }
}
