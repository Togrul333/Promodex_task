@extends('master')
@section('title', $title)
@section('contents')
    <div class="forms-wrap">
        <form action="{{route('registerPost')}}" method="POST" class="form-content">
            @csrf
            <div class="heading">
                <h2>Registration form</h2>
            </div>
            <div class="actual-form">
                <div class="input-wrap">
                    <label for="exampleInputEmail1" class="form_label">first name</label>
                    <input type="text" minlength="4" class="form-control input-field" name="firstname"
                           id="exampleInputEmail1" value="{{ old('firstname') }}"
                           autocomplete="off" required/>
                </div>
                @error('firstname')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="input-wrap">
                    <label for="exampleInputEmail1" class="form_label">last name</label>
                    <input type="text" minlength="4" class="form-control input-field" name="lastname"
                           id="exampleInputEmail1" value="{{ old('lastname') }}"
                           autocomplete="off" required/>
                </div>
                @error('lastname')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="input-wrap">
                    <label for="exampleInputEmail1" class="form_label">email</label>
                    <input type="text" minlength="4" class="form-control input-field" name="email"
                           id="exampleInputEmail1" value="{{ old('email') }}"
                           autocomplete="off" required/>
                </div>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="input-wrap">
                    <label for="exampleInputEmail1" class="form_label">password</label>
                    <input type="password" minlength="4" class="form-control input-field" name="password"
                           id="exampleInputEmail1" value="{{ old('password') }}"
                           autocomplete="off" required/>
                </div>
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="input-wrap">
                    <label for="exampleInputEmail1" class="form_label">confirm password</label>
                    <input type="password" minlength="4" class="form-control input-field" name="password_confirmation"
                           id="exampleInputEmail1" value="{{ old('confirm_password') }}"
                           autocomplete="off" required/>
                </div>
                @error('confirm_password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="sign-btn btn btn-primary mt-2">Register</button>
            </div>
        </form>
    </div>
@endsection
