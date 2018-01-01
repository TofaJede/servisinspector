
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
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                    <a href="?p=prehled_klientu">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>Klientů</div>
                                </div>
                            </div>
                        </div>
                    </a>
                        <a href="?p=pridat_klienta">
                            <div class="panel-footer">
                                <span class="pull-left">Přidat nového klienta</span>
                                <span class="pull-right"><i class="fa fa-plus"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                    <a href="?p=prehled_aut">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa  fa-automobile  fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div>Aut v databázi</div>
                                </div>
                            </div>
                        </div>
                    </a>    
                        <a href="?p=pridat_auto">
                            <div class="panel-footer">
                                <span class="pull-left">Přidat nové auto</span>
                                <span class="pull-right"><i class="fa fa-plus"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
 <?php /*           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Klienti v databázi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Jméno</th>
                                            <th>Přijmení</th>
                                            <th>Telefon</th>
                                            <th>E-mail</th>
                                            <th>Město</th>
                                            <th>Ulice</th>
                                            <th>PSČ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <tr class="odd clickable-table gradeX" onclick="window.document.location='?p=nahled_klient&id=1';">
                                            <td>Patrik</td>
                                            <td>Šafář</td>
                                            <td>736289288</td>
                                            <td>safarpatrik@seznam.cz</td>
                                            <td>Brno</td>
                                            <td>palackého třída 55</td>
                                            <td>612 00</td>
                                        </tr>
                                
                                        <tr class="odd clickable-table gradeX" onclick="window.document.location='?p=nahled_klient&id=2';">
                                            <td>Radan</td>
                                            <td>Dolihal</td>
                                            <td>739999999</td>
                                            <td>radan.prcek@gmail.com</td>
                                            <td>Rosice</td>
                                            <td>Podzahradní 12</td>
                                            <td>664 00</td>
                                        </tr>
                                  
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive --> 
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    

                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Auta v databázi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="auta_nahled">
                                    <thead>
                                        <tr>
                                            <th>Jméno</th>
                                            <th>Přijmení</th>
                                            <th>Telefon</th>
                                            <th>E-mail</th>
                                            <th>Město</th>
                                            <th>Ulice</th>
                                            <th>PSČ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <tr class="odd clickable-table gradeX" onclick="window.document.location='?p=nahled_autaid=1';">
                                            <td>Patrik</td>
                                            <td>Šafář</td>
                                            <td>736289288</td>
                                            <td>safarpatrik@seznam.cz</td>
                                            <td>Brno</td>
                                            <td>palackého třída 55</td>
                                            <td>612 00</td>
                                        </tr>
                                
                                        <tr class="odd clickable-table gradeX" onclick="window.document.location='?p=nahled_auta&id=2';">
                                            <td>Radan</td>
                                            <td>Dolihal</td>
                                            <td>739999999</td>
                                            <td>radan.prcek@gmail.com</td>
                                            <td>Rosice</td>
                                            <td>Podzahradní 12</td>
                                            <td>664 00</td>
                                        </tr>
                                  
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive --> 
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
*/ ?>

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
            $('#dataTables-example').DataTable({
                    responsive: true
            });

            $('#auta_nahled').DataTable({
                    responsive: true
            });
        });
        </script>

