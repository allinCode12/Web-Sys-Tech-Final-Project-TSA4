@extends('layouts.app')

@section('title', 'About | TSA4 Task Manager')

@section('content')
    <div class="mx-auto max-w-5xl px-4 py-10 sm:px-6 lg:px-8">
        <section class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-200">
            <div class="border-b border-gray-100 px-6 py-8 sm:px-8">
                <p class="text-sm font-semibold uppercase tracking-wide text-blue-600">
                    About this project
                </p>

                <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900">
                    Tasks for Today Management System
                </h1>

                <p class="mt-3 max-w-3xl text-gray-600">
                    A simple task manager for organizing tasks, checking what is scheduled for today,
                    and keeping track of progress.
                </p>
            </div>

            <div class="grid gap-6 p-6 sm:grid-cols-2 sm:p-8">
                <div class="rounded-xl bg-gray-50 p-6">
                    <h2 class="text-lg font-semibold text-gray-900">What you can do</h2>

                    <ul class="mt-4 list-inside list-disc space-y-3 text-gray-600">
                        <li>View tasks scheduled for today.</li>
                        <li>Browse all tasks by date.</li>
                        <li>Sign in to create, edit, and archive tasks.</li>
                        <li>Receive an email notification when a task is marked done.</li>
                    </ul>
                </div>

                <div class="rounded-xl border border-gray-200 p-6">
                    <h2 class="text-lg font-semibold text-gray-900">Project details</h2>

                    <dl class="mt-4 space-y-4 text-sm">
                        <div>
                            <dt class="font-medium text-gray-500">Application</dt>
                            <dd class="mt-1 text-gray-900">TSA4 Task Manager</dd>
                        </div>

                        <div>
                            <dt class="font-medium text-gray-500">Developer</dt>
                            <dd class="mt-1 text-gray-900">Ustaly</dd>
                        </div>

                        <div>
                            <dt class="font-medium text-gray-500">Framework</dt>
                            <dd class="mt-1 text-gray-900">Laravel</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </section>
    </div>
@endsection