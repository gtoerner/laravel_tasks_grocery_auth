<?php

namespace App\Http\Controllers;

use App\Grocery;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class GroceryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //This is what makes it authenticate - must be logged in to view page
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('grocery', [
           'grocery_items' => Grocery::orderBy('created_at', 'asc')->get()
        ]);
    }

    public function store (Request $request)
    {
        return $request->all();
    }

    public function addItem ()
    {
        return view('grocery.additem');
    }

    /*
    public function addItem (Request $request)
    {
dd($request->all);
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
          //  'category' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/grocery')
                ->withInput()
                ->withErrors($validator);
        }

        $grocery = new Grocery;
        $grocery->name = $request->name;
        $grocery->save;

        return redirect('/grocery');

    }
    */

}
