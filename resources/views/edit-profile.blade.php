@section("edit-profile")
    <div class="edit-profile">
        <h2 class="heading">Редактировать профиль</h2>
        @include('profile-messages')
        <form class="form" method="POST" action="{{ route('add-user') }}">
            @csrf
            <ul class="form__list">
                <li class="form__item">
                    <label class="form__label" for="nickname">Никнейм:</label>
                    <input class="form__input" name="nickname" id="nickname" type="text"
                        @isset($user)
                            value="{{ $user['nickname'] }}" disabled
                        @endisset
                    >
                </li>
                <li class="form__item">
                    <label class="form__label" for="firstname">Имя:</label>
                    <input class="form__input" name="firstname" id="firstname" type="text"
                        @isset($user)
                            value="{{ $user['firstname'] }}" disabled
                        @endisset
                    >
                </li>
                <li class="form__item">
                    <label class="form__label" for="lastname">Фамилия:</label>
                    <input class="form__input" name="lastname" id="lastname" type="text"
                        @isset($user)
                            value="{{ $user['lastname'] }}" disabled
                        @endisset
                    >
                </li>
                <li class="form__item">
                    <label class="form__inline-label" for="avatar">Аватар:</label>
                    <input class="form__inline-input" name="avatar" id="avatar" type="file" value="image/jpeg,image/png"
                        @isset($user)
                            disabled
                        @endisset
                    >
                </li>
                <li class="form__item">
                    <label class="form__label" for="phone">Телефон:</label>
                    <input class="form__input" name="phone" id="phone" type="text"
                        @isset($user)
                            value="{{ $user['phone'] }}" disabled
                        @endisset
                    >
                </li>
                <li class="form__item">
                    <div class="form__title">Пол:</div>
                    <label class="form__inline-label" for="male">Мужской</label>
                    <input class="form__inline-input" name="sex" id="male" value="male" type="radio"
                        @isset($user)
                            @if($user['sex'] == 'male')
                                checked
                            @endif
                            disabled
                        @endisset
                    >
                    <label class="form__inline-label" for="female">Женский</label>
                    <input class="form__inline-input" name="sex" id="female" value="female" type="radio"
                        @isset($user)
                            @if($user['sex'] == 'female')
                                checked
                            @endif
                            disabled
                        @endisset
                    >
                </li>
                <li class="form__item">
                    <label class="form__inline-label" for="is_mail_allowed">Я согласен получать email-рассылку</label>
                    <input class="form__inline-input" name="is_mail_allowed" id="is_mail_allowed" type="checkbox"
                        @isset($user)
                            @if($user['is_mail_allowed'] == true)
                                checked
                            @endif
                            disabled
                        @endisset
                    >
                </li>
                <li class="form__item">
                    <input class="form__button" type="submit" value="Отправить"
                        @isset($user)
                            disabled
                        @endisset 
                    >
                </li>
            </ul>
        </form>

    </div>