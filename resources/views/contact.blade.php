@extends('layouts.app')

@section('content')
<section class="contact-section py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Связаться с нами</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info">
                    <h3>Наши контакты</h3>
                    <ul>
                        <li><strong>Адрес:</strong> г. Челябинск, ул. Пушкина, д. 36а</li>
                        <li><strong>Телефон:</strong> +7(999)-999-99-99</li>
                        <li><strong>Email:</strong> <a href="mailto:[Вставьте email]">vapeshop@mail.ru</a></li>
                    </ul>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2277.587492846936!2d61.35395397593812!3d55.1904850351629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c5932dc8bf28db%3A0x79e4913046621845!2z0KfQtdC70Y_QsdC40L3RgdC60LjQuSDRjtGA0LjQtNC40YfQtdGB0LrQuNC5INC60L7Qu9C70LXQtNC2!5e0!3m2!1sru!2sru!4v1719074604689!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-form">
                    <h3>Оставьте нам сообщение</h3>
                    <form method="POST" action="[Вставьте обработчик формы]">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Ваше имя:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Ваше имя">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Ваш email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Ваш email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="message">Ваше сообщение:</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Ваше сообщение"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
