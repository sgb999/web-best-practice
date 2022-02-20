<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    /**
     * return home.vue component
     */
    public function home()
    {
        return inertia('Home');
    }
    /**
     *
     * return About.vue component
     */
    public function about()
    {
        return inertia('About');
    }

    public function contactUs()
    {
        return inertia('ContactUs');
    }

    public function contactForm(ContactStoreRequest $request)
    {

        ContactForm::create($request->validated());
        return response()->json(['success' => 'Your message has been sent']);
    }
}
