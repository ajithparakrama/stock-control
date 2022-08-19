<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $category = category::where('active','=',1)->paginate(10); 
        return view('category.index',compact('category'));
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inactive()
    {
         $category = category::where('active','=',0)->paginate(10); 
        return view('category.inactive',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            ['name'=>'required|min:5|max:255']
        );

        category::create([
            'name'=>$request->name
        ]);

        return redirect()->route('category.index')->with('message','Category Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
         return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        $request->validate(
            ['name'=>'required|min:5|max:255']
        );

        $category->update([
            'name'=>$request->name
        ]);

        return redirect()->route('category.index')->with('message','Category Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
      //   $category->delete();
        $category->update([
            'active'=>0
        ]);
         return redirect()->route('category.index')->with('danger','Category Deleted');
    }

    public function activate(category $category){
         $category->update([
              'active'=>1
        ]);
          return redirect()->route('category.index')->with('message','Category Deleted');
    }
}
