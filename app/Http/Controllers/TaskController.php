<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //https://qiita.com/minato-naka/items/0e709cb0e6628c82c1c5#%E3%82%BF%E3%82%B9%E3%82%AF%E4%B8%80%E8%A6%A7%E5%8F%96%E5%BE%97api%E5%AE%9F%E8%A3%85:~:text=index%E3%83%A1%E3%82%BD%E3%83%83%E3%83%89%E8%BF%BD%E5%8A%A0%E3%80%82-,app/Http/Controllers/TaskController.php,-%2B%20%3C%3Fphp%0A%2B%0A%2B%20namespace%20App

    public function index(){
        return Task::all();
    }

    //https://qiita.com/minato-naka/items/0e709cb0e6628c82c1c5#%E3%82%BF%E3%82%B9%E3%82%AF%E4%B8%80%E8%A6%A7%E5%8F%96%E5%BE%97api%E5%AE%9F%E8%A3%85:~:text=%E3%83%A1%E3%82%BD%E3%83%83%E3%83%89%E3%82%92%E8%BF%BD%E5%8A%A0%E3%80%82-,app/Http/Controllers/TaskController.php,-%2B%20public%20function%20show

    public function show(Task $task){
        return $task;
    }

    //https://qiita.com/minato-naka/items/0e709cb0e6628c82c1c5#%E3%82%BF%E3%82%B9%E3%82%AF%E4%B8%80%E8%A6%A7%E5%8F%96%E5%BE%97api%E5%AE%9F%E8%A3%85:~:text=store%E3%83%A1%E3%82%BD%E3%83%83%E3%83%89%E8%BF%BD%E5%8A%A0%E3%80%82-,app/Http/Controllers/TaskController.php,-use%20App%5CTask

    public function store(Request $request){
        return Task::create($request->all());
    }

    //https://qiita.com/minato-naka/items/0e709cb0e6628c82c1c5#%E3%82%BF%E3%82%B9%E3%82%AF%E4%B8%80%E8%A6%A7%E5%8F%96%E5%BE%97api%E5%AE%9F%E8%A3%85:~:text=update%E3%83%A1%E3%82%BD%E3%83%83%E3%83%89%E8%BF%BD%E5%8A%A0%E3%80%82-,app/Http/Controllers/TaskController.php,-%2B%20public%20function%20update

    public function update(Request $request, Task $task){
        $task->update($request->all());
        return $task;
    }

    //https://qiita.com/minato-naka/items/0e709cb0e6628c82c1c5#%E3%82%BF%E3%82%B9%E3%82%AF%E5%89%8A%E9%99%A4api%E5%AE%9F%E8%A3%85:~:text=destroy%E3%83%A1%E3%82%BD%E3%83%83%E3%83%89%E8%BF%BD%E5%8A%A0%E3%80%82-,app/Http/Controllers/TaskController.php,-%2B%20public%20function%20destroy

    public function destroy(Task $task){
        $task->delete();
        return $task;
    }
}
