<!--<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfica de Etapas con CSS Grid</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 10px;
            width: 80%;
            margin: 20px 0;
        }

        .row {
            display: grid;
            grid-template-columns: auto 1fr;
            align-items: center;
            gap: 10px;
        }

        .barE {
            display: grid;
            height: 25px;
        }

        .barF {
            display: flex;
            flex-direction: column;
            width: 100%;
            cursor: pointer;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
        }

        .barF .colores {
            display: grid;
            grid-template-columns: inherit;
            height: 15px;
        }

        .trabajo, .activo {
            height: 100%;
        }

        .trabajo {
            background-color: #1f2937;
        }

        .activo {
            background-color: #b45309;
        }

        /* Individualidad en los anchos */
        .etapa1 { grid-template-columns: 45% 55%; width: 80%; }
        .etapa2 { grid-template-columns: 60% 40%; width: 72%; margin-left: 36%; }

        .fase1E1 { grid-template-columns: 60% 40%; width: 36%; }
        .fase2E1 { grid-template-columns: 45% 55%; width: 80%; }

        .fase1E2 { grid-template-columns: 60% 40%; width: 42.5%; margin-left: 36%; }
        .fase2E2 { grid-template-columns: 60% 40%; width: 72%; margin-left: 36%; }

        .rutina {
            background-color: #facc15;
            height: 5px;
            width: 55%;
            margin-top: 20px;
            margin-left: 40%;
        }

        .label {
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .respuestaF {
            padding: 10px;
            background-color: #f1f5f9;
            border-top: 1px solid #ccc;
            list-style: none;
            margin: 0;
            display: block;
        }

        .respuesta-list {
            padding: 0;
            margin: 0;
            display: block;
        }

        /* Ocultar respuestas al inicio, pero se colapsan dinámicamente */
        .barF.collapsed .respuesta-list {
            display: none;
        }

        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
            }
            .row {
                grid-template-columns: 1fr; /* En móviles, label y barra en fila separada */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="label">Etapa 1</div>
            <div class="barE etapa1">
                <div class="trabajo"></div>
                <div class="activo"></div>
            </div>
        </div>

        <div class="row">
            <div class="label">Fase 1</div>
            <div class="barF fase1E1">
                <div class="colores">
                    <div class="trabajo"></div>
                    <div class="activo"></div>
                </div>
                <ul class="respuesta-list">
                    <li class="respuestaF">
                        <h3>Categoría de proyecto</h3>
                        <p>Detalles del Proyecto 1</p>
                    </li>
                    <li class="respuestaF">
                        <h3>Otro detalle</h3>
                        <p>Información extra sobre la fase.</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="label">Fase 2</div>
            <div class="barF fase2E1">
                <div class="colores">
                    <div class="trabajo"></div>
                    <div class="activo"></div>
                </div>
                <ul class="respuesta-list">
                    <li class="respuestaF">
                        <h3>Información Adicional</h3>
                        <p>Detalles del Proyecto 2</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="rutina">
        <div class="label" style="display: none;">Actividades de rutina</div>
    </div>

    <div class="container">
        <div class="row">
            <div class="label">Etapa 2</div>
            <div class="barE etapa2">
                <div class="trabajo"></div>
                <div class="activo"></div>
            </div>
        </div>

        <div class="row">
            <div class="label">Fase 1</div>
            <div class="barF fase1E2">
                <div class="colores">
                    <div class="trabajo"></div>
                    <div class="activo"></div>
                </div>
                <ul class="respuesta-list">
                    <li class="respuestaF">
                        <h3>Descripción de Fase 1</h3>
                        <p>Explicación de la fase en la Etapa 2.</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="label">Fase 2</div>
            <div class="barF fase2E2">
                <div class="colores">
                    <div class="trabajo"></div>
                    <div class="activo"></div>
                </div>
                <ul class="respuesta-list">
                    <li class="respuestaF">
                        <h3>Más detalles</h3>
                        <p>Descripción adicional de la fase en la Etapa 2.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const bars = document.querySelectorAll(".barF");

            bars.forEach(bar => {
                bar.addEventListener("click", function() {
                    this.classList.toggle("collapsed");
                });
            });
        });
    </script>
</body>
</html>-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfica de Etapas con CSS Grid y Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            /* Eliminamos white-space: nowrap para permitir el ajuste */
            overflow-x: auto; /* Ocultamos el overflow horizontal */
            background-color: #c3cbd8;
        }

        .barE {
            min-width: 100%;
            margin:15px auto;
        }

        .barE {
            display: flex;
            height: 30px;
        }

        .barF {
            display: flex;
            flex-direction: column;
            cursor: pointer;
            /*border: 1px solid #ccc;
            border-radius: 5px;*/
            /*overflow: hidden;*/
            position: relative;
            margin:10px auto;
        }

       .colores {
            display: flex;
            height: 20px;
        }

        .trabajo, .activo {
            height: 100%;
        }
        
        
        .barE1 {
            min-width: 138%;
        }
        
        .barE1F1 {
            width: 85%;
        }
        
        .barE1F2 {
            min-width: 138%;
        }

        .trabajoE1 {
            background-color: #1f2937;
            flex: 6;
        }

        .activoE1 {
            background-color: #b45309;
            flex: 4;
        }
        
        
        .trabajoE1F1 {
            background-color: #1f2937;
            flex: 4;
        }

        .activoE1F1 {
            background-color: #b45309;
            flex: 6;
        }
        
        .trabajoE1F2 {
            background-color: #1f2937;
            flex: 6.1;
        }

        .activoE1F2 {
            background-color: #b45309;
            flex: 3.9;
        }
        
        
        
        
        
        
        
        
        
        .barE2 {
            min-width: 100%;
            margin-left: 480%;
        }
        
        .barE2F1 {
            min-width: 100%;
            margin-left: 480%;
        }
        
        .barE2F2 {
            min-width: 100%;
            margin-left: 480%;
        }

        
        .trabajoE2 {
            background-color: #1f2937;
            flex: 6;
        }

        .activoE2 {
            background-color: #b45309;
            flex: 4;
        }
        
        
        .trabajoE2F1 {
            background-color: #1f2937;
            flex: 6;
        }

        .activoE2F1 {
            background-color: #b45309;
            flex: 4;
        }
        
        
        
        

        .respuesta-list {
            padding: 0;
            margin: 0;
            display: block;
            width: 100%;
            max-width: 100%;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }

        /* Aseguramos que el texto largo dentro de los h3 se ajuste */
        .respuestaF h3 {
            word-break: break-word; /* Asegura que los textos largos se rompan */
        }

        .barF.collapsed .respuesta-list {
            display: none;
        }
        
        iframe{
        display: block;  /* iframes are inline by default */
        height: 100%;  /* Set height to 100% of the viewport height */
        width: 100%;  /* Set width to 100% of the viewport width */
        border: none; /* Remove default border */
        background: #F2F4F7; /* Just for styling */
    }

        

        @media (max-width: 768px) {
            .respuesta-list {
                display: flex;
                flex-wrap: wrap;
                width: 100%; /* Garantizamos que el ancho sea del 100% */
            }

            /* Aplicamos flex-wrap en .row para forzar que los elementos se envuelvan */
            .row.w-100 {
                display: flex;
                flex-wrap: wrap; /* Permitir que los elementos se envuelvan */
            }

            /* Aseguramos que cada lista de respuestas ocupe el 100% en móviles */
            .respuesta-list {
                flex: 1 1 100%; /* Flex para asegurarse de que ocupen todo el espacio disponible */
            }
        }
    </style>
</head>
<body>
    <!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <iframe src=""></iframe>
      </div>

      <!-- Modal footer -->
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>-->

    </div>
  </div>
</div>



    
    
    <div class="container mt-4 p-4 text-white rounded" style="background-color: #6C757D;">
    <h1>Cronograma del Plan Estratégico</h1> 
    <p class="d-flex h5"><small><span class="badge rounded-pill" style="background-color: #1F2937;">   </span>Trabajando           <span class="badge rounded-pill" style="background-color: #B4540A;">   </span>En activo</small><img src="https://sanjuanllantera.com/wp-content/uploads/2024/04/Logo-San-Juan-destello.png" width="120" class="ms-auto"></p> 
  </div>
    
    
    
    
    
    
    
    
    
    
    
    <div class="container">
        <div class="row align-items-center">
            <div class="col barE barE1">
            <div class="col-auto">Etapa 1</div>
                <div class="trabajoE1"></div>
                <div class="activoE1"></div>
            </div>
        </div>


<!-----FASE 1  ---->
        <div class="row align-items-center">
            <div class="col barF">
                <div class="colores barE1F1">
                <div class="col-auto">Fase 1</div>
                    <div class="trabajoE1F1"></div>
                    <div class="activoE1F1"></div>
                </div>
                <div class="container mt-6 d-flex mb-3" style="padding-left: 50px;">
  <div class="progress"  style="width:34%;">
    <div class="progress-bar" style="width:70%">70%</div>
  </div>
  <ul class="list-group flex-grow-1">
    <li class="list-group-item list-group-item-light" style="width:78%; height:10px; line-height: 1px;">En activo (parcialmente)</li>
  </ul>
</div>
  <div class="row" style="padding-left: 50px;">
    <!-- Primer grupo de botones -->
    <div class="col-auto d-flex">
      <div class="btn-group align-self-center">
        <button type="button" class="btn btn-secondary open-gantt" data-title="Diagrama de Gantt del Proyecto X" data-bs-toggle="modal" data-bs-target="#myModal" data-url="https://bitacora.zio.mx/public/gantt-chart/e02219d5c38f9d1181d2feee13d3bd68?expires=1745283409&signature=29481be180c4bebe3d6e26ced2bb9a83b0abf5405ddf6317ee4c5ec2ac51ffde">Ver Diagrama de Gantt</button>
        <button type="button" class="btn btn-dark">Ver Panel de avance</button>
      </div>
    </div>

    <!-- Segundo grupo de botones y label -->
    <div class="col-auto">
      <!-- Label que va encima del grupo de botones -->
      <div>
        <label class="form-label d-block">Reporte financiero</label>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-outline-dark">M&oacute;vil</button>
        <button type="button" class="btn btn-outline-dark">Impreso</button>
        
      </div>
    </div>
  </div>
            </div>
            
                            <div class="barF row w-100" style="padding-left: 50px;">
    <ul class="respuesta-list col-12 col-md-auto list-group w-100" style="max-width: 85%;">
        <li class="respuestaF list-group-item d-flex flex-column flex-md-row justify-content-between align-items-center">
            <span class="badge bg-primary rounded-pill">Marketing</span>
            <h3>Proyecto: Re-branding v1</h3>
            <a href="" class="btn btn-outline-primary open-gantt" data-title="Diagrama de Gantt del Proyecto: Re-branding v1" data-bs-toggle="modal" data-bs-target="#myModal" data-url="https://bitacora.zio.mx/public/gantt-chart/bd782d17f30fa4ce3a78b8214abd6ed5?expires=1745267004&signature=14901bd1466e4c97227292e4d541be9b9b69f3834020c51cffc232ef14e3d666">Ver Diagrama de Gantt</a>
        </li>
        <li class="respuestaF list-group-item d-flex flex-column flex-md-row justify-content-between align-items-center">
            <span class="badge bg-primary rounded-pill">Marketing</span>
            <h3>Proyecto: Posicionamiento de marca</h3>
            <a href="" class="btn btn-outline-primary open-gantt" data-title="Diagrama de Gantt del Proyecto: Posicionamiento de marca" data-bs-toggle="modal" data-bs-target="#myModal" data-url="https://bitacora.zio.mx/public/gantt-chart/1297e070f40f4b0ca02e11c10bdc02c7?expires=1745709777&signature=c3b53d2f28adafcd75eefa6816feecaed67412375213db9cc5a4983e3c8d7362">Ver Diagrama de Gantt</a>
        </li>
        <li class="respuestaF list-group-item d-flex flex-column flex-md-row justify-content-between align-items-center">
            <span class="badge bg-primary rounded-pill">Marketing</span>
            <h3>Proyecto: Outbound marketing</h3>
            <a href="" class="btn btn-outline-primary open-gantt" data-title="Diagrama de Gantt del Proyecto: Outbound marketing" data-bs-toggle="modal" data-bs-target="#myModal" data-url="https://bitacora.zio.mx/public/gantt-chart/8cb227e23915387a9f08686601e6705d?expires=1745709777&signature=e2a19522ea697eae45a8f0d95b99bdba7cd639da04bb5dc3f02c9558e352ed66">Ver Diagrama de Gantt</a>
        </li>
        <li class="respuestaF list-group-item d-flex flex-column flex-md-row justify-content-between align-items-center">
            <span class="badge bg-primary rounded-pill">Desarrollo</span>
            <h3>Proyecto: MVP de e-commerce</h3>
            <a href="" class="btn btn-outline-primary open-gantt" data-title="Diagrama de Gantt del Proyecto: MVP de e-commerce" data-bs-toggle="modal" data-bs-target="#myModal" data-url="https://bitacora.zio.mx/public/gantt-chart/bac584021d78c5ed39d3c66d15d60948?expires=1745709777&signature=93d76eaeba13649727fc6592dc210f267ad7829eed936f59ac4f4f1e7cee2b6a">Ver Diagrama de Gantt</a>
        </li>
        <li class="respuestaF list-group-item d-flex flex-column flex-md-row justify-content-between align-items-center">
            <span class="badge bg-primary rounded-pill">Desarrollo</span>
            <h3>Proyecto: MVP de ERP</h3>
            <a href="" class="btn btn-outline-primary open-gantt" data-title="Diagrama de Gantt del Proyecto: MVP de ERP" data-bs-toggle="modal" data-bs-target="#myModal" data-url="https://bitacora.zio.mx/public/gantt-chart/0c1d3943eed75f18f86f5dde51d0ea81?expires=1745709777&signature=8249826b24d9fd94060be7a1ec0fcc61b4663939d58dfe576b6a7934470b9cd3">Ver Diagrama de Gantt</a>
        </li>
        <li class="respuestaF list-group-item d-flex flex-column flex-md-row justify-content-between align-items-center">
            <span class="badge bg-primary rounded-pill">Desarrollo</span>
            <h3>Proyecto: MVP de Multicanalidad</h3>
            <a href="" class="btn btn-outline-primary open-gantt" data-title="Diagrama de Gantt del Proyecto: MVP de Multicanalidad" data-bs-toggle="modal" data-bs-target="#myModal" data-url="https://bitacora.zio.mx/public/gantt-chart/ccbbdbe0de5f43349a4043a00901efca?expires=1745709777&signature=ad2c1c45a5a517bd89ca9c0942517abd52089ef4687dd19477ed9f1821e77037">Ver Diagrama de Gantt</a>
        </li>
    </ul>
</div>

        </div>
        
        
        
        
        
        
    <!-----FASE 2  ---->
        
        
       <div class="row align-items-center">
            <div class="col barF">
                <div class="colores barE1F2">
                <div class="col-auto">Fase 2</div>
                    <div class="trabajoE1F2"></div>
                    <div class="activoE1F2"></div>
                </div>
                <div class="container mt-6 d-flex mb-3" style="padding-left: 50px;">
  <div class="progress"  style="width:86%;">
    <div class="progress-bar" style="width:70%">70%</div>
  </div>
  <ul class="list-group flex-grow-1">
    <li class="list-group-item list-group-item-light" style="width: 395%; height:10px; line-height: 1px;"></li>
  </ul>
</div>
  <div class="row" style="padding-left: 50px;">
    <!-- Primer grupo de botones -->
    <div class="col-auto d-flex">
      <div class="btn-group align-self-center">
        <button type="button" class="btn btn-secondary">Ver Diagrama de Gantt</button>
        <button type="button" class="btn btn-dark">Ver Panel de avance</button>
      </div>
    </div>

    <!-- Segundo grupo de botones y label -->
    <div class="col-auto">
      <!-- Label que va encima del grupo de botones -->
      <div>
        <label class="form-label d-block">Reporte financiero</label>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-outline-dark">M&oacute;vil</button>
        <button type="button" class="btn btn-outline-dark">Impreso</button>
        
      </div>
    </div>
  </div>
            </div>
            
                            <div class="barF row w-100" style="padding-left: 50px;">
    <ul class="respuesta-list col-12 col-md-auto list-group w-100" style="max-width: 100%;">
        <li class="respuestaF list-group-item d-flex flex-column flex-md-row justify-content-between align-items-center">
            <span class="badge bg-primary rounded-pill">Marketing</span>
            <h3>Proyecto: Re-branding v1</h3>
            <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal">Ver Diagrama de Gantt</a>
        </li>
        <li class="respuestaF list-group-item d-flex flex-column flex-md-row justify-content-between align-items-center">
            <span class="badge bg-primary rounded-pill">Marketing</span>
            <h3>Proyecto: Re-branding v1</h3>
            <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal">Ver Diagrama de Gantt</a>
        </li>
    </ul>
</div>

        </div>
        
        
        
        
        
        
        <!-----FASE 3  ---->
        
        
       <div class="row align-items-center">
            <div class="col barF">
                <div class="colores barE1F2">
                <div class="col-auto">Fase 3</div>
                    <div class="trabajoE1F2"></div>
                    <div class="activoE1F2"></div>
                </div>
                <div class="container mt-6 d-flex mb-3" style="padding-left: 50px;">
  <div class="progress"  style="width:86%;">
    <div class="progress-bar" style="width:70%">70%</div>
  </div>
  <ul class="list-group flex-grow-1">
    <li class="list-group-item list-group-item-light" style="width: 395%; height:10px; line-height: 1px;"></li>
  </ul>
</div>
  <div class="row" style="padding-left: 50px;">
    <!-- Primer grupo de botones -->
    <div class="col-auto d-flex">
      <div class="btn-group align-self-center">
        <button type="button" class="btn btn-secondary">Ver Diagrama de Gantt</button>
        <button type="button" class="btn btn-dark">Ver Panel de avance</button>
      </div>
    </div>

    <!-- Segundo grupo de botones y label -->
    <div class="col-auto">
      <!-- Label que va encima del grupo de botones -->
      <div>
        <label class="form-label d-block">Reporte financiero</label>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-outline-dark">M&oacute;vil</button>
        <button type="button" class="btn btn-outline-dark">Impreso</button>
        
      </div>
    </div>
  </div>
            </div>
            
                            <div class="barF row w-100" style="padding-left: 50px;">
    <ul class="respuesta-list col-12 col-md-auto list-group w-100" style="max-width: 100%;">
        <li class="respuestaF list-group-item d-flex flex-column flex-md-row justify-content-between align-items-center">
            <span class="badge bg-primary rounded-pill">Marketing</span>
            <h3>Proyecto: Re-branding v1</h3>
            <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal">Ver Diagrama de Gantt</a>
        </li>
        <li class="respuestaF list-group-item d-flex flex-column flex-md-row justify-content-between align-items-center">
            <span class="badge bg-primary rounded-pill">Marketing</span>
            <h3>Proyecto: Re-branding v1</h3>
            <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal">Ver Diagrama de Gantt</a>
        </li>
    </ul>
</div>

        </div>
        
        
        
        
        
        
        
        
        
        
        
        <!-----FASE 4  ---->
        
        
       <div class="row align-items-center">
            <div class="col barF">
                <div class="colores barE1F2">
                <div class="col-auto">Fase 4</div>
                    <div class="trabajoE1F2"></div>
                    <div class="activoE1F2"></div>
                </div>
                <div class="container mt-6 d-flex mb-3" style="padding-left: 50px;">
  <div class="progress"  style="width:86%;">
    <div class="progress-bar" style="width:70%">70%</div>
  </div>
  <ul class="list-group flex-grow-1">
    <li class="list-group-item list-group-item-light" style="width: 395%; height:10px; line-height: 1px;"></li>
  </ul>
</div>
  <div class="row" style="padding-left: 50px;">
    <!-- Primer grupo de botones -->
    <div class="col-auto d-flex">
      <div class="btn-group align-self-center">
        <button type="button" class="btn btn-secondary">Ver Diagrama de Gantt</button>
        <button type="button" class="btn btn-dark">Ver Panel de avance</button>
      </div>
    </div>

    <!-- Segundo grupo de botones y label -->
    <div class="col-auto">
      <!-- Label que va encima del grupo de botones -->
      <div>
        <label class="form-label d-block">Reporte financiero</label>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-outline-dark">M&oacute;vil</button>
        <button type="button" class="btn btn-outline-dark">Impreso</button>
        
      </div>
    </div>
  </div>
            </div>
            
                            <div class="barF row w-100" style="padding-left: 50px;">
    <ul class="respuesta-list col-12 col-md-auto list-group w-100" style="max-width: 100%;">
        <li class="respuestaF list-group-item d-flex flex-column flex-md-row justify-content-between align-items-center">
            <span class="badge bg-primary rounded-pill">Marketing</span>
            <h3>Proyecto: Re-branding v1</h3>
            <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal">Ver Diagrama de Gantt</a>
        </li>
        <li class="respuestaF list-group-item d-flex flex-column flex-md-row justify-content-between align-items-center">
            <span class="badge bg-primary rounded-pill">Marketing</span>
            <h3>Proyecto: Re-branding v1</h3>
            <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal">Ver Diagrama de Gantt</a>
        </li>
    </ul>
</div>

        </div>
        
        
        
        
        

        
        
        
        

        <div class="row align-items-center">
            <div class="col barE barE2">
            <div class="col-auto">Etapa 2</div>
                <div class="trabajoE2"></div>
                <div class="activoE2"></div>
            </div>
        </div>
        
        
        <div class="row align-items-center">
            <div class="col barF">
                <div class="colores barE2F1">
                <div class="col-auto">Fase 1</div>
                    <div class="trabajoE2F1"></div>
                    <div class="activoE2F1"></div>
                </div>
            </div>
            <div class="barF row w-100" style="margin-left: 480%;">
                    <ul class="respuesta-list col-12 col-md-auto">
                        <li class="respuestaF"><h3>Categoría de proyectoasdasdasdasdasdasdasdasdasdasdasda</h3><p>Detalles del Proyecto 1</p></li>
                        <li class="respuestaF"><h3>Otro detalle</h3><p>Información extra sobre la fase.</p></li>
                    </ul>
        </div>
    </div>
    <script>
document.addEventListener('DOMContentLoaded', function () {
  // Escucha clics en cualquier botón con la clase "open-gantt"
  document.querySelectorAll('.open-gantt').forEach(button => {
    button.addEventListener('click', function () {
      const url = this.getAttribute('data-url');
      const title = this.getAttribute('data-title'); // Nuevo atributo para el título

      const iframe = document.querySelector('#myModal iframe');
      const modalTitle = document.querySelector('#myModal .modal-title');

      if (iframe && url) {
        iframe.src = url;
      }

      if (modalTitle && title) {
        modalTitle.textContent = title;
      }
    });
  });
});

    
    
        /*document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".barF").forEach(bar => {
                bar.addEventListener("click", function() {
                    this.classList.toggle("collapsed");
                });
            });
        });*/
        
        
        
       /* document.addEventListener("DOMContentLoaded", function() {
    const etapa1 = document.querySelector('.etapa1');
    const etapa2 = document.querySelector('.etapa2');
    
    const trabajoE1 = document.querySelector('.trabajoE1');  // Parte azul de Etapa 1
    const trabajoE2 = document.querySelector('.trabajoE2');  // Parte azul de Etapa 2
    const activoE1 = document.querySelector('.activoE1');    // Parte roja de Etapa 1

    // Función para recalcular la posición de la parte roja de Etapa 1 en función del final del color azul de Etapa 2
    function ajustarRojoEtapa1() {
        // Obtener la posición final del color azul de Etapa 2
        const finalAzulEtapa2 = trabajoE2.offsetLeft + trabajoE2.offsetWidth;

        // Calcular la posición de la parte roja de Etapa 1 (activoE1) para alinearla al final del azul de Etapa 2
        const offsetRojoEtapa1 = finalAzulEtapa2 - etapa1.offsetLeft;

        // Ajustar la posición de la parte roja de Etapa 1
        activoE1.style.width = `${offsetRojoEtapa1}px`;
    }

    // Ejecutar la función al cargar la página
    ajustarRojoEtapa1();

    // También asegurarse de que se ajuste cuando la ventana se redimensiona
    window.addEventListener('resize', ajustarRojoEtapa1);
});*/

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>