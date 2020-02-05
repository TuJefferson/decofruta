<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Mail\MyDemoMail;
use Mail;
   
class EmailController extends Controller
{
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function myDemoMail()
    {
        $myEmail = 'prioridad.25@gmail.com';
   
        $details = [
            'title' => 'Mail Demo from ItSolutionStuff.com',
            'url' => 'https://www.itsolutionstuff.com'
        ];
  
        Mail::to($myEmail)->send(new MyDemoMail($details));
   
        dd("Mail Send Successfully");
    }
}