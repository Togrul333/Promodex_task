@extends('master')
@section('title', $title)
@section('contents')
    <div class="forms-wrap">
        <form action="{{route('login.post')}}" method="POST" class="form-content">
            @csrf
            <div class="heading">
                <h2>Control panel</h2>
            </div>
            <div class="actual-form">
                <div class="input-wrap">
                    <label for="exampleInputEmail1" class="form_label">name</label>
                    <input type="text" minlength="4" name="name" class="form-control input-field"
                           id="exampleInputEmail1"
                           autocomplete="off" required/>
                </div>

                <div class="input-wrap">
                    <label for="exampleInputEmail1" class="form_label">password</label>
                    <input type="password" minlength="4" name="password" class="form-control input-field"
                           autocomplete="off" required id="exampleInputPassword1"/>
                </div>

                <button type="submit" class="sign-btn btn btn-primary mt-3">Login</button>
                <button type="button" class="btn"><a href="{{route('register')}}">Registration</a></button>
            </div>
        </form>
    </div>
@endsection
