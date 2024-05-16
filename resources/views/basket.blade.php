@extends('layouts.app')

@section('content')
<section class="my-5">
    <div class="container">
        <h2 class="mb-4">Корзина</h2>
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="mb-0">Товары в корзине</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" style="text-align:center" >
                                <thead>
                                    <tr>
                                        <th>Фото</th>
                                        <th style="background-color:#444; color: #fff;">Наименование</th>
                                        <th>Количество</th>
                                        <th style="background-color:#444; color: #fff;">Цена</th>
                                        <th>Удалить</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <form action="{{route('up-basket')}}" method="POST">
                                @csrf
                                    @foreach ($tovars as $key => $tovar)
                                    <tr>
                                        <td><img style="width: 150px; height: 150px;" src="../../storage/app/public/{{$tovar->tovar_img}}" alt="{{$tovar->tovar_name}}" class="product-image"></td>
                                        <td>{{$tovar->tovar_name}}</td>
                                        <td>
                                            <div class="input-group" style="margin-top: 10px">
                                                <button class="btn btn-outline-primary btn-decrease" style="height: 42px;background-color:#666; margin-bottom: 14px;" data-id="{{ $tovar->tovar_id }}">-</button>
                                                <input type="number" style="width: 50px; text-align: center; margin-top:10px; border: 1px solid #666" min="1" max="{{$tovarMax[$key]}}" name="count{{$key}}" readonly class="form-control form-control-sm quantity-input" value="{{$tovar->tovar_count}}">
                                                <button class="btn btn-outline-primary btn-increase"   style="height: 42px; margin-bottom: 14px; background-color:#666" data-id="{{ $tovar->tovar_id }}" data-max="{{$tovarMax[$key]}}">+</button>
                                            </div>
                                            
                                        </td>
                                        <td>{{$tovar->tovar_price * $tovar->tovar_count}} ₽</td>
                                        <td><a href="{{route('basket/del', $tovar->tovar_id)}}" class="btn btn-danger btn-delete" data-id="{{ $tovar->id }}">Удалить</a></td>
                                    </tr>
                                    @endforeach
                                </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="mb-0">Итоговая сумма</h3>
                    </div>
                    <div class="card-body">
                        <p class="h4">Итого: {{$sum}} ₽</p>
                        <a href="#" class="btn btn-primary btn-lg btn-block mt-3">Оформить заказ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.querySelectorAll('.btn-decrease').forEach(function(button) {
        button.addEventListener('click', function() {
            var id = this.getAttribute('data-id');
            var input = this.parentElement.querySelector('.quantity-input');
            var value = parseInt(input.value);

            if (value > 1) {
                value--;
                input.value = value;
            }
        });
    });

    document.querySelectorAll('.btn-increase').forEach(function(button) {
        button.addEventListener('click', function() {
            var id = this.getAttribute('data-id');
            var input = this.parentElement.querySelector('.quantity-input');
            var value = parseInt(input.value);
            var max = parseInt(this.getAttribute('data-max'));

            if(value < max){
                value++;
                input.value = value;
            }
        });
    });

</script>
@endsection

