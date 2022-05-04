<?php

namespace App\Http\Controllers\SettingsController;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\General_Questions;
use App\Models\Partners;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class SettingsTemplateController extends Controller
{
    public function fragmented() {
        $categories = Category::where('parent_id',0)->where('status','1')->get();
        $partners = Partners::where('status','1')->inRandomOrder()->get();
        $settings = Settings::all();
        View::share([
            'categories' => $categories,
            'partners' => $partners,
            'settings' => $settings,
        ]);
    }

    public function contact() {
        $this->fragmented();
        return view('templates.contact');
    }

    public function contactPost(Request $request) {

        $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|email',
            'message'=> 'required|min:5'
        ]);

        $contact_message = [
            'name' => $request->name,
            'email' => $request->email,
            'messages' => $request->message
        ];

            Mail::send('templates.contact-message',$contact_message, function($message) use ($contact_message) {
                $message->from($contact_message['email']);
                $message->to('agabala.oyunda@gmail.com');
            });
            return back()->with('message_sent','Message Göndərildi');;

    }

    public function AboutUs() {
        $this->fragmented();
        return view('templates.about_us');
    }

    public function faq() {
        $this->fragmented();
        $questions = General_Questions::inRandomOrder()->get();
        View::share('questions',$questions);
        return view('templates.faq');
    }
}
