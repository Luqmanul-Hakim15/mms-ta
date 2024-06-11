<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Verificator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class VerificatorTemplateController extends Controller
{
    public function edit($id)
    {
        $verificator = Verificator::findOrFail($id);
        return view('admin.updatedverificator', compact('verificator'));
    }

    public function create(Request $request)
    {
        $request->validate([
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

    public function update(Request $request, $id)
    {
        $request->validate([
            'signatureCode' => 'required',
            'name' => 'required',
            'position' => 'required',
            'signatureImage' => 'nullable|file|mimes:jpeg,png,jpg',
        ]);

        $verificator = Verificator::findOrFail($id);
        $verificator->signature_code = $request->signatureCode;
        $verificator->name = $request->name;
        $verificator->position = $request->position;

        if ($request->hasFile('signatureImage')) {
            $extension = $request->file('signatureImage')->getClientOriginalExtension();
            $date = Carbon::now()->format('Y-m-d');
            $nameSignature = str_replace(' ', '-', $request->name);
            $fileName = $date . '-' . $nameSignature . '.' . $extension;
            $request->file('signatureImage')->move(public_path('images/signatures'), $fileName);
            $verificator->signature_image = 'images/signatures/' . $fileName;
        }

        $verificator->save();

        return redirect()->route('admin.verifikator')->with('success', 'Verifikator updated successfully');
    }

    public function delete($id)
    {
        $item = Verificator::find($id);
        if ($item) {
            if ($item->signature_image && Storage::disk('public')->exists($item->signature_image)) {
                Storage::disk('public')->delete($item->signature_image);
            }

            $item->delete();
        }
        return redirect()->back()->with('status', 'Item deleted successfully!');
    }
}
