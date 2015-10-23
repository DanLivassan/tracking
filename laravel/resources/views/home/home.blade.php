@extends('layout')

@section('itens_menu')
	<li>{!! HTML::link('/','Home') !!}</li>
	<li>{!! HTML::link('/','Serviços') !!}</li>
	<li>{!! HTML::link('/','Portifólio') !!}</li>
	<li>{!! HTML::link('/app','App') !!}</li>
@stop

@section('content')
	Hello
@stop