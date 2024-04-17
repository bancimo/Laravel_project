<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index(){
        $detail = Film::all(['id','title','director','duration','release_date','photo'])->
        sortBy('id');
        // $quantity = Film::all(['jumlah']);
        return view('admin/index',['detail'=>$detail]);
    }
    public function add(){
        return view('admin/form');
    }
    public function save(Request $request){
        if (isset($request->id)) {  // use existing
            $film = Film::find($request->id);
        } else {
            $film = new Film();  // create a new one
        }
        $film->title = $request->title;
        $film->director = $request->director;
        $film->duration = $request->hour . ':' . $request->minute . ':' . $request->second;
        $film->release_date = $request->release_date;

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filename = time() . '.' . $photo->getClientOriginalExtension();
            $destinationPath = public_path('/photos');
            $photo->move($destinationPath, $filename);
            $film->photo = $filename;
        }
        $film->save();
        return redirect('/admin');
    }
}
