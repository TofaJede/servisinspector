<body>
<script>
    $(document).ready(function($) {
            $(".clickable-row").click(function() {
                window.document.location = $(this).data("href");
            });
        });
</script>
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Přehled aut</h1>
                </div>
                <!-- /.col-lg-12 -->
               
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Auta v databázi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="klienti-tabulka">
                                    <thead>
                                        <tr>
                                            <th>SPZ</th>
                                            <th>VIN</th>
                                            <th>STK</th>
                                            <th>Rok výroby</th>
                                            <th>Značka</th>
                                            <th>Model</th>
                                            <th>Olej</th>
                                            <th>Poznámka</th>
                                            <th>Motor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        // require 'model/defaultModel.class.php';

                                        $autoClass = new defaultModel($mysqli, 'auto');
                                        $auta = $autoClass->getAll();

                                        foreach ($auta as $auto):

                                    ?>
                                       
                                        <tr class="odd clickable-table gradeX" onclick="window.document.location='?p=nahled_auta&id=<?= $auto['id'] ?>';">
                                            <td><?= $auto['spz'] ?></td>
                                            <td><?= $auto['vin'] ?></td>
                                            <td><?= $auto['stk'] ?></td>
                                            <td><?= $auto['rokVyroby'] ?></td>
                                            <td><?= $auto['znacka'] ?></td>
                                            <td><?= $auto['model'] ?></td>
                                            <td><?= $auto['olej'] ?></td>
                                            <td><?= $auto['poznamka'] ?></td>
                                            <td><?= $auto['m_objem']." ".$auto['m_vykon']." ".$auto['m_kod'] ?> ?></td>
                                        </tr>

                                    <?php
                                        endforeach;
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive --> 
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
            

                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
        <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="dist/js/sb-admin-2.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
        $(document).ready(function() {
            $('#klienti-tabulka').DataTable({
                    responsive: true
            });
        });
        </script>

