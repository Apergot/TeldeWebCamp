<?php include_once 'includes/templates/header.php'?>

<div class="seccion contenedor">
    <h2>La mejor conferencia de diseño web en español</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos voluptatibus harum perferendis maiores quia commodi, 
        iure officiis voluptas neque odit quasi mollitia omnis debitis, illo, dolore itaque ipsum molestias fugit!</p>
</div>

<section class="seccion contenedor">
    <h2>Galería de fotos</h2>

    <div class="contenedor-fotos">
        <div class="galeria">
        <?php 
            //Usando la librería de javascript lightbox hacemos una galería bastante fácil de implementar.
            for($i = 0; $i < 21; $i++){
                if($i < 9){
                    echo '<a href="img/galeria/0'. ($i+1) .'.jpg" data-lightbox = "galeria">
                    <img src="img/galeria/thumbs/0'. ($i+1) .'.jpg" alt="">
                    </a>';
                }else{
                    echo '<a href="img/galeria/'. ($i+1) .'.jpg" data-lightbox = "galeria">
                    <img src="img/galeria/thumbs/'. ($i+1) .'.jpg" alt="">
                    </a>';
                }
            }
        ?>
        </div>
    </div>
</section>

<?php include_once 'includes/templates/footer.php'?>