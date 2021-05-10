@if (Auth::id() != $user->id)
    @if (Auth::user()->is_favorite($user->id))
        {{-- アンフォローボタンのフォーム --}}
        {!! Form::open(['route' => ['users.unfavorites', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-default btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {{-- フォローボタンのフォーム --}}
        {!! Form::open(['route' => ['users.favorites', $user->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-success btn-sm"]) !!}
        {!! Form::close() !!}
    @endif
@endif