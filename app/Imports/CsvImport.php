<?php

namespace App\Imports;

use App\Mail\SuccessMail;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CsvImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return Product::query()->forceCreate([
            'name' => $row["name"],
            'description' => $row["description"],
            'category' => $row["category"],
            'price' => $row["price"],
            'image' => 'noimage.jpg',
            'user_id' => Auth::user()->id,


            ]);

    }






}
