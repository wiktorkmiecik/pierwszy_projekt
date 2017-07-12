<?php

namespace App\Http\Controllers;

use App\Http\Requests\PagesRequest;
use App\Pages;
use App\User;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function __contstruct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     * @param  PagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Pages::orderBy('id', 'DESC')->paginate(3);
        return view('pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PagesRequest $request)
    {
        Pages::create($request->all());
        return redirect()->route('pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pages = Pages::findOrFail($id);
        return view('pages.show')->with('pages', $pages);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pages $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Pages $page)
    {
        return view('pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PagesRequest  $request
     * @param  Pages $page
     * @return \Illuminate\Http\Response
     */
    public function update(PagesRequest $request, Pages $page)
    {
        $page->update($request->all());
        return redirect()->route('pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Pages $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pages $page)
    {
        $page->delete();
        return redirect()->route('pages.index');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function about()
    {
        return view('pages.about');
    }

}
