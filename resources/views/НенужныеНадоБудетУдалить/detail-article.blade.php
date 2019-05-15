@extends('layouts.main')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-24">
                <div class="title-widget">
                    <h1>{{$article->title}}</h1>
                </div>
            </div>
            <div class="col-xl-18">
                <div class="row">
                    <div class="col-xl-24">
                        <div class="article-detail">
                            <div class="article-detail__date-tags">
                                <span class="date">{{$article->created_at}}</span>
                                <span class="line">/</span>
                                <span class="tags">
                                     @foreach($article->tags as $tag)
                                        @if($article->tags->last()->id === $tag->id)
                                            <span>{{$tag->title }} </span>
                                        @else
                                            <span>{{$tag->title }}, </span>
                                        @endif
                                    @endforeach
                                </span>
                            </div>
                            <div class="article-detail__text">
                               {!! $article->text !!}
                            </div>
                            <div class="link">
                                <a href="{{route('main')}}"> <-- В статьи</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="right-bar">
                    <div class="title-bar">
                        <h3>Теги</h3>
                    </div>
                    <div class="tags">

                        @foreach($tags as $tag)
                            @foreach($tag->articles as $article)
                                @if($tag->id % 2 === 0)
                                    <a href="{{route('show-article',['id' => $article->id] )}}" class="tag-big">{{$tag->title}}</a>
                                @else
                                    <a href="{{route('show-article',['id' => $article->id] )}}" class="tag-extra-small">{{$tag->title}}</a>
                                @endif
                                @if($tag->id % 4 === 0)
                                    <a href="{{route('show-article',['id' => $article->id] )}}" class="tag-small">php</a>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection