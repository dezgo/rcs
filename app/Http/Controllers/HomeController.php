<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('content.home');
    }

    public function basic()
    {
        return view('content.basic');
    }

    public function contact_send(Request $request)
    {
        $this->validate($request, [
                      'name' => 'required',
                      'email' => 'email|required_without:phone',
                      'phone' => 'required_without:email|regex:/^\\(?[01][23478]\\)? ?[0-9\\s]{4,10}$/',
                  ]);

        $message = trans('content.contact_success', ['name' => $request->name]);
        // try {
            Mail::send('emails.contact', ['request' => $request], function ($m) use ($request) {
                $m->from('info@aameenrendering.com.au', 'Aameen Rendering & Construction');
                $m->to(['1min-sms@fut.io'], 'Nabeel Allkoud')
                  ->subject(trans('content.email-subject', ['name' => $request->name]));
            });
        // }
        // catch (\Exception $e) {
        //     return back()->withInput()->with('message_error', trans('content.contact_error', ['name' => $request->name]));
        // }
        return redirect('/home')->with('message_success', $message);
    }
}
