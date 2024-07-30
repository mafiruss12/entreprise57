<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NetworkController extends Controller
{
    public function index()
    {
        $networks = [
            ['country' => 'Côte d\'Ivoire', 'network_address' => '192.168.1.0/24'],
            ['country' => 'Ghana', 'network_address' => '192.168.2.0/24'],
            ['country' => 'Sénégal', 'network_address' => '192.168.3.0/24'],
        ];

        return view('networks.index', compact('networks'));
    }
}

