 <div id="wrapper">
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Přidat klienta do databáze </h1>
                        <div class="col-md-6 container">
                            <h4>Údaje klienta</h4>
                            <form role="form" method="POST" action="script/add_client.script.php">
                            <div class="form-group col-md-12">
                                <label>Jméno</label>
                                <input type="text" name="jmeno" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Přijmení</label>
                                <input type="text" name="prijmeni" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Telefon</label>
                                <input type="text" name="telefon" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label>E-mail</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="col-md-12">Adresa</h3>
                            <div class="form-group col-md-12">
                                <label>Město</label>
                                <input type="text" name="a_mesto" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Ulice a č.p.</label>
                                <input type="text" name="a_ulice" class="form-control">
                            </div>
                            <div class="form-group col-md-12">
                                <label>PSČ</label>
                                <input type="text" name="a_psc" class="form-control">
                            </div>
                        </div>
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
                    </div>
                    <!-- /.panel -->
                        </div>
                        <div class="form-group col-md-12 text-right">
                             <input type="submit" name="add_client" class="btn btn-green" value="Přidat"/>
                        </div>
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
