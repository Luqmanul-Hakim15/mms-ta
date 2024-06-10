<?php

namespace App\Http\Controllers;

use App\Models\FooterTemplate;
use App\Models\HeaderTemplate;
use App\Models\IncomingLetter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
        return view('admin.addverifikator');
    }
    public function showRegistrationForm()
    {
        return view('register');
    }
    public function profil()
    {
        $user = Auth::user();
        return view('admin.accountProfil', compact('user'));
    }
    public function updatedProfil(Request $request)
    {
        $user = Auth::user();

        $extension = $request->file('imageProfile')->getClientOriginalExtension();

        $date = Carbon::now()->format('Y-m-d');
        $filenameImage = $request->file('imageProfile')->getClientOriginalName();
        $fileName = $date . '-' . $filenameImage . '.' . $extension;

        $request->file('imageProfile')->move(public_path('images/profile'), $fileName);

        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->position = $request->input('position');
        $user->image_profile = 'images/profile/'. $fileName;

        $user->save();

        return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
    }
    public function change()
    {
        return view('admin.changePasswords');
    }
    public function changePassword(Request $request)
    {
        $user = Auth::user();

        // Validasi data yang diterima dari formulir
        $request->validate([
            'password' => ['required', function ($attribute, $value, $fail) use ($user) {
                if (!Hash::check($value, $user->password)) {
                    $fail('Password lama tidak sesuai.');
                }
            }],
            'newPassword' => ['required', 'min:8'], // Sesuaikan dengan persyaratan password baru Anda
        ]);

        // Jika validasi berhasil, maka update password baru
        $user->password = Hash::make($request->input('newPassword'));
        $user->save();

        return redirect()->back()->with('success', 'Password berhasil diperbarui!');
    }
    public function user()
    {
        return view('admin.usersAccount');
    }
    public function adduser()
    {
        return view('admin.addAccount');
    }
    public function internLetter()
    {
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
