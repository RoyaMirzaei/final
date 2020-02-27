@extends('layout.master')
@section('content')
<section dir="rtl">

    <section class="container" style="padding: 50px">
        <section>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </section>
        <section>
            @if (session()->has('create'))
                <section class="alert alert-success">
                            <h3>{{ session('create') }}</h3>
                </section>
            @endif

        </section>
        {{ Form::open(['route' => 'User.store', 'method' => 'post'])}}
        <section class="form-group">
            {{Form::label('fullName', 'نام و نام خانوادگی : ', ['class' => 'control-label'])}}
            {!! Form::text('fullName', null, ['class' => 'form-control']) !!}
        </section>
        <section class="form-group">
            {{Form::label('email', ' پست الکترونیکی : ', ['class' => 'control-label'])}}
            {!! Form::email('email', null , ['class' => 'form-control']) !!}
        </section>
        <section class="form-group">
            {{Form::label('userName', 'نام کاربری : ', ['class' => 'control-label'])}}
            {!! Form::text('userName', null , ['class' => 'form-control']) !!}
        </section>
        <section class="form-group">
            {{Form::label('password', 'رمز عبور : ', ['class' => 'control-label'])}}
            {!! Form::password('password',  ['class' => 'form-control']) !!}
        </section>
        <section class="form-group">
            {{Form::label('password', 'تکرار رمز عبور : ', ['class' => 'control-label'])}}
            {!! Form::password('passConfirm',  ['class' => 'form-control']) !!}
        </section>
        <section class="form-group">
            {!! Form::submit('ثبت', ['class' => 'form-control btn btn-info','style'=>'font-size: 20px']) !!}
        </section>

        {{ Form::close() }}
    </section>
</section>
@endsection
