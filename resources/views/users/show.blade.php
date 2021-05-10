@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            
            {{-- ユーザ情報 --}}
            @include('users.card')
            {{-- フォロー／アンフォローボタン --}}
            @include('user_follow.follow_button')
            @include('favorites.favorite_button')
        </aside>
        <div class="col-sm-8">
            <ul class="nav nav-tabs nav-justified mb-3">
                {{-- タブ --}}
                @include('users.navtabs')
            </ul>
            @if (Auth::id() == $user->id)
                {{-- 投稿フォーム --}}
                @include('microposts.form')
            @endif
            {{-- 投稿一覧 --}}
            @include('microposts.microposts')
        </div>
    </div>
@endsection
