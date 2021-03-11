<style>
.form-control{padding: 8px 30px 8px 12px;}
.form-group {
 	width: 100%;
	position: relative;
}
.form-group i {
	position: absolute;
	top: 32px;
	right: 7px;
	display: block;
}
.buscar-contenido i {
	font-size: 20px !important;
	position: absolute;
	top: 10px !important;
	right: 10px;
	display: block;
	cursor: pointer;
}
.table.table h4{font-weight:700;}
</style>
<div class="container">
	<div id="datos_wrapper" class="">
		<div class="row breadcrumbs">
			<div class="col-sm-12">
				<div class="enlace">INICIO / INFORMACIÓN / <a href="#">TEMARIO</a></div>
			</div>
		</div>
		<div class="opciones">
			<div class="row">
				<div class="col-md-3">
                    <div class="form-group">
                    <label for="ciclo" style="font-size: 11px;padding-bottom: 10px;">LINEA</label><br>
                        <div class="select-down">
                            <div class="selectd">
                                <span class="placeholder">Seleccione</span>
                                <ul id="selectLinea"></ul>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-md-3">
                    <div class="form-group">
                        <label for="ciclo" style="font-size: 11px;padding-bottom: 10px;">SALÓN</label><br>
                        <div class="select-down">
                            <div class="selectd">
                                <span class="placeholder">Seleccione</span>
                                <ul id="selectCiclo"></ul>
                            </div>
                        </div>
                    </div>
				</div>				
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="cuadro">
					<div class="cuerpo">
                        <div id="pdf-view"></div>
					</div>
					<div class="bordeverde">&nbsp;</div>
				</div>
			</div>
		</div>
	</div>
</div>