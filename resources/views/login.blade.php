@extends('layouts.main')

@section('title', 'MCPAC')

@section('content')

		<div class="container">
			<div class="row" >
				<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
					<div style="background-image: url('/img/space.jpg')" class="card card-signin my-5">
						
						<div class="card-body">
							<div class="row text-center">
								<div class="col-12">
									<img src="/img/user-avatar.png" class="img-responsive" width="100" height="100">
								</div>
							</div>
							<h3 id="title-mc" class="text-center mb-4">LOGIN</h3>

							@if ($errors->any())
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif

							@if (session('danger'))
								<div class="alert alert-danger">
									{{session('danger')}}
								</div>
							@endif
							<form action="{{route('auth.user')}}"  method ="POST" class="login-form">
							@csrf
								<div class="form-group">
									<input type="text" class="form-control rounded-left" placeholder="E-mail" name="email" required>
								</div>

								<div class="form-group d-flex">
									<input type="password" class="form-control rounded-left" placeholder="Senha" name="password" required>
								</div>
								
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Entrar</button>
								</div>
								<div class="form-group">
									<div class="w-50">
										<a href="#">Esqueceu a senha?</a>
									</div>
									<div class="w-50">
										<a href="cadastro">Criar conta</a>
									</div>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="style/js/jquery.min.js"></script>
		<script src="style/js/popper.js"></script>
		<script src="style/js/bootstrap.min.js"></script>
		<script src="style/js/main.js"></script>
		@endsection