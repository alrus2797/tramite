@extends('template')
@section('title','Areas')

@section('react')
  <script src="{{asset('js/react.js')}}"></script>
  <script src="{{asset('js/react-dom.js')}}"></script>
  <script src="{{asset('js/browser.min.js')}}"></script>

@endsection


@section('content')



<div id="container"></div>

<script>
var TablaAreas;
</script>

<script type="text/babel" src="{{asset('rs/TablaAreas.js')}}">
</script>

<script type="text/babel">

ReactDOM.render(
	<TablaAreas url="{{asset('areas/todos')}}" refresh="100000" base = "{{asset('areas/')}}"/>,
	document.getElementById('container')
);
</script>
@endsection()