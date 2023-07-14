<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'studentID'=>$row[1],
            'classID'=>$row[3],
            'name'=>$row[2],
            'address'=>$row[4],
            'gpa'=>$row[5],
        ]);
    }
}
