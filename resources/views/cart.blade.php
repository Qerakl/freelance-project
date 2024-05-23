@extends('layouts.app')

@section('content')

@foreach ($tovars as $tovar)
@endforeach
<div class="vape-product-card">
    <div class="vape-product-image-container">
        <img src="{{asset('storage/'.$tovar->img)}}" alt="Товар 1" class="vape-product-image">
        <div class="vape-product-category">Категория товара: {{$tovar->category}}</div>
    </div>
    <div class="vape-product-info">
        <h3 class="vape-product-title">{{$tovar->name}}</h3>
        <p class="vape-product-description">{{$tovar->description}}</p>
        <div class="vape-product-price">

            <div class="vape-price">{{$tovar->price}} ₽</div>

            @if (Auth::check())
                @if (session('user.role') == 'admin')
                    <a href="{{route('admin.edit', $tovar->id)}}" class="btn btn-primary">Редактировать</a>
                    <form id="destroy" action="{{ route('admin.destroy', $tovar->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button  type="submit" class="btn btn-primary">Удалить</button>
                    </form>

                @else
                    @if ($tovar->count == 0 || $tovar->count < 0)
                        <h3 style="color: red">*Товар отсутсвует*</h3>
                    @else
                        <a href="{{url('basket/'. $tovar->id)}}" class="btn btn-primary">Купить</a>
                    @endif
                @endif
            @endif
        </div>
    </div>
</div>

@endsection
