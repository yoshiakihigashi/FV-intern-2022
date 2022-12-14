@extends("layouts.app")
@section("content")
<div class="row">
    <div class="col-10 m-auto">
        <div class="card">
            <div class="card-header "><p class="h5">{{ Auth::user()->name }}のTodo一覧</p></div>
			<div class="card-body">
				<table class="table">
                    <thead>
                        <tr>
                            <th>
                                <a href="/todos/create" class="btn btn-success">作成</a>
                            </th>
                            <th>
                                <form method="GET">
                                    <a class="btn btn-success" href = '/todos'>OLD</a>
                                    <a class="btn btn-primary" href = '/todos/new'>NEW</a>
                                </form>
                            </th>
                        </tr>
                    </thead>
                </table>
				<table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>タスク名</th>
                            <th>カテゴリー</th>
                            <th>ステータス</th> 
                            <th>完了ボタン</th>
                            <th>期日</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="parent-body">
                        @foreach($todos as $todo)
                            <tr id="parent-{{$todo->id}}">
                                <td class="child{{$todo->id}}">{{ $todo->id }}</td>
                                <td class="child{{$todo->id}}" id="child-title-{{$todo->id}}">{{ $todo->title}}</td>
                                <td></td>
                                @if($todo->is_complete === 0)
                                    <td>未完了</td>
                                @else
                                    <td>完了</td>
                                @endif    
                                @if($todo->is_complete === 1)
                                <td>未完了</td>
                                @else
                                <td>
                                    <form action="/todos/complete/{{$todo->id}}" method="POST">
                                        @csrf
                                        @method('put')
                                        <input type="submit" value="完了" class="btn btn-secondary">
                                    </form>
                                </td>
                                @endif                               
                              <td class="child{{$todo->id}}"><a class="btn btn-success" href="/todos/edit/{{$todo->id}}" id="edit-button-{{$todo->id}}">編集</a></td> 
                               {{-- <td><a href="{{ route('todo.edit', ['id'=>$todo->todo_id]) }}" class="btn btn-success">編集</a></td> --}}
                               <td class="child{{$todo->id}}">
                                    {{-- <button class="btn btn-danger">削除</button> --}}
                                    <form action="/todos/delete/{{$todo->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">削除</button>
                                        {{-- <input type="submit" value="削除" class="btn btn-danger"> --}}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
			</div>
        </div>
    </div>
</div>
@endsection