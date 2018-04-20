@extends('template')

@section('title','Ingresar')

@section('content')

<form method="POST" action="{{url('/login')}}">
	{{ csrf_field()}}

	<div class="row">
  		<div class="col-sm-4"></div>

  		 <div class="col-sm-4">

			<div class="wrapper">
			    <form class="form-signin"> 

			    	<h2 class="text-center">Login</h2><br>
			    	<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1">
					  	<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					  </span>
					  <input type="text" class="form-control" id="email" name="email" placeholder="Correo Electrónico" aria-describedby="basic-addon1">
					</div>
					<br>
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1">
					  	<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
					  </span>
					  <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" aria-describedby="basic-addon1">
					</div>
					<br>

					<div class="input-group">
				        <input type="checkbox" value="recuerdame" name="rememberMe"> Recuérdame 
				        <br>
				        <a href="{{url('perdida')}}">He olvidado mi contraseña</a>
				    </div>

					

					@if(session('error'))
					<div class="alert alert-danger" role="alert" id="error" >
					  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					  <span class="sr-only">Error:</span>
					  	{{session('error')}}
					</div>
					@endif
					
					<br>
			        <button class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">Entrar</button>   


					
					<div class="input-group">
				        <input type="checkbox" value="recuerdame" name="rememberMe"> Recuérdame 
				        <br>
				        <a href="{{url('usuarios/crear')}}">Registrate aquí</a>
				    </div>

			    </form>
			</div>
		</div>
	</div>

</form>

@endsection