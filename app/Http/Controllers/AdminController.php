<?php

namespace App\Http\Controllers;

use App\Models\FooterTemplate;
use App\Models\HeaderTemplate;
use App\Models\IncomingLetter;
use App\Models\Verificator;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = IncomingLetter::with('user')->get();
        return view('admin.incomingletter', compact('data'));

    }

    public function addMail()
    {
        Carbon::setLocale('id');

        $data['date'] = Carbon::now()->translatedFormat('l, d F Y');
        return view('admin.addincomingmail', $data);
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
    public function sharemail()
    {
        //
        return view('admin.mailshare');
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
        $data = HeaderTemplate::orderBy('default', 'desc')->get();
        return view('admin.templateheader', compact('data'));
    }

    public function templatefooters()
    {
        $data = FooterTemplate::orderBy('default', 'desc')->get();
        return view('admin.templatefooter', compact('data'));
    }

    public function verifikators()
    {
        $data = Verificator::all();
        return view('admin.verifikator', compact('data'));
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
    public function profil() {
        return view('admin.accountProfil');
    }
    public function change() {
        return view('admin.changePasswords');
    }
    public function user() {
        return view('admin.usersAccount');
    }
    public function adduser() {
        return view('admin.addAccount');
    }
    public function internLetter() {
        return view('surat.intern');
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
