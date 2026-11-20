@extends('layouts.app')
@section('title', 'Home | Tasks for Today')
@section('content')
    <div class="mx-auto max-w-5xl px-4 py-10 sm:px-6 lg:px-8">
        <section class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-200">
            <div class="border-b border-gray-100 px-6 py-7 sm:px-8">
                <p class="text-sm font-semibold uppercase tracking-wide text-blue-600">
                    Today's plan
                </p>

                <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900">
                    Tasks for Today
                </h1>

                <p class="mt-2 text-gray-600">
                    Here are the tasks scheduled for today.
                </p>
            </div>

            @if ($tasks->isEmpty())
                <div class="px-6 py-12 text-center sm:px-8">
                    <h2 class="text-lg font-semibold text-gray-900">
                        Your day is clear
                    </h2>

                    <p class="mt-2 text-gray-600">
                        No tasks are scheduled for today.
                    </p>
                </div>
            @else
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr class="text-left">
                                <th class="px-6 py-3 text-xs font-semibold uppercase tracking-wide text-gray-500">ID</th>
                                <th class="px-6 py-3 text-xs font-semibold uppercase tracking-wide text-gray-500">Task</th>
                                <th class="px-6 py-3 text-xs font-semibold uppercase tracking-wide text-gray-500">Status</th>
                                <th class="px-6 py-3 text-xs font-semibold uppercase tracking-wide text-gray-500">Date</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach ($tasks as $task)
                                <tr class="hover:bg-gray-50">
                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500">
                                        {{ $task->id }}
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                        {{ $task->title }}
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-700">
                                        <span class="inline-flex rounded-full bg-gray-100 px-2.5 py-1 text-xs font-semibold text-gray-700">
                                            {{ ucfirst(str_replace('_', ' ', $task->status)) }}
                                        </span>
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-600">
                                        {{ $task->task_date }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </section>
    </div>
@endsection