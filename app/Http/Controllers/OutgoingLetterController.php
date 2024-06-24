<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InternshipLetter;
use Illuminate\Support\Facades\Auth;

class OutgoingLetterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nomorSurat' => 'required|string|max:255|unique:internship_letters,reference_number',
            'namaPihakPertama' => 'required|string|max:255',
            'namaPihakKedua' => 'required|string|max:255',
            'Nik' => 'required|string|max:16',
            'alamat' => 'required|string',
            'kelamin' => 'required|string',
            'tempatDibuat' => 'required|string',
            'tanggalDibuat' => 'required',
            'posisiKerja' => 'required',
            'Penempatan' => 'required',
            'pembayaran' => 'nullable',
            'uangMakan' => 'nullable',
            'uangTransportasi' => 'nullable',
            'dibayarDalam' => 'required',
            'tanggalDimulai' => 'required',
            'tanggalBerakhir' => 'required',
            'penerima' => 'required|integer|exists:verificators,id'
        ]);

        $data = [
            'user_id' => Auth::id(),  // Assuming the user is authenticated
            'verificator_id' => $request->input('penerima'),
            'reference_number' => $request->input('nomorSurat'),
            'name' => $request->input('namaPihakKedua'),
            'date_created' => $request->input('tanggalDibuat'),
            'identification_number' => $request->input('Nik'),
            'gender' => $request->input('kelamin'),
            'location_from' => $request->input('tempatDibuat'),
            'intern_position' => $request->input('Penempatan'),
            'address' => $request->input('alamat'),
            'paid' => $request->input('pembayaran', false),
            'meal_allowance' => $request->input('uangMakan', 0),
            'transport_allowance' => $request->input('uangTransportasi', 0),
            'payment_time' => $request->input('dibayarDalam'),
            'start_date' => $request->input('tanggalDimulai'),
            'end_date' => $request->input('tanggalBerakhir'),
        ];

        $internshipLetter = InternshipLetter::create($data);

        return redirect()->route('surat.internship', ['id' => $internshipLetter->id])->with('success', 'Pembuatan Surat Magang berhasil.');
    }

    public function show($id)
    {
        // Retrieve the letter by its ID
        $letter = InternshipLetter::findOrFail($id);

        // Return a view to show the letter details, if needed
        return view('letter.show', compact('letter'));
    }

    // Method to delete a letter
    public function destroy($id)
    {
        // Retrieve the letter by its ID
        $letter = InternshipLetter::findOrFail($id);

        // Delete the letter
        $letter->delete();

        // Redirect back with a success message, or you can customize this based on your application's requirements
        return redirect()->back()->with('success', 'Letter deleted successfully.');
    }
}
