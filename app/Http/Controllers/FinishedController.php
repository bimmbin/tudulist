<?php

namespace App\Http\Controllers;


use App\Models\Tasks;
use App\Models\Finished;
use Illuminate\Support\Facades\DB;

class FinishedController extends Controller
{


    public function index() {

        $finishedTasks = Tasks::latest()->where('status', 'finished')->paginate(5);
        
        
        return view('finished', [
            'finished' => $finishedTasks
        ]);
    }


    public function update($id) {
        
        $finished = Tasks::findOrFail($id);

        $finished->status = 'finished';

        $finished->save();

        return back();
    }

    public function undo($id) {
        
        $finished = Tasks::findOrFail($id);

        $finished->status = 'coding';

        $finished->save();

        return back();
    }

    
}
