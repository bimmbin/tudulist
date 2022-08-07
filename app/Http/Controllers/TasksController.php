<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;


class TasksController extends Controller
{
    //

    public function index() {

        $tasks = Tasks::orderBy('poscount', 'DESC')->where('status', 'coding')->get();
        
        // dd($tasks->isEmpty());
        
        return view('tasks', [
            'tasks' => $tasks
        ]);

    }

    public function store(Request $request) {

        $this->validate($request, [
            'task' => 'required',
            'poscount' => 'required',
        ]);

    
        $request->user()->task()->create([
            'task' => $request->task,
            'poscount' => $request->poscount
        ]);

        return back();
    }

    public function update($id) {

        dd('ok');

        // $finished22 = Tasks::findOrFail($id);

        // $finished22->status = 'finished';

        // $finished22->save();


        // return redirect()->route('tasks');
    }
}
