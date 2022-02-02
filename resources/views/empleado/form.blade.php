

<label for="Nombre"> Nombre</label>
<input type="text" name="Nombre" value="{{ isset ($empleado -> Nombre)?$empleado -> Nombre:''}}" id="Nombre">
<br>
<label for="Apellidos"> Apellidos</label>
<input type="text" name="Apellidos" value="{{ isset($empleado -> Apellidos)?$empleado -> Apellidos:'' }}"id="Apellidos">
<br>
<label for="Correo"> Correo</label>
<input type="text" name="Correo" value="{{ isset($empleado -> Correo)?$empleado -> Correo:'' }}" id="Correo">
<br>
<input  type="submit" value="Guardar datos">

