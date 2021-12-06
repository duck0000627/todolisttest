<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class ToDoController extends Controller
{
    //
    public function index()
    {
        $data = DB::table('todos')->get();
        //dd($data,'123');
        return view('pages.index',compact('data',$data));
    }
    public function create(){
        return view('pages.create');
    }
    public function store(Request $request){
        dd($request);
    }
}
