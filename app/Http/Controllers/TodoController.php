<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
class TodoController extends Controller
{
    //
    public function home()
    {
        $todos = Todo::all();
        // dd($todos);
        return view('home',['todos'=>$todos]);
    }
    public function about()
    {
        // print('here');die();
        return view('about',['title'=>'About']);
    }

    //Inserting datas into Todo table
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:124'
        ]);

        $todos = new Todo();
        $todos->title = $request->post('title');
        $todos->save();
        // return redirect('/');
        // return back();
        return redirect(route('home'));
    }

//Updating id receiving and pass to the Update page
    public function edit($id)
    {
        $todo = Todo::FindOrFail($id);
        // dd($todo);
        // return view('update',['title'=>$todo]);
        return view('update',compact('todo'));
    }
//After getting id updation performing and display back to home page
    public function update(Request $request, Todo $id)
    {
        $validateData = $request->validate([
            'title' => 'required|max:124'
        ]);
        $id->title = $validateData['title'];
        $id->save();
        return redirect(route('home'));
    }    
//Deleting todos
    public function delete(Todo $id)
    {
        $id->delete();
        // return view(route('home'));
        return back();
    }
    
        // print($id);die();
        // dd($validateData);
        // print("here");die();

        // $id->update($validateData);
        // print("here");die();

                


}
