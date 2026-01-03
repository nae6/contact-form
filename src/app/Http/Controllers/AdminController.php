<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $contacts = Contact::select('id', 'created_at', 'content')
            ->paginate(5);
        return view('admin', compact('contacts'));
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('detail', compact('contact'));
    }
}
