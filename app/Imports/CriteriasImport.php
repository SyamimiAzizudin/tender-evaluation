<?php

namespace App\Imports;

use App\Criteria;
use Maatwebsite\Excel\Concerns\ToModel;

class CriteriasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Criteria([
            'name'          => $row[0],
            'description'   => $row[1], 
        ]);
    }
}
