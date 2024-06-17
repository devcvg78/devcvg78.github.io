<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>By Carlos Veliz Garcia</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: salmon;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
        }

        .box {
            flex: 1;
            width: 100%;
            margin-bottom: 20px;
            border: 2px solid violet;
            border-radius: 10px;
            background-color: cadetblue;
            overflow: hidden;
        }

        img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            color: #333;
            text-align: justify;
            padding: 20px;
        }

        .titulo {
            font-size: 30px;
            line-height: 1.6;
            color: blue;
            text-align: center;
            padding: 10px;
        }

        audio {
            width: 100%;
            max-width: 400px;
            margin: 20px 0;
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
        }

        audio:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="box">
            <img id="imagenFelizDia" src="imagen.png" alt="Feliz dia">
        </div>
        <div class="box">
            <div class="titulo">
                <center><strong>Para Carlos Enrique Veliz Vega</strong></center>
            </div>

            <p>
                🎉 ¡Feliz Día del Padre, querido papá Carlos! 🎉

                Hoy quiero recordarte lo increíble que eres como padre y como persona. Tu habilidad para enseñarme, apoyarme y mostrarme el camino con tu sabiduría siempre ha sido mi mayor inspiración. Cada momento que hemos compartido ha sido un tesoro, aprendizajes y apoyo incondicional.

                Eres el ejemplo perfecto de fortaleza y cariño. Tu dedicación y esfuerzo para sacar adelante a nuestra familia son admirables. Gracias por ser mi guía, mi amigo y mi héroe, todo en uno.

                Que este día esté lleno de sonrisas, abrazos cálidos y momentos que nos recuerden lo especial que es nuestra conexión. ¡Brindemos por ti, papá, porque te lo mereces todo y más!

                <strong>Con todo mi cariño y admiración,</strong>

                <br><strong>Pdt: Carlos Veliz</strong>
            </p>
            <!--<audio controls>
                <source src="Perfect.mp3" type="audio/mp3">
            </audio>-->
        </div>
    </div>

</body>
<!--<script>
    var imagenes = ["peluche.jpg", "peluche2.jpg", "peluche3.jpg"];
    var indice = 0;

    function cambiarImagen() {
        document.getElementById("imagenPeluche").src = imagenes[indice];
        indice = (indice + 1) % imagenes.length;
    }

    setInterval(cambiarImagen, 2000);
</script>-->

</html>
