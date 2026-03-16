<h2>Agregar producto</h2>

<form action="guardar.php" method="POST" enctype="multipart/form-data">

<input type="text" name="nombre" placeholder="Nombre del celular" required><br><br>

<input type="number" name="precio" placeholder="Precio" required><br><br>

<input type="number" name="stock" placeholder="Stock" required><br><br>

<input type="file" name="imagen" required><br><br>

<button type="submit">Guardar</button>

</form>
