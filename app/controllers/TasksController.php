<?php


class TasksController extends BaseController {
	
	
	public function index()
	{
        // check user is logged in to see the tasks
        if (Auth::check()) {
            $tasks = Task::with('user')->orderby('completed')->orderby('completed', 'desc')->orderby('created_at', 'desc')->get();
            $users = User::orderby('username')->lists('username', 'id');

            return View::make('tasks.index', compact('tasks', 'users'));
        }

        return Redirect::home();

	}
	
	
	public function store()
	{	
		$task = new Task(Input::all());
		
		
		if (!$task->save())
		{
			return Redirect::back()->withInput()->withErrors($task->getErrors());
		}
		
		
		return Redirect::home();
	}
	
	
	public function update($id)
	{	
		$task = Task::find($id);
		$task->completed = Input::get('completed') ? Input::get('completed') : 0;
		$task->save();
		
		
		return $task;
	}
	
	
	public function destroy()
	{	
		$task = Task::find(Input::get('task_id'));
		$task->delete();
		
		
		return $task;
	}
}