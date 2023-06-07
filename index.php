<?php include("db.php") ?>



<?php include("includes/header.php") ?>


<div class="container p-4">
    <div class="row">
        <div class="col-md-8">

            <div class="card card-body">
                <div action="save.php" method="POST">
                    <div class="form-group">
                        <label for="my-input">Cantidades</label>
                        <br><br>
                        <input id="cantidades" name="cantidades" type="text" class="form-control" placeholder="task tittle" autofocus>

                    </div>
                    <br>

                    <!--Esto es para poder selecionar un MP con un select-->
                    <div class="form-group">
                        <?php
                        $consulta = "SELECT * FROM mp";
                        $ejecutar = mysqli_query($conn, $consulta) or die(mysqli_error($conn));
                        ?>
                        <label for="my-input">
                            <?php 
                            
                            ?>
                        </label>
                        <!--<select class="form-select">
                            <option selected>Seleciona un MP</option>
                            <?php foreach ($ejecutar as $opciones) : ?>
                                <option value="<?php echo $opciones['id'] ?>"><?php echo $opciones['nombre_mp'] ?></option>
                            <?php endforeach ?>-->
                        </select>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<!--se crea la tabla para pomer las indicadores y meses-->
<div class="container">
    <div class="col-md-12">
        <table class="table table-borderless">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Enero</th>
                        <th scope="col">Febrero</th>
                        <th scope="col">Marzo</th>
                        <th scope="col">Abril</th>
                        <th scope="col">Mayo</th>
                        <th scope="col">Junio</th>
                        <th scope="col">Julio</th>
                        <th scope="col">Agosto</th>
                        <th scope="col">Septiembre</th>
                        <th scope="col">Octubre</th>
                        <th scope="col">Noviembre</th>
                        <th scope="col">Diciembre</th>
                    </tr>
                </thead>
                <tbody>


                    <!--Esto es para consultar los indicadores-->
                    <?php
                    $consulta = "SELECT * FROM efectiva";
                    $ejecutar = mysqli_query($conn, $consulta) or die(mysqli_error($conn));
                    ?>

                    <!--Esto es para consultar las cantidades-->
                    <?php
                    $consultar_cantidad = "SELECT * FROM cantidad";
                    $eject_cant = mysqli_query($conn, $consultar_cantidad) or die(mysqli_error($conn));
                    ?>

                    <tr>
                        <?php foreach ($ejecutar as $efectiva) : ?>

                            <th scope="col-sm-7" value=<?php echo $efectiva['id'] ?>><?php echo $efectiva['efectiva'] ?></th>


                            <!--Agregamos el comando para los inputs en fila-->

                            <!--Enero-->
                            <th>
                                <?php foreach ($eject_cant as $cantidad) : ?>
                                    <input class="form-control" value=<?php echo ['cantidad'] ?>> </input>
                                <?php endforeach ?>
                            </th>
                            <!--Febrero-->
                            <th>
                                <?php foreach ($eject_cant as $cantidad) : ?>
                                    <input class="form-control" value=<?php echo $cantidad['Febrero'] ?>> </input>
                                <?php endforeach ?>
                            </th>
                            <!--Marzo-->
                            <th>
                                <?php foreach ($eject_cant as $cantidad) : ?>
                                    <input class="form-control" value=<?php echo $cantidad['Marzo'] ?>> </input>
                                <?php endforeach ?>
                            </th>
                            <!--Abril-->
                            <th>
                                <?php foreach ($eject_cant as $cantidad) : ?>
                                    <input class="form-control" value=<?php echo $cantidad['Abril'] ?>> </input>
                                <?php endforeach ?>
                            </th>
                            <!--Mayo-->
                            <th>
                                <?php foreach ($eject_cant as $cantidad) : ?>
                                    <input class="form-control" value=<?php echo $cantidad['Mayo'] ?>> </input>
                                <?php endforeach ?>
                            </th>
                            <!--Junio-->
                            <th>
                                <?php foreach ($eject_cant as $cantidad) : ?>
                                    <input class="form-control" value=<?php echo $cantidad['Junio'] ?>> </input>
                                <?php endforeach ?>
                            </th>
                            <!--Julio-->
                            <th>
                                <?php foreach ($eject_cant as $cantidad) : ?>
                                    <input class="form-control" value=<?php echo $cantidad['Julio'] ?>> </input>
                                <?php endforeach ?>
                            </th>
                            <!--Agosto-->
                            <th>
                                <?php foreach ($eject_cant as $cantidad) : ?>
                                    <input class="form-control" value=<?php echo $cantidad['Agosto'] ?>> </input>
                                <?php endforeach ?>
                            </th>
                            <!--Septiembre-->
                            <th>
                                <?php foreach ($eject_cant as $cantidad) : ?>
                                    <input class="form-control" value=<?php echo $cantidad['Septiembre'] ?>> </input>
                                <?php endforeach ?>
                            </th>
                            <!--Octubre-->
                            <th>
                                <?php foreach ($eject_cant as $cantidad) : ?>
                                    <input class="form-control" value=<?php echo $cantidad['Octubre'] ?>> </input>
                                <?php endforeach ?>
                            </th>
                            <!--Noviembre-->
                            <th>
                                <?php foreach ($eject_cant as $cantidad) : ?>
                                    <input class="form-control" value=<?php echo $cantidad['Noviembre'] ?>> </input>
                                <?php endforeach ?>
                            </th>
                            <!--Diciembre-->
                            <th>
                                <?php foreach ($eject_cant as $cantidad) : ?>
                                    <input class="form-control" value=<?php echo $cantidad['Diciembre'] ?>> </input>
                                <?php endforeach ?>
                            </th>
                    </tr>
                <?php endforeach ?>



                </tbody>
            </table>

        </table>
    </div>

    <br>
    <div class="form-group">
        <input type="submit" class="btn btn-success btn-block" name="save" value="Guardar">
    </div>
</div>


<?php include("includes/footer.php") ?>