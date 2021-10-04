@section('my-profile')
    <div class="my-profile">
        <h2 class="heading">Мой профиль</h2>
        <div class="profile">
          <div class="avatar">
            @isset($user)
                @if($user['avatar'] != null)
                    <img src="{{$user['avatar']}}" alt="Аватар" class="avatar__pic">
                @else
                    <img src="./image.jpg" alt="Аватар" class="avatar__pic">
                @endif
            @endisset
          </div>
          <div class="information">
            <div class="nickname">
                @isset($user)
                    {{ $user['nickname'] }}
                @endisset
            </div>
            <div class="user-name">
              <span class="name">
                @isset($user)
                    {{ $user['firstname'] }}
                @endisset
              </span>
              <span class="surname">
                @isset($user)
                    {{ $user['lastname'] }}
                @endisset
              </span>
            </div>
            <a class="phone">
                @isset($user)
                    {{ $user['phone'] }}
                @endisset
            </a>
          </div>
        </div>
    </div>