@extends('layouts.admin')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-24">
                <div class="title-widget">
                    <h1>Добавление новой статьи</h1>
                </div>
            </div>
            <div class="col-xl-18">
                <div class="wrap-create-form none-style">
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
                                    <form action="{{route('admin.articles.update', ['article' => $article->id])}}" method="post" class="needs-validation" novalidate id="form-article">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-xl-24">
                                                <input class="title form-control" type="text" name="title" value="{{ $article->title }}" placeholder="Введите тему статьи" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-xl-24">
                                                <div>
                                                    <input class="date form-control" style="width: 170px !important; display: inline-block;"  type="text" name="date" id="filter-date" value="{{ $article->created_at }}" required/>
                                                    <label for="filter-date"><i class="fa fa-calendar" aria-hidden="true"></i></label>
                                                </div>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-xl-24">
                                                {{--<section >--}}
                                                    {{--<select style="width: 300px; max-width: 100%;" id="select7" name="tags" multiple class="selectator" data-selectator-keep-open="true" data-selectator-show-all-options-on-focus="true" data-selectator-search-fields="value text subtitle right">--}}
                                                        {{--<optgroup label="Group one" class="group_one">--}}
                                                            {{--<option value="1" class="option_one" data-subtitle="The first option"  data-right="1">One</option>--}}
                                                            {{--<option value="2" class="option_two" data-subtitle="The second option" d data-right="2">Two</option>--}}
                                                        {{--</optgroup>--}}
                                                        {{--@if(isset($tags))--}}
                                                            {{--@foreach($tags as $tag)--}}
                                                                {{--<option value="{{$tag->id}}" >{{$tag->title}}</option>--}}

                                                            {{--@endforeach--}}
                                                        {{--@endif--}}
                                                    {{--</select>--}}
                                                {{--</section>--}}

                                                <div class="input-group mb-3" style="width: 170px !important;">
                                                    <select class="custom-select" id="inputGroupSelect02" name="tag" required>

                                                        @if(isset($tags))
                                                            @foreach($tags as $tag)
                                                                <option value="{{$tag->id}}">{{$tag->title}}</option>
                                                            @endforeach
                                                        @endif
                                                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-24">
                                                <textarea class="form-control" name="text" placeholder="Введите текст" required>{{$article->text}}</textarea>
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
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-XSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            $("#ok").on("click",(function(){
                var formData = new FormData(document.getElementById("form-article"));
                $.ajax({
                    url: 'create/',
                    type: 'POST',
                    data: formData,
                    dataType: 'JSON',
                    success: function (data) {
                        console.log(data);
                    }
                });
            }));

        });
    </script>

@endsection