@extends('layouts.app')
@section('title', 'Create Task')
@section('content')
<div class="max-w-2xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-6">Create Task</h1>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div class="mb-4">
            <label for="title" class="block mb-1">Task</label>
            <input
                id="title"
                name="title"
                type="text"
                value="{{ old('title') }}"
                maxlength="255"
                required
                class="w-full rounded border-gray-300"
            >
            @error('title')
                <p class="text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="status" class="block mb-1">Status</label>
            <select id="status" name="status" required class="w-full rounded border-gray-300">
                <option value="pending" @selected(old('status', 'pending') === 'pending')>Pending</option>
                <option value="in_progress" @selected(old('status') === 'in_progress')>In Progress</option>
                <option value="done" @selected(old('status') === 'done')>Done</option>
            </select>
            @error('status')
                <p class="text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="task_date" class="block mb-1">Task Date</label>
            <input
                id="task_date"
                name="task_date"
                type="date"
                value="{{ old('task_date', now()->format('Y-m-d')) }}"
                required
                class="w-full rounded border-gray-300"
            >
            @error('task_date')
                <p class="text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="rounded bg-blue-600 px-4 py-2 text-white">
            Save Task
        </button>
        <a href="{{ route('tasks.index') }}" class="ml-3">Cancel</a>
    </form>
</div>
@endsection