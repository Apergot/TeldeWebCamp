<?php include_once 'includes/templates/header.php' ?>

<section class="seccion contenedor">
    <h2>Calendario de eventos</h2>
    <?php
    try {
        require_once('includes/funciones/db_connection.php');
        $sql = ' SELECT id_evento, nombre_evento, fecha_evento, hora_evento, 
                cat_evento, icono, nombre_invitado, apellido_invitado ';
        //Concatenamos de la línea previa con .=
        $sql .= ' FROM eventos ';
        $sql .= ' INNER JOIN categoriaevento ';
        $sql .= ' ON eventos.id_cat_evento=categoriaevento.id_categoria ';
        $sql .= ' INNER JOIN invitados ';
        $sql .= ' ON eventos.id_invitado=invitados.id_invitado ';
        $sql .= ' ORDER BY id_evento ';

        $result = $conn->query($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
    ?>

    <div class="calendario">
        <?php
        $calendario = array();
        while ($eventos = $result->fetch_assoc()) {

            //Ordenamos por las fechas del evento.
            $fecha = $eventos['fecha_evento'];

            $evento = array(
                'titulo' => $eventos['nombre_evento'],
                'fecha' => $eventos['fecha_evento'],
                'hora' => $eventos['hora_evento'],
                'categoria' => $eventos['cat_evento'],
                'icono'=> $eventos['icono'],
                'invitado' => $eventos['nombre_invitado'] . ' ' . $eventos['apellido_invitado']
            );
            $calendario[$fecha][] = $evento;
        } ?>

        <?php
            //Imprimimos el calendario
            foreach($calendario as $dia => $lista_eventos):?>
                <h3 class="fecha">
                    <i class="fa fa-calendar"></i>
                    <?php
                    //La versión de UNIX
                    setLocale(LC_TIME, 'es_ES.UTF-8');
                     
                    //La versión de windows
                    setlocale(LC_ALL, 'es_ES.UTF-8');
                    
                    echo strftime('%A %d de %B de %Y', strtotime($dia))?>
                </h3>
                <?php foreach($lista_eventos as $evento):?>
                    <div class="dia">
                        <p class="titulo"><?php echo $evento['titulo'];?></p>
                        <p class="hora"><i class="fa fa-clock" aria-hidden="true"></i><?php echo $evento['hora'];?></p>
                        <p><i class="fa <?php echo $evento['icono']?>"></i><?php echo $evento['categoria'];?></p>
                        <p><i class="fa fa-user"></i><?php echo $evento['invitado'];?></p>
                    </div>
                <?php endforeach //fin foreach de eventos?>
    
            <?php endforeach //fin foreach de días?>

        <?php $conn->close() ?>
    </div>

</section>

<?php include_once 'includes/templates/footer.php' ?>

<!--Para relacionar una tabla con la otra usando php, usamos los join (Octavio rules)-->