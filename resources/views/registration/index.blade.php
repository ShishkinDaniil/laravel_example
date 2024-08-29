@extends('layouts.auth', ['flexMain' => '0'])

@section('page.title', 'Страница входа')

@section('auth.content')
    <div class="auth-content">
        <x-card>
            <x-card-header>
                <x-card-title>
                    {{ __('Регистрация') }}
                </x-card-title>
            </x-card-header>

            <x-card-body>
                <x-errors />

                <x-form action=" {{ route('registration.store') }}" method="POST">

                    <x-form-item>
                        <x-label required>{{ __('Имя') }}</x-label>
                        <x-input type="name" name='name' autofocus />
                    </x-form-item>

                    <x-form-item>
                        <x-label required>{{ __('Email') }}</x-label>
                        <x-input type="email" name='email' />
                    </x-form-item>

                    <x-form-item>

                        <x-label required>{{ __('Пароль') }} </x-label>
                        <x-input type="password" name='password' />
                    </x-form-item>

                    <x-form-item>

                        <x-label required>{{ __('Повторите пароль') }} </x-label>
                        <x-input type="password" name='password_confirmation' />
                    </x-form-item>

                    <x-form-item>
                        <x-checkbox name="agreement">
                            {{ __('Я согласен на обработку пользовательских данных') }}
                        </x-checkbox>
                    </x-form-item>

                    <x-button type="submit">
                        {{ __('Зарегестрироваться') }}
                    </x-button>

                </x-form>

            </x-card-body>
        </x-card>
    </div>
@endsection
