<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        body {
                /* Añadimos un espacio abajo igual al alto de tu barra de botones */
                padding-bottom: 100px !important; 
            }

            .container-fluid {
                /* Esto asegura que el contenido no se pegue al borde de la pantalla */
                padding-bottom: 20px;
            }
        /* Estilo para los contenedores principales */
        .pos-container {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 20px;
            height: 80vh; /* Altura fija para que no se mueva el layout */
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            border: 1px solid #e9ecef;
        }

        /* Botones del menú inferior más modernos */
        .nav-bottom .btn {
            border-radius: 8px;
            padding: 10px 15px;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.8rem;
            margin: 2px;
        }
    </style>
</head>
<body>
    


<div class="container-fluid bg-light min-vh-100 p-3">
    <header class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="text-primary fw-bold">Kaymo POS <span class="badge bg-secondary">V1</span></h4>
        <div class="text-muted small">Burgos, ES | 5 Feb 2026</div>
    </header>

    <div class="row g-3">
        <div class="col-md-2">
            <div class="pos-container">
                <h6 class="fw-bold border-bottom pb-2">Categorías</h6>
                </div>
        </div>

        <div class="col-md-6">
            <div class="pos-container">
                <h6 class="fw-bold border-bottom pb-2">Venta Actual</h6>
                <div class="alert alert-info py-2">Seleccione productos para comenzar</div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="pos-container border-primary border-2">
                <button class="btn btn-primary w-100 py-3 mb-3 shadow-sm fw-bold fs-5">
                    <i class="bi bi-calculator"></i> TOTAL CUENTA
                </button>
                <div class="bg-dark text-white p-3 rounded text-end">
                    <span class="d-block small text-secondary">Total a pagar:</span>
                    <h2 class="mb-0">€ 0.00</h2>
                </div>
            </div>
        </div>
    </div>
    <footer class="fixed-bottom bg-white border-top py-2">
    <div class="container-fluid d-flex justify-content-around">
        
        <button class="btn btn-outline-secondary d-flex flex-column align-items-center border-0">
            <i class="bi bi-gear fs-4"></i>
            <span style="font-size: 0.7rem;">Sistema</span>
        </button>

        <button class="btn btn-outline-secondary d-flex flex-column align-items-center border-0">
            <i class="bi bi-folder fs-4"></i>
            <span style="font-size: 0.7rem;">Ficheros</span>
        </button>

        <button class="btn btn-success d-flex flex-column align-items-center px-3">
            <i class="bi bi-cash-stack fs-4"></i>
            <span style="font-size: 0.7rem;">Caja</span>
        </button>

        <button class="btn btn-outline-secondary d-flex flex-column align-items-center border-0">
            <i class="bi bi-box-seam fs-4"></i>
            <span style="font-size: 0.7rem;">Productos</span>
        </button>

    </div>
</footer>
    <!-- <footer class="fixed-bottom bg-white border-top p-2 d-flex justify-content-center flex-wrap">
        <button class="btn btn-outline-dark mx-1"><i class="bi bi-gear"></i> Sistema</button>
        <button class="btn btn-outline-dark mx-1"><i class="bi bi-folder"></i> Ficheros</button>
        <button class="btn btn-success mx-1"><i class="bi bi-cash-stack"></i> Caja</button>
        </footer> -->
</div>

</body>
</html>