@extends('layout')

@section('content')
    <a href="{{ route('tasks.index') }}">Back to tasks list</a>
    <br/>
    <br/>
    <h1>Adding a new task</h1>
    <form method="post">
        {{ csrf_field() }}

        <div class="input-group">
            <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $task->name }}">
            <input type="number" class="form-control" placeholder="Priority" name="priority" value="{{ $task->priority }}">
            <input type="submit" class="btn btn-primary">
        </div>
    </form>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $err)
                <li style="color: red">{{ $err }}</li>
            @endforeach
        </ul>
    @endif
@endsection
