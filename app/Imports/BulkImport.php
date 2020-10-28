<?php

namespace App\Imports;

use App\Bulk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BulkImport implements ToModel,WithHeadingRow
{

    // we use withHeadingRow to not include the head of excel in to database 
    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd( $row);
        return new Bulk([
                'name'     => $row["name"],
                'email'    => $row["email"],
            ]);
      
    }
}
