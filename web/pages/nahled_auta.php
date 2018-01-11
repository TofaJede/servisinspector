<?php
//nahled s vypisem klienta
$autoClass = new defaultModel($mysqli,'auto');
$auto = $autoClass->getById($id);

foreach ($auto as $key => $value){
    $$key = $value;
}

?>

 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 nahled">
                        <h1 class="page-header">Náhled auta</h1>
	                      	<div class="col-md-6">
	                      		<div class="bunka col-md-6"><strong>SPZ</strong><br><?= $spz ?></div>
	                      		<div class="bunka col-md-6"><strong>VIN</strong><br><?= $vin ?></div>
	                      		<div class="bunka col-md-6"><strong>STK</strong><br><strong class="green-font"><?= $stk ?></strong></div>
	                      		<div class="bunka col-md-6"><strong>Rok výroby</strong><br><?= $rokVyroby ?></div>
	                      	 	</div>
	                      	<div class="col-md-6">
	               				<div class="bunka col-md-4"><strong>Značka</strong><br><?= $znacka ?></div>
	                      		<div class="bunka col-md-4"><strong>Model</strong><br><?= $model ?></div>
	                      		<div class="bunka col-md-4"><strong>Olej</strong><br><?= $olej ?></div>
	                      		<div class="bunka col-md-4"><strong>Objem</strong><br><?= $m_objem ?></div>
                      			<div class="bunka col-md-4"><strong>Kód</strong><br><?= $m_kod ?></div>
                      			<div class="bunka col-md-4"><strong>Výkon</strong><br><?= $m_vykon ?></div>
	                      	</div>
	                      	<div class="bunka col-md-12">
	                      		<div class="col-md-6"><strong>Poznámka</strong><br><?= $poznamka ?></div>
	                      	</div>
	                      		
		                <div class="col-md-12 auta-vypis">
                        <h4>Auto patří klientovi</h4>
                            <?php
                            $klientClass = new defaultModel($mysqli, 'klient');
                            $autoToKlientClass = new defaultModel($mysqli, 'klient_has_auto');

                            $autoToKlientRow = $autoToKlientClass->getRecordByColumn('auto_id', $id, '');
                            $klient = $klientClass->getById($autoToKlientRow['klient_id']);
                            // TODO: Co kdyz auto je v db a klient se odebere?

                            if ($klient):
                            foreach ($klient as $key => $value){
                                    $$key = $value;
                                }
                            ?>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class=" table table-striped table-bordered table-hover">
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

                                        <tr onclick="window.document.location='?p=nahled_klienta&id=<?= $id ?>';">
                                            <td><?= $jmeno ?></td>
                                            <td><?= $prijmeni ?></td>
                                            <td><?= $telefon ?></td>
                                            <td><?= $email ?></td>
                                            <td><?= $a_mesto ?></td>
                                            <td><?= $a_ulice ?></td>
                                            <td><?= $a_psc ?></td>
                                        </tr>
                              
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                            <?php
                                endif;

                                if (!$klient):
                            ?>
                                <div class="panel-body">
                                   <h2>Auto nemá přiřazeného klienta</h2>
                                </div>
                            <?php
                                endif;
                            ?>
		                    </div><!-- Auta vypis -->

                        
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

    