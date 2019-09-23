<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = \App\Service::all();

        return view('service.index', compact('services'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|min:5',
        ]);

        \App\Service::create($data);

        // $service = new \App\Service();

        // $service->name = request('name');

        // $service->save();

        return redirect()->back();
    }
}
