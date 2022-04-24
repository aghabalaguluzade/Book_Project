<?php

namespace App\Http\Controllers\generalController;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Books;
use App\Models\Category;
use App\Models\FeatureSection;
use App\Models\General_Questions;
use App\Models\Partners;
use App\Models\Settings;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class generalController extends Controller
{

    public function index() {
        return view('index');
    }

    public function fragmented() {
        $categories = Category::where('parent_id',0)->get();
        $partners = Partners::where('status','1')->inRandomOrder()->get();
        $settings = Settings::all();
        View::share([
            'categories' => $categories,
            'partners' => $partners,
            'settings' => $settings,
        ]);
    }

    public function templates() {
        $this->fragmented();
        $banners = Banner::all();
        $blogs = Blog::orderBy('created_at','desc')->get();
        $books = Books::orderBy('created_at','desc')->get();
        View::share([
            'banners' => $banners,
            'blogs' => $blogs,
            'books' => $books
        ]);
        return view('templates.index');

    }

    public function faq() {
        $this->fragmented();
        $questions = General_Questions::inRandomOrder()->get();
        View::share('questions',$questions);
        return view('templates.faq');
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

    public function Bloq() {
        $this->fragmented();
        $blogs = Blog::orderBy('created_at','desc')->get();
        $blogs_archive = Blog::whereDate('created_at', Carbon::today())->get();
        View::share([
            'blogs' => $blogs,
            'blogs_archive' => $blogs_archive,
        ]);
        return view('templates.blog');
    }

    public function BloqContent($slug) {
        $this->fragmented();
        $blogs = Blog::where('slug',$slug)->get();
        View::share([
            'blogs' => $blogs
        ]);
        return view('templates.blog-content');
    }

    public function AboutUs() {
        $this->fragmented();
        return view('templates.about_us');
    }

    public function BooksProduct($slug) {
        $this->fragmented();
        $slugs = Books::where('slug',$slug)->get();
        $relate_books = Books::where('slug',$slug)->first();
        $relate = $relate_books->category_id;
        $related = Books::where('slug','!=',$slug)->where('category_id',$relate)->get();
        View::share([
            'slugs' => $slugs,
            'related' => $related
        ]);
        return view('templates.product-details');
    }

}
