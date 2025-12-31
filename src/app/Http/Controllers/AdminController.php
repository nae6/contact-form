<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $contacts = Contact::select('id', 'created_at', 'content')->get();
        return view('admin', compact('contacts'));
    }
}
