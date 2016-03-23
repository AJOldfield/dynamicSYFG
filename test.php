<div id="layout">

	<!----------- MENU ---------->
	<?php include('menu_B.php');?>

	<div id="main">
        <div class="header">
            <h1>Provide services</h1>
        </div>
	
        <div class="content">
            <h2 class="content-subhead">Provide services</h2>
            <p>TEST</p>
			<?php 
			//form_draw_field("contracting_quantity");
			//form_draw_field("");
			//form_draw_field("");
			//echo "<br>";
			
			//form_draw_field("contracting_available");
			//form_draw_field("");
			//form_draw_field("");
			//echo "<br>";
			
			// Capacity to perform this service
			form_draw_field_units("contracting_capacity", "pcs_capacity_units");
			
			// How far will you travel
			form_draw_field_units("contracting_distance_1", "contracting_js_unit_1");

			// form_draw_block(title, array(as_many_elements_as_you_want))
			form_draw_block('Tractor', array('pcs_trctr_make', 'pcs_trctr_model', 'pcs_trctr_year', 'pcs_trctr_engine_HP', 'pcs_trctr_ drivetrain'));
			
			?>
        </div>

    </div>
</div>