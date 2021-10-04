@section('article-messages')

    @if($errors->has('article_id')) 
        <div class="error">
            <ul>
                @foreach($errors->get('article_id') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('message'))
        <div class="success">
            {{ session('message') }}
        </div>
    @endif