<?php

namespace App\Http\Controllers;

use App\Imports\CsvImport;
use App\Mail\SuccessMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use function GuzzleHttp\Promise\all;


class CsvFile extends Controller
{
    function index()
    {
        return view('csv_file');
    }



    public function csv_import()
    {
        Excel::import(new CsvImport, request()->file('file'));
        $user = Auth::user();
        Mail::to($user->email)->send(new SuccessMail());

        return redirect('/home');

    }


}
