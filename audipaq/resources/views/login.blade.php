@extends('layouts.head')
@include('layouts.menu_NavegacionLogin')
<br>
<br>
<div class="modal-dialog" >
	<div class="modal-content">
		<div class="modal-body">
			<form class="formulario" action="btnLogin" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
				<div class="form-group">
					<label>Correo</label>
					<input type="email" name="txtCorreoElectronico" class="form-control"placeholder="Introduce tu correo" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required>
				</div>
				<div class="form-group">
					<label >Contraseña</label>
					<input type="password" name="txtContrasena" class="form-control"  placeholder="Introduce tu contraseña" required>
				</div>
				<br>
				<center><button type="submit" class="btn btn-primary" style="background: #00ACC1; border: none;">Iniciar Sesi&oacute;n</button></center>
				<br>
				<center><a style="color: #00ACC1"><b>¿Olvidaste la contraseña?</b></a></center>
			</form>
		</div>	
	</div>
</div>
<br>
<br>
@extends('layouts.footer')