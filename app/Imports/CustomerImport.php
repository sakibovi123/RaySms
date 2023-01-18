<?php

namespace App\Imports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CustomerImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    use Importable;
    private $listId;

    public function __construct($listId)
    {
        $this->listId = $listId;
    }



    public function model(array $row)
    {
        return new Customer([
            "customer_phone" => $row["customer_phone"],
            "data_list_id" => $this->listId
        ]);


    }
}
