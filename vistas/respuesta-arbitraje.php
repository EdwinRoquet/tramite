<?php
	/* Componentes HTML */
	include_once 'componentes/header.php';
	include_once 'componentes/navbar.php';
?>

<div class="card m-3">
    <div class="card-body">
        <h2 class="titulo"><i class="fa fa-edit icoLogo"></i> Respuestas de Arbitraje</h2>
        <p class="subtitulo">Aquí podras realizar el seguimiento de tu Tramite.</p>

               <!-- ENCABEZADOS DE LISTA -->
		<ul class="nav nav-tabs pnlRegistro"  id="myTab">
			<li class="nav-item"> <a class="nav-link active show" data-toggle="pill" data-target="#tabSol01"><i class="fa fa-search"></i> Demandante </a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="pill" data-target="#tabSol02"><i class="fa fa-search"></i> Respuesta</a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="pill" data-target="#tabSol03"><i class="fa fa-search"></i> Designación de arbitro</a> </li>
	  	</ul>

          <div class="tab-content">

	  		<!-- Tab uno -->
	  		<div role="tabpanel" class="tab-pane fade p-4 active show " id="tabSol01">
				<h5>Demandante</h5>

                <div class="row">
                
                <div class="col-md-4">
                 <div class="form-group">
                  <label for="nombre">Nombre o Razon Social</label>
                  <input type="text" class="form-control" id="nombre" placeholder="Nombre o Razon Social">
                </div>
                </div>

                <div class="col-md-3">
                 <div class="form-group">
                  <label for="tipo_doducmento">Tipo de Documento</label>
                  <input type="text" class="form-control" id="tipo_doducmento" placeholder="Tipo de Documento">
                </div>
                </div>

                <div class="col-md-4">
                 <div class="form-group">
                  <label for="documento">N° Documento</label>
                  <input type="text" class="form-control" id="documento" placeholder="N° Documento">
                </div>
                </div>

                
                <div class="col-md-5">
                 <div class="form-group">
                  <label for="domicilio">Domicilio Fiscal</label>
                  <input type="text" class="form-control" id="domicilio" placeholder="Domicilio Fiscal">
                </div>
                </div>

                <div class="col-md-3">
                 <div class="form-group">
                  <label for="int">Int / Ofc</label>
                  <input type="text" class="form-control" id="int" placeholder="Int / Ofc">
                </div>
                </div>

                <div class="col-md-4">
                 <div class="form-group">
                  <label for="correo">Correo Electronico</label>
                  <input type="text" class="form-control" id="correo" placeholder="Correo Electronico">
                </div>
                </div>

                <div class="col-md-3">
                 <div class="form-group">
                  <label for="departamento">Departamento</label>
                  <select name="" id="" class="form-control">
                  <option value="1">Uno</option>
                  <option value="2">Dos</option>
                  <option value="3">Tres</option>
                  </select>
                </div>
                </div>

                <div class="col-md-4">
                 <div class="form-group">
                  <label for="provincia">Provincia</label>
                  <select name="" id="" class="form-control">
                  <option value="1">Uno</option>
                  <option value="2">Dos</option>
                  <option value="3">Tres</option>
                  </select>
                </div>
                </div>

                <div class="col-md-4">
                 <div class="form-group">
                  <label for="distrito">Distrito</label>
                  <select name="" id="" class="form-control">
                  <option value="1">Uno</option>
                  <option value="2">Dos</option>
                  <option value="3">Tres</option>
                  </select>

                </div>
                </div>


                    
                </div>

                <div class="mt-3 d-flex justify-content-end">
                    <div class="col-md-3">
                        <button type="button" class="btn btn-success btn-sm siguiente">
                              <i class="fa fa-forward"></i> Siguiente 
                       </button>
                    </div>
                </div>
              
			
			</div> <!-- Fin Tab uno -->
			<!-- Tab dos -->
			<div role="tabpanel" class="tab-pane fade p-4" id="tabSol02">
			
			<div class="row">

            <div class="col-md-2">
            <P class="text-center">Posición de</P>
            </div>

            <div class="col-md-8">
                <input type="text" class="form-control">
            </div>

            <div class="col-md-2">
               <P class="text-center">(la parte demandada)</P>
            </div>

            <div class="col-md-12">
               <P class="">(la parte demandada)  a que declaremos/procedamos/cumplamos/con:</P>
            </div>

            <div class="col-md-12">
            <textarea class="form-control rounded-0" id="texto" rows="3"></textarea>
            </div>
            
            <div class="col-md-12">
               <P class="">Que, en tal sentido, corresponde que un Tribunal Arbitral (ó arbitro Unico)
               proceda a resolver las controversias que mantenemos con nuestra contraparte:</P>
            </div>

            <div class="col-md-12">
            <textarea class="form-control rounded-0" id="texto2" rows="3"></textarea>
            </div>
            
            
            
            </div>



            <div class="mt-3 d-flex justify-content-between">
                    <div class="col-md-3 d-flex justify-content-center">
                           <button type="button" class="btn btn-success btn-sm anterior">
                                <i class="fa fa-backward"></i> Anterior 
                            </button>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                         <button type="button" class="btn btn-success btn-sm siguiente">
                              <i class="fa fa-forward"></i> Siguiente 
                         </button>
                    </div>
            </div>

			
				
				
			</div>  <!-- fin Tab dos -->

            <!-- Tab  tres -->
			<div role="tabpanel" class="tab-pane fade p-4" id="tabSol03">
		
				<div class="row">
                
                   <div class="col-md-6">
                     <div class="form-group row">
                          <p class="col-sm-3 mt-1">N° contrato</p>
                              <input type="email" class="form-control col-sm-4" id="inputEmail3" placeholder="Numero contrato">
                          
                     </div>
                   </div>

                   <div class=" col-md-12 row">
                   <p class="col-md-5 mt-1">  Se establece que todos los conflictos que se deriven de la</p>
                   <input type="email" class="form-control col-md-7" id="conflicto" >
                  
                   </div>

                   <div class=" col-md-12">
                       <p>(ejecución  e interpretación, nulidad, invalidez, etc) del contrato serán resuletos mediante arbitraje & este sera resuelto mediante árbitro único/tribunal
                       arbitral a través  del Centro de  Arbitraje Latinoamericano e Investigaciones Juridicas.</p>
                       <p>Para tal efecto, cumplimos con designar al Arbitro que conformará el Tribunal Arbitral</p>
                       <input type="text" class="form-control">
                   </div>

                   <div class="col-md-6 mt-3">
                     <div class="form-group row">
                          <p class="col-sm-3 mt-1">CAL N°</p>
                              <input type="email" class="form-control col-sm-4" id="call" placeholder="CAL numero"> 
                     </div>
                   </div>
                   <div class="col-md-6">
                    
                   </div>

                   
                  
                <div class="col-md-6">
                 <div class="form-group">
                  <label for="domicilio">Domicilio Fiscal</label>
                  <input type="text" class="form-control" id="domicilioF" placeholder="Domicilio Fiscal">
                </div>
                </div>

                <div class="col-md-3">
                 <div class="form-group">
                  <label for="domicilio">Departamento</label>
                  <select name="" id="" class="form-control">
                  <option value="1">Uno</option>
                  <option value="2">Dos</option>
                  <option value="3">Tres</option>
                  </select>
                </div>
                </div>

                <div class="col-md-3">
                 <div class="form-group">
                  <label for="domicilio">Provincia</label>
                  <select name="" id="" class="form-control">
                  <option value="1">Uno</option>
                  <option value="2">Dos</option>
                  <option value="3">Tres</option>
                  </select>
                </div>
                </div>

                <div class="col-md-3">
                 <div class="form-group">
                  <label for="domicilio">Distrito</label>
                  <select name="" id="" class="form-control">
                  <option value="1">Uno</option>
                  <option value="2">Dos</option>
                  <option value="3">Tres</option>
                  </select>
                </div>
                </div>
                
                </div>
			
                <div class="mt-3 d-flex justify-content-between">
                    <div class="col-md-3 d-flex justify-content-center">
                           <button type="button" class="btn btn-success btn-sm anterior">
                                <i class="fa fa-backward"></i> Anterior 
                            </button>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center">
                         <button type="button" class="btn btn-success btn-sm ">
                              </i> Generar Respuesta
                         </button>
                    </div>
              </div>
				
			</div>  <!-- Fin Tab Tres -->

          </div>
          </div>
	  	</div>










<?php 
include_once 'componentes/footer.php';
?>