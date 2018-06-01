<div class="content list_events">
	<div class="row top">
		<div class="col-md-12">
			<h3><?php echo $atts['title']; ?></h3>
			<div id="date_listevents" data-range="<?= $dataRange; ?>" data-baseurl="<?= $atts['url']; ?>" data-url="<?= $url; ?>"
			class="pull-right" style="">
			    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
			    <span></span> <b class="caret"></b>
		    </div>			
		</div>
		<div class="col-md-12 text-right"  >
			<label for="states_list">UF: </label>
			<select id="states_list">
				<option value="">Todos</option>
				<option value="Artigas">Artigas</option>
				<option value="Canelones">Canelones</option>
				<option value="Cerro Largo">Cerro Largo</option>
				<option value="Colonia">Colonia</option>
				<option value="Durazno">Durazno</option>
				<option value="Flores">Flores</option>
				<option value="Florida">Florida</option>
				<option value="Lavalleja">Lavalleja</option>
				<option value="Maldonado">Maldonado</option>
				<option value="Montevideo">Montevideo</option>
				<option value="Paysandú">Paysandú</option>
				<option value="Río Negro">Río Negro</option>
				<option value="Rivera">Rivera</option>
				<option value="Rocha">Rocha</option>
				<option value="Salto">Salto</option>
				<option value="San José">San José</option>
				<option value="Soriano">Soriano</option>
				<option value="Tacuarembó">Tacuarembó</option>
				<option value="Treinta y Tres">Treinta y Tres</option>
			</select>
		</div>
	</div>

	<div id="loading" class="spinner" style="display:none;"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div>

	<div class="list_spaces"></div>
</div>

