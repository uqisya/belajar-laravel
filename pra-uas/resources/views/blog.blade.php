@extends('layouts.main')

@section('content')
    @foreach ($posts as $post)
        <article>
            <div class="bg-body-secondary">
                <h2>
                    <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                </h2>
                <p>
                    {{ $post->excerpt }}
                </p>
            </div>
        </article>
    @endforeach
@endsection
