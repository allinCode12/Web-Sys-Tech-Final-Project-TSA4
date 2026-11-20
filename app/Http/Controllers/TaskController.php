<?php
namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Mail\TaskCompleted;
use Illuminate\Support\Facades\Mail;
class TaskController extends Controller{
    public function today(): View{
        $tasks = Task::where('is_archived', false)
            ->whereDate('task_date', today())
            ->orderBy('task_date')
            ->get();

        return view('home', ['tasks' => $tasks]);
    }
    public function index(): View{
        $tasks = Task::where('is_archived', false)
            ->orderBy('task_date')
            ->get();

        return view('tasks', ['tasks' => $tasks]);
    }
    public function create(): View{
       return view('tasks.create');
    }
    public function store(Request $request): RedirectResponse{
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'status' => ['required', 'in:pending,in_progress,done'],
            'task_date' => ['required', 'date'],
        ]);
        Task::create($validated);
        return redirect()->route('tasks.index')
            ->with('success', 'Task created successfully.');
    }
    public function edit(Task $task): View{
        abort_if($task->is_archived, 404);
        return view('tasks.edit', ['task' => $task]);
    }
    public function update(Request $request, Task $task): RedirectResponse{
        abort_if($task->is_archived, 404);
        $previousStatus = $task->status;
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'status' => ['required', 'in:pending,in_progress,done'],
            'task_date' => ['required', 'date'],
        ]);
        $task->update($validated);
        if ($previousStatus !== 'done' && $task->status === 'done') {
            Mail::to(auth()->user()->email)->send(new TaskCompleted($task));
        }
        return redirect()->route('tasks.index')
            ->with('success', 'Task updated successfully.');
    }
    public function archive(Task $task): RedirectResponse{
        abort_if($task->is_archived, 404);
        $task->update(['is_archived' => true]);
        return redirect()->route('tasks.index')
            ->with('success', 'Task archived successfully.');
    }

}