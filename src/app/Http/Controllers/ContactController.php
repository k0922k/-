<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view("index", compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
         $contact = $request->only([
            'first_name',
            'last_name',
            'gender',
            'email',
            'tel_1',
            'tel_2',
            'tel_3',
            'address',
            'building',
            'detail',
            'category_id'
        ]);

        $category = Category::find($contact['category_id']);


        return view('confirm', compact('contact', 'category'));

    }

    public function store(Request $request)
    {
        $contact = $request->only([
            'first_name',
            'last_name',
            'gender',
            'email',
            'tel_1',
            'tel_2',
            'tel_3',
            'address',
            'building',
            'detail',
            'category_id'
        ]);

        Contact::create($contact);

        return redirect()->route('thanks');

    }


    public function showEditForm(Request $request)
    {
        $previousInput = $request->old();
        return view('index', compact('previousInput'));
    }


}