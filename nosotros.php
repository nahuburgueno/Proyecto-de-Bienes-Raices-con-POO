<?php

    require 'includes/app.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">

        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpeg" type="image/jpeg">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre nosotros">
            </picture>
        </div>
        <div class="texto-nosotros">
            <blockquote>
                25 Años de Experiencia
            </blockquote>
            <p>Lorem ipsum, dolor sit amet consectetur em ipsum, dolor sit amet consectetuem ipsum, dolor sit amet consectetuem ipsum, dolor sit amet consectetuem ipsum, dolor sit amet consectetuem ipsum, dolor sit amet consectetuem ipsum, dolor sit amet consectetuem ipsum, dolor sit amet consectetuem ipsum, dolor sit amet consectetu adipisicing elit. Quia quos omnis consequatur suscipit adipisci nisi repudiandaeisi repudiandaeisi repudiandaeisi repudiandaeisi repudiandaeisi repudiandaeisi repudiandaeisi repudiandaeisi repudiandaeisi repudiandaeisi repudiandae, quis quo ratione laboriosam. Aliquam hic veniam eos iusto eum voluptatum laborum, aliquid vitae?</p>
            <p>Lorem ipsum, dolor sit amet consectetur em ipsum, dolor sit amet consectetuem ipsum, dolor sit amet consectetuem ipsum, dolor sit amet consectetuem ipsum, dolor sit amet consectetuem ipsum, dolor sit amet consectetuem ipsum, dolor sit amet consectetuem ipsum, dolor sit amet consectetuem ipsum, dolor sit amet consectetu adipisicing elit. Quia quos omnis consequatur suscipit adipisci nisi repudiandaeisi repudiandaeisi repudiandaeisi repudiandaeisi repudiandaeisi repudiandaeisi repudiandaeisi repudiandaeisi repudiandaeisi repudiandaeisi repudiandae, quis quo ratione laboriosam. Aliquam hic veniam eos iusto eum voluptatum laborum, aliquid vitae?</p>

        </div>
    </div>



    </main>

    <section class="contenedor seccion">

        <h1>Más Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing ctetur adipisicinctetur adipisicinctetur adipisicinelit. Eita qui ad vero eum sapiet cumque vero fugit.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing ctetur adipisicinctetur adipisicinctetur adipisicinelit. Eita qui ad vero eum sapiet cumque vero fugit.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing ctetur adipisicinctetur adipisicinctetur adipisicinelit. Eita qui ad vero eum sapiet cumque vero fugit.</p>
            </div>
        </div>

    </section>
    
    <?php
   incluirTemplate('footer');
?>