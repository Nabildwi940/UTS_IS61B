<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Mobil;
 
class mobilsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mobil = Mobil::orderBy('created_at', 'DESC')->get();
  
        return view('mobils.index', compact('mobil'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mobils.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Mobil::create($request->all());
 
        return redirect()->route('mobils')->with('Berhasil', 'Mobil berhasil ditambah');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mobil = Mobil::findOrFail($id);
  
        return view('mobils.show', compact('mobil'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mobil = Mobil::findOrFail($id);
  
        return view('mobils.edit', compact('mobil'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mobil = Mobil::findOrFail($id);
  
        $mobil->update($request->all());
  
        return redirect()->route('mobils')->with('Berhasil', 'Mobil Berhasil Di Edit');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mobil = Mobil::findOrFail($id);
  
        $mobil->delete();
  
        return redirect()->route('mobils')->with('ess', 'Mobil Berhasil Dihapus');
    }
}