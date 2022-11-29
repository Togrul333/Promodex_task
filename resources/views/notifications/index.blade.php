@extends('master')
@section('title', $title)
@section('contents')
    <div>
        <h1>Страница Уведомлений</h1>
        <div class="card mb-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Создать</h5>
                <a href="{{route('notifications.create')}}" class="btn btn-primary">+ </a>
            </div>
        </div>
        <div style="display:inline-flex">
            @foreach($notifications as $notification)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$notification->name}}</h5>
                        <form action="{{route('notifications.destroy')}}" method="POST">
                            @csrf
                            <input type="hidden"  name='id' value='{{$notification->id}}'/>
                            <button type="submit"  class="btn btn-danger" title="удалить">x</button>
                        </form>
                        <h1>{{$notification->input1}}</h1>
                        <p class="card-text">Some quick example text to build on the card title and make up the</p>
                        <form action="{{route('notifications.changeStatus')}}" method="POST">
                            @csrf
                            <input type="hidden"  name='id' value='{{$notification->id}}'/>
                            <button type="submit" @if($notification->status==1)title="деактивировать" @else title="активировать" @endif  class="btn btn-primary">@if($notification->status==1)|| @else > @endif</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
