<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FooterTemplate;
use Illuminate\Support\Carbon;
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
}
