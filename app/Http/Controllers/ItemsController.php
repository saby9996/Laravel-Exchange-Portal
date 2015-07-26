<?php

namespace Swapstr\Http\Controllers;

use Illuminate\Http\Request;

use Swapstr\Http\Requests\AddItemsRequest;
use Swapstr\Http\Controllers\Controller;

use Swapstr\Item;
use Swapstr\Category;
use Laracasts\Flash\Flash;

class ItemsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $items = \Auth::user()->items()->get();

        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::lists('name', 'id');

        return view('items.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(AddItemsRequest $request)
    {
        $item = $request->only('title', 'description', 'category_id');

        // replace with a new GitHub package cviebrock/eloquent-sluggable.
        $item['slug'] = str_slug($item['title'], '-');

        \Auth::user()->items()->create($item);

        Flash::overlay('Your items/services list has been updated.', 'Congrats!');

        return redirect('items');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $item
     * @return Response
     */
    public function show($item)
    {
        return view('items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $item
     * @return Response
     */
    public function edit($item)
    {
        $categories = Category::lists('name', 'id');
        return view('items.edit', compact('item', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $item
     * @return Response
     */
    public function update(AddItemsRequest $request, $item)
    {
        $item->update($request->all());
        Flash::overlay('Your items/service has been updated.', 'Done!');
        return redirect('items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $item
     * @return Response
     */
    public function destroy($item)
    {
        $item->delete();
        Flash::overlay('Your items/service has been deleted.', 'Done!');
        return redirect('items');
    }
}
