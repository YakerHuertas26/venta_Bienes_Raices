<?php
    include_once '../includes/headerVistas.php'
?>


    <main class="contenedor seccion">
        <h2>Conoce sobre Nosotros</h2>
        <div class="contenido-nosotros">
            <div class="imagen">
                
                <picture>
                    <img src="../../public/img/nosotros.jpg" alt="nosotros" loading="lazy">
                    <source srcset="public/img/nosotros.webp" type="image/webp">
                    <source srcset="public/img/nosotros.jpg" type="image/jpeg">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam dignissimos aspernatur amet, provident voluptatibus cumque. Quisquam architecto, illo maiores id fugiat placeat asperiores consequuntur accusamus quod odit ipsum ullam fugit.</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex non repellat error obcaecati! Tempora pariatur maxime, iusto asperiores ab cupiditate excepturi ullam non in nam quas quaerat ratione? Repudiandae, debitis.</p>
            </div>
        </div>

    </main>

    <section class="contenedor seccion">
        <h2>Más sobre nosotros</h2>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="../../public/img/icono1.svg" alt="icono-seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At eum numquam placeat reprehenderit, a labore nemo enim error temporibus perferendis dolorum corrupti quam repellendus neque molestias, nobis ducimus commodi ut!</p>
            </div>
            
            <div class="icono">
                <img src="../../public/img/icono2.svg" alt="icono-precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At eum numquam placeat reprehenderit, a labore nemo enim error temporibus perferendis dolorum corrupti quam repellendus neque molestias, nobis ducimus commodi ut!</p>
            </div>

            <div class="icono">
                <img src="../../public/img/icono3.svg" alt="icono-tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At eum numquam placeat reprehenderit, a labore nemo enim error temporibus perferendis dolorum corrupti quam repellendus neque molestias, nobis ducimus commodi ut!</p>
            </div>
        </div>
    </section>

    <?php
        include_once '../includes/footer.php'
    ?>
    
</body>
</html>