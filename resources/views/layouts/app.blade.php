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
    background-image: url('../../public/img/fon.png');
    background-color: #444;
    color: #f2f2f2;
}

.product-card {
    background-color: #333;
    border-radius: 25px;
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.5);
    overflow: hidden;
    transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
}

.product-card:hover {
    transform: translateY(-15px);
    box-shadow: 0 18px 36px rgba(0, 0, 0, 0.7);
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
    color: #fff;
    margin-bottom: 25px;
}

.product-card .btn-primary {
    font-size: 20px;
    padding: 15px 35px;
    border-radius: 35px;
    background-color: #ffeb3b;
    border-color: #ffeb3b;
    color: #000;
}

.product-card .btn-primary:hover {
    background-color: #fdd835;
    border-color: #fdd835;
}

.section-title {
    font-size: 50px;
    font-weight: bold;
    margin-bottom: 50px;
    text-align: center;
    text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.1);
}

.section-description {
    font-size: 22px;
    color: #ccc;
    margin-bottom: 50px;
    text-align: center;
    text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.1);
}

.contact-section {
    background-color: #333;
    background: rgba(28, 28, 28, 0.8);
    padding: 120px 0;
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.5);
}

.contact-section .section-title {
    font-size: 60px;
    font-weight: bold;
    margin-bottom: 70px;
}

.contact-form {
    background-color: #444;
    border-radius: 25px;
    padding: 60px;
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.5);
}

.contact-form .form-control {
    border-radius: 15px;
    font-size: 20px;
    padding: 18px 25px;
    background-color: #555;
    border-color: #555;
    color: #f2f2f2;
}

.contact-form .form-control:focus {
    background-color: #666;
    border-color: #666;
    color: #f9f9f9;
}

.contact-form .btn-primary {
    background-color: #ffeb3b;
    border-color: #ffeb3b;
    color: #000;
    font-size: 20px;
    padding: 18px 45px;
    border-radius: 35px;
}

.contact-form .btn-primary:hover {
    background-color: #fdd835;
    border-color: #fdd835;
}

header.bg-secondary,
footer.bg-secondary {
    background-color: #333 !important;

    color: #f2f2f2;
}

header a,
footer a {
    color: #f2f2f2;
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
    background-color: #ffeb3b;
    border-color: #ffeb3b;
    color: #000;
}

.hero .carousel-caption .btn-primary:hover {
    background-color: #fdd835;
    border-color: #fdd835;
}

.benefits-section {
    background-color: #444;
    background: rgba(28, 28, 28, 0.8);
    padding: 120px 0;
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.5);
}

.benefits-section .section-title {
    font-size: 60px;
    font-weight: bold;
    margin-bottom: 70px;
}

.benefits-item {
    text-align: center;
    margin-bottom: 60px;
    background-color: #333;
    border-radius: 25px;
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.5);
    padding: 50px;
    transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
}


.benefits-item:hover {
    transform: translateY(-15px);
    box-shadow: 0 18px 36px rgba(0, 0, 0, 0.7);
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
    color: #ccc;
}

.auth-section {
    background: rgba(28, 28, 28, 0.8);
}

.auth-card {
    background-color: #333;
    max-width: 500px;
    margin: 0 auto;
    color: #f2f2f2;
}

.form-control {
    border: none;
    border-radius: 10px;
    font-size: 16px;
    padding: 12px 20px;
    margin-bottom: 1.5rem;
    background-color: #555;
    color: #f2f2f2;
}

.form-control:focus {
    box-shadow: 0 0 0 0.25rem rgba(255, 235, 59, 0.25);
    background-color: #666;
    color: #f9f9f9;
}

.btn-primary {
    background-color: #ffeb3b;
    border-color: #ffeb3b;
    color: #000;
    font-size: 18px;
    padding: 12px 30px;
    border-radius: 30px;
}

.btn-primary:hover {
    background-color: #fdd835;
    border-color: #fdd835;
}

.switch-to-register,
.switch-to-login {
    color: #ffeb3b;
    font-weight: bold;
    text-decoration: none;
}

.switch-to-register:hover,
.switch-to-login:hover {
    color: #fdd835;
}

.vape-product-card {
    background-color: #333;
    border-radius: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
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
    background-color: #ffeb3b;
    color: #000;
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
    color: #f2f2f2;
}

.vape-product-title {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 15px;
}

.vape-product-description {
    font-size: 16px;
    color: #ccc;
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
    color: #ccc;
    margin-bottom: 10px;
}

.vape-spec i {
    font-size: 18px;
    margin-right: 10px;
    color: #ffeb3b;
}

.vape-product-price {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.vape-price {
    font-size: 24px;
    font-weight: bold;
    color: #ffeb3b;
}

.btn-primary {
    font-size: 16px;
    padding: 12px 24px;
    border-radius: 25px;
    background-color: #ffeb3b;
    border-color: #ffeb3b;
    color: #000;
}

.btn-primary:hover {
    background-color: #fdd835;
    border-color: #fdd835;
}

.form-control-light {
    background-color: #555;
    border: 1px solid #ced4da;
    color: #f2f2f2;
}

.form-control-light:focus {
    background-color: #666;
    border-color: #ccc;
    color: #f9f9f9;
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

.card {
    background-color: #333;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
}

.card-header {
    background-color: #007bff;
    color: #fff;
    padding: 1rem;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.card-header h3 {
    margin-bottom: 0;
}

.table-striped tbody, tr:nth-of-type(odd) {
    background-color: #444;
    color:white;
}
.table-striped thead, th:nth-of-type(odd) {
    background-color: #444;
    color: #fff;
}

.table td {
    vertical-align: middle;
    background-color: #444;
    color: #fff;
}

.product-image {
    max-width: 100%;
    height: auto;
}

.input-group {
    display: flex;
    align-items: center;
    justify-content: center;
}


.quantity-input {
    width: 50px;
    text-align: center;
    background-color: #555;
    border: 1px solid #ced4da;
    border-radius: 5px;
    padding: 0.5rem;
    color: #f2f2f2;
}

.btn-decrease,
.btn-increase {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    cursor: pointer;
}

.btn-decrease:hover,
.btn-increase:hover {
    background-color: #0056b3;
}

.btn-danger {
    background-color: #dc3545;
    color: #fff;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    cursor: pointer;
}

.btn-danger:hover {
    background-color: #c82333;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 0.75rem 1.5rem;
    border-radius: 5px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.card {
    background-color: #333;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
}

.card-header {
    background-color: #444;
    color: #fff;
    padding: 1rem;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.card-header h3 {
    margin-bottom: 0;
}

.product-image {
    max-width: 100%;
    height: auto;
}

.input-group {
    display: flex;
    align-items: center;
    justify-content: center;
}

.quantity-input {
    width: 50px;
    text-align: center;
    background-color: #555;
    border: 1px solid #ced4da;
    border-radius: 5px;
    padding: 0.5rem;
    color: #f2f2f2;
}

.btn-decrease,
.btn-increase {
    background-color: #4CAF50;
    color: #fff;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    cursor: pointer;
}

.btn-decrease:hover,
.btn-increase:hover {
    background-color: #3e8e41;
}

.btn-danger {
    background-color: #dc3545;
    color: #fff;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    cursor: pointer;
}

.btn-danger:hover {
    background-color: #c82333;
}

.btn-primary {
    background-color: yellow;
    color: #000;
    border: none;
    padding: 0.75rem 1.5rem;
    border-radius: 5px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #3e8e41;
}

.h4 {
    font-weight: bold;
    color: #fff;
}
h1{
    color:yellow;
}

</style>

<body>
    <header class="bg-secondary py-4" >
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
                                    <a class="nav-link" href="{{route('admin.index')}}">Админ панель</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('basket')}}">Корзина</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('profile')}}">Личный кабинет</a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('logout/' . session('user.id'))}}">Выйти</a>
                            </li>
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
