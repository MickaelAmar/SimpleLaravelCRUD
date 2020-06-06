@extends('layout')

@section('content')
    <div style="margin-bottom: 20px">
        <a href="{{ route('tasks.create') }}">Create new task</a>
    </div>
    <div>
        @forelse ($tasks as $task)
                <ul style="margin-bottom:25px">
                    <li>Id : {{ $task->id}}</li>
                    <li>Name : {{ $task->name }}</li>
                    <li>Priority : {{ $task->priority }}</li>
                    <a href="{{ route('tasks.edit', ['id' => $task->id]) }}">Edit</a>
                    <a href="{{ route('tasks.delete', ['id' => $task->id]) }}">Delete</a>
                </ul>
            </div>
        @empty
            <p>No tasks registered</p>
        @endforelse
    </div>
@endsection
