@extends('layouts.app')

@section('content')
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header bg-secondary text-white">
                        <h3 class="mb-0">Личные данные</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="name" value="Иван Иванов">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" value="ivan@example.com">
                            </div>
                            <div class="mb-3">
                                <input type="date" class="form-control" id="dob" value="1990-01-01">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password" value="password123">
                            </div>
                            <div class="mb-3">
                                <b style="font-size:20px">Ордер заказов: 2313</b> 
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header bg-secondary text-white">
                        <h3 class="mb-0">Текущие заказы</h3>
                    </div>
                    <div class="card-body">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card h-100">
                                    <img src="https://source.unsplash.com/400x400/?vape" class="card-img-top"
                                        alt="Товар 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Товар 1</h5>
                                        <p class="card-text">Кол-во: 1</p>
                                        <p class="card-text">Цена: 799 ₽</p>
                                        <p class="card-text">Статус: Обработка</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="https://source.unsplash.com/400x400/?vape" class="card-img-top"
                                        alt="Товар 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Товар 2</h5>
                                        <p class="card-text">Кол-во: 2</p>
                                        <p class="card-text">Цена: 1199 ₽</p>
                                        <p class="card-text">Статус: Доставляется</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="https://source.unsplash.com/400x400/?vape" class="card-img-top"
                                        alt="Товар 3">
                                    <div class="card-body">
                                        <h5 class="card-title">Товар 3</h5>
                                        <p class="card-text">Кол-во: 3</p>
                                        <p class="card-text">Цена: 1599 ₽</p>
                                        <p class="card-text">Статус: Ожидает доставки</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="https://source.unsplash.com/400x400/?vape" class="card-img-top"
                                        alt="Товар 4">
                                    <div class="card-body">
                                        <h5 class="card-title">Товар 4</h5>
                                        <p class="card-text">Кол-во: 1</p>
                                        <p class="card-text">Цена: 799 ₽</p>
                                        <p class="card-text">Статус: Обработка</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="https://source.unsplash.com/400x400/?vape" class="card-img-top"
                                        alt="Товар 5">
                                    <div class="card-body">
                                        <h5 class="card-title">Товар 5</h5>
                                        <p class="card-text">Кол-во: 2</p>
                                        <p class="card-text">Цена: 1499 ₽</p>
                                        <p class="card-text">Статус: Доставляется</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header bg-secondary text-white">
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
                                            <th>Кол-во</th>
                                            <th>Цена</th>
                                            <th>Статус</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Товар</td>
                                            <td>2</td>
                                            <td>999 ₽</td>
                                            <td>Доставлен</td>
                                        </tr>
                                        <tr>
                                            <td>Товар 2</td>
                                            <td>1</td>
                                            <td>1999 ₽</td>
                                            <td>Доставлен</td>
                                        </tr>
                                        <tr>
                                            <td>Товар 3</td>
                                            <td>3</td>
                                            <td>2499 ₽</td>
                                            <td>Ожидает доставки</td>
                                        </tr>
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