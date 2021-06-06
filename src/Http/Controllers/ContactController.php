<?php

namespace Suizide\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Suizide\Contact\Models\Contact;
use Suizide\Contact\Mail\ContactMailable;
use Suizide\Contact\Http\Requests\StoreContactRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Suizide\Captcha\Models\Captcha;

class ContactController extends Controller
{
    public function index()
    {
        echo 'dfasfa';
        return redirect()->route('contact.create');
    }

    public function create()
    {
        return view('contact::contact');
    }

    public function store(StoreContactRequest $request)
    {
          $clientIP = \Request::ip();
          if(Captcha::where('ip', $clientIP)->where('answer', $request->_answer)->first())
          {
            Captcha::where('ip', $clientIP)->delete();
            Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
            $Contact = Contact::create($request->all());
            return redirect(route('contact.show', $Contact));
          }
          else
          {
            return view('contact::contact');
          }
    }

    public function show($id)
    {
          return view('contact::show');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
