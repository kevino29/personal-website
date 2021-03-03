<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function resume()
    {
        $file = public_path() . "/assets/docs/kevin_orenday_resume.pdf";

        $headers = array(
            'Content-Type: application/pdf',
        );

        return Response::download($file, "Kevin_Orenday_Resume.pdf", $headers);
    }
}
