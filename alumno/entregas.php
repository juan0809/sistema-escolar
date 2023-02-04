<?php
if (!empty($_GET['curso']) || !empty($_GET['contenido'])) {
    $curso = $_GET['curso'];
    $contenido = $_GET['contenido'];
    $evalucion = $_GET['eva'];
} else {
    header("Location: alumno/");
}
require_once 'includes/header.php';
require_once '../includes/conexion.php';

$idAlumno = $_SESSION['alumno_id'];
$sqla = "SELECT * FROM  ev_entregadas as ev
INNER JOIN alumnos as a ON ev.alumno_id = a.alumno_id
INNER JOIN evaluaciones as eva ON ev.evaluacion_id = eva.evaluacion_id 
INNER JOIN contenidos  as c ON eva.contenido_id = c.contenido_id 
WHERE  ev.evaluacion_id =? AND a.alumno_id=?";
$querya= $pdo->prepare($sqla);
$querya->execute(array($evalucion,$idAlumno));
$rowa = $querya->rowCount();
$sqlf = "SELECT * FROM evaluaciones WHERE contenido_id=$contenido";
$queryf = $pdo->prepare($sqlf);
$queryf ->execute();
$result = $queryf->fetch();
$fechaLimite = $result['fecha'];

?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Ver evaluacion</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Asignar evaluacion</a></li>
        </ul>
    </div>
    <div class="row">
        <?php if ($row > 0) {
            while ($data = $query->fetch()) {
                ?>
                <div class="col-md-12">
                    <div class="tile">
                        <div class="title-title-w-btn">
                            <h3 class="title">
                                <?= $data['titulo']; ?>
                            </h3>
                            <p> <a class="btn btn-warning icon-btn" href="entregas.php?curso=
                           <?= $curso; ?>&contenido=<?= $data['contenido_id']; ?> eva=<?= $data['evaluacion_id']; ?>">
                                    <i class="fa fa-flag"></i>Relizar entregas</button> <a></a>
                            </p>    
                            <i class="fa fa-flag"></i>Evaluaciones</button><a></a></p>
                        </div>
                        <div class="title-body">
                            <b>
                                <?= $data['descripcion']; ?>
                            </b><br> <br>
                            <b>
                                <?= $data['fecha']; ?>
                            </b><br> <br>
                            <b>
                                <?= $data['porcentaje']; ?>
                            </b><br> <br>

                        </div>

                    </div>
                </div>
            </div>
            </div>
        <?php }
        } ?>
    </div>

    <div class="row">
        <a href="index.php" class="btn btn-info">
            << Volver Atras</a>
    </div>
</main>