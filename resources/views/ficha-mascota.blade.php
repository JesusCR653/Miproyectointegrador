<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DR. WOOF - Ficha de mascota</title>

    <link href="../../public/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;700&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        * { box-sizing: border-box; }
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(180deg, #eaf6ee 0%, #ffffff 55%);
            margin: 0;
            padding: 30px 15px;
            min-height: 100vh;
        }
        .ficha-wrap { max-width: 480px; margin: 0 auto; }
        .ficha-logo {
            text-align: center;
            font-family: 'Baloo 2', cursive;
            font-weight: 700;
            font-size: 26px;
            color: #118A3B;
            margin-bottom: 6px;
        }
        .ficha-logo span { color: #1a1a1a; }
        .ficha-subtitulo {
            text-align: center;
            color: #555555;
            font-size: 14px;
            margin-bottom: 25px;
        }
        .ficha-card {
            background: #ffffff;
            border-radius: 30px;
            box-shadow: 0 6px 25px rgba(0,0,0,0.08);
            padding: 30px 25px;
        }
        .ficha-foto {
            display: block;
            width: 160px;
            height: 160px;
            object-fit: cover;
            border-radius: 50%;
            border: 6px solid #118A3B;
            margin: 0 auto 20px auto;
        }
        .ficha-nombre {
            text-align: center;
            font-family: 'Baloo 2', cursive;
            font-weight: 700;
            font-size: 24px;
            color: #1a1a1a;
            margin-bottom: 25px;
        }
        .campo-label {
            color: #118A3B;
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 6px;
            display: block;
        }
        .campo-valor {
            background-color: #dcdcdc;
            color: #333333;
            border-radius: 25px;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
        }
        .fila { margin-bottom: 18px; display: grid; grid-template-columns: 1fr 1fr; gap: 15px; }
        .no-encontrada {
            text-align: center;
            color: #555555;
            padding: 60px 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="ficha-wrap">
        <div class="ficha-logo"><span>DR.</span> WOOF+</div>
        <div class="ficha-subtitulo">Servicio de Salud Animal</div>

        <div class="ficha-card">
            <img class="ficha-foto"
                 src="../../public/img/descarga.webp"
                 alt="Axel"
                 onerror="this.src='../../public/img/descarga.webp'">

            <div class="ficha-nombre">Axel</div>

            <div class="fila">
                <div>
                    <span class="campo-label">Tipo de Mascota:</span>
                    <div class="campo-valor">Perro</div>
                </div>
                <div>
                    <span class="campo-label">Raza:</span>
                    <div class="campo-valor">Labrador</div>
                </div>
            </div>

            <div class="fila">
                <div>
                    <span class="campo-label">Edad:</span>
                    <div class="campo-valor">3 años</div>
                </div>
                <div>
                    <span class="campo-label">Sexo:</span>
                    <div class="campo-valor">Macho</div>
                </div>
            </div>

            <div class="fila">
                <div>
                    <span class="campo-label">Color:</span>
                    <div class="campo-valor">Dorado</div>
                </div>
                <div>
                    <span class="campo-label">Peso:</span>
                    <div class="campo-valor">22 kg</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
