@extends('layouts.main')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-18">
                <div class="title-widget">
                    <h1>Блог</h1>
                </div>
                <div class="articles">
                    <div class="row">
                        <div class="col-xl-24">
                            <div class="wrap-article">
                                @foreach($articles as $article)
                                <div class="article">
                                    <div class="article__title">
                                        <h2>{{$article->title}}</h2>
                                    </div>
                                    <div class="article__date-tags">
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
                                    <div class="article__text">
                                        {!! mb_strimwidth($article->text, 0, 400, "...") !!}
                                        {{--<p>Расмотрим в терминах вилка резетка
                                        </p>
                                        <p>Все что нужно чтать о php вы сможете найти в этой статье</p>
                                        <p>
                                            Все что нужно чтать о php вы сможете найти в этой статье
                                            Расмотрим в терминах вилка резетка
                                            Все что нужно чтать о php вы сможете найти в этой статье</p>
                                        <p> Нужно просто начать читать доступный материал из наших статей,
                                            все что нужно чтать о php вы сможете найти в этой статье</p>--}}
                                    </div>
                                    <div class="article__more">
                                        <a href="{{route('show-article',['id' => $article->id])}}">Читать далее</a>
                                    </div>
                                </div>
                                @endforeach
                                {{--<div class="article">
                                    <div class="article__title">
                                        <h2>Заголовок</h2>
                                    </div>
                                    <div class="article__date-tags">
                                        <span class="date">22 июня 2018</span>
                                        <span class="line">/</span>
                                        <span class="tags"><span>Шаблоны адаптер</span>, <span> php</span></span>
                                    </div>
                                    <div class="article__text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus officiis sint velit.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus officiis sint velit.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus officiis sint velit.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus officiis sint velit.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus officiis sint velit.
                                        </p>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus officiis sint velit.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus officiis sint velit.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus officiis sint velit.</p>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus officiis sint velit.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus officiis sint velit.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus officiis sint velit.</p>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus officiis sint velit.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus officiis sint velit.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus officiis sint velit.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus officiis sint velit.</p>
                                    </div>
                                    <div class="article__more">
                                        <a href="#">Читать далее</a>
                                    </div>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="to-add-article">
                    <a href="{{route('articles.create')}}">Добавить статью</a>
                </div>
                <div class="right-bar">
                    <div class="title-bar">
                        <h3>Теги</h3>
                    </div>
                    <div class="tags">

                           @foreach($tags as $tag)
                               @if($tag->id % 2 === 0)
                                <a href="#" class="tag-big">{{$tag->title}}</a>
                                   @else
                                    <a href="#" class="tag-extra-small">{{$tag->title}}</a>
                                @endif
                                   @if($tag->id % 4 === 0)
                                       <a href="#" class="tag-small">php</a>
                                   @endif
                           @endforeach
                        {{--<a href="#" class="tag-big">Laravel</a>
                        <a href="#" class="tag-small">php</a>
                        <a href="#" class="tag-extra-small">ооп</a>
                        <a href="#" class="tag-small">Managment</a>
                        <a href="#" class="tag-extra-small">favorites</a>
                        <a href="#" class="tag-extra-small">ооп</a>
                        <a href="#" class="tag-big">Verse</a>
                        <a href="#" class="tag-big">Better</a>
                        <a href="#" class="tag-extra-small">Worse</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection