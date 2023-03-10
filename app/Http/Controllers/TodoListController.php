<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TodoListController extends Controller
{
    public function index()
    {
        $lists = TodoList::all();
        return response($lists);
    }

    public function show(TodoList $todolist)
    {
        return response($todolist);
    }
// bu eng odiy ususli lekin tushunarsiz

//    public function store(Request $request)
//    {
//        $list = TodoList::query()->create($request->all());
//        return $list;
//    }

// bu esa tushunarli  usul
    public function store(Request $request)
    {
       $list =  TodoList::query()->create(['name' => $request->name]);
        return response($list, 201);
    }
}
