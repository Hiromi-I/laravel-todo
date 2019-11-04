@extends('layouts.base')
@section('title', 'TODOアプリ')

@section('content')
  @forelse ($tasks as $task)
    <p>
      {{ $task->name }} | {{ $task->status_label }} | 
      <form action="{{ action('TaskController@delete', $task) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">削除</button>
      </form>
    </p>
  @empty
    <p>タスクを追加して下さい。</p>
  @endforelse
  
  <a href="{{ route('tasks.create') }}">タスクを追加</a>
@endsection