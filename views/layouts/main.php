<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= Html::csrfMetaTags() ?>
   <title><?= Html::encode($this->title) ?></title>
  <?php $this->head() ?>
</head>
<body ng-app="issste">

<?php $this->beginBody() ?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?= Html::a('ISSSTE', ['site/index'], ['class'=>'navbar-brand']) ?>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <?php if(!Yii::$app->user->isGuest){ ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catálogos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?= Html::a('<i class="icofont icofont-business-man"></i> Trabajadores', ['trabajadores/index']) ?></li>
            <li><?= Html::a('<i class="icofont icofont-building"></i> Plazas', ['plaza/index']) ?></li>
            <li><?= Html::a('<i class="icofont icofont-first-aid-alt"></i> Adscripción Física', ['adscripcion-fisica/index']) ?></li>
            <li><?= Html::a('<i class="icofont icofont-first-aid-alt"></i> Adscripción Presupuestal', ['adscripcion-presupuestal/index']) ?></li>
            <li><?= Html::a('<i class="icofont icofont-table"></i> Servicios', ['servicio/index']) ?></li>
            <li><?= Html::a('<i class="icofont icofont-eclipse"></i> Turnos', ['turno/index']) ?></li>
            <li><?= Html::a('<i class="icofont icofont-unity-hand"></i> Unidades Administrativas', ['unidad-administrativa/index']) ?>
            <li><?= Html::a('<i class="icofont icofont-calendar"></i> Horarios', ['horario/index']) ?>
            <li><?= Html::a('<i class="icofont icofont-company"></i> Puestos', ['puesto/index']) ?>
            <li><?= Html::a('<i class="icofont icofont-drag"></i> Tipos Movimiento', ['tipo-movimiento/index']) ?>
            <li><?= Html::a('<i class="icofont icofont-drag"></i> Tipos Movimiento Documentación', ['tipo-movimiento-documentacion/index']) ?>
            </li>
            <li><?= Html::a('<i class="icofont icofont-list"></i> Plantillas Reales', ['plantilla-real/index']) ?></li>
          </ul>
        </li>
        <?php } ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= Yii::$app->user->isGuest ? 'Invitado': Yii::$app->user->identity->username ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
              <?php 
                if(Yii::$app->user->isGuest){
                  echo Html::a('<i class="icofont icofont-login"></i> Iniciar Sesión', ['site/login']);
                }else{
                  echo Html::a('<i class="icofont icofont-logout"></i> Cerrar Sesión', ['site/logout'], ['data-method'=>'post']);
                }
              ?>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
    <div class="content"><?php echo $content; ?></div>
</div>
<?php $this->endBody() ?>

</body>

<script type="text/javascript">
  $(document).ready(function(){
    $('.datatable').DataTable({
      "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ning&uacute;n dato disponible en esta tabla",
            "sInfo": "Mostrando del _START_ al _END_ de _TOTAL_",
            "sInfoEmpty": "Mostrando del 0 al 0 de 0",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "&Uacute;ltimo",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
        ordering: false,
        responsive: true
    });
});  
</script>
<script type="text/javascript">
  $(".float-input").keydown(function (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            (e.keyCode == 65 && e.ctrlKey === true) ||
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>

</html>
<?php $this->endPage() ?>
