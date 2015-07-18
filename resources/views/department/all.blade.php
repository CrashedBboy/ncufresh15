@extends('layout')

@section('title', '系所社團')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/department/club.css') }}">
@stop
@section('js')
    <script type="text/javascript" src="{{ asset('js/department/departmentClub.js') }}"></script>
@stop

@section('content')
<div>
    @foreach($content as $content)
    @endforeach
    <!--新增-->
    <div>
        <a class="waves-effect waves-light grey lighten-2 btn butSelect" href="/group/add">新增</a>
        <a class="waves-effect waves-light grey lighten-2 btn butSelect" href="/group/edit/{{ $content->id }}">編輯</a>
    </div>
    <div class="col s1">
        <i class="small material-icons">navigate_before</i>
    </div>
</div>
<div class="container">
@if($sect === 1)
    <div>
        <h3>{{ $content->name }}</h3>
        <p>{{ $content->content }}</p>
    </div>
    @foreach($picture as $picture)
    <div>
        <img class="contentIamge" src="{{ asset('uploads/departments/'.$picture->picName.'') }}">
    </div>
    @endforeach
@elseif($sect === 2)
    {!! Form::open(array('url'=>'/group/update', 'method'=>'post', 'files' => true))!!}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ $content->id }}">
        <input type="hidden" name="originName" value="{{ $content->name }}">
        <div class="row">
            <div class="input-field col s12">
                <input name="name" id="name" type="text" class="validate" value="{{ $content->name }}">
                <label for="name">名稱</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea name="content" id="textarea1" class="materialize-textarea" length="600">{{ $content->content }}</textarea>
                <label for="textarea1">內容</label>
            </div>
        </div>
        @foreach($picture as $picture)
        <div>
            <img class="contentIamge" src="{{ asset('uploads/departments/'.$picture->picName.'') }}">
        </div>
        @endforeach
        <div>
            <button type="submit" class="waves-effect waves-light btn-large grey lighten-2 butSelect">送出</button>
        </div>
    {!! Form::close()!!}
@endif
</div>
@stop