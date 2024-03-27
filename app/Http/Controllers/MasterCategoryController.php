<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\CategoriesDataTable;
use App\Models\Category;

class MasterCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CategoriesDataTable $dataTable)
    {
        return $dataTable->render('dashboard.masterCategory', [
            'title' =>  'Master Category',
            'pageTitle' =>  'Master Category',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => '',
            'slug' => '',
            'description' => '',
        ]);

        $category = Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description
        ]);

        return redirect()->route('/masters/categories')->with('success', 'Berhasil Menambah Data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => $request->name,
            'slug' => $request->name,
            'description' => $request->description
        ]);

        $category = Category::findOrFail($id);
        $category->update([
            'name' => $request->name,
            'slug' => $request->name,
            'description' => $request->description
        ]);
        return redirect()->route('/masters/categories')->with('success', 'Sukses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('/masters/{id}/categories')->with('success', 'Sukses');
    }
}
