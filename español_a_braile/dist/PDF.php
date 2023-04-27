<?php
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

ob_start();

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
        <div id="layoutSidenav_content">
    <main>
                    <div class="container-fluid px-4">
                        <h2 class="mt-1"><?php echo $_GET['titulo']; ?></h2>
                    </div>
                    <div class="conteiner mt-3 ms-4 me-4 mb-3">
                    <?php 
                       $conexion = mysqli_connect("localhost", "root", "", "traducciones");
                       $query=mysqli_query($conexion, "SELECT * FROM traduccion WHERE titulo='".$_GET['titulo']."'");
                       while($nota=mysqli_fetch_assoc($query) ){

                        echo "<h2>Español</h2>";
                        echo "<label>";
                           
                             
                                    echo $nota['espanol'];
                                
                                
                            
                        echo "</label>";
                    echo "</div>";
                    echo '<div class="conteiner mt-3 ms-4 me-4 mb-3">';
                    echo    "<h2>Braile</h2>" ;
                         echo "<label>";
                         echo espaAbra($nota['espanol']);
                         echo "</label>";
                       }
                    echo "</div>";
                    ?>
                    
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
<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;

$html=ob_get_clean();

$dompdf = new Dompdf();

$option =$dompdf->getOptions();
$option-> set(array('isRemoteEnable'=>true));
$dompdf->setOptions($option);
$dompdf->loadHtml( $html);
$dompdf->setPaper('letter');
//$dompdf->setPaper('A4','Landscape');

$dompdf->render();
echo $html;
//$dompdf->stream("Traduccion.pdf",array("Attachment"=>false));
//echo $html;
?>
