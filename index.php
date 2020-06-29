<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tienda szp</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <header>

    </header>
    <main>
        <div class="container">
            <div class="row">
            <div class="col-12 col-md-3">
                    <h1>tienda final</h1>

                    <form action="agregarDatos.php" method="Post">

                        <div class="form-group">
                            <label for="cedulaUsuario">cedula :</label>
                            <input type="text" class="form-control" id="cedulaUsuario" name="cedulaUsuario">
                        </div>

                        <div class="form-group">
                            <label for="nombreUsuario">Nombres :</label>
                            <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario">
                        </div>


                        <div class="form-group">
                            <label for="ApellidoUsuario">Apellidos :</label>
                            <input type="text" class="form-control" id="nombreUsuario" name="ApellidoUsuario">
                        </div>

                        <div class="form-group">
                            <label for="correoUsuario">correo :</label>
                            <input type="email" class="form-control" id="correoUsuario" name="correoUsuario">

                        </div>

                        <div class="form-group">
                            <label for="passUsuario">contraseña :</label>
                            <input type="password" class="form-control" id="passUsuario" name="passUsuario">
                        </div>

                        <button type="submit" class="btn btn-primary" id="btnEnviar" name="btnEnviar">agregar</button>
                    </form>
           </div>
           <div class="col-12 col-md-3 mt-5">
                        <form action="buscarDatos.php" method="Post">
                            <div class="form-group">
                                <label for="cedulaBuscar">Cedula a buscar :</label>
                                <input type="number" class="form-control" id="cedulaBuscar" name="cedulaBuscar">
                            </div> 
                            <button type="submit" class="btn btn-danger" id="btnBuscar" name="btnBuscar">consultar</button>
                        </form>
                    </div>
            
                    <div class="col-12 col-md-3 mt-5">
                        <form action="borrarDatos.php" method="Post">
                            <div class="form-group">
                                <label for="cedulaBorrar"> cedula a borrar:</label>
                                <input type="number" class="form-control" id="cedulaBorrar" name="cedulaBorrar">
                            </div>      
                            <button type="submit" class="btn btn-danger" id="btnBorrar" name="btnBorrar">BORRAR</button>
                        </form>
                    </div>
            
                    <div class="col-12 col-md-3 mt-5">
                        <form action="actualizarDatos.php" method="Post">
                            <div class="form-group">
                                <label for="usuarioActualizar"> digite la cedula:</label>
                                <input type="number" class="form-control" id="usuarioActualizar" name="usuarioActualizar">
                            </div>
                        </form>
                   
                           
                        <div class="form-group">
                            <label for="correoUsuario">correo :</label>
                            <input type="email" class="form-control" id="correoUsuario" name="correoUsuario">

                        </div>

                        <div class="form-group">
                            <label for="telefonoUsuario">telefono :</label>
                            <input type="email" class="form-control" id="telefonoUsuario" name="telefonoUsuario">
                        </div>
                            <button type="submit" class="btn btn-primary" id="btnActualizar" name="btnActualizar">Actualizar</button>
                    </div>
                
                </div>
            </div>
        </div>

    </main>

    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>