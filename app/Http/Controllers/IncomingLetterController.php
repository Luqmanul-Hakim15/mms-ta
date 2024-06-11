<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\IncomingLetter;
use Illuminate\Support\Facades\Storage;

class IncomingLetterController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'fileName' => 'required|string|max:255',
            'tanggal' => 'required',
            'fileInput' => 'required|file|mimes:pdf|max:2048'
        ]);

        $extension = $request->file('fileInput')->getClientOriginalExtension();

        $date = Carbon::now()->format('Y-m-d');
        $nameMail = str_replace(' ', '-', $request->fileName);
        $file = $date . '-' . $nameMail . '.' . $extension;

        $request->file('fileInput')->move(public_path('incomingLetters'), $file);

        $data = [
            'user_id' => Auth::id(),
            'tanggal' => $request->tanggal,
            'file_name' => $request->fileName,
            'file' => 'incomingLetters/' . $file,
        ];

        IncomingLetter::create($data);

        return redirect()->route('surat-masuk')->with('success', 'Incoming Letter added successfully.');
    }
    public function delete($id)
    {
        $item = IncomingLetter::find($id);
        if ($item) {
            if ($item->file && Storage::disk('public')->exists($item->file)) {
                Storage::disk('public')->delete($item->file);
            }

            $item->delete();
        }
        return redirect()->back()->with('status', 'Item deleted successfully!');
    }
}
