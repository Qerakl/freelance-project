@extends('layouts.app')

@section('content')
<section class="auth-section py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Вход в аккаунт</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="auth-card p-5 rounded-3 shadow-lg">
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    <form id="loginForm" action="{{ route('login') }}" method="POST">
                    @csrf
                    @method('POST')  
                        <div class="form-group mb-4">
                            <label for="loginEmail" class="form-label">Email</label>
                            <input type="email" class="form-control shadow-sm" id="loginEmail" name="email" placeholder="Введите ваш email" required>
                        </div>
                        <div class="form-group mb-5">
                            <label for="loginPassword" class="form-label">Пароль</label>
                            <input type="password" class="form-control shadow-sm" id="loginPassword" name="password" placeholder="Введите пароль" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg px-5 shadow">Войти</button>
                        </div>
                    </form>
                    <div class="text-center mt-4">
                        <a href="#" class="switch-to-register text-primary font-weight-bold">Еще не зарегистрированы?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Форма регистрации -->
<section class="auth-section py-5" style="display: none;">
    <div class="container">
        <h2 class="section-title text-center mb-5">Регистрация</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="auth-card p-5 rounded-3 shadow-lg">
                    <form id="registerForm" action="{{ route('register') }}" method="POST">
                    @csrf
                    @method('POST')  
                        <div class="form-group">
                            <label for="registerName" class="form-label">Имя</label>
                            <input type="text" class="form-control shadow-sm" id="registerName"  name="name" placeholder="Введите ваше имя" required>
                        </div>
                        <div class="form-group">
                            <label for="registerEmail" class="form-label">Email</label>
                            <input type="email" class="form-control shadow-sm" id="registerEmail" name="email" placeholder="Введите ваш email" required>
                        </div>
                        <div class="form-group">
                            <label for="registerBirthdate" class="form-label">Дата рождения</label>
                            <input type="date" class="form-control shadow-sm" id="registerBirthdate" name="date" required>
                        </div>
                        <div class="form-group">
                            <label for="registerPassword" class="form-label">Пароль</label>
                            <input type="password" class="form-control shadow-sm" id="registerPassword"  name="password" placeholder="Введите пароль" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword" class="form-label">Подтверждение пароля</label>
                            <input type="password" class="form-control shadow-sm" id="confirmPassword" name="password_confirmation" placeholder="Подтвердите пароль" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg px-5 shadow">Зарегистрироваться</button>
                        </div>
                    </form>
                    <div class="text-center mt-4">
                        <a href="#" class="switch-to-login text-primary font-weight-bold">Уже есть аккаунт?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    // Обработчик переключения между формами
    document.querySelectorAll('.switch-to-register, .switch-to-login').forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const loginSection = document.querySelector('.auth-section:not([style*="display: none"])');
            const registerSection = document.querySelector('.auth-section[style*="display: none"]');
            loginSection.style.display = 'none';
            registerSection.style.display = 'block';
        });
    });


    
</script>
@endsection