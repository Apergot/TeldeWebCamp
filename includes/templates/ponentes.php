

<section class=" invitados seccion contenedor">
    <h2>Ponentes de la TeldeWebCamp 2019</h2>
    <?php
    try {
        require_once('includes/funciones/db_connection.php');
        $sql = ' SELECT * FROM invitados';
        $result = $conn->query($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    }
    ?>
    <div class="ponentes">
        <ul class="lista-invitados clearfix">
        <?php while ($invitados = $result->fetch_assoc()) { ?>
            <li>
                <div class="invitado">
                    <a class="invitado-info" href="#invitado<?php echo $invitados['id_invitado'];?>">
                        <img src="img/<?php echo $invitados['url_img'];?>" alt="inv">
                        <p class="nombre"><?php echo $invitados['nombre_invitado'] . ' ' . $invitados['apellido_invitado'];?></p>
                    </a>
                </div>
            </li>
            <div style="display:none;">
                <div class="invitado-info" id="invitado<?php echo $invitados['id_invitado'];?>">
                    <h2><?php echo $invitados['nombre_invitado'] . ' ' . $invitados['apellido_invitado'];?></h2>
                    <img src="img/<?php echo $invitados['url_img'];?>" alt="inv">
                    <p><?php echo $invitados['descripocion'];?></p>
                </div>
            </div>
        <?php } ?>
        </ul>
    </div>

    <?php $conn->close()?>


</section>

