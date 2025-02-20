@extends('components.layout')
@section('title', 'Stay Updated')
@section('sub-title')
Blog that keep you updated
@endsection
@section('background_image', asset('new-assets/assets/img/home-bg.jpg'))
@section('main-content')
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    @foreach ($posts as $post)
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="{{ route('post.show', $post['id']) }}">
                            <h2 class="post-title">{{$post['title'] }}</h2>
                            @isset($post['sub-title'])
                            <h3 class="post-subtitle">{{$post['sub-title']}}</h3>
                            @endisset
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">{{ $post['author'] }}</a>
                            on {{ $post['date'] }}
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    @endforeach         
                </div>
            </div>
        </div>
@endsection

