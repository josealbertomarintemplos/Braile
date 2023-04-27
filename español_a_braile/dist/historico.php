<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Historico</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
require_once "subline/navbar.php"
?>
<div id="layoutSidenav_content">
    <main>
                    <div class="container-fluid px-4">
                        <h2 class="mt-1">Traducciones Almacenadas</h2>
                    </div>
                    <div class="conteiner mt-3 ms-4 me-4 mb-3">
                        
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                <th>#</th>
                                <th>Titulo</th>
                                <th>Braile</th>
                                <th>Español</th>
                                <th>Vista</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    $conexion = mysqli_connect("localhost", "root", "", "traducciones");
                                    $query=mysqli_query($conexion, "SELECT * FROM traduccion");
                                    // action="PDF.php"
                                    
                                    $numero=1;
                                    while($traduccion=mysqli_fetch_assoc($query) ){
                                    echo "<tr>"; 
                                    echo '<td>'.$numero.'</td>';
                                    echo '<td><label>'.$traduccion['titulo'].'</label></td>';
                                    echo '<td><input type="email" class="form-control" placeholder="'.$traduccion['braile'].'" disabled></td>';
                                    echo '<td><input type="email" class="form-control" placeholder="'.$traduccion['espanol'].'" disabled></td>';
                                    echo '<td>
                                                <a href="PDF.php?titulo='.$traduccion['titulo'].'">Ver</a>
                                        </td>';
                                    echo "</tr>";
                                    $numero++;
                                    } 
                                    

                                   
                                ?>
                                
                            </tbody>
                        </table>
                        </form>
                    </div>
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
</body>
</html>




