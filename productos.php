<?php include("template/cabecera.php");?>

<?PHP 
include("administrador/config/bd.php");
$sentenciaSQL=$conexion->prepare("SELECT * FROM LIBROS;");
$sentenciaSQL->execute();
$listaLibros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<?PHP { foreach($listaLibros as $libro) {?>

    <div class="col-md-3">
        <div class="card">
            <img class="card-img-top" src="./img/<?PHP echo $libro['imagen'];?>" alt="">
            <div class="card-body">
                <h4 class="card-title"><?PHP echo $libro['nombre'];?></h4>
                
            </div>
        </div>
    </div>

<?PHP }}?>

<?php include("template/pie.php");?>