@extends('layout.master')
@section('content')

        <section class="container" style="padding: 50px">
            <table class="table table-hover">
                <thead class="bg-success" style="font-size: 20px ;background-color: #67b168">
                    <td>
                       نام و نام خانوادکی
                    </td>
                    <td>
                       پست الکترونیکی
                    </td>
                    <td>
                        نام کاربری
                    </td>
                    <td>
                        رمز عبور
                    </td>
                    <td colspan="2" style="text-align: center">
                        ویرایش
                    </td>

                </thead>
                <tbody>
                @foreach($user as $item)
                <tr>
                    <td>{{$item->fullName}}</td>

                    <td>{{$item->email}}</td>

                    <td>{{$item->userName}}</td>
                    <td>{{$item->password}}</td>
                    <td style="text-align: center"><a href="{{route('User.edit',$item->id)}}"><input type="button" class="btn btn-info" value="Update"></a></td>
                    <td style="text-align: center">
                    {!! Form::open(['route' => ['User.destroy', $item->id ],'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    </td>
                </tr>
                 @endforeach
                </tbody>


            </table>

        </section>

@endsection
