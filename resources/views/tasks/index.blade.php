@extends('layouts.base')
@section('title', 'TODOアプリ')

@section('content')
<h1 class="mb-4">タスク一覧</h1>

<table class="table table-striped mb-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col" class="taskNameColumn">タスク名</th>
      <th scope="col" class="taskStatusColumn">進行状況</th>
      <th scope="col" class="taskButtonColumn">編集</th>
      <th scope="col" class="taskButtonColumn">削除</th>
    </tr>
  </thead>
  <tbody>
  @forelse ($tasks as $task)
    <tr>
      <td class="taskNameColumn">{{ $task->name }}</td>
      <td class="taskStatusColumn">{{ $task->status_label }}</td>
      <td class="taskButtonColumn">
        <a class="btn btn-outline-primary" href="{{ route('tasks.edit', $task) }}">編集</a>
      </td>
      <td class="taskButtonColumn">
        <form action="{{ action('TaskController@delete', $task) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-outline-danger">削除</button>
        </form>
      </td>
    </tr>
  @empty
  <tr>
      <td colspan="4" class="taskEmptyCell">タスクを追加して下さい。</td>
  </tr>
  @endforelse
  </tbody>
</table>

<div class="buttonContainer">
  <a  class="btn btn-danger btn-lg" href="{{ route('tasks.create') }}">タスクを追加</a>
</div>
@endsection