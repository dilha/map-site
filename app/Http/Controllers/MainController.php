<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Banner;
use App\Models\About;
use App\Models\Choice;
use App\Models\Question;
use App\Models\Document;
use App\Models\Profession;
use App\Models\Language;
use App\Models\Adventage;
use App\Models\Contact;
use App\Models\Link;
use App\Models\Price;

use App\Models\Consultation;
use App\Models\Request as Req;

class MainController extends Controller
{
    public function index()
    {
        $banner = Banner::first();
        $about = About::first();
        $choice = Choice::first();
        $questions = Question::all();
        $document = Document::first();
        $profession = Profession::first();
        $language = Language::first();
        $advantages = Adventage::all();
        $contact = Contact::first();
        $links = Link::all();
        $price = Price::first();

        return view('index', compact(
            'banner',
            'about',
            'choice',
            'questions',
            'document',
            'profession',
            'language',
            'advantages',
            'contact',
            'links',
            'price',
        ));
    }

    public function callback(Request $request)
    {
        $consultation = Consultation::create([
            'name' => $request -> name,
            'phone' => $request -> number,
            'email' => $request -> email,
            'social' => $request -> radio,
        ]);

        \Mail::to('map-academy.ru@yandex.kz')->send(new \App\Mail\Callback($consultation));
        return redirect()->back();
    }

    public function req(Request $request)
    {
        $req = Req::create([
            'name' => $request -> name,
            'phone' => $request -> number,
            'email' => $request -> email,
            'country' => $request -> country,
            'language' => $request -> language,
            'budget' => $request -> budget,
        ]);

        \Mail::to('map-academy.ru@yandex.kz')->send(new \App\Mail\Request($req));
        return redirect()->back();
    }
}
