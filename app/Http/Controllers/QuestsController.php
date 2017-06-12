<?php

namespace qaddition\Http\Controllers;

use Illuminate\Http\Request;

use qaddition\quest;
use qaddition\task;

class QuestsController extends Controller
{
  public function index()
  {
      $quests=quest::all();
      $tasks =task::all();

      return view('q.index')->with('quests',$quests)
                            ->with('tasks',$tasks);
  }
  public function input()
  {
    return view('q.input');
  }
  public function save(Request $request){
      $quest = new quest();
      $quest->user_id=1;
      $quest->name = $request->get('quest');
      $quest->description = $request->get('description');
      $quest->save();
      $task = new task;
      $task->quest_id=$quest->id;
      $task->name = $request->get('task');
      $task->maxscore = $request->get('maxscore');
      $task->description = $request->get('taskdescription');
      $task->duedate = 'now()';
      $task->save();

      return redirect('q');
  }
  public function show($id){
    $quest=quest::find($id);
    $tasks=quest::find($id)->tasks;
    return view('q.show')->with('quest',$quest)
                          ->with('tasks',$tasks);
  }
    //
}
