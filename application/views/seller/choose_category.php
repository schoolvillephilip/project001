<?php $this->load->view('seller/templates/meta_tags'); ?>
</head>
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">

        <!--NAVBAR-->
        <!--===================================================-->
        <?php $this->load->view('seller/templates/head_navbar'); ?>
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">

                <div id="page-head">
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">Product</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->
                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="demo-pli-home"></i></a></li>
                        <li><a href="#">Product</a></li>
                        <li class="active">Choose a category</li>
                    </ol>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End breadcrumb-->
                </div>
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">

					    <div class="row">
                            <div class="panel">
                                <?php $this->load->view('msg_view'); ?>
                                <div class="col-lg-12">
                                    <div class="panel panel-body text-center">
                                        <div class="panel-heading">
                                            <h3>Select A Product Category</h3>
                                            <h5 class="text-semibold">Please select the appropriate categories and sub categories for the product.</h5>
                                        </div>
                                        <div class="panel-body">
                                            <?= form_open(); ?>

                                            <div class="row category-section">
                                                <div class="col-md-12" style="margin-bottom: 20px;">
                                                    <h5 style="color: #232323; float: left">Select Category</h5>
                                                    <select class="rootcat form-control" name="rootcategory" required>
                                                        <option value=""> -- Please select the root category --</option>
                                                        <?php foreach ($root_categories->result() as $root ): ?>
                                                            <option value="<?= $root->root_category_id; ?>"><?= $root->name; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>

<!--                                                <div class="col-md-12" style="margin-bottom: 20px;">-->
<!--                                                    <h5 style="color: #232323;">Select Category</h5>-->
<!--                                                    <select class="subcat form-control" name="category" required></select>-->
<!--                                                </div>-->
<!---->
<!--                                                <div class="col-md-12" style="margin-bottom: 20px;">-->
<!--                                                    <h5 style="color: #232323;">Select Sub Category</h5>-->
<!--                                                    <select class="cat form-control" name="subcategory" required></select>-->
<!--                                                </div>-->
                                            </div>
                                            <button class="btn btn-primary btn-block" style="margin-top: 40px;">Submit</button>
                                            <?= form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->



            <!--ASIDE-->
            <!--===================================================-->
            <?php $this->load->view('seller/templates/aside_menu'); ?>
            <!--===================================================-->
            <!--END ASIDE-->


            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <?php $this->load->view('seller/templates/menu'); ?>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->

        </div>


        <!-- FOOTER -->
        <!--===================================================-->
        <?php $this->load->view('seller/templates/footer'); ?>
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->
    <!--JAVASCRIPT-->
    <!--=================================================-->


    <?php $this->load->view('seller/templates/scripts'); ?>
    <script type="text/javascript"> let csrf_token = '<?= $this->security->get_csrf_hash(); ?>';</script>

    <script>

        // $(document).ready(function () {
        //     $('.rootcat, .subcat, .cat').select2();
        // });

        $('.rootcat').change(function ($x) {
        	$('.n-append').remove();
            $(".subcat").empty();
            $(".cat").empty();
            let id = $(this).val();
            $.ajax({
                method: "POST",
                url: base_url + 'seller/product/append_category',
                data: { id: id,'csrf_carrito':csrf_token },
                dataType: 'json'
            }).done(function( msg ) {

            	$('.category-section').append(`
					<div class="col-md-12 n-append" style="margin-bottom: 20px;">
            		<select class="cat form-control n-cat" required></select>

					</select>
					</div>
            	`);

            	$.each(msg, function (i	) {
					$('.n-cat').append("<option value=" +msg[i].category_id+ ">" +msg[i].name+ "</option>")
				});
				
            });
        });

        $('.subcat').change(function ($x) {
            let id = $(this).val();
            $.ajax({
                method: "POST",
                url: base_url + 'seller/product/append_sub_category',
                data: { id: id,'csrf_carrito':csrf_token },
                dataType: 'json'
            }).done(function( msg ) {
                $(".cat").append("<option>-- Please select a sub category --</option>");
                $(msg).each(function(i){
                    $(".cat").append("<option value=" +msg[i].sub_category_id+ ">" +msg[i].name+ "</option>")
                });
            });
        });

    </script>

</body>
</html>
