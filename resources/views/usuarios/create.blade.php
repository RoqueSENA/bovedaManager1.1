@extends('layouts.app')
@section('title', 'Registro de Usuarios')
@section('content')

<div class="container">
    <div class="row">
        <div class="col">
			<div class="card">
				<div class="card-header">
					<h3>Registro</h3>
				</div>
				<div class="card-body">
					<form method='POST' action="usuarios">
						<div class="mb-3 row px-2">
							<label for="codUser" class="col-xs-4 col-form-label">Codigo de usuario</label>
							<div class="col-xs-8">
								<input type="hidden" name="action" value="registrar">
								<input type="text" class="form-control" name="codUser" id="codUser" placeholder="CO00..." required>
							</div>
						</div>
						<div class="mb-3 row px-2">
							<label for="nomUser" class="col-xs-4 col-form-label">Nombre</label>
							<div class="col-xs-8">
								<input type="text" class="form-control" name="nomUser" id="nomUser" placeholder="Nombre" required>
							</div>
						</div>
						<div class="mb-3 row px-2">
							<label for="passUser" class="col-xs-4 col-form-label">Contraseña</label>
							<div class="col-xs-8">
								<input type="password" class="form-control" name="passUser" id="passUser" placeholder="Password" required>
							</div>
						</div>
						<div class="mb-3 row px-2">
							<label for="rolUser" class="col-xs-4 col-form-label">Perfil</label>
							<div class="col-xs-8">
								<input type="text" class="form-control" name="rolUser" id="rolUser" placeholder="Rol" required>
							</div>
						</div>
						<div class="mb-3 row">
							<div class="col">
								<div class="d-grid">
									<button type="submit" class="btn btn-success btn-block">Crear</a>
								</div>
							</div>
						</div>
                        @csrf
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection