<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForwardMail;
use App\Mail\ContactReplyMail;
class ContactController extends Controller
{
    function onSendContact(Request $req)
    {
        $contactDataArray = json_decode($req->getContent(), true);
        $name = $contactDataArray['name'];
        $email =  $contactDataArray['email'];
        $massage = $contactDataArray['massage'];

        $result = Contact::insert(['names' => $name, 'emails' => $email, 'massages' => $massage]);
        $myEmail = 'admin@totot.com';
   
        $details = $req->toArray();        
  
        Mail::to($myEmail)->send(new ContactForwardMail($details));
        Mail::to($myEmail)->send(new ContactReplyMail($details));
   
        // dd("Mail Send Successfully");
        if ($result) return "Data is received.";
        return false;
    }
    function onSelectAll()
    {
        $result = Contact::all();
        return $result;
    }


}
