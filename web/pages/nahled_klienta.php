<?php
//nahled s vypisem klienta

$klientClass = new defaultModel($mysqli, 'klient');
$klient = $klientClass->getById($id);

?>

 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 nahled">
                        <h1 class="page-header">Náhled klienta</h1>
	                      	<div class="col-md-6">
	                      		<div class="bunka col-md-12"><strong>Jméno</strong><br><?= $klient['jmeno'] ?></div>
	                      		<div class="bunka col-md-6"><strong>Telefon</strong><br><a href="tel:<?= $klient['telefon'] ?>"><?= $klient['telefon'] ?></a></div>
	                      		<div class="bunka col-md-6"><strong>E-mail</strong><br><a href="mailto:<?= $klient['email'] ?>"><?= $klient['email'] ?></a></div>
	                      	</div>
	                      	<div class="col-md-6">
	                      		<h4>Adresa</h4>
	                      		<div class="bunka"><?= $klient['a_ulice'] ?>
	                      		<br><?= $klient['a_mesto'] ?>
	                      		<br><?= $klient['a_psc'] ?></div>
	                      	</div>
		                <div class="col-md-12 auta-vypis">
                        <h4>Auta patřící klientovi</h4>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class=" table table-striped table-bordered table-hover">
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
                                     $klient_has_autoClass = new defaultModel($mysqli, 'klient_has_auto');
                                     $klientsCars = $klient_has_autoClass->getRecordByColumn('klient_id', $id);
                                         if ($klientsCars != false):
                                             $carClass = new defaultModel($mysqli, 'auto');
                                                // TODO: jestlize nema auto tak co....
                                                foreach ($klientsCars as $klientsCar):
                                                $car = $carClass->getById($klientsCar['auto_id']);
                                            ?>
                                                <tr onclick="window.document.location='?p=nahled_auta&id=1';">
                                                    <td><?= $car['spz'] ?></td>
                                                    <td><?= $car['vin'] ?></td>
                                                    <td><?= $car['stk'] ?></td>
                                                    <td><?= $car['rokVyroby'] ?></td>
                                                    <td><?= $car['znacka'] ?></td>
                                                    <td><?= $car['model'] ?></td>
                                                    <td><?= $car['olej'] ?></td>
                                                    <td><?= $car['poznamka'] ?></td>
                                                    <td><?= $car['m_objem']." ".$car['m_vykon']."<br>".$car['m_kod'] ?></td>
                                                </tr>
                                            <?php
                                                endforeach;
                                                endif;
                                                if ($klientsCars == false){
                                                    echo "<h2>Klient nemá přiřazené žádné auto!</h2>";
                                                }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                   
		                    </div>
                        <form method="POST">
                        <div class="col-md-12 dropdown">
                        <div class="dropdown-toggle btn btn-default">Přiřadit auto ke klientovi <span class="caret"></span></div> 
                        <div id="auta-klient-tabulka" class="panel panel-default">
                        <div class="panel-heading">Auta v databázi</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" >
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="auto-klient">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>SPZ</th>
                                            <th>VIN</th>
                                            <th>STK</th>
                                            <th>Rok výroby</th>
                                            <th>Značka</th>
                                            <th>Model</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd clickable-table gradeX">
                                            <td><input type="radio" name="auto_id" value="1" /></td>
                                            <td>4B0 6661</td>
                                            <td>12345678910234567</td>
                                            <td>STK 1 </td>
                                            <td>1995</td>
                                            <td>Škoda</td>
                                            <td>Octavia</td>
                                        </tr>
                                
                                        <tr class="odd clickable-table gradeX">
                                            <td><input type="radio" name="auto_id" value="2" /></td>
                                            <td>1B6 6661</td>
                                            <td>---</td>
                                            <td>STK 2 </td>
                                            <td>2016</td>
                                            <td>Opel</td>
                                            <td>Astra</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive --> 
                        </div>
                        <!-- /.panel-body -->
                        <div class="col-md-12"><input type="submit" class="btn btn-green" name="prirad_autp" value="Přiřadit auto" style="float: right;margin-top: 20px;"></div>
                        
                    </div>
                    <!-- /.panel -->
                        </div> 
                        <!-- /.dropdown-->
                        </form>
                    </div>
                    <!-- /.col-lg-12 -->
                 
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
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

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
            $('#auto-klient').DataTable({
                    responsive: true
            });
            
            $(".dropdown-toggle").click(function(){
                $("#auta-klient-tabulka").show();
                });
        });

    </script>
