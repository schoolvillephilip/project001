<?php $this->load->view('landing/resources/head_base'); ?>
<style>
    .custom-card {
        background: #fff;
        padding-top: 8px;
        padding-bottom: 8px;
        margin-bottom: 2px;
        -webkit-box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1);
        box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1)
    }

    .product-price > span {
        float: right;
        padding: 10px;
        background: #c9ffd3;
        color: #55a455;
        font-weight: 600;
        font-size: 15px;
    }

    .block-title {
        color: #468c46;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        font-size: 13px;
    }

    .block-title > span {
        float: right;
        color: #2e2e2e;
    }

    .mobile-menu {
        font-family: "Open Sans", cursive;
        font-weight: 600;

    }

    .mobile-menu > div > p {
        margin: 0;
    }

    .text-break {
        margin-bottom: -6px;
        padding-top: 8px;
        padding-bottom: 8px;
        color: #000;
        font-weight: 500
    }

    .menu-bg {
        background: #fff;
        padding: 8px 5px 13px;
        -webkit-box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1);
        box-shadow: 0px 5px 5px 0px rgba(176, 177, 193, 0.1)
    }

    .menu-bg-text {
        position: relative;
        top: 2px;
        left: 10px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        font-size: 20px;
        font-weight: 500;
        color: #222;
    }

    .text-break {
        margin-bottom: -6px;
        padding-top: 8px;
        padding-bottom: 8px;
        color: #000;
        font-weight: 500
    }

    .form-text {
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        font-size: 14px;
        color: #222;
    }

    .form-control {
        margin-top: -5px;
        background: #f2f2f2;
        box-shadow: 0 0 0;
        border: 1px solid #ebebeb;
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .form-override {
        outline: none;
        border: none !important;
        -webkit-box-shadow: none !important;
        -moz-box-shadow: none !important;
        box-shadow: none !important;
    }

    .submit-btn {
        margin-bottom: 5px;
        background: #3d8c4d;
        color: #fff;
        padding: 13px;
    }

    .submit-btn:hover, .submit-btn:focus {
        color: #fff;
    }
</style>
<body style="background: #efefef">
<div>
    <div class="menu-bg mobile-menu">
        <div style="margin-left: 10px; margin-right: 10px;">
            <a style="text-decoration: none"
               href="<?= $url; ?>"><p><span
                            class="filter_close_btn"> <img src="<?= base_url('assets/svg/left-arrow.svg'); ?>"
                                                           alt="Back button"
                                                           style="height: 14px; width: 14px; margin-right: 8px; margin-bottom: 2px;"></span>
            </a>
            <span class="menu-bg-text">Write A Review</span>
            </p>
        </div>
    </div>
    <div class="container"><p class="text-break" style="">Rate This Product</p></div>
    <div class="custom-card">
        <div class="container">
            <p class="block-title" style="color: #888"><i class="fa fa-info-circle" aria-hidden="true"></i> Click on a
                star to rate</p>
            <div id="starr-rating-active" style="margin-left: -3px;">
                <div class='starrr' id='star1'></div>
            </div>
            <div class="rating-text" style="position: relative; left: 30px; bottom: 20px; margin-bottom: -10px;"></div>
        </div>
    </div>
    <div class="container"><p class="text-break" style="">Write A Review</p></div>
    <div class="custom-card">
        <div class="container">
            <?= form_open(); ?>
            <p class="form-text">Title of review *</p>
            <input type="text" class="form-control" name="title" required
                   placeholder="Title of review"/>
            <p class="form-text" style="margin-top: 6px;">Display name </p>
            <input type="text" name="display_name" class="form-control "
                   value="<?= !is_null($profile) ? (!empty( $profile->display_name)) ? $profile->display_name :  $profile->first_name . ' ' . $profile->last_name : 'Display Name'; ?>"
            />
            <p class="form-text" style="margin-top: 6px;">Review *</p>
            <textarea required name="content" class="form-control form-override" rows="8" style="margin-bottom: 10px;"
                      placeholder="Your Review"></textarea>
            <button type="submit" class="btn btn-block submit-btn">
                Submit Review
            </button>
            <?= form_close(); ?>
        </div>
    </div>


</body>
<script>
    let product_id = <?= $id;?>;
    let user = <?= !is_null($profile) ? $profile->id : "''"; ?>
</script>
<script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
<script src="<?= base_url('assets/js/mobile.js'); ?>"></script>
<script src="<?= base_url('assets/js/rating.js'); ?>"></script>
</html>
