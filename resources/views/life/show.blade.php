@extends('layout')

@section('title','中大生活-介紹')

@section('css')
	<link rel="stylesheet" type="text/css" href='{{ asset('css/coverflow.css') }}' />
	<link rel="stylesheet" href="{{url('css/jquery.mCustomScrollbar.min.css')}}"/>
	<style type="text/css">
		#coverflow{
			font-family:inital !importment;
			position:relative;
		}
		#a{
			background-image:url({{asset('/img/life/article.png')}});
			background-size:100% auto;
			background-repeat: no-repeat;
			width:100%;
			height: 520px;
			margin-top: 30px;
		}
		#article{
			width:90%;
			height:55%;
			margin:3% auto;
		}
		strong{
			font-weight:bold;
		}
		p{
			font-size:120%;
		}
	</style>
@stop

@section('js')
	<script src="{{ asset('js/life/coverflow.min.js') }}"></script>
	<script>
		$(function() {
			// and kick off
	        $('#coverflow').coverflow();
	        $('#prev').click(function() {
		    	$('#coverflow' ).coverflow( 'prev' );
		    });
		    $('#next').click(function() {
		    	$('#coverflow' ).coverflow( 'next' );
		    });
	    });
	</script>
	<script src="{{url('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
@stop

@section('content')
<div class="row">
    @permission('management')
	<div class="right align">
		<a class="waves-effect waves-light btn" href="{{url('life/edit/'.$show->id)}}"><i class="material-icons left">settings</i>後台管理</a>
	</div>	
    @endpermission
</div>
<div id="coverflow"  style="height:400px;">
	@foreach($pictures as $picture)
		<a href="{{ str_replace('file','upload_img',$picture->url) }}" target="_blank">
			<img src="{{$picture->url}}" width="400" height="400">	
		</a>	
	@endforeach
</div>

<!--圖片-->

<div id="a">
	<div class="center-align" style="padding-top:5%;">
		<button class="waves-effect waves-light btn blue darken-4" id="prev">上一張</button>
		<button class="waves-effect waves-light btn blue darken-4" id="next">下一張</button>
	</div>
	<div id="article" class="mCustomScrollbar tab-content" data-mcs-theme="dark-thick">
		<p>{!! $show->content !!}</p>   <!--  -->
	</div>		
</div>
@stop
