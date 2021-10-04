@section('profile-messages')

    @if($errors->any()) 
        @if(!$errors->has('article_id'))
            <div class="error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    @endif