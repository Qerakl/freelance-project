@extends('layouts.app')

@section('content')

<section class="add-product-section py-5">
    <div class="container">
        <h2 class="section-title">Добавить новый товар</h2>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form method="POST" action="{{route('admin.store')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Название товара</label>
                        <input type="text" class="form-control form-control-light" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Категория</label>
                        <input type="text" class="form-control form-control-light" id="category" name="category" required>
                    </div>

                    <div class="mb-3">
                        <label for="quantity" class="form-label">Количество</label>
                        <input type="number"  min="1" class="form-control form-control-light" id="quantity" name="count" required>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Цена</label>
                        <input type="number" min="1" class="form-control form-control-light" id="price" name="price" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Описание</label>
                        <textarea class="form-control form-control-light" id="description" name="description" rows="4" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="photo" class="form-label">Фотография</label>
                        <input type="file" class="form-control form-control-light" id="photo" name="img" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Добавить товар</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
