<?php

namespace App\Http\Controllers;

use App\Http\Requests\HealthCertificateRequest;
use Barryvdh\DomPDF\PDF;

class DocumentController extends Controller
{
    public function healthCertificate(HealthCertificateRequest $request) {

        $validated = $request->validated();

        view()->share('data', $validated);
        $pdf = PDF::loadView('pdf_view', $validated);
        return $pdf->download('gezondsheidsverklaring.pdf');

    }
}
