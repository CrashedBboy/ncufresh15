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
	<!--新增-->
	<div>
		<a class="waves-effect waves-light grey lighten-2 btn butSelect" href="/group/add">新增</a>
	</div>
	<div class="col s1">
    	<i class="small material-icons">navigate_before</i>
    </div>
@if($page === 1)
	<!--總攬-->
    <div>
    	<div class="group">
    		<a href="/group/departments"><label class="waves-effect waves-grey white">系所</label></a>
    		<a href="/group/clubs"><label class="waves-effect waves-grey white">社團</label></a>
		</div>
    </div>
@elseif($page === 2)
    <!--系所-->
    <div>
    	<div class="group">
			<a href="/group/departments/1"><label class="waves-effect waves-grey white">文學院</label></a>
			<a href="/group/departments/2"><label class="waves-effect waves-grey white">理學院</label></a>
		</div>
		<div class="group">
			<a href="/group/departments/3"><label class="waves-effect waves-grey white">工學院</label></a>
			<a href="/group/departments/4"><label class="waves-effect waves-grey white">管理學院</label></a>
		</div>
		<div class="group">
			<a href="/group/departments/5"><label class="waves-effect waves-grey white">資訊電機學院</label></a>
			<a href="/group/departments/6"><label class="waves-effect waves-grey white">地球科學學院</label></a>
		</div>
		<div class="group">
			<a href="/group/departments/7"><label class="waves-effect waves-grey white">客家學院</label></a>
			<a href="/group/departments8"><label class="waves-effect waves-grey white">生醫理工學院</label></a>
		</div>
	</div>
@elseif($page === 3)
	<!--社團-->
    <div>
    	<div class="group">
			<a href="/group/clubs/1"><label class="waves-effect waves-grey white">學術性</label></a>
			<a href="/group/clubs/2"><label class="waves-effect waves-grey white">康樂性</label></a>
		</div>
		<div class="group">
			<a href="/group/clubs/3"><label class="waves-effect waves-grey white">聯誼性</label></a>
			<a href="/group/clubs/4"><label class="waves-effect waves-grey white">服務性</label></a>
		</div>
		<div class="group">
			<a href="/group/clubs/5"><label class="waves-effect waves-grey white">系學會</label></a>
		</div>
    </div>
@elseif($page === 4)
    <!--新增-->
    <div>
    	{!! Form::open(array('url'=>'/group/new', 'method'=>'post', 'files' => true))!!}
    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<label>選擇類別</label>
			<div class="input-field col s12">
			    <select name="cateValue" style="display: block;">
			      	<option value="" disabled selected>社團</option>
			      	<option value="1">學術性</option>
			      	<option value="2">康樂性</option>
			      	<option value="3">聯誼性</option>
			      	<option value="4">服務性</option>
			      	<option value="5">系學會</option>
			      	<option value="" disabled selected>系所</option>
			      	<option value="6">文學院</option>
			      	<option value="7">理學院</option>
			      	<option value="8">工學院</option>
			      	<option value="9">管理學院</option>
			      	<option value="10">資訊電機學院</option>
			      	<option value="11">地球科學學院</option>
			      	<option value="12">客家學院</option>
			      	<option value="13">生醫理工學院</option>
			    </select>
			</div>
			<div class="row">
			   	<div class="input-field col s12">
			     	<input name="clubName" id="name" type="text" class="validate">
			     	<label for="name">名稱</label>
			   	</div>
			</div>
			<div class="row">
        	  	<div class="input-field col s12">
        	    	<textarea name="clubContent" id="textarea1" class="materialize-textarea" length="600"></textarea>
        	   		<label for="textarea1">內容</label>
        	  	</div>
        	</div>
			<div class="file-field input-field">
      			<input class="file-path validate" type="text">
      			<div>
      			<input name="fileName[]" id="file" type="file" class="validate" multiple="multiple" onchange="getFileName(this.value)">
        			<label id="fileName" for="file">選擇圖片</label>
      			</div>
   			</div>
			<div>
				<button type="submit" class="waves-effect waves-light btn-large grey lighten-2 butSelect">確認</button>
			</div>
		{!! Form::close()!!}
    </div>
@elseif($page === 5)
    <!--顯示內容-->
    <div>
        @foreach($list as $list)
        <div class="group">
            <a href="show/{{ $list->id }}"><label class="waves-effect waves-grey white">{{ $list->name }}</label></a>
        </div>
        @endforeach
    </div>
@endif
</div>
@stop