@extends('layouts.app')

@section('content')
<section class="catalog-section py-5">
    <div class="container">
        <h2 class="section-title">Каталог товаров</h2>
        <p class="section-description">Выберите интересующую вас продукцию</p>

        <div class="row mb-4">
            <div class="col-auto">
                <ul class="nav nav-pills">
                    <li class="category-item">
                        <a class="category-link btn btn-primary btn-lg active" href="#" data-category="all">Все</a>
                    </li>
                    <li class="category-item">
                        <a class="category-link btn btn-primary btn-lg mx-3" href="#"
                            data-category="liquids">Жидкости</a>
                    </li>
                    <li class="category-item">
                        <a class="category-link btn btn-primary btn-lg mx-3" href="#"
                            data-category="pod">POD-системы</a>
                    </li>
                    <li class="category-item">
                        <a class="category-link btn btn-primary btn-lg mx-3" href="#"
                            data-category="disposable">Одноразовые вейпы</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row product-grid active" data-category="all">

        @foreach ($tovars as $tovar)
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="product-card" data-product-id="1" data-category="liquids">
                    <img src="{{asset('storage/'.$tovar->img)}}" alt="Товар 1">
                    <div class="card-body">
                        <h3 class="card-title">{{$tovar->name}}</h3>
                        <div class="card-price">{{$tovar->price}} ₽</div>
                        <a href="{{url('show/'.$tovar->id)}}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>

        @foreach ($liquids as $liquid)
        <div class="row product-grid" data-category="liquids" style="display: none;">
            <!-- Товары категории "Жидкости" -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="product-card" data-product-id="1" data-category="liquids">
                    <img src="storage/{{$liquid->img}}" alt="Товар 1">
                    <div class="card-body">
                        <h3 class="card-title">{{$liquid->name}}</h3>
                        <div class="card-price">{{$liquid->price}} ₽</div>
                        <a href="show/{{$liquid->id}}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        @foreach ($pods as $pod)
        <div class="row product-grid" data-category="pod" style="display: none;">
            <!-- Товары категории "POD-системы" -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="product-card" data-product-id="1" data-category="liquids">
                    <img src="storage/{{$pod->img}}" alt="Товар 1">
                    <div class="card-body">
                        <h3 class="card-title">{{$pod->name}}</h3>
                        <div class="card-price">{{$pod->price}} ₽</div>
                        <a href="show/{{$pod->id}}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div class="row product-grid" data-category="disposable" style="display: none;">
            <!-- Товары категории "Одноразовые вейпы" -->
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="product-card" data-product-id="1" data-category="liquids">
                    <img src="https://source.unsplash.com/400x400/?vape" alt="Товар 1">
                    <div class="card-body">
                        <h3 class="card-title">Товар 1</h3>
                        <div class="card-price">3999 ₽</div>
                        <a href="#" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script>
    // Обработчик клика на категориях
    document.querySelectorAll('.category-link').forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const category = e.target.dataset.category;
            document.querySelectorAll('.category-link').forEach(l => l.classList.remove('active'));
            e.target.classList.add('active');
            document.querySelectorAll('.product-grid').forEach(grid => {
                grid.classList.remove('active');
                grid.style.display = 'none';
            });
            document.querySelector(`.product-grid[data-category="${category}"]`).style.display = 'flex';
            document.querySelector(`.product-grid[data-category="${category}"]`).classList.add('active');
        });
    });
</script>
@endsection
