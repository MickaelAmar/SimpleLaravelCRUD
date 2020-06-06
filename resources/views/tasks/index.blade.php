@extends('layout')

@section('content')
    <div style="margin-bottom: 20px">
        <a href="{{ route('tasks.create') }}">Create new task</a>
    </div>
    <div id="task-list">
        @forelse ($tasks as $task)
            <ul class="task" style="margin:25px; border: 1px solid black">
                <li>Id : {{ $task->id}}</li>
                <li>Name : {{ $task->name }}</li>
                <li>Priority : {{ $task->priority }}</li>
                <a href="{{ route('tasks.edit', ['id' => $task->id]) }}">Edit</a>
                <a href="{{ route('tasks.delete', ['id' => $task->id]) }}">Delete</a>
            </ul>
        @empty
            <p>No tasks registered</p>
        @endforelse
    </div>
@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $("#task-list").sortable();
        });
    </script>
@endpush
