@section("delete-article")
    <div class="delete-article">
        <h2 class="heading">Удалить статью</h2>
        @include('article-messages')
        <form class="form" method="POST" action="{{ route('delete-article') }}">
            @csrf
            <ul class="form__list">
                <li class="form__item">
                    <label class="form__label" for="article_id">Номер статьи:</label>
                    <input class="form__input" name="article_id" id="article_id" type="text">
                </li>
                <li class="form__item">
                    <input class="form__button" type="submit" value="Удалить">
                </li>
            </ul>
        </form>

    </div>