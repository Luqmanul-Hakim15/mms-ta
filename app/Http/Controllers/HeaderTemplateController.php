<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeaderTemplate;
use Illuminate\Support\Facades\Storage;
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
    
    public function updateDefault($id) {
        // Reset all default values to 0
        HeaderTemplate::where('default', 1)->update(['default' => 0]);

        // Set the selected item to default
        $item = HeaderTemplate::find($id);
        if ($item) {
            $item->default = 1;
            $item->save();
        }

        return redirect()->back();
    }
    public function delete($id) {
        $item = HeaderTemplate::find($id);
        if ($item) {
            if ($item->image && Storage::disk('public')->exists($item->image)) {
                Storage::disk('public')->delete($item->image);
            }

            $item->delete();
        }
        return redirect()->back()->with('status', 'Item deleted successfully!');
    }
}
