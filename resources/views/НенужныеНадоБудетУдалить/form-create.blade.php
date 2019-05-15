@extends('layouts.main')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-24">
                <div class="title-widget">
                    <h1>Добавление новой статьи</h1>
                </div>
            </div>
            <div class="col-xl-18">
                <div class="wrap-create-form">
                    <div class="row">
                        <div class="col-xl-24">
                            <div class="wrap-form-create">
                                <div class="form-create">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{route('store_article')}}" method="post" class="needs-validation" novalidate>
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-24">
                                                <input class="title form-control" type="text" name="title" value="{{ old('title') }}" placeholder="Введите тему статьи" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-xl-24">
                                                <div>
                                                    <input class="date form-control" style="width: 170px !important; display: inline-block;"  type="text" name="date" id="filter-date" value="{{ old('date') }}" required/>
                                                    <label for="filter-date"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                                                </div>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-xl-24">
                                                <div class="input-group mb-3" style="width: 170px !important;">
                                                    <select class="custom-select" id="inputGroupSelect02" name="tag" required>
                                                       <option selected value="">Выбрать</option>
                                                        @if(isset($tags))
                                                            @foreach($tags as $tag)
                                                                <option value="{{$tag->id}}">{{$tag->title}}</option>
                                                            @endforeach
                                                        @endif
                                                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                                                        {{--<option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>--}}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-24">
                                                <textarea class="form-control" name="text" placeholder="Введите текст" required></textarea>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-xl-24">
                                                <button class="btn-add" type="submit">Добавить статью</button>
                                            </div>
                                        </div>
                                    </form>
                                        <div class="link">
                                            <a href="{{route('main')}}"> <-- В статьи</a>
                                        </div>
                                </div>

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
                        <a href="#" class="tag-big">Laravel</a>
                        <a href="#" class="tag-small">php</a>
                        <a href="#" class="tag-extra-small">ооп</a>
                        <a href="#" class="tag-small">Managment</a>
                        <a href="#" class="tag-extra-small">favorites</a>
                        <a href="#" class="tag-extra-small">ооп</a>
                        <a href="#" class="tag-big">Verse</a>
                        <a href="#" class="tag-big">Better</a>
                        <a href="#" class="tag-extra-small">Worse</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection