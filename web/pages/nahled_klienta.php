<?php
//nahled s vypisem klienta
?>

 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 nahled">
                        <h1 class="page-header">Náhled klienta</h1>
	                      	<div class="col-md-6">
	                      		<div class="bunka col-md-12"><strong>Jméno</strong><br>Patrik Šafář</div>
	                      		<div class="bunka col-md-6"><strong>Telefon</strong><br><a href="tel:+420736289288">+420 736 289 288</a></div>
	                      		<div class="bunka col-md-6"><strong>E-mail</strong><br><a href="mailto:safarpatrik@seznam.cz">safarpatrik@seznam.cz</a></div>
	                      	</div>
	                      	<div class="col-md-6">
	                      		<h4>Adresa</h4>
	                      		<div class="bunka">Palackého třída č. 55
	                      		<br>Brno
	                      		<br>612 00</div>
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
                                        <tr onclick="window.document.location='?p=nahled_auta&id=1';">
                                           <td>4B0 6661</td>
                                            <td>12345678901234567</td>
                                            <td>STK 1 </td>
                                            <td>1995</td>
                                            <td>Škoda</td>
                                            <td>Octavia</td>
                                            <td>28.06.1995</td>
                                            <td>Zkontrolovat stav</td>
                                            <td>2l 360koní 12334</td>
                                        </tr>
                                        <tr onclick="window.document.location='?p=nahled_auta&id=2';">
                                           <td>4B0 6661</td>
                                            <td>---</td>
                                            <td>STK 1 </td>
                                            <td>1995</td>
                                            <td>Škoda</td>
                                            <td>Octavia</td>
                                            <td>28.06.1995</td>
                                            <td>Zkontrolovat stav</td>
                                            <td>2l 360koní 12334</td>
                                        </tr>
                                        <tr onclick="window.document.location='?p=nahled_auta&id=3';">
                                            <td>4B0 6661</td>
                                            <td>---</td>
                                            <td>STK 1 </td>
                                            <td>1995</td>
                                            <td>Škoda</td>
                                            <td>Octavia</td>
                                            <td>28.06.1995</td>
                                            <td>Zkontrolovat stav</td>
                                            <td>2l 360koní 12334</td>
                                        </tr>
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
