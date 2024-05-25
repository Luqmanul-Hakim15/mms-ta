<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.surat-masuk');
    }

    public function addMail()
    {
        //
        return view('admin.addincomingmail');
    }
    
    public function createMail()
    {
        //
        return view('admin.createmail');
    }
   
    public function previewemail()
    {
        //
        return view('admin.previewemail');
    }
    public function outgoingmails()
    {
        //
        return view('admin.outgoingmail');
    }

    public function templatecategories()
    {
        //
        return view('admin.templatecategory');
    }

    public function templateheaders()
    {
        //
        return view('admin.templateheader');
    }

    public function templatefooters()
    {
        //
        return view('admin.templatefooter');
    }

    public function verifikators()
    {
        //
        return view('admin.verifikator');
    }

    public function addverifikators()
    {
        //
        return view('admin.addverifikator');
    }
    public function showRegistrationForm()
    {
        return view('register');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
