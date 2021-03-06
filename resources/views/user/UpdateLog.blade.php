@extends('layout.master')
@section('content')
    <section dir="rtl" style="padding: 50px">
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

        <section class="container" >
            {!! Form::open(['route' => ['User.update',$user,$user->id ],'method' => 'put']) !!}

            <section class="form-group">
                {{Form::label('fullName', 'نام و نام خانوادگی : ', ['class' => 'control-label'])}}
                {!! Form::text('fullName', $user->fullName , ['class' => 'form-control']) !!}
            </section>
            <section class="form-group">
                {{Form::label('email', ' پست الکترونیکی : ', ['class' => 'control-label'])}}
                {!! Form::email('email', $user->email , ['class' => 'form-control']) !!}
            </section>
            <section class="form-group">
                {{Form::label('userName', 'نام کاربری : ', ['class' => 'control-label'])}}
                {!! Form::text('userName', $user->userName , ['class' => 'form-control']) !!}
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
                {!! Form::submit(' ثبت ',['class' => 'form-control btn btn-danger']) !!}
            </section>
            <section class="form-group">
                <td style="text-align: center"><a href="{{route('User.index')}}"><input type="button" class="form-control btn btn-info" value="بازگشت"></a></td>
            </section>
            {!! Form::close() !!}
        </section>
    </section>
@endsection
