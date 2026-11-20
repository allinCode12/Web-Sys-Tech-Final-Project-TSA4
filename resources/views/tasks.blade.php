@extends('layouts.app')
@section('title', 'Task List')
@section('content')
<div class="max-w-6xl mx-auto p-6">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Task List</h1>

        @auth
            <a href="{{ route('tasks.create') }}"
               class="rounded bg-blue-600 px-4 py-2 text-white">
                Add Task
            </a>
        @endauth
    </div>

    @if (session('success'))
        <p class="mb-4 rounded bg-green-100 p-3 text-green-800">
            {{ session('success') }}
        </p>
    @endif
    @if ($tasks->isEmpty())
        <p>No tasks have been added.</p>
    @else
        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="border-b text-left">
                        <th class="p-3">ID</th>
                        <th class="p-3">Task</th>
                        <th class="p-3">Status</th>
                        <th class="p-3">Date</th>
                        @auth
                            <th class="p-3">Actions</th>
                        @endauth
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr class="border-b">
                            <td class="p-3">{{ $task->id }}</td>
                            <td class="p-3">{{ $task->title }}</td>
                            <td class="p-3">
                                {{ ucwords(str_replace('_', ' ', $task->status)) }}
                            </td>
                            <td class="p-3">{{ $task->task_date }}</td>
                            @auth
                                <td class="p-3">
                                    <a href="{{ route('tasks.edit', $task) }}"
                                       class="text-blue-600">
                                        Edit
                                    </a>

                                    <form method="POST"
                                          action="{{ route('tasks.archive', $task) }}"
                                          class="inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit"
                                                onclick="return confirm('Archive this task?')"
                                                class="ml-3 text-red-600">
                                            Archive
                                        </button>
                                    </form>
                                </td>
                            @endauth
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection