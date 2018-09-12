<?php $this->load->view('landing/resources/head_base'); ?>
<style>
	.remove_field {
		position: relative;
		font-size: 13px;
		color: #ff5b27;
		bottom: 15px;
		margin-left: 2px;
	}
</style>
</head>
<body>
<div class="global-wrapper clearfix" id="global-wrapper">
	<?php $this->load->view('landing/resources/admin_head') ?>
	<?php $this->load->view('landing/resources/head_category') ?>

	<?php $this->load->view('landing/resources/head_menu') ?>

	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1" style="margin-top: 3px;">
				<?php $this->load->view('landing/msg_view'); ?>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<div class="box-lg" style="margin-top: 14px;">
					<h3 class="widget-title" style="font-weight: bold; font-size: 20px;padding-bottom: 14px;">
						Create New Specification</h3>
					<?= form_open('admin/category_specification')?>
						<div class="alert-notif"></div>

						<div class="form-group">
							<label for="-name">Specification Name *</label>
							<input class="form-control" type="text" name="spec_name" placeholder="Eg : Features or Display Size or Refresh Rate or Display Features..." required/>
						</div>

						<div class="form-group">
							<div class="checkbox">
								<input type="checkbox" name="has_option" id="has_option"> Is this specification having an option?
							</div>
						</div>

						<div id="options" style="display: none;">
							<div class="form-group">
								<label for="">Specification Options</label>
								<input type="text" name="options_field" id="options_field" class="form-control" placeholder="Eg : 3G, 4G, Full HD, Retina,GSM, Bluetooth, 3G, Touchscreen ...">
							</div>
							<div class="form-group">
								<div class="checkbox">
									<input type="checkbox" name="multiple_options"> Should user select multiple options
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="checkbox">
								<input type="checkbox" name="required"> Is the specification required
							</div>
						</div>

						<!-- <div class="form-group">
							<p>Where should the specification be displayed on sellers page?</p>
							<label class="radio-inline">
      							<input type="radio" name="tab" value="main_specification" checked>Main Specification Tab
    						</label>
						    <label class="radio-inline">
						      <input type="radio" name="tab" value="additional_attribute">Additional Attribute
						    </label>
						</div> -->

						<div class="form-group">
							<label for="description" class="control-label">Description for the specification</label>
							<input type="text" name="description" class="form-control" placeholder="Specify the size of the display in inch. Example 14 Inch" required>
						</div>

						<input class="carrito_btn_create col-md-12 col-sm-12 col-xs-12" type="submit"
							   value="Create Specification"/>
					<?= form_close(); ?>
					<br/>
					<div class="form_end">
						<a href="<?= base_url('admin'); ?>">Discard Form</a>
					</div>
				</div>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<table class="table table-striped">
                	<thead>
                		<tr>
                			<th>S/N</th>
                			<th class="text-center">Specification Name</th>
                			<th class="text-center">Action</th>
                		</tr>
                		<tbody>
                			<?php $x=1; foreach($specifications as $specification ) :
                			?>
                				<tr>
                					<td><?= $x; ?></td>
                					<td><?= $specification['spec_name'];?></td>
                                    <td class="text-center">
                                        <button class="btn btn-md btn-warning">Edit</button>
                                        <button class="btn btn-md btn-danger">Delete</button>
                                    </td>
                				</tr>
                			<?php $x++; endforeach; ?>
                		</tbody>
                	</thead>
                </table>
			</div>
		</div>
	</div>
	<div class="gap gap-small"></div>

	<?php $this->load->view('landing/resources/footer'); ?>

</div>
<?php $this->load->view('landing/resources/script'); ?>

<script>
	$(document).ready(function(){
	    $('#has_option').change(function(){
	        if(this.checked){
	            $('#options').fadeIn('slow');
	        	$('#options_field').attr('required', true);	        	
	        }else{
	            $('#options').fadeOut('slow');
	        }

	    });
	});
</script>
</body>
</html>
