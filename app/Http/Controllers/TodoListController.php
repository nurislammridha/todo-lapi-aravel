<?php

namespace App\Http\Controllers;

use App\Models\todoList;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return todoList::orderBy('id', 'desc')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $createTodo = todoList::create($request->all());
        return $createTodo;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return todoList::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $manage = todoList::find($id);
        if ($manage) {
            $manage->update($request->all());
            return response(['status' => true, 'data' => $manage, 'message' => 'Data has been Updated !']);
        } else {
            return response(['status' => false, 'data' => false, 'message' => 'Sorry Something went wrong !']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $manage = todoList::find($id);
        if ($manage) {
            $manage->delete();
            return response(['status' => true, 'data' => $manage, 'message' => 'Data has been deleted succesfully']);
        } else {
            return response(['status' => false, 'data' => $manage, 'message' => 'Faile! Something went wrong']);
        }
    }
}
