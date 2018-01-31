<?php
/**
 * Created by PhpStorm.
 * User: Marko
 * Date: 1/3/2018
 * Time: 5:20 PM
 */

namespace App\Http\Controllers;

use App\Services\InquiryService;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function submitForm( Request $request ) {

        /*$validatedData = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);*/

        echo $request->get('name');

        $inquiryService = new InquiryService();
        $inquiryService->sendMail( $request );
    }
}