<?php
/**
 * Created by PhpStorm.
 * User: Marko
 * Date: 1/3/2018
 * Time: 5:46 PM
 */

namespace App\Services;

class InquiryService
{
    public function sendMail( $content )
    {
        var_dump($content);
        //mail('markopaju92@gmail.com', 'My Subject', "my message");
    }
}