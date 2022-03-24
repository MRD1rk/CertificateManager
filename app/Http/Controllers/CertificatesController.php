<?php

namespace App\Http\Controllers;


use App\Models\Certificate;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CertificatesController extends Controller
{
    public function checkout(Request $request)
    {
        $validatedData = $request->validate([
            'certificateNumber' => 'required|int',
            'courceName' => 'required|string',
            'certificateDateEnd' => 'required|date_format:"Y-m-d"',
            'studentFirstname' => 'required|max:32',
            'studentMiddlename' => 'required|max:32',
            'studentLastname' => 'required|max:32',
        ]);
        $certificate = Certificate::create($validatedData);

        return view('certificates/view', ['certificate' => $certificate]);
    }

    public function confirm($id)
    {
        $certificate = Certificate::find($id);
        $certificate->isConfirmed = true;
        $certificate->save();
        return Redirect::route('certificates.view',[$id])->with('message', 'You can download your certificate');
    }

    public function download($id)
    {
        $certificate = Certificate::find($id);
        $pdf = PDF::loadView('certificates/pdf-template', ['certificate' => $certificate]);
        return $pdf->download('certificate.pdf');
    }

    public function view($id)
    {
        $certificate = Certificate::find($id);
        if (!$certificate) {
            return Redirect::back()->withErrors('Certificate can not be found!');
        }
        return view('certificates/view', ['certificate' => $certificate]);
    }
}
