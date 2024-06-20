<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact(['services']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.create');
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
                    $name = ImageController::storeImage($file);
                    $images[] = '/images/services/' . $name;
                }
            }
            $service = Service::create(['name' => $input['name'], 'content' => $input['content']]);
            foreach ($images as $image) {
                $service->images()->create(['url' => $image]);
            }
            return redirect()->route('services.index')->with('status', 'service-created');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        try {
            $input = $request->all();
            $images = array();
            if ($files = $request->file('images')) {
                foreach ($files as $file) {
                    $name = ImageController::storeImage($file);
                    $images[] = '/images/services/' . $name;
                }
            }
            $service->update(['name' => $input['name'], 'content' => $input['content']]);
            foreach ($images as $image) {
                $service->images()->create(['url' => $image]);
            }
            return redirect()->route('services.index')->with('status', 'service-updated');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        foreach ($service->images as $image) {
            ImageController::deleteImage($image);
        }
    }
}
