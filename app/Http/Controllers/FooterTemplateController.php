<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FooterTemplate;
use App\Models\IncomingLetter;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class FooterTemplateController extends Controller
{
    public function create(Request $request) {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'ukuran' => 'required|string',
            'templateFooter' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->has('default')) {
            FooterTemplate::where('default', true)->update(['default' => false]);
        }

        $extension = $request->file('templateFooter')->getClientOriginalExtension();

        $date = Carbon::now()->format('Y-m-d');
        $nameFooter = str_replace(' ', '-', $request->name);
        $fileName = $date . '-' . $nameFooter . '.' . $extension;

        $request->file('templateFooter')->move(public_path('images/footers'), $fileName);

        $data = [
            'user_id' => Auth::id(),
            'name' => $request->name,
            'type' => $request->ukuran,
            'image' => 'images/footers/' . $fileName,
            'default' => $request->has('default')
        ];

        FooterTemplate::create($data);

        return redirect()->back()->with('success', 'Footer template added successfully.');
    }

    public function updateDefault($id) {
        // Reset all default values to 0
        FooterTemplate::where('default', 1)->update(['default' => 0]);

        // Set the selected item to default
        $item = FooterTemplate::find($id);
        if ($item) {
            $item->default = 1;
            $item->save();
        }

        return redirect()->back();
    }
    public function delete($id) {
        $item = FooterTemplate::find($id);
        if ($item) {
            if ($item->image && Storage::disk('public')->exists($item->image)) {
                Storage::disk('public')->delete($item->image);
            }

            $item->delete();
        }
        return redirect()->back()->with('status', 'Item deleted successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'ukuran' => 'required|string',
            'templateFooter' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $footer = FooterTemplate::findOrFail($id);

        $footer->name = $request->name;
        $footer->type = $request->ukuran;
        $footer->default = $request->has('default');

        if ($request->hasFile('templateFooter')) {
            if ($footer->image && Storage::disk('public')->exists($footer->image)) {
                Storage::disk('public')->delete($footer->image);
            }

            // Simpan file baru
            $extension = $request->file('templateFooter')->getClientOriginalExtension();

            $date = Carbon::now()->format('Y-m-d');
            $nameFooter = str_replace(' ', '-', $request->name);
            $fileName = $date . '-' . $nameFooter . '.' . $extension;

            $request->file('templateFooter')->move(public_path('images/footers'), $fileName);

            // Update path file di database
            $footer->image = 'images/footers/' . $fileName;
        }

        // Simpan perubahan
        $footer->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Footer updated successfully!');
    }
}
