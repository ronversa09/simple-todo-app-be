<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos;

class TodosController extends Controller
{
    
    public function index()
    {
        $aTodos = Todos::all();
        return response()->json($aTodos);
    }
    
    public function add(Request $request)
    {
        
        $id = $request->get('id');
        $text = $request->get('text');

        $objTodos = new Todos();
        $objTodos->text = $text;
        $pId = $objTodos->save();
        $objTodos->id = $pId;
        
        return response()->json(array(
            "data" => $objTodos
        ));
    }

    public function edit(Request $request)
    {
        $id = $request->get('id');
        $text = $request->get('text');

        $objTodos = Todos::find($id);
        $objTodos->text = $text;
        $pId = $objTodos->save();
        $objTodos->id = $pId;

        return response()->json(array(
            "data" => $objTodos
        ));
    }

    public function remove(Request $request)
    {
        $id = $request->get('id');
        $objTodos = Todos::find($id);
        $objTodos->delete();

        return response()->json(true);
    }
}