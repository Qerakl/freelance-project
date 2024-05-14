<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вейп-шоп - Лучший вейп-магазин в мире</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<style>
    body {
        font-family: 'Montserrat', sans-serif;
        background-color: #f2f2f2;
    }

    .product-card {
        background-color: #fff;
        border-radius: 25px;
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
    }

    .product-card:hover {
        transform: translateY(-15px);
        box-shadow: 0 18px 36px rgba(0, 0, 0, 0.2);
    }

    .product-card img {
        width: 100%;
        height: 400px;
        object-fit: cover;
    }

    .product-card .card-body {
        padding: 40px;
    }

    .product-card .card-title {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .product-card .card-price {
        font-size: 24px;
        font-weight: bold;
        color: #007bff;
        margin-bottom: 25px;
    }

    .product-card .btn-primary {
        font-size: 20px;
        padding: 15px 35px;
        border-radius: 35px;
    }

    .section-title {
        font-size: 50px;
        font-weight: bold;
        margin-bottom: 50px;
        text-align: center;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
    }

    .section-description {
        font-size: 22px;
        color: #666;
        margin-bottom: 50px;
        text-align: center;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
    }

    .contact-section {
        background-color: #fff;
        padding: 120px 0;
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    }

    .contact-section .section-title {
        font-size: 60px;
        font-weight: bold;
        margin-bottom: 70px;
    }

    .contact-form {
        background-color: #f8f9fa;
        border-radius: 25px;
        padding: 60px;
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    }

    .contact-form .form-control {
        border-radius: 15px;
        font-size: 20px;
        padding: 18px 25px;
    }

    .contact-form .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        font-size: 20px;
        padding: 18px 45px;
        border-radius: 35px;
    }

    .contact-form .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004a9b;
    }

    header.bg-secondary,
    footer.bg-secondary {
        background-color: #6c757d !important;
        color: #fff;
    }

    header a,
    footer a {
        color: #fff;
        text-decoration: none;
    }

    header a:hover,
    footer a:hover {
        color: #ccc;
    }

    .hero {
        position: relative;
        overflow: hidden;
        height: 800px;
    }

    .hero .carousel-item {
        height: 800px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .hero .carousel-caption {
        top: 50%;
        transform: translateY(-50%);
        text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);
    }

    .hero .carousel-caption h1 {
        font-size: 80px;
        font-weight: bold;
        margin-bottom: 40px;
    }

    .hero .carousel-caption p {
        font-size: 32px;
        margin-bottom: 50px;
    }

    .hero .carousel-caption .btn-primary {
        font-size: 22px;
        padding: 18px 45px;
        border-radius: 35px;
    }

    .benefits-section {
        background-color: #f8f9fa;
        padding: 120px 0;
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
    }

    .benefits-section .section-title {
        font-size: 60px;
        font-weight: bold;
        margin-bottom: 70px;
    }

    .benefits-item {
        text-align: center;
        margin-bottom: 60px;
        background-color: #fff;
        border-radius: 25px;
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        padding: 50px;
        transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
    }

    .benefits-item:hover {
        transform: translateY(-15px);
        box-shadow: 0 18px 36px rgba(0, 0, 0, 0.2);
    }

    .benefits-item .image {
        margin-bottom: 40px;
    }

    .benefits-item .image img {
        max-width: 150px;
    }

    .benefits-item .content .title {
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .benefits-item .content .description {
        font-size: 22px;
        color: #666;
    }

    .auth-section {
        background-color: #f8f9fa;
    }

    .auth-section {
        background-color: #f8f9fa;
    }

    .auth-card {
        background-color: #fff;
        max-width: 500px;
        margin: 0 auto;
    }

    .form-control {
        border: none;
        border-radius: 10px;
        font-size: 16px;
        padding: 12px 20px;
        margin-bottom: 1.5rem;
        background-color: #f1f1f1;
        color: #333;
    }

    .form-control:focus {
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        background-color: #e6e6e6;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        font-size: 18px;
        padding: 12px 30px;
        border-radius: 30px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004a9b;
    }

    .switch-to-register,
    .switch-to-login {
        color: #007bff;
        font-weight: bold;
        text-decoration: none;
    }

    .switch-to-register:hover,
    .switch-to-login:hover {
        color: #0056b3;
    }

    .vape-product-card {
        background-color: #fff;
        border-radius: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        display: flex;
        overflow: hidden;
    }

    .vape-product-image-container {
        position: relative;
        width: 50%;
    }

    .vape-product-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .vape-product-category {
        position: absolute;
        top: 20px;
        left: 20px;
        background-color: #007bff;
        color: #fff;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 14px;
    }

    .vape-product-info {
        width: 50%;
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .vape-product-title {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .vape-product-description {
        font-size: 16px;
        color: #666;
        margin-bottom: 30px;
    }

    .vape-product-specs {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin-bottom: 30px;
    }

    .vape-spec {
        display: flex;
        align-items: center;
        font-size: 16px;
        color: #666;
        margin-bottom: 10px;
    }

    .vape-spec i {
        font-size: 18px;
        margin-right: 10px;
        color: #007bff;
    }

    .vape-product-price {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .vape-price {
        font-size: 24px;
        font-weight: bold;
        color: #007bff;
    }

    .btn-primary {
        font-size: 16px;
        padding: 12px 24px;
        border-radius: 25px;
    }
    .form-control-light {
        background-color: #f8f9fa;
        border: 1px solid #ced4da; 
    }

    .form-control-light:focus {
        background-color: #e2e6ea;
        border-color: #6c757d;
    }
    .number input[type="number"]::-webkit-outer-spin-button,
.number input[type="number"]::-webkit-inner-spin-button {
    display: none;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {

    -webkit-appearance: none;
    margin: 0;
}
input:focus {
    outline: none;
}
</style>

<body>
    <header class="bg-secondary py-4">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="/">Vapeshop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('catalog')}}">Каталог</a>
                        </li>

                        @if(Auth::check())
                            @if(session('user.role') == 'admin')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.create')}}">Добавить товар</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('profile')}}">Админ панель</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('basket')}}">Корзина</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('profile')}}">Личный кабинет</a>
                                </li>
                            @endif

                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}">Личный кабинет</a>
                            </li>
                        @endif

                        <li class="nav-item">
                            <a class="nav-link" href="#">Контакты</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-secondary text-white py-5">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-4">
                    <div class="footer-block">
                        <h4 class="mb-4">О нас</h4>
                        <p>Вейп-шоп - ведущий интернет-магазин вейп-продукции в России. Мы предлагаем широкий
                            ассортимент устройств и жидкостей по лучшим ценам.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-block">
                        <h4 class="mb-4">Навигация</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Главная</a></li>
                            <li><a href="#" class="text-white">Каталог</a></li>
                            <li><a href="#" class="text-white">Корзина</a></li>
                            <li><a href="#" class="text-white">Личный кабинет</a></li>
                            <li><a href="#" class="text-white">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-block">
                        <h4 class="mb-4">Контакты</h4>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-map-marker-alt mr-2"></i>Москва, ул. Пушкина, д. 10</li>
                            <li><i class="fas fa-phone-alt mr-2"></i>+7 (495) 123-45-67</li>
                            <li><i class="fas fa-envelope mr-2"></i>info@vape-shop.ru</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>