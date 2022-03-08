<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
  
  public function index()
  {
    return view('newsletter', [
      'title' => 'Simple Webform'
    ]);
  }

  public function store(Request $request)
  {
    $request->validate([
      'email' => 'required|min:10|email:dns|unique:subscriptions'
    ]);

    Subscription::create([
      'email' => $request->email,
      'ip' => $request->ip()
    ]);
  }
}
