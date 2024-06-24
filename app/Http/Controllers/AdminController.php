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
use App\Models\InternshipLetter;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['incoming'] = IncomingLetter::count();
        $data['user'] = IncomingLetter::with('user')->get();
        return view('admin.incomingletter', $data);
    }

    public function addMail()
    {
        Carbon::setLocale('id');
        $data['date'] = Carbon::now()->translatedFormat('l, d F Y');
        return view('admin.addincomingmail', $data);
    }

    public function createMail()
    {
        $data['verif'] = Verificator::all();
        return view('admin.createmail', $data);
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
        $data['outgoing'] = InternshipLetter::count();
        $data['letter'] = InternshipLetter::with('verificator')->get();
        return view('admin.outgoingmail', $data);
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

        if ($request->hasFile('imageProfile')) {
            $extension = $request->file('imageProfile')->getClientOriginalExtension();

            $date = Carbon::now()->format('Y-m-d');
            $filenameImage = $request->file('imageProfile')->getClientOriginalName();
            $fileName = $date . '-' . pathinfo($filenameImage, PATHINFO_FILENAME) . '.' . $extension;

            $request->file('imageProfile')->move(public_path('images/profile'), $fileName);

            $user->image_profile = 'images/profile/' . $fileName;
        }

        // Check each input and update only if not empty
        if ($request->filled('firstname')) {
            $user->firstname = $request->input('firstname');
        }
        if ($request->filled('lastname')) {
            $user->lastname = $request->input('lastname');
        }
        if ($request->filled('username')) {
            $user->username = $request->input('username');
        }
        if ($request->filled('email')) {
            $user->email = $request->input('email');
        }
        if ($request->filled('position')) {
            $user->position = $request->input('position');
        }

        $user->save();
        session()->flash('success', 'Profil berhasil diperbarui!');

        return redirect()->back();
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
            'newPassword' => ['required', 'min:8'],
        ]);

        $user->password = Hash::make($request->input('newPassword'));
        $user->save();

        session()->flash('success', 'Password berhasil diperbarui!');

        return redirect()->back();
    }
    public function user()
    {
        return view('admin.usersAccount');
    }
    public function adduser()
    {
        return view('admin.addAccount');
    }
    public function internLetter($id)
    {
        $data['intern'] = InternshipLetter::findOrFail($id);
        $data['verif'] = InternshipLetter::with('verificator')->findOrFail($id);
        Carbon::setLocale('id');
        return view('surat.intern', $data);
    }
    public function bastLetter()
    {
        return view('surat.bast');
    }
}
