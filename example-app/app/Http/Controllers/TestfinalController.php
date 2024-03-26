<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testfinal;

class TestfinalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $testfinal = Testfinal::all();
       return view ('testfinal.index')->with('testfinal', $testfinal);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testfinal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Testfinal::create($input);
        return redirect('testfinal')->with('flash_message', 'Testfinal Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $testfinal = Testfinal::find($id);
        return view('testfinal.show')->with('testfinal', $testfinal);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testfinal = Testfinal::find($id);
        return view('testfinal.edit')->with('testfinal', $testfinal);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $testfinal = Testfinal::find($id);
        $input = $request->all();
        $testfinal->update($input);
        return redirect('testfinal')->with('flash_message', 'Testfinal Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testfinal::destroy($id);
        return redirect('testfinal')->with('flash_message', 'Testfinal deleted!');
    }
}
