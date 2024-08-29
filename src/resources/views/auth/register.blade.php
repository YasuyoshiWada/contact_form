@extends('layouts.app')


@section('content')
<body class=" bg-custom_bg">
    <div class="register__title w-full h-full mt-10">
        <div class="register-form__heading h-[10vh]">
            <h1 class="font-bold text-3xl text-center">Register</h1>
        </div>
        <form class="form bg-white w-[50vw] h-[60vh] mx-auto text-center" action="/register" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item text-custom_brown">お名前</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input class=" bg-custom_gray" type="text" name="name" value="{{ old('name') }}" />
                    </div>
                    <div class="form__error">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item text-custom_brown">メールアドレス</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input class="bg-custom_gray" type="email" name="email" value="{{ old('email') }}" />
                    </div>
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item text-custom_brown">パスワード</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input class="bg-custom_gray" type="password" name="password" />
                    </div>
                    <div class="form__error">
                        @error('password')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>

            {{-- <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">確認用パスワード</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="password" name="password_confirmation" />
                    </div>
                </div>
            </div> --}}
            <div class="form__button">
                <button class="form__button-submit  text-white bg-custom_brown_2" type="submit">登録</button>
            </div>
        </form>
    </div>
</body>
@endsection
