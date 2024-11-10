<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StickerController extends Controller
{
    public function showStickerPage()
    {
        return view('sticker');
    }
        // Handle form submission
        public function submitForm(Request $request)
        {
            // Handle form submission logic here, such as saving data to the database
            // For this example, we're assuming the form submission is successful.
    
            return view('finish');
        }
    
        // Show the finish page
        public function finish()
        {
            return view('finish'); // You can create a `finish.blade.php` view for the final page
        }
    

}
