<?php

namespace App\Imports;

use App\Models\Customer;
use App\Models\DataList;
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


    public function model(array $row)
    {

        $customer = new Customer([
            "customer_phone" => $row["customer_phone"],
            "data_list_id" => $row["data_list_id"]
        ]);

        $customer->data_list_id = $row["data_list_id"];
        $customer->save();

    }

    public function generate_random_string($length = 11)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
