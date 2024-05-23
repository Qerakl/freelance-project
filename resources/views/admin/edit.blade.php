@extends('layouts.app')

@section('content')

<section class="add-product-section py-5">
    <div class="container">
        <h2 class="section-title">Редактирование товара</h2>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                @foreach ($tovars as $tovar)
                
                @endforeach
                <form method="POST" action="{{route('admin.update', $tovar->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Название товара</label>
                        <input type="text" class="form-control form-control-light" id="name" value="{{$tovar->name}}" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Категория</label>
                        <input type="text" class="form-control form-control-light" id="category" value="{{$tovar->category}}" name="category" required>
                    </div>

                    <div class="mb-3">
                        <label for="quantity" class="form-label">Количество</label>
                        <input type="number"  min="1" class="form-control form-control-light" value="{{$tovar->count}}" id="quantity" name="count" required>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Цена</label>
                        <input type="number" min="1" class="form-control form-control-light" value="{{$tovar->price}}" id="price" name="price" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Описание</label>
                        <textarea class="form-control form-control-light" id="description" name="description" rows="4" required>{{$tovar->description}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="photo" class="form-label">Фотография</label>
                        <input type="file" class="form-control form-control-light" id="photo" value="{{$tovar->img}}" name="img">
                    </div>

                    <button type="submit" class="btn btn-primary">Добавить товар</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
