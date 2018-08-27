<?php $this->load->view('landing/resources/head_base'); ?>
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
						Create New SubCategory</h3>
					<?= form_open('admin/sub_category'); ?>
						<div class="alert-notif"></div>
						<div class="form-group">
							<label for="sub-category-name">Sub Category Name *</label>
							<input class="form-control" type="text" name="sub_category_name" placeholder="Apple" required/>
						</div>
						<div class="form-group">
							<label for="sel1">Select Root Category *</label>
							<select class="form-control" name="root_category_id" required>
								<option>-- Select a root category-- </option>
								<?php foreach( $root_categories as $root_category ) : ?>
									<option value="<?= $root_category->root_category_id; ?>"><?= ucwords($root_category->name); ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label for="sel1">Select Category*</label>
							<select class="form-control" name="category_id" required>
								<option>-- Select a category-- </option>
								<?php foreach( $categories as $category ) : ?>
									<option value="<?= $category->category_id; ?>"><?= ucwords($category->name); ?></option>
								<?php endforeach; ?>
							</select>
						</div>

						<div class="well" style="padding: 40px;">
							<div class="row">
								<?php foreach($specifications as $key => $value ) :
                							foreach( $value as $new_key => $new_value) :
                				?>
								<div class="col-md-2">
									<input style="margin-right: 10px;" class="i-check"type="checkbox" name="specifications[]" value="<?= strtolower(clean_specification($new_value));?>" /><?= clean_specification($new_value);?>
								</div>
							<?php endforeach; endforeach; ?>
							</div>
						</div>
						<input class="carrito_btn_create col-md-12 col-sm-12 col-xs-12" type="submit"
							   value="Create SubCategory"/>
					<?= form_close(); ?>
					<br/>
					<div class="form_end">
						<a href="<?= base_url('admin'); ?>">Discard Form</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="gap gap-small"></div>

	<?php $this->load->view('landing/resources/footer'); ?>

</div>
<?php $this->load->view('landing/resources/script'); ?>
</body>
</html>