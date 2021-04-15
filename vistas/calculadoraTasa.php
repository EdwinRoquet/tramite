<?php 
/* Componentes HTML */
include_once 'componentes/header.php';
include_once 'componentes/navbar.php';
?>

<nav aria-label="breadcrumb" class="m-4">
    <ol class="breadcrumb migas">
        <li class="breadcrumb-item"><a href="principal.php"><i class="fa fa-home"></i> Panel Principal</a></li>
        <li class="breadcrumb-item active" aria-current="page"> Calculadora Tasa</li>
    </ol>
</nav>
<div class="card m-4">
    <div class="card-body">
        <div class="jumbotron text-center">
              <h1>Calculadora de Gastos Arbitrales del OSCE</h1>
              <p>
                  Permite determinar el monto de los gastos arbitrales (honorarios de árbitros y gastos administrativos de la Secretaría Arbitral) que correponde asumir a las partes de los arbitrajes organizados y administrados por el OSCE, asi como en los arbitrajes ad hoc.
              </p> 
        </div>
        <hr>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-sm-3">
              
            </div>
            <div class="col-sm-4">
              <h3> Pretensiones Determinadas</h3>
              <p>Monto de la cuantía (S/ ):</p>
              
            </div>
            <div class="col-sm-4">
              <input type="text" name="txtMonto" id="txtMonto" class="form-control">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-5">
              
            </div>
            <div class="col-sm-3">
              <button class="btn badge-primary" id="btnCalculo"> Realizar Cálculo</button>
            </div>
            <div class="col-sm-4">
            
            </div>
            
        </div>

    </div>
    <div id="calculoOptenido">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <h2 style="font-size: 18px;font-weight: 600;">Monto de la Cuantía por Pretensiones Determinadas </h2>
                </div>
                <div class="col-sm-3">
                    Monto Cuantía
                </div>
                <div class="col-sm-3" id="montoCuantia">

                </div>
             </div>
            <hr>
            <h2 style="font-size: 20px;font-weight: 600;">Resultado obtenido </h2>
            <h2 style="font-size: 18px;color: #035fa0;font-weight: 600;">Para Árbitro Único</h2>
            <div class="row">
                <div class="col-sm-12">
                    <table class="table" id="tablaArbitroUnico">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col"><strong>CONCEPTO</strong></th>
                          <th scope="col"><strong>CUANTÍA DETERMINADA (S/)</strong>  </th>
                          <th scope="col" style="display: none;"><strong>CUANTÍA DETERMINADA (S/)</strong>  </th>
                          <th scope="col"><strong>CUANTÍA INDETERMINADA (S/)</strong>    </th>
                          <th scope="col"><strong>TOTAL (S/) </strong></th>
                          <th scope="col" style="display: none;"><strong>TOTAL (S/) </strong></th>
                          <th scope="col" style="display: none;"><strong>TOTAL con IGV (S/)</strong> </th>
                          <th scope="col"><strong>TOTAL con IGV (S/)</strong> </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>Secretaría SNA-OSCE</td>
                            <td id="honorarioSecretariaNuevo"></td>
                            <td id="honorarioSecretaria" style="display: none;"></td>
                            <td>0</td>
                            <td id="honorarioSecretaria1Nuevo"></td>
                            <td id="honorarioSecretaria1" style="display: none;"></td>
                            <td id="totalIgv" style="display: none;"></td>
                            <td id="totalIgvNuevo"></td>
                        </tr>

                        <tr>
                            <td>Honorarios Arbitro Único (*)</td>
                            <td id="honorarioArbitroUnicoNuevo"></td>
                            <td id="honorarioArbitroUnico" style="display: none;"></td>
                            <td>0</td>
                             <td id="honorarioArbitroUnico1Nuevo"></td>
                            <td id="honorarioArbitroUnico1" style="display: none;"></td>
                            <td style="display: none;"></td>
                            <td></td>
                        </tr>
                     
                        <tr>
                            <td>Total</td>
                            <td></td>
                            <td></td>
                            <td id="totalSuma"></td>
                            <td id="TotalArbritroUnicoSecretario" style="display: none;"></td>
                            <td></td>
                            
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="card-body">
            <h2 style="font-size: 18px;color: #035fa0;font-weight: 600;">Para Tribunal Arbitral (3 Árbitros)</h2>
            <div class="row">
                <div class="col-sm-12">
                    <table class="table" id="tablaTribunalArbitral">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col"><strong>CONCEPTO</strong></th>
                          <th scope="col"><strong>CUANTÍA DETERMINADA (S/)</strong>  </th>
                          <th scope="col"><strong>CUANTÍA INDETERMINADA (S/)</strong>    </th>
                          <th scope="col" style="display: none;"><strong>TOTAL (S/) </strong></th>
                          <th scope="col"><strong>TOTAL (S/) </strong></th>
                          <th scope="col"><strong>TOTAL con IGV (S/)</strong> </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>Secretaría SNA-OSCE</td>
                            <td id="honorarioSecretaria3Arbitros"></td>
                            <td>0</td>
                            <td id="honorarioSecretaria3Arbitros1" style="display: none;"></td>
                            <td id="total"></td>
                            <td id="totalIgv2"></td>
                
                        </tr>
                        <tr>
                            <td>Honorarios Arbitro Único (*)</td>
                            <td id="honorarioTribunalUnico"></td>
                            <td>0</td>
                            <td id="honorarioTribunalUnico1" style="display: none;"></td>
                            <td></td>
                            <td></td>
                   
                        </tr>
                        <tr>
                            <td>  Honorarios Árbitro 1  </td>
                            <td id="arbitro1"></td>
                            <td></td>
                            <td id="honorarioArbitro1_1" style="display: none;"></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>  Honorarios Árbitro 2  </td>
                            <td id="arbitro2"></td>
                            <td></td>
                            <td id="honorarioArbitro1_2" style="display: none;"></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>  Honorarios Árbitro 3  </td>
                            <td id="arbitro3"></td>
                            <td></td>
                            <td id="honorarioArbitro1_3" style="display: none;"></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>  Total  </td>
                            <td></td>
                            <td></td>
                            <td id="totalCuentaDeterminada"></td>
                            <td></td>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
            (*) Monto Neto
            <div class="row">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                    <input type="submit" name="cotizar" value="Descargar Archivo PDF" class="btn btn-success">   
                </div>
                <div class="col-sm-4">
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ============================================ -->
 <?php 
	include_once 'componentes/footer.php';
    
?>

<script src="js/calculadoraTasa.js" ></script>