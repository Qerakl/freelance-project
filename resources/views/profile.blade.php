@extends('layouts.app')

@section('content')
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
                            <div class="mb-3">
                                <b style="font-size:20px">Ордер заказов: {{$user->id}}</b>
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
                    <div class="card-header">
                        <h3 class="mb-0">Текущие заказы</h3>
                    </div>
                    <div class="card-body" >
                        <div class="row row-cols-1 row-cols-md-3 g-4" >
                            @foreach ($orders as $order)
                            @if ($order->status != 'Выдан' and $order->status != 'Отменен')
                                <div class="col">
                                <div class="card h-100" style="color:white">
                                    <img src="{{asset('storage/'.$order->tovar_img)}}" class="card-img-top"
                                        alt="Товар 1">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$order->tovar_name}}</h5>
                                        <p class="card-text">Кол-во: {{$order->tovar_count}}</p>
                                        <p class="card-text">Цена: {{$order->tovar_price}} ₽</p>
                                        <p class="card-text">Статус: {{$order->status}}</p>
                                    </div>
                                </div>
                                </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header text-white">
                        <h3 class="mb-0">История заказов</h3>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-primary w-100 mb-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#orderHistory" aria-expanded="false" aria-controls="orderHistory">
                            Показать историю заказов
                        </button>

                        <div class="collapse" id="orderHistory">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" style="text-align:center;">
                                    <thead>
                                        <tr>
                                            <th>Товар</th>
                                            <th style="background-color:#444; color:white">Кол-во</th>
                                            <th>Цена</th>
                                            <th style="background-color:#444; color:white">Статус</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            @if ($order->status == 'Выдан')
                                            <tr>
                                                <td>{{$order->tovar_name}}</td>
                                                <td>{{$order->tovar_count}}</td>
                                                <td>{{$order->tovar_price}} ₽</td>
                                                <td style="color: green">{{$order->status}}</td>
                                            </tr>
                                            @elseif ($order->status == 'Отменен')
                                            <tr>
                                                <td>{{$order->tovar_name}}</td>
                                                <td>{{$order->tovar_count}}</td>
                                                <td>{{$order->tovar_price}} ₽</td>
                                                <td style="color: red">{{$order->status}}</td>
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
    </div>
</section>

@endsection
