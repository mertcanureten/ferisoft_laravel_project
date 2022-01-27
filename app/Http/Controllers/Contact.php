<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class Contact extends Controller
{
  public function insert(Request $request) {
    Contacts::create([
      'name' => $request->name,
      'message' => $request->message,
      'is_deleted' => 0,
    ]);
    return $request;
  }
  public function getContact() {
    $contacts = Contacts::where('is_deleted','0')->get();
    return $contacts;
  }
  public function delete(Request $request) {
    $contact = Contacts::find($request->id);
    $contact->is_deleted = 1;
    $contact->save();
    return $contact;
  }
}
