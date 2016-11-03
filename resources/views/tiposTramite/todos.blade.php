@extends('template')
@section('title','Tipos de Trámite')

@section('content')

<div id="container"></div>

<script>
var TablaTiposTramite;
</script>

<script type="text/babel" src="{{asset('rs/TablaTiposTramite.js')}}">
</script>

<script type="text/babel">

ReactDOM.render(
	<TablaTiposTramite url="{{asset('tipostramite/todos')}}" refresh="100000" />,
	document.getElementById('container')
);
</script>
@endsection()
