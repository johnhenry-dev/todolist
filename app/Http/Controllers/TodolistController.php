<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todolistModel;

class TodolistController extends Controller
{
    public function showAllData()
    {
        return view('fetchedData')->with('toDoArr', todolistModel::all());
    }

    public function delete(Request $request, $id)
    {
        $todolist = todolistModel::find($id);
        $todolist->delete();
        return redirect('/');
    }

    public function create()
    {
        return view('addView');
    }

    public function addTodo(Request $request)
    {
        $todolist = new todolistModel;
        $todolist->todolist = $request->input('todolist');
        $todolist->save();
        return redirect('/');
    }

    public function edit($id)
    {
        return view('editTodo')->with('toDoArr', todolistModel::find($id));
    }

    public function editTodo(Request $request, $id)
    {
        $todolist = todolistModel::find($id);
        $todolist->todolist = $request->input('todolist');
        $todolist->save();
        return redirect('/');
    }

    public function APIcreate(Request $request)
    {
        $todolist = new todolistModel();

        $todolist->todolist = $request->input('todolist');

        $todolist->save();
        return response()->json($todolist);
    }

    public function APIshow()
    {
        $todolist = todolistModel::all();
        return response()->json($todolist);
    }

    public function APIupdate(Request $request, $id)
    {
        $todolist = todolistModel::find($id);
        $todolist->todolist = $request->input('todolist');

        $todolist->save(); 
        return response()->json($todolist);
    }

     public function APIdelete(Request $request, $id)
    {
        $todolist = todolistModel::find($id);
        $todolist->delete();
        return response()->json($todolist);
    }
}
