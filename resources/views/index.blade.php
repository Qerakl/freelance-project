@extends('layouts.app')

@section('content')
<section class="hero">
            <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active"
                        style="background-image: url('storage/images(1).jpeg');">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Добро пожаловать в Вейп-шоп</h1>
                            <p>Лучшие вейп-устройства и жидкости по самым низким ценам</p>
                            <a href="#" class="btn btn-primary btn-lg">Начать покупки</a>
                        </div>
                    </div>
                    <div class="carousel-item"
                        style="background-image: url('storage/images (2).png');">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Широкий ассортимент товаров</h1>
                            <p>Мы предлагаем большой выбор продукции на любой вкус</p>
                            <a href="#" class="btn btn-primary btn-lg">Посмотреть каталог</a>
                        </div>
                    </div>
                    <div class="carousel-item"
                        style="background-image: url('storage/images (3).jpeg');">
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Гарантия качества</h1>
                            <p>Вся наша продукция проходит строгий контроль качества</p>
                            <a href="#" class="btn btn-primary btn-lg">Узнать больше</a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <h2 class="section-title">Новинки</h2>
                <p class="section-description">Ознакомьтесь с нашими последними поступлениями</p>
                <div class="row">
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="product-card">
                            <img src="https://source.unsplash.com/400x400/?vape" alt="Товар 1">
                            <div class="card-body">
                                <h3 class="card-title">Товар 1</h3>
                                <div class="card-price">999 ₽</div>
                                <a href="#" class="btn btn-primary">Добавить в корзину</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="product-card">
                            <img src="https://source.unsplash.com/400x400/?vape" alt="Товар 2">
                            <div class="card-body">
                                <h3 class="card-title">Товар 2</h3>
                                <div class="card-price">1999 ₽</div>
                                <a href="#" class="btn btn-primary">Добавить в корзину</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="product-card">
                            <img src="https://source.unsplash.com/400x400/?vape" alt="Товар 3">
                            <div class="card-body">
                                <h3 class="card-title">Товар 3</h3>
                                <div class="card-price">2499 ₽</div>
                                <a href="#" class="btn btn-primary">Добавить в корзину</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <h2 class="section-title">Популярные товары</h2>
                <p class="section-description">Эти товары пользуются наибольшим спросом у наших клиентов</p>
                <div class="row">
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="product-card">
                            <img src="https://source.unsplash.com/400x400/?vape" alt="Товар 5">
                            <div class="card-body">
                                <h3 class="card-title">Товар 5</h3>
                                <div class="card-price">1299 ₽</div>
                                <a href="#" class="btn btn-primary">Добавить в корзину</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="product-card">
                            <img src="https://source.unsplash.com/400x400/?vape" alt="Товар 6">
                            <div class="card-body">
                                <h3 class="card-title">Товар 6</h3>
                                <div class="card-price">999 ₽</div>
                                <a href="#" class="btn btn-primary">Добавить в корзину</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="product-card">
                            <img src="https://source.unsplash.com/400x400/?vape" alt="Товар 7">
                            <div class="card-body">
                                <h3 class="card-title">Товар 7</h3>
                                <div class="card-price">1799 ₽</div>
                                <a href="#" class="btn btn-primary">Добавить в корзину</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="benefits-section">
            <div class="container">
                <h2 class="section-title">Почему выгодно заказывать у нас?</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="benefits-item">
                            <div class="image">
                                <img src="https://picsum.photos/150/150" alt="Быстрая доставка">
                            </div>
                            <div class="content">
                                <h3 class="title">Быстрая доставка</h3>
                                <p class="description">Мы доставляем заказы в кратчайшие сроки по всей России.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benefits-item">
                            <div class="image">
                                <img src="https://picsum.photos/150/150" alt="Низкие цены">
                            </div>
                            <div class="content">
                                <h3 class="title">Низкие цены</h3>
                                <p class="description">Мы предлагаем самые выгодные цены на рынке.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benefits-item">
                            <div class="image">
                                <img src="https://picsum.photos/150/150" alt="Гарантия качества">
                            </div>
                            <div class="content">
                                <h3 class="title">Гарантия качества</h3>
                                <p class="description">Вся наша продукция имеет сертификаты качества.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-section">
            <div class="container">
                <h2 class="section-title">Связаться с нами</h2>
                <p class="section-description">Ответим на все ваши вопросы и предложения</p>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="contact-form">
                            <form>
                                <div class="form-group mb-4">
                                    <label for="name" class="form-label">Имя</label>
                                    <input type="text" class="form-control" id="name" placeholder="Введите ваше имя">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Введите ваш email">
                                </div>
                                <div class="form-group mb-5">
                                    <label for="message" class="form-label">Сообщение</label>
                                    <textarea class="form-control" id="message" rows="5"
                                        placeholder="Введите ваше сообщение"></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">Отправить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
