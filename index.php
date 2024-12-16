<?php
    include_once './src/includes/header.php'
?>

    <main class="contenedor seccion">
        <h2>Más sobre nosotros</h2>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="./public/img/icono1.svg" alt="icono-seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At eum numquam placeat reprehenderit, a labore nemo enim error temporibus perferendis dolorum corrupti quam repellendus neque molestias, nobis ducimus commodi ut!</p>
            </div>
            
            <div class="icono">
                <img src="./public/img/icono2.svg" alt="icono-precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At eum numquam placeat reprehenderit, a labore nemo enim error temporibus perferendis dolorum corrupti quam repellendus neque molestias, nobis ducimus commodi ut!</p>
            </div>

            <div class="icono">
                <img src="./public/img/icono3.svg" alt="icono-tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At eum numquam placeat reprehenderit, a labore nemo enim error temporibus perferendis dolorum corrupti quam repellendus neque molestias, nobis ducimus commodi ut!</p>
            </div>
        </div>
    </main>

    <section class="seccion contendor">
        <h2>Casas y Depas en Ventas</h2>
        <div class="contenedor-anuncios">
            <div class="anuncios">
                <picture>
                    <source srcset="public/img/anuncio1.webp" type="image/webp">
                    <source srcset="public/img/anuncio1.webp" type="image/jpeg">
                    <img src="./public/img/anuncio1.jpg" alt="anuncio" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa de luejo en el lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3,000.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="public/img/icono_wc.svg"  alt="icono" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="public/img/icono_estacionamiento.svg" alt="icono-estacionamiento" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="public/img/icono_dormitorio.svg" alt="icono-habitaciones" loading="lazy">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncio.html" class="boton boton-amarillo">Ver propiedad</a>
                </div>
            </div>

            <div class="anuncios">
                <picture>
                    <source srcset="public/img/anuncio2.webp" type="image/webp">
                    <source srcset="public/img/anuncio2.webp" type="image/jpeg">
                    <img src="./public/img/anuncio1.jpg" alt="anuncio" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa terminados de lujo</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3,000.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="public/img/icono_wc.svg"  alt="icono" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="public/img/icono_estacionamiento.svg" alt="icono-estacionamiento" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="public/img/icono_dormitorio.svg" alt="icono-habitaciones" loading="lazy">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncio.html" class="boton boton-amarillo">Ver propiedad</a>
                </div>
            </div>

            <div class="anuncios">
                <picture>
                    <source srcset="public/img/anuncio3.webp" type="image/webp">
                    <source srcset="public/img/anuncio3.webp" type="image/jpeg">
                    <img src="./public/img/anuncio1.jpg" alt="anuncio" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Casa con alberca</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3,000.000</p>

                    <ul class="iconos-caracteristicas">
                        <li>
                            <img src="public/img/icono_wc.svg"  alt="icono" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="public/img/icono_estacionamiento.svg" alt="icono-estacionamiento" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img src="public/img/icono_dormitorio.svg" alt="icono-habitaciones" loading="lazy">
                            <p>4</p>
                        </li>
                    </ul>
                    <a href="anuncio.html" class="boton boton-amarillo">Ver propiedad</a>
                </div>
            </div>
        </div>
        <div class="ver-todas">
            <a href="./src/view/anuncios.html" class="boton-verde">Ver todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tu sueños</h2>
        <p>Llena le formulario de contacto y un asesor se pondré en contacto contigo a la brevedad.</p>
        <a href="./src/view/contacto.html" class="boton-amarillo-inline">Contactános</a>

    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro blog</h3>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="public/img/blog1.webp" type="image/webp">
                        <source srcset="public/img/blog1.jpg" type="image/jpeg">
                        <img src="public/img/blog1.jpg" alt="blog" loading="lazy">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                        <p>Consejo para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="public/img/blog2.webp" type="image/webp">
                        <source srcset="public/img/blog2.jpg" type="image/jpeg">
                        <img src="public/img/blog2.jpg" alt="blog" loading="lazy">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Guía para la decoración de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>
                        <p>Maximiza el espacio en tu hogar con esta guía, aprende a cambiar muebles y colores para darle vida a tu espacio</p>
                    </a>
                </div>
            </article>
        </section>

        <section class="testimoniales">
            <h3>testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti minima porro cum iure consectetur! Voluptatem eos exercitationem.
                </blockquote>
                <p>- Artur Bley</p>
            </div>
        </section>
    </div>

    <?php
        include './src/includes/footer.php'
    ?>
</body>
</html>