<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Session;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class PDFController extends Controller
{
    //
    public function show_request(){

        $company = Company::all();
        $data = [

            'company' => $company
        ];
        //$pdf = Pdf::loadView('pdf.request', $data);
        $pdf = view('pdf.request', $data)->toArabicHTML();
        $pdf = PDF::loadHTML($pdf)->output();

        // Create a stream response as a file download
        return response()->streamDownload(
        fn () => print($pdf), // add the content to the stream
        "invoice.pdf", // the name of the file/stream
        //$headers
);


        //$pdf = Pdf::loadView('pdf.request', $company);
        //return $pdf->download('request.pdf');
    }
}