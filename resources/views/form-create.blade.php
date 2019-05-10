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
                                    <form action="" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-24">
                                                <input class="title" type="text" name="title" placeholder="Введите тему статьи">
                                            </div>
                                            <div class="col-xl-24">
                                                <input class="date"  type="text" name="date" id="filter-date"/>
                                                <label for="filter-date"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                                            </div>
                                            <div class="col-xl-24">
                                                <div class="input-group mb-3">
                                                    <select class="custom-select" id="inputGroupSelect02" name="selected">
                                                        <option selected>Choose.</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-24">
                                                <textarea name="text" placeholder="Введите текст"></textarea>
                                            </div>
                                            <div class="col-xl-24">
                                                <button class="btn-add" type="submit">Добавить статью</button>
                                            </div>
                                        </div>
                                    </form>
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