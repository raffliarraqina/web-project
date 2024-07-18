<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::latest()->paginate(10);

        return view('pages.admin.event.index', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'date' => 'required',
            'month' => 'required',
            'description' => 'required',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/events', $image->hashName());

        // $image = $request->file('image')->store('newss');
        // $image = Storage::putFile('image', $request->file('image'));

        // save to DB
        Event::create([
            'title'         => $request->title,
            'image'         => $image->hashName(),
            'date'          => $request->date,
            'month'         => $request->month,
            'slug'          => Str::slug($request->title, '-'),
            'description'   => $request->description
        ]);

        return redirect()->route('dashboard.event.index')->with(
            'success', 'Berhasil Tambahkan');
        return $image;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::findOrFail($id);

        return view('pages.admin.event.show', compact(
            'event'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Event::findOrFail($id);

        return view('pages.admin.event.edit', compact(
            'event'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $this->validate($request, [
            'title'  => 'required|unique:news,title,' . $event->id,
        ]);

        //check jika image kosong
        if ($request->file('image') == null ) {

            //update data tanpa image
            $event = Event::findOrFail($event->id);
            $event->update([
                'title'         => $request->title,
                'date'          => $request->date,
                'month'         => $request->month,
                'slug'          => Str::slug($request->title, '-'),
                'description'   => $request->description
            ]);
        } else {

            //hapus image lama
            Storage::disk('local')->delete('public/events/' . basename($event->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/events/', $image->hashName());

            //update dengan image baru
            $event = Event::findOrFail($event->id);
            $event->update([
                'title'         => $request->title,
                'image'         => $image->hashName(),
                'date'          => $request->date,
                'month'         => $request->month,
                'slug'          => Str::slug($request->title, '-'),
                'description'   => $request->description
            ]);
        }

        if ($event) {
            return redirect()->route('dashboard.event.index')->with(
                'success', 'Berhasil Diupdate');
        } else {
            return redirect()->route('dashboard.event.index')->with(
                'error', 'Gagal Diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::findOrFail($id);
        Storage::disk('local')->delete('public/events/' . basename($event->image));
        $event->delete();

        return redirect()->route('dashboard.event.index')->with(
            'success', 'Berhasil Didelete');
    }
}
