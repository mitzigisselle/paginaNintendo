@extends('layout.plantilla');
@section('titulo', 'Consolas');
@section('contenido')

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h1>Nintendo Entertainment System</h1>
            <p>Lo que comenzó como Famicom (Family Computer) en Japón, fue Nintendo Entertainment System en occidente, que desafió a los expertos y se vendió por millones. Los jugadores se apresuraron en ver y jugar a clásicos como Super Mario Bros., The Legend of Zelda y Excitebike, juegos que estaban muy por encima de los juegos para otras consolas domésticas.</p>
            <img src="https://cdn02.nintendo-europe.com/media/images/migration/standardpage/teaser_moods_small/nes_en.jpg" alt="">
             
            <hr>
            <h1>Game Boy</h1>
            <p>Game Boy, la consola que encierra una gran potencia en un sistema tan pequeño, revolucionó el mundo de los juegos cuando se lanzó en Japón en 1989. Desde entonces, la consola de bolsillo ha vendido más de 100 millones de unidades y ha dado a los jugadores de todo el mundo la libertad de jugar a sus juegos preferidos -incluidos el Tetris, Super Mario y Pokémon-, estén donde estén.</p>
            <img src="https://cdn02.nintendo-europe.com/media/images/migration/standardpage/teaser_moods_small/gb_pocket_en.jpg" alt="">

            <hr>
            <h1>Super Nintendo</h1>
            <p>Llegada a Europa por primera vez en 1992, la Super Nintendo Entertainment System dejó estupefactos a los jugadores con sus gráficos y modo de juego, situando los juegos en una nueva y espectacular era. Super Nintendo ofrece sonido estéreo real, detallados fondos, una memoria integrada dos veces mayor a la de NES, y cartuchos de gran capacidad con los que la consola recrea increíbles mundos que explorar.</p>
            <img src="https://cdn02.nintendo-europe.com/media/images/migration/standardpage/teaser_moods_small/snes_en.jpg" alt="">

            <hr>
            <h1>Nintendo 64</h1>
            <p>El '64' se refiere a los 64 bits de potencia gráfica que Nintendo 64 traslada a tu televisor. Nintendo 64 utiliza todas y cada una de las técnicas gráficas, y te invita a explorar fantásticos mundos en 3D llenos de color, que se combinan con efectos de iluminación en tiempo real y regalan a tus oídos un sonido con calidad de CD.</p>
            <img src="https://cdn02.nintendo-europe.com/media/images/migration/standardpage/teaser_moods_small/n64_en.jpg" alt="">

            <hr>
            <h1>Game Boy Color</h1>
            <p>Game Boy Color forma parte de una serie de potentes máquinas portátiles que han revolucionado la forma de jugar en todo el mundo. En trece años, Game Boy se ha convertido en la consola más vendida del planeta, con más de 100 millones de unidades vendidas. Game Boy Color ofrece una paleta de colores de más de 32.000 colores posibles en su flamante pantalla de 44 x 39 mm, además de una potencia de procesamiento dos veces mayor que la de su antecesora.</p>
            <img src="https://cdn02.nintendo-europe.com/media/images/migration/standardpage/teaser_moods_small/gbc_en.jpg" alt="">

            <hr>
            <h1>Game Boy Advance</h1>
            <p>En 2001, Nintendo ofreció a los usuarios una consola portátil de última generación: Game Boy Advance. La calidad de sus juegos, unida a su brillante diseño y fácil manejo, la han convertido en una de las consolas de más éxito.</p>
            <img src="https://cdn02.nintendo-europe.com/media/images/migration/standardpage/teaser_moods_small/gba_en.jpg" alt="">

            <hr>
            <h1>Game Boy Micro</h1>
            <p>Hemos cogido las características que más te gustan de game Boy Advance y las hemos reducido a un tamaño auténticamente microscópico. Con una pantalla retroiluminada de máxima resolución, cuatro elegantes diseños exteriores y más de 500 juegos entre los que elegir. Game Boy Micro realmente eleva la diversión reduciendo el tamaño.</p>
            <img src="https://cdn02.nintendo-europe.com/media/images/migration/standardpage/teaser_moods_small/gb_micro_en.jpg" alt="">

            <hr>
            <h1>Wii</h1>
            <p>El mando de Wii Plus es el revolucionario mando de la consola Wii. Contiene un sensor de movimiento integrado y se comunica de manera inalámbrica con la barra de sensores para ofrecer una precisión y facilidad de uso sin precedentes. Además, tiene una función de reverberación y un altavoz que te harán disfrutar más aun de tus juegos favoritos.</p>
            <img src="https://cdn02.nintendo-europe.com/media/images/migration/standardpage/teaser_moods_small/Wii_RemotePlus_4Colours_CMM_small.jpg" alt="">

            <hr>
            <h1>Nintendo Switch</h1>
            <p>Nintendo Switch tiene dos mandos, uno a cada lado de la consola, que funcionan juntos: los Joy-Con. Si acoplas los dos Joy-Con al soporte para mandos Joy-Con, funcionarán como un mando convencional, mientras que por separado funcionarán como dos mandos individuales plenamente funcionales.</p>
            <img src="data:image/jpeg;base64,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" alt="">

        </div>
    </div>
</div>

@endsection