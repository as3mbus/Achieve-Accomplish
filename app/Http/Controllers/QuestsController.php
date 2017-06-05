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
      $tasks = quest::find(1)->tasks;

      return view('q.index')->with('quests',$quests)
                            ->with('tasks',$tasks);
  }

    //
}
