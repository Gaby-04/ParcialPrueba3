


<form action="{{route('customer.store')}}" method="post">
@csrf
<label for="nombre">Nombre</label>
<input type="text" name="nombre", id="nombre">
<br> <br>
<label for="apellido">Apellido</label>
<input type="text" name="apellido", id="apellido">
<br><br>
<label for="edad">Edad</label>
<input type="number" name="edad", id="edad">
<br><br>
<label for="telefono">Telefono</label>
<input type="text" name="telefono", id="telefono">
<br><br>
<label for="email">Email</label>
<input type="text" name="email", id="email">
<br><br>
<label for="email">Password</label>
<input type="text" name="password", id="password">
<br><br>
<label for="cargo">   Cargo</label>
<input type="text" name="cargo", id="cargo">
<br><br>
<label for="nacionalidad">Nacionalidad</label>
<input type="text" name="nacionalidad", id="nacionalidad">
<br><br>
<button type="submit"> Guardar</button>
</form>