<?php 

$textoEspa="";
$textoB="";


function validaAction(){

    $data=array(
        array(
            'letra'=>'a',
            'braile' =>'⠁'
        ),
        array(
            'letra'=>'b',
            'braile' =>'⠃'
        ),
        
        array(
            'letra'=>'c',
            'braile' =>'⠉'
        ),
        array(
            'letra'=>'d',
            'braile' =>'⠙'
        ),
        array(
            'letra'=>'e',
            'braile' =>'⠑'
        ),
        array(
            'letra'=>'f',
            'braile' =>'⠋'
        ),
        array(
            'letra'=>'g',
            'braile' =>'⠛'
        ),
        array(
            'letra'=>'h',
            'braile' =>'⠓'
        ),
        array(
            'letra'=>'i',
            'braile' =>'⠊'
        ),
        array(
            'letra'=>'j',
            'braile' =>'⠚'
        ),
        array(
            'letra'=>'k',
            'braile' =>'⠅'
        ),
        array(
            'letra'=>'l',
            'braile' =>'⠇'
        ),
        array(
            'letra'=>'m',
            'braile' =>'⠍'
        ),
        array(
            'letra'=>'n',
            'braile' =>'⠝'
        ),
        array(
            'letra'=>'ñ',
            'braile' =>'⠻'
        ),
        array(
            'letra'=>'o',
            'braile' =>'⠕'
        ),
        array(
            'letra'=>'p',
            'braile' =>'⠏'
        ),
        array(
            'letra'=>'q',
            'braile' =>'⠟'
        ),
        array(
            'letra'=>'r',
            'braile' =>'⠗'
        ),
        array(
            'letra'=>'s',
            'braile' =>'⠎'
        ),
        array(
            'letra'=>'t',
            'braile' =>'⠞'
        ),
        array(
            'letra'=>'u',
            'braile' =>'⠥'
        ),
        array(
            'letra'=>'v',
            'braile' =>'⠧'
        ),
        array(
            'letra'=>'w',
            'braile' =>'⠺'
        ),
        array(
            'letra'=>'x',
            'braile' =>'⠭'
        ),
        array(
            'letra'=>'y',
            'braile' =>'⠽'
        ),
        array(
            'letra'=>'z',
            'braile' =>'⠵'
        ),
        array(
            'letra'=>'0',
            'braile' =>'⠼⠚'
        ),
        array(
            'letra'=>'1',
            'braile' =>'⠼⠁'
        ),
        array(
            'letra'=>'2',
            'braile' =>'⠼⠃'
        ),
        array(
            'letra'=>'3',
            'braile' =>'⠼⠉'
        ),
        array(
            'letra'=>'4',
            'braile' =>'⠼⠙'
        ),
        array(
            'letra'=>'5',
            'braile' =>'⠼⠑'
        ),
        array(
            'letra'=>'6',
            'braile' =>'⠼⠋'
        ),
        array(
            'letra'=>'7',
            'braile' =>'⠼⠛'
        ),
        array(
            'letra'=>'8',
            'braile' =>'⠼⠓'
        ),
        array(
            'letra'=>'9',
            'braile' =>'⠼⠊'
        ),
        array(
            'letra'=>'¿',
            'braile' =>'⠢'
        ),
        array(
            'letra'=>'?',
            'braile' =>'⠢'
        ),
        array(
            'letra'=>',',
            'braile' =>'⠂'
        ),
    );

    if(isset($_POST['EaB'])){
        if(empty($_POST['espa'])){
            echo "<script type='text/javascript'>alert('Llena el apartado de Español para poder traducir');</script>";
        }else{
            $textoEspa=strtolower($_POST['espa']);
            $textoDividido=str_split($textoEspa);
            $textoBraile="";
            for($i=0;$i<count($textoDividido);$i++){
            if($textoDividido[$i] != " "){
                    for($j=0;$j<count($data);$j++){
                        if($data[$j]['letra']==$textoDividido[$i]){
                            $textoBraile= $textoBraile.' '.$data[$j]['braile'];
                        }
                    }

            }else{
                $textoBraile= $textoBraile." ";
            }
            }
            return $textoBraile;
        }

    
    }
}

function validaActionB(){

    $data=array(
        array(
            'letra'=>'a',
            'braile' =>'⠁'
        ),
        array(
            'letra'=>'b',
            'braile' =>'⠃'
        ),
        array(
            'letra'=>'c',
            'braile' =>'⠉'
        ),
        array(
            'letra'=>'d',
            'braile' =>'⠙'
        ),
        array(
            'letra'=>'e',
            'braile' =>'⠑'
        ),
        array(
            'letra'=>'f',
            'braile' =>'⠋'
        ),
        array(
            'letra'=>'g',
            'braile' =>'⠛'
        ),
        array(
            'letra'=>'h',
            'braile' =>'⠓'
        ),
        array(
            'letra'=>'i',
            'braile' =>'⠊'
        ),
        array(
            'letra'=>'j',
            'braile' =>'⠚'
        ),
        array(
            'letra'=>'k',
            'braile' =>'⠅'
        ),
        array(
            'letra'=>'l',
            'braile' =>'⠇'
        ),
        array(
            'letra'=>'m',
            'braile' =>'⠍'
        ),
        array(
            'letra'=>'n',
            'braile' =>'⠝'
        ),
        array(
            'letra'=>'ñ',
            'braile' =>'⠻'
        ),
        array(
            'letra'=>'o',
            'braile' =>'⠕'
        ),
        array(
            'letra'=>'p',
            'braile' =>'⠏'
        ),
        array(
            'letra'=>'q',
            'braile' =>'⠟'
        ),
        array(
            'letra'=>'r',
            'braile' =>'⠗'
        ),
        array(
            'letra'=>'s',
            'braile' =>'⠎'
        ),
        array(
            'letra'=>'t',
            'braile' =>'⠞'
        ),
        array(
            'letra'=>'u',
            'braile' =>'⠥'
        ),
        array(
            'letra'=>'v',
            'braile' =>'⠧'
        ),
        array(
            'letra'=>'w',
            'braile' =>'⠺'
        ),
        array(
            'letra'=>'x',
            'braile' =>'⠭'
        ),
        array(
            'letra'=>'y',
            'braile' =>'⠽'
        ),
        array(
            'letra'=>'z',
            'braile' =>'⠵'
        ),
        array(
            'letra'=>'0',
            'braile' =>'⠼⠚'
        ),
        array(
            'letra'=>'1',
            'braile' =>'⠼⠁'
        ),
        array(
            'letra'=>'2',
            'braile' =>'⠼⠃'
        ),
        array(
            'letra'=>'3',
            'braile' =>'⠼⠉'
        ),
        array(
            'letra'=>'4',
            'braile' =>'⠼⠙'
        ),
        array(
            'letra'=>'5',
            'braile' =>'⠼⠑'
        ),
        array(
            'letra'=>'6',
            'braile' =>'⠼⠋'
        ),
        array(
            'letra'=>'7',
            'braile' =>'⠼⠛'
        ),
        array(
            'letra'=>'8',
            'braile' =>'⠼⠓'
        ),
        array(
            'letra'=>'9',
            'braile' =>'⠼⠊'
        ),
        array(
            'letra'=>'¿',
            'braile' =>'⠢'
        ),
        array(
            'letra'=>'?',
            'braile' =>'⠢'
        ),
        array(
            'letra'=>',',
            'braile' =>'⠂'
        ),
    );

    if(isset($_POST['BaE'])){
        if(empty($_POST['braile'])){
            return '<script type="text/javascript">alert("Llena el apartado de Braile para poder traducir");</script>';
        }else{
            $textoTraduci="";
            $textoB=$_POST['braile'];
            $separador = "  ";
            $separada = explode($separador, $textoB);

            for($x=0;$x<count($separada);$x++){

                $separ = " ";
                $seccion = explode($separ, $separada[$x]);

                for($y=0;$y<count($seccion);$y++){
                    for($j=0;$j<count($data);$j++){
                        if($data[$j]['braile']==$seccion[$y]){
                            $textoTraduci= $textoTraduci.$data[$j]['letra'];
                        }
                }
                }
                
                $textoTraduci= $textoTraduci." ";
            }
            
            
            return $textoTraduci;
        }

    }
}


function insertaDatos($titulo,$brail,$espa){
    $conexion = mysqli_connect("localhost", "root", "", "traducciones");

    if(isset($_POST['bd'])){
        $sql="INSERT INTO traduccion VALUES ('$titulo', '$brail', '$espa')";
        $query=mysqli_query($conexion, $sql);
    
        if($query){
            return "Datos Insertados correctamente";
         }else{
             return "Error: ".mysqli_error($conexion);
         }

    }

  
}

function braAespa($brai){
    $data=array(
        array(
            'letra'=>'a',
            'braile' =>'⠁'
        ),
        array(
            'letra'=>'b',
            'braile' =>'⠃'
        ),
        array(
            'letra'=>'c',
            'braile' =>'⠉'
        ),
        array(
            'letra'=>'d',
            'braile' =>'⠙'
        ),
        array(
            'letra'=>'e',
            'braile' =>'⠑'
        ),
        array(
            'letra'=>'f',
            'braile' =>'⠋'
        ),
        array(
            'letra'=>'g',
            'braile' =>'⠛'
        ),
        array(
            'letra'=>'h',
            'braile' =>'⠓'
        ),
        array(
            'letra'=>'i',
            'braile' =>'⠊'
        ),
        array(
            'letra'=>'j',
            'braile' =>'⠚'
        ),
        array(
            'letra'=>'k',
            'braile' =>'⠅'
        ),
        array(
            'letra'=>'l',
            'braile' =>'⠇'
        ),
        array(
            'letra'=>'m',
            'braile' =>'⠍'
        ),
        array(
            'letra'=>'n',
            'braile' =>'⠝'
        ),
        array(
            'letra'=>'ñ',
            'braile' =>'⠻'
        ),
        array(
            'letra'=>'o',
            'braile' =>'⠕'
        ),
        array(
            'letra'=>'p',
            'braile' =>'⠏'
        ),
        array(
            'letra'=>'q',
            'braile' =>'⠟'
        ),
        array(
            'letra'=>'r',
            'braile' =>'⠗'
        ),
        array(
            'letra'=>'s',
            'braile' =>'⠎'
        ),
        array(
            'letra'=>'t',
            'braile' =>'⠞'
        ),
        array(
            'letra'=>'u',
            'braile' =>'⠥'
        ),
        array(
            'letra'=>'v',
            'braile' =>'⠧'
        ),
        array(
            'letra'=>'w',
            'braile' =>'⠺'
        ),
        array(
            'letra'=>'x',
            'braile' =>'⠭'
        ),
        array(
            'letra'=>'y',
            'braile' =>'⠽'
        ),
        array(
            'letra'=>'z',
            'braile' =>'⠵'
        ),
        array(
            'letra'=>'0',
            'braile' =>'⠼⠚'
        ),
        array(
            'letra'=>'1',
            'braile' =>'⠼⠁'
        ),
        array(
            'letra'=>'2',
            'braile' =>'⠼⠃'
        ),
        array(
            'letra'=>'3',
            'braile' =>'⠼⠉'
        ),
        array(
            'letra'=>'4',
            'braile' =>'⠼⠙'
        ),
        array(
            'letra'=>'5',
            'braile' =>'⠼⠑'
        ),
        array(
            'letra'=>'6',
            'braile' =>'⠼⠋'
        ),
        array(
            'letra'=>'7',
            'braile' =>'⠼⠛'
        ),
        array(
            'letra'=>'8',
            'braile' =>'⠼⠓'
        ),
        array(
            'letra'=>'9',
            'braile' =>'⠼⠊'
        ),
        array(
            'letra'=>'¿',
            'braile' =>'⠢'
        ),
        array(
            'letra'=>'?',
            'braile' =>'⠢'
        ),
        array(
            'letra'=>',',
            'braile' =>'⠂'
        ),
    );
    $textoTraduci="";
    $textoB=$brai;
    $separador = "  ";
    $separada = explode($separador, $textoB);

    for($x=0;$x<count($separada);$x++){

        $separ = " ";
        $seccion = explode($separ, $separada[$x]);

        for($y=0;$y<count($seccion);$y++){
            for($j=0;$j<count($data);$j++){
                if($data[$j]['braile']==$seccion[$y]){
                    $textoTraduci= $textoTraduci.$data[$j]['letra'];
                }
        }
        }
        
        $textoTraduci= $textoTraduci." ";
    }
    
    
    return $textoTraduci;
}

function espaAbra($esp){
    $data=array(
        array(
            'letra'=>'a',
            'braile' =>'⠁'
        ),
        array(
            'letra'=>'b',
            'braile' =>'⠃'
        ),
        
        array(
            'letra'=>'c',
            'braile' =>'⠉'
        ),
        array(
            'letra'=>'d',
            'braile' =>'⠙'
        ),
        array(
            'letra'=>'e',
            'braile' =>'⠑'
        ),
        array(
            'letra'=>'f',
            'braile' =>'⠋'
        ),
        array(
            'letra'=>'g',
            'braile' =>'⠛'
        ),
        array(
            'letra'=>'h',
            'braile' =>'⠓'
        ),
        array(
            'letra'=>'i',
            'braile' =>'⠊'
        ),
        array(
            'letra'=>'j',
            'braile' =>'⠚'
        ),
        array(
            'letra'=>'k',
            'braile' =>'⠅'
        ),
        array(
            'letra'=>'l',
            'braile' =>'⠇'
        ),
        array(
            'letra'=>'m',
            'braile' =>'⠍'
        ),
        array(
            'letra'=>'n',
            'braile' =>'⠝'
        ),
        array(
            'letra'=>'ñ',
            'braile' =>'⠻'
        ),
        array(
            'letra'=>'o',
            'braile' =>'⠕'
        ),
        array(
            'letra'=>'p',
            'braile' =>'⠏'
        ),
        array(
            'letra'=>'q',
            'braile' =>'⠟'
        ),
        array(
            'letra'=>'r',
            'braile' =>'⠗'
        ),
        array(
            'letra'=>'s',
            'braile' =>'⠎'
        ),
        array(
            'letra'=>'t',
            'braile' =>'⠞'
        ),
        array(
            'letra'=>'u',
            'braile' =>'⠥'
        ),
        array(
            'letra'=>'v',
            'braile' =>'⠧'
        ),
        array(
            'letra'=>'w',
            'braile' =>'⠺'
        ),
        array(
            'letra'=>'x',
            'braile' =>'⠭'
        ),
        array(
            'letra'=>'y',
            'braile' =>'⠽'
        ),
        array(
            'letra'=>'z',
            'braile' =>'⠵'
        ),
        array(
            'letra'=>'0',
            'braile' =>'⠼⠚'
        ),
        array(
            'letra'=>'1',
            'braile' =>'⠼⠁'
        ),
        array(
            'letra'=>'2',
            'braile' =>'⠼⠃'
        ),
        array(
            'letra'=>'3',
            'braile' =>'⠼⠉'
        ),
        array(
            'letra'=>'4',
            'braile' =>'⠼⠙'
        ),
        array(
            'letra'=>'5',
            'braile' =>'⠼⠑'
        ),
        array(
            'letra'=>'6',
            'braile' =>'⠼⠋'
        ),
        array(
            'letra'=>'7',
            'braile' =>'⠼⠛'
        ),
        array(
            'letra'=>'8',
            'braile' =>'⠼⠓'
        ),
        array(
            'letra'=>'9',
            'braile' =>'⠼⠊'
        ),
        array(
            'letra'=>'¿',
            'braile' =>'⠢'
        ),
        array(
            'letra'=>'?',
            'braile' =>'⠢'
        ),
        array(
            'letra'=>',',
            'braile' =>'⠂'
        ),
    );

    $textoEspa=strtolower($esp);
    $textoDividido=str_split($textoEspa);
    $textoBraile="";
    for($i=0;$i<count($textoDividido);$i++){
    if($textoDividido[$i] != " "){
            for($j=0;$j<count($data);$j++){
                if($data[$j]['letra']==$textoDividido[$i]){
                    $textoBraile= $textoBraile.' '.$data[$j]['braile'];
                }
            }

    }else{
        $textoBraile= $textoBraile." ";
    }
    }
    return $textoBraile;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TRADUCTOR</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
       <?php
        require_once 'subline/navbar.php';
       ?>
           
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h2 class="mt-1">Traductor de Español a Braile</h2>
                    </div>
                    
                    <div class="container-fluid" >
                        <form method="post" class="mt-2" >
                            <div class="form-floating mt-2">
                                <textarea class="form-control" name='braile' style="height: 175px"><?php echo validaAction();?></textarea>
                                <label for="floatingTextarea2">Braile</label>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3 mb-3">
                                <button class="btn btn-primary" type="submit" name="BaE">Braile a Español</button>
                              
                                <button class="btn btn-primary" type="submit" name="EaB">Español a Braile</button>
                            </div>
                            <div class="form-floating mt-2">
                                <textarea class="form-control" name='espa' style="height: 175px"><?php echo validaActionB();?></textarea>
                                <label for="floatingTextarea2">Español</label>
                            </div>

                            <div class="input-group mt-4 mb-2">
                            <input type="text" class="form-control" placeholder="Titulo de traduccion" name="titulo">
                            <button type="submit" class="btn btn-primary btn-sm" name="bd">Enviar a base de datos</button>
                            </div>

                          
                            
                         
                            </div>

                            <?php
                             if(isset($_POST['bd'])){
                               if(empty($_POST['espa'])){
                                    $espa= braAespa($_POST['braile']);
                                    insertaDatos($_POST['titulo'],$_POST['braile'],$espa);
                               }else if(empty($_POST['braile'])){
                                    $bra= espaAbra($_POST['espa']);
                                    insertaDatos($_POST['titulo'],$bra,$_POST['espa']);
                               }
                            }
                            ?>
                        </form>
                        


                    </div>
                </main>
            </div>

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

