<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function index()
    {
        // Code pour afficher la vue de paiement
        return view('payment');
    }
}
