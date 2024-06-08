<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeaderTemplate;
use App\Models\FooterTemplate;
use App\Models\Verificator;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class HeaderTemplateController extends Controller
{
    public function create(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'ukuran' => 'required|string',
            'templateHeader' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->has('default')) {
            HeaderTemplate::where('default', true)->update(['default' => false]);
        }

        $extension = $request->file('templateHeader')->getClientOriginalExtension();

        $date = Carbon::now()->format('Y-m-d');
        $nameHeader = str_replace(' ', '-', $request->name);
        $fileName = $date . '-' . $nameHeader . '.' . $extension;

        $request->file('templateHeader')->move(public_path('images/headers'), $fileName);

        $data = [
            'user_id' => Auth::id(),
            'name' => $request->name,
            'type' => $request->ukuran,
            'image' => 'images/headers/' . $fileName,
            'default' => $request->has('default')
        ];

        HeaderTemplate::create($data);

        return redirect()->back()->with('success', 'Header template added successfully.');
    }
    
    
}
