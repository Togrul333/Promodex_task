@extends('master')
@section('title', $title)
@section('contents')
    <div class="forms-wrap">
        <form action="{{route('notifications.store')}}" method="POST" class="form-content">
            @csrf
            <div class="heading">
                <h2>{{$title}}</h2>
            </div>
            <div class="actual-form">
                <div class="input-wrap">
                    <label for="name" class="form_label">Названия объявление</label>
                    <input type="text" minlength="4" class="form-control input-field" name="name"
                           id="name" value="{{ old('name') }}"
                           autocomplete="off" required/>
                </div>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="input-wrap">
                    <label for="period" class="form_label">Период</label>
                    <input type="text" minlength="4" class="form-control input-field" name="period"
                           id="period" value="{{ old('period') }}"
                           autocomplete="off" required/>
                </div>
                @error('period')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="input-wrap">
                    <label for="input_1" class="form_label">input 1</label>
                    <input type="text" minlength="4" class="form-control input-field" name="input_1"
                           id="input_1" value="{{ old('input_1') }}"
                           autocomplete="off" required/>
                </div>
                @error('input_1')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="input-wrap">
                    <label for="input_2" class="form_label">input 2</label>
                    <input type="text" minlength="4" class="form-control input-field" name="input_2"
                           id="input_2" value="{{ old('input_2') }}"
                           autocomplete="off" required/>
                </div>
                @error('input_2')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="input-wrap">
                    <label for="input_3" class="form_label">input 3</label>
                    <input type="text" minlength="4" class="form-control input-field" name="input_3"
                           id="input_3" value="{{ old('lastname') }}"
                           autocomplete="off" required/>
                </div>
                @error('input_3')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Настройки</label>
                        <select class="form-control" id="settings" name="settings">
                            <option value="1">Телеграм</option>
                            <option value="0">Email</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="sign-btn btn btn-primary mt-2">Создать</button>
            </div>
        </form>
    </div>
@endsection
