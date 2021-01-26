<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todolistModel;

class TodolistController extends Controller
{
    public function index()
    {
        echo 'All todolist';
    }

    public function create(Request $request)
    {
        $todolist = new todolistModel();

        $todolist->todolist = $request->input('todolist');

        $todolist->save();
        return response()->json($todolist);
    }

    public function show()
    {
        $todolist = todolistModel::all();
        return response()->json($todolist);
    }

    public function update(Request $request, $id)
    {
        $todolist = todolistModel::find($id);
        $todolist->todolist = $request->input('todolist');

        $todolist->save(); 
        return response()->json($todolist);
    }

     public function delete(Request $request, $id)
    {
        $todolist = todolistModel::find($id);
        $todolist->delete();

        return response()->json($todolist);
    }
}
