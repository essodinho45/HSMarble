<?php

namespace App\Http\Controllers;

use App\Models\PortofolioItem;
use Illuminate\Http\Request;

class PortofolioItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portofolio_items = PortofolioItem::all();
        return view('portofolio-items.index', compact(['portofolio_items']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('portofolio-items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $input = $request->all();
            $images = array();
            if ($files = $request->file('images')) {
                foreach ($files as $file) {
                    $name = ImageController::storeImage($file, 'portofolio');
                    $images[] = '/images/portofolio/' . $name;
                }
            }
            $portofolio_item = PortofolioItem::create(['name' => $input['name'], 'content' => $input['content'] ?? '']);
            foreach ($images as $image) {
                $portofolio_item->images()->create(['url' => $image]);
            }
            return redirect()->route('portofolio-items.index')->with('status', 'portofolio-item-created');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(PortofolioItem $portofolioItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PortofolioItem $portofolioItem)
    {
        return view('portofolio-items.edit', compact('portofolioItem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PortofolioItem $portofolioItem)
    {
        try {
            $input = $request->all();
            $images = array();
            if ($files = $request->file('images')) {
                foreach ($files as $file) {
                    $name = ImageController::storeImage($file, 'portofolio');
                    $images[] = '/images/portofolio/' . $name;
                }
            }
            $portofolioItem->update(['name' => $input['name'], 'content' => $input['content'] ?? '']);
            foreach ($images as $image) {
                $portofolioItem->images()->create(['url' => $image]);
            }
            return redirect()->route('portofolio-items.index')->with('status', 'portofolio-item-updated');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PortofolioItem $portofolioItem)
    {
        foreach ($portofolioItem->images as $image) {
            ImageController::deleteImage($image);
        }
        $portofolioItem->delete();
        return redirect()->route('portofolio-items.index');
    }
}
