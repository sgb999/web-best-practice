<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(ContactStoreRequest $request)
    {
        ContactForm::create($request->validated());
        return response()->json(['success' => 'Your message has been sent']);
    }
}
