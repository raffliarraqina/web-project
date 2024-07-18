<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news =  News::latest()->paginate('3');

        return view('pages.admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'description' => 'required',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/newss', $image->hashName());

        // $image = $request->file('image')->store('newss');
        // $image = Storage::putFile('image', $request->file('image'));

        // save to DB
        News::create([
            'title'         => $request->title,
            'author'        => $request->author,
            'slug'          => Str::slug($request->title, '-'),
            'image'         => $image->hashName(),
            'description'   => $request->description
        ]);

        return redirect()->route('dashboard.news.index')->with(
            'success', 'Berhasil Menambahkan');

        return $image;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = News::findOrFail($id);

        return view('pages.admin.news.show', compact(
            'news'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = News::findOrFail($id);

        return view('pages.admin.news.edit', compact(
            'news'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $this->validate($request, [
            'title'  => 'required|unique:news,title,' . $news->id,
            'image'  => 'mimes:png,jpg,jpeg'
        ]);

        //check jika image kosong
        if ($request->file('image') == null ) {

            //update data tanpa image
            $news = News::findOrFail($news->id);
            $news->update([
                'title'         => $request->title,
                'author'        => $request->author,
                'description'   => $request->description,
                'slug'          => Str::slug($request->title, '-')
            ]);
        } else {

            //hapus image lama
            Storage::disk('local')->delete('public/newss/' . basename($news->image));

            //upload image baru
            $image = $request->file('image');
            $image->storeAs('public/newss/', $image->hashName());

            //update dengan image baru
            $news = News::findOrFail($news->id);
            $news->update([
                'image'         => $image->hashName(),
                'title'         => $request->title,
                'author'        => $request->author,
                'description'   => $request->description,
                'slug'          => Str::slug($request->title, '-')
            ]);
        }

        if ($news) {
            return redirect()->route('dashboard.news.index')->with(
                'success', 'Berhasil Diupdate');
        } else {
            return redirect()->route('dashboard.news.index')->with(
                'error', 'Gagal Diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        Storage::disk('local')->delete('public/newss/' . basename($news->image));
        $news->delete();

        return redirect()->route('dashboard.news.index')->with(
            'success', 'Berhasil Didelete');
    }
}
