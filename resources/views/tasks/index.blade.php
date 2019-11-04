@extends('layouts.base')
@section('title', 'TODOアプリ')

@section('content')
  @forelse ($tasks as $task)
    <p>{{ $task->name }} | {{ $task->status_label }}</p>
  @empty
    <p>タスクを追加して下さい。</p>
  @endforelse
  
  <a href="{{ route('tasks.create') }}">タスクを追加</a>
@endsection