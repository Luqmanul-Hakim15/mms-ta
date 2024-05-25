<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeaderTemplate;
use App\Models\FooterTemplate;
use App\Models\Verificator;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TemplateController extends Controller
{
    public function headerTemplate(Request $request) {
        // dd($request->all());
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
    public function footerTemplate(Request $request) {
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
    public function verificatorTemplate(Request $request) {
        $request->validate([
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
            'name' => $request->name,
            'position' => $request->position,
            'signature_image' => 'images/signatures/' . $fileName,
        ];

        Verificator::create($data);

        return redirect()->route('admin.verifikator')->with('success', 'Verificator template added successfully.');
    }
}
