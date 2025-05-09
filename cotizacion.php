<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Cotización - Inversiones Vásquez</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="paginaPrincipal.css">
    <style>
        .result-container {
            background: linear-gradient(145deg, #ffffff, #f8f9fa);
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            margin-top: 100px;
            animation: fadeInUp 0.8s ease;
            border: 1px solid rgba(40, 167, 69, 0.1);
            position: relative;
            overflow: hidden;
        }

        .result-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #1a472a, #28a745);
        }

        .result-title {
            color: #1a472a;
            margin-bottom: 2.5rem;
            text-align: center;
            font-weight: 700;
            font-size: 2.2rem;
            position: relative;
            padding-bottom: 15px;
        }

        .result-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: #28a745;
            border-radius: 2px;
        }

        .result-details {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 1.5rem;
            border: 2px solid #e9ecef;
            transition: all 0.3s ease;
        }

        .result-details:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(40, 167, 69, 0.1);
        }

        .price-tag {
            font-size: 2.5rem;
            color: #1a472a;
            font-weight: bold;
            text-align: center;
            margin: 2rem 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .btn-back {
            background: linear-gradient(45deg, #1a472a, #28a745);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            width: 100%;
            position: relative;
            overflow: hidden;
            margin-top: 1rem;
            text-align: center;
            text-decoration: none;
            display: block;
        }

        .btn-back:hover {
            background: linear-gradient(45deg, #28a745, #1a472a);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(40, 167, 69, 0.2);
            color: white;
        }

        .btn-back:active {
            transform: translateY(-1px);
        }

        .btn-back::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: rgba(255, 255, 255, 0.2);
            transform: rotate(45deg);
            transition: all 0.6s ease;
            opacity: 0;
        }

        .btn-back:hover::after {
            opacity: 1;
            transform: rotate(45deg) translate(50%, 50%);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .result-container {
                padding: 2rem;
                margin-top: 80px;
            }

            .result-title {
                font-size: 1.8rem;
            }

            .price-tag {
                font-size: 2rem;
            }

            .btn-back {
                padding: 0.8rem 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="inversionesimg-removebg-preview.png" alt=""> AutoSecure
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="paginaPrincipal.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros.html">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="servicios.html">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="http://localhost/php.rrichy/paginadeyarii/cotizacion.php">Cotizar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="result-container">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $marca = $_POST['marca'];
                        $modelo = $_POST['modelo'];
                        $anio = $_POST['anio'];
                        $costo = $_POST['costo'];
                        $cobertura = $_POST['cobertura'];
                        
                        // Cálculo simple de cotización (ejemplo)
                        $cotizacion = $costo * 0.03; // 3% del valor del vehículo
                    ?>
                        <h2 class="result-title">Resultado de tu Cotización</h2>
                        <div class="result-details">
                            <h4>Detalles del Vehículo:</h4>
                            <p><strong>Marca:</strong> <?php echo htmlspecialchars($marca); ?></p>
                            <p><strong>Modelo:</strong> <?php echo htmlspecialchars($modelo); ?></p>
                            <p><strong>Año:</strong> <?php echo htmlspecialchars($anio); ?></p>
                            <p><strong>Valor del Vehículo:</strong> DOP <?php echo number_format($costo, 2); ?></p>
                            <p><strong>Tipo de Cobertura:</strong> <?php echo htmlspecialchars($cobertura); ?></p>
                        </div>
                        <div class="price-tag">
                            DOP <?php echo number_format($cotizacion, 2); ?> / año
                        </div>
                        <div class="text-center">
                            <p class="mb-4">Esta es una cotización estimada. Para más detalles y personalizar tu cobertura, contáctanos.</p>
                            <a href="cotizacion.html" class="btn-back">Realizar otra cotización</a>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="text-center">
                            <h2 class="result-title">Acceso Directo No Permitido</h2>
                            <p>Por favor, utiliza nuestro formulario de cotización.</p>
                            <a href="cotizacion.html" class="btn-back">Ir al formulario</a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
