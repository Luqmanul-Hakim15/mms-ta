<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Verificator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class VerificatorTemplateController extends Controller
{
    public function create(Request $request) {
        $validated = $request->validate([
            'signatureCode' => 'required|string|unique:verificators,signature_code',
            'name' => 'required|string|max:255',
            'position' => 'required|string',
            'signatureImage' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $extension = $request->file('signatureImage')->getClientOriginalExtension();

        $date = Carbon::now()->format('Y-m-d');
        $nameSignature = str_replace(' ', '-', $request->name);
        $fileName = $date . '-' . $nameSignature . '.' . $extension;

        $request->file('signatureImage')->move(public_path('images/signatures'), $fileName);

        $data = [
            'user_id' => Auth::id(),
            'signature_code' => $request->signatureCode,
            'name' => $request->name,
            'position' => $request->position,
            'signature_image' => 'images/signatures/' . $fileName,
        ];

        Verificator::create($data);

        return redirect()->route('admin.verifikator')->with('success', 'Verificator template added successfully.');
    }
}
