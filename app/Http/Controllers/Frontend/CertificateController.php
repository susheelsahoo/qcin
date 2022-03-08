<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Image;

/**
 * Class CertificateController.
 */
class CertificateController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $img = Image::make(public_path('certificate.png'));
        //$img->text('This is a example ', 120, 100);
        $img->text('This is a example ', 120, 100, function ($font) {
            // $font->file(public_path('fonts/font.ttf'));
            $font->size(28);
            $font->color('#000000');
            $font->align('center');
            $font->valign('bottom');
            $font->angle(90);
        });
        $img->save(public_path('certificate1.png'));

        return view('frontend.certificate.index');
    }
}
