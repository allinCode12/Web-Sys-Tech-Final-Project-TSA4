<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task completed</title>
</head>
<body>
    <h1>Task completed</h1>
    <p>This task has been marked as done:</p>
    <ul>
        <li><strong>Task:</strong> {{ $task->title }}</li>
        <li><strong>Status:</strong> {{ ucfirst(str_replace('_', ' ', $task->status)) }}</li>
        <li><strong>Date:</strong> {{ $task->task_date }}</li>
    </ul>
    <p>This is an automated notification from the Task Manager.</p>
</body>
</html>