<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $themes = Theme::all();
        return view('admin.themes.index' , compact('themes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.themes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            
            'title'=>'required| min:5',
            'sistem_version'=>'required|max:4',
            'updating_date'=>'required',
            'image_url'=>'required',
            'description'=>'required',
        ]);

        $newTheme = new Theme();
        // $newTheme->title = $data['title'];
        // $newTheme->sistem_version = $data['sistem_version'];
        // $newTheme->updating_date = $data['updating_date'];
        // $newTheme->image_url = $data['image_url'];


        $newTheme->fill($data);
        $newTheme->save();

        return redirect()->route('admin.themes.show' , $newTheme->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function show(Theme $theme)
    {

        return view('admin.themes.show' , compact('theme'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function edit(Theme $theme)
    {
        return view('admin.themes.edit' , compact('theme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Theme $theme)
    {

        $data = $request->validate([
            'title'=>'required| min:5',
            'sistem_version'=>'required|max:4',
            'updating_date'=>'required',
            'image_url'=>'required',
            'description'=>'required',
        ]);

        $theme->update($data);
        return redirect()->route('admin.themes.show' , $theme->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Theme  $theme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Theme $theme)
    {
        // metodo delete() permette di eliminare un record
        $theme->delete();
        return redirect()->route('admin.themes.index');
    }
}
