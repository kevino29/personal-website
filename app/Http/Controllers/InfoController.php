<?php

namespace App\Http\Controllers;

use App\Mail\SendMessage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InfoController extends Controller
{
    public function index()
    {
        return view('info.index');
    }

    public function contacts()
    {
        return view('info.contacts');
    }

    public function resume()
    {
        return view('info.resume');
    }

    public function skills()
    {
        return view('info.skills');
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to('ask.kevin.orenday@gmail.com')->
            send(new SendMessage($data['name'], $data['email'], $data['message']));

        $request->session()->flash('status', 'Message sent successfully!');
        return redirect('/');
    }
}
