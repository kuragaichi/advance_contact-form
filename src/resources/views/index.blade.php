<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>お問い合わせ</h2>
            </div>
            <form class="form" action="/contacts/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--name">
                            <input type="text" name="firstname" placeholder="" value="{{ old('firstname') }}" />
                            <span class="form__label--sample">例）山田</span>
                        </div>
                        <div class="form__error">
                            @error('firstname')
                            {{ $message }}
                            @enderror
                        </div>
                        <div class="form__input--name">
                            <input type="text" name="lastname" placeholder="" value="{{ old('lastname') }}" />
                            <span class="form__label--sample">例）太郎</span>
                        </div>
                        <div class="form__error">
                            @error('lastname')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group form__group__clear">
                    <div class="form__group-title">
                        <span class="form__label--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__group-gender">
                            <label class="Radio">
                                <input class="Radio-Input" type="radio" name="gender" value="1" checked />
                                <span class="Radio-Text">男性</span>
                            </label>
                            <label class="Radio">
                                <input class="Radio-Input" type="radio" name="gender" value="2" />
                                <span class="Radio-Text">女性</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" value="{{ old('email') }}" />
                            <span class="form__label--sample">例）test@example.com</span>
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
                        <span class="form__label--item">郵便番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text form__input--flex">
                            <div class="form__input--flex-item01">
                                <span class="postal-mark">〒</span>
                            </div>
                            <div class="form__input--flex-item02">
                                <input type="text" name="postcode" class="postal-text" value="{{ old('postcode') }}" />
                                <span class="form__label--sample">123-4567</span>
                            </div>
                        </div>
                        <div class="form__error">
                            @error('postcode')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" id="address" class="form__input" value="{{ old('postcode') }}" />
                            <span class="form__label--sample">例）東京都渋谷区千駄ヶ谷1-2-3</span>
                        </div>
                        <div class="form__error">
                            @error('address')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="building_name" value="{{ old('building_name') }}" />
                            <span class="form__label--sample">例）千駄ヶ谷マンション103</span>
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">ご意見</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="opinion" value="{{ old('opinion') }}"></textarea>
                        </div>
                    </div>
                    <div class=" form__error">
                        @error('opinion')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認</button>
                </div>
            </form>
        </div>
    </main>
    <script src="{{ asset('js/address-autofill.js') }}"></script>
</body>

</html>