<?php

namespace App\Http\Controllers;

use App\Category;
use App\subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('subcategory.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // validation
         $request -> validate([
            'subcategoryname' => 'required | max:255'
        ]);

        // if validation cleared
        $subcategory = new Subcategory();
        $subcategory->category_id = $request['category_id'];
        $subcategory->subcat_name = $request['subcategoryname'];
        $subcategory->subcat_slug = Str::slug($request['subcategoryname']);
        $latestslug = subcategory::whereRaw("subcat_slug RLIKE '^{$subcategory->subcat_slug}(-[0-9]*)?$'")
        ->latest('subcatid')
        ->value('subcat_slug');
        if($latestslug){
            $pieces = explode('-', $latestslug);
            $number = intval(end($pieces));
            $subcategory->subcat_slug .= '-' . ($number + 1);
        }
        $subcategory->save();
        return redirect('/home');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(subcategory $subcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subcategory $subcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(subcategory $subcategory)
    {
        //
    }
}
