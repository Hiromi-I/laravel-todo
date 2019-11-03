@extends('layouts.base')
@section('title', 'TODOアプリ')

@section('content')
  @forelse ($tasks as $task)
    <p>{{ $task->name }}</p>
  @empty
    <p>タスクを追加して下さい。</p>
  @endforelse
@endsection