<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Lamaran;


class LamaranController extends Controller
{
    public function index(){
        return view('lamaran', [
            'lamaran' => lamaran::get()
        ]);
    }

    public function store(Request $request)
    {
    

        $validatedData= $request->validate([
            'name' => 'required|max:255',
            'no_telpon' => 'required|min:10',
            'email' => 'required|unique:lamaran',
            'file_cv' => 'file'
        ]);

        if($request->file('file_cv')){
            $validatedData['file_cv'] = $request->file('file_cv')->store('post-file_cvs');
        }

        Lamaran::create($validatedData);

        return redirect('/lamaran')->with('success', 'Your cv has been send');
        
    }

    public function show(){
        return view('dashboard.lamaran.index', [
            'lamaran' => Lamaran::get()
        ]);
    }

    public function destroy(lamaran $lamaran)
    {
        if($lamaran->file_cv){
            Storage::delete($lamaran->file_cv);
    }
        lamaran::destroy($lamaran->id);
        return redirect('/dashboard/lamaran/index')->with('success', 'Lamaran has been deleted');
    }
    
    public function detail($name){
        return view('dashboard.lamaran.show', [
            'lamaran' => Lamaran::where('name', $name)->first()
        ]);
    }
}
