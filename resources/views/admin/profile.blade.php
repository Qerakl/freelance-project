@extends('layouts.app')

@section('content')
@if(session('user.role') == 'admin')
<section class="my-5" >
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="mb-0">Личные данные</h3>
                    </div>
                    <div class="card-body">
                        @foreach ($users as $user)
                        <form style="color:white" method="post" action="{{route('user/up')}}">
                        @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}"required>
                            </div>
                            <div class="mb-3">
                                <input type="date" class="form-control" id="dob" name="date" value="{{$user->date}}"required>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>

                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header text-white">
                        <h3 class="mb-0">Заказы</h3>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-striped table-hover" style="text-align:center;">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th style="background-color:#444; color:white">Имя</th>
                                        <th style="background-color:#444; color:white">Товар</th>
                                        <th style="background-color:#444; color:white">Кол-во</th>
                                        <th style="background-color:#444; color:white"> Цена</th>
                                        <th style="background-color:#444; color:white">Статус</th>
                                        <th style="background-color:#444; color:white"> Действие</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                    @if ($order->status == 'Заказ готов к выдаче')
                                        <tr>
                                            <td>{{$order->user_id}}</td>
                                            <td>{{$order->user_name}}</td>
                                            <td>{{$order->tovar_name}}</td>
                                            <td>{{$order->tovar_count}}</td>
                                            <td>{{$order->tovar_price}} ₽</td>
                                            <td>{{$order->status}}</td>
                                            <td>
                                                @if ($order->status == 'Заказ готов к выдаче')
                                                    <a href="{{url('admin/order/'.$order->user_id.'/'.$order->tovar_id)}}" type="submit" class="btn btn-primary" >Выдан</a>
                                                    <a href="{{url('/admin/del/order/'.$order->user_id.'/'.$order->tovar_id)}}" type="submit"class="btn btn-primary" >Отменен</a>
                                                @else
                                                    {{$order->status}}
                                                @endif
                                            </td>
                                        </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@else
<h1>Вы не админ!!</h1>
@endif

@endsection
