<?php $this->load->view('landing/resources/head_base'); ?>

<style>
    .panel-bordered-default {
        border: 1px solid #bdcccf;
        color: #696969;
    }

    .panel-bordered-warning {
        border: 1px solid #ffb300;
        color: #ffb300;
    }

    .panel-bordered-danger {
        border: 1px solid #f44336;
        color: #f44336;
    }

    .btn_checkout {
        bottom: 0;
        left: 0;
        position: fixed;
        right: 0;
        z-index: 99;
        background-color: #fff;
        -webkit-box-shadow: 0 0.125rem 0.625rem 0 rgba(0, 0, 0, .2);
        box-shadow: 0 0.125rem 0.625rem 0 rgba(0, 0, 0, .2);
        padding: .625rem;
        text-align: center;
    }

    .box_shadow {
        -webkit-box-shadow: 0 0.25rem 0.5rem 0 rgba(0, 0, 0, .12), 0 0.125rem 0.25rem 0 rgba(0, 0, 0, .08);
        box-shadow: 0 0.25rem 0.5rem 0 rgba(0, 0, 0, .12), 0 0.125rem 0.25rem 0 rgba(0, 0, 0, .08);
    }
</style>
</head>
<body class="cart-row">
<div class="global-wrapper clearfix" id="global-wrapper">
    <?php $this->load->view('landing/resources/mobile/mobile-menu'); ?>

    <div class="container">
        <?php $cart_content = $this->cart->contents();
        if (!empty($cart_content)) : ?>
            <header class="page-header" style="margin: 10px 0 10px 0;">
                <h4 style="margin-bottom:0;">My Cart (<?= $this->cart->total_items(); ?>) Items</h4>
            </header>
            <div class="row">
                <?php $this->load->view('landing/msg_view'); ?>
                <?= form_open('', 'id="cart-form"'); ?>
                <?php $x = 0; $total = 0;
                foreach ($this->cart->contents() as $product): ?>
                    <?php
                    $detail = $this->product->get_cart_details($product['id']);
                    $variation_detail = $this->product->get_variation_status($product['options']['variation_id']);
                    ?>
                    <div class="group-prod"
                         style="background-color: white;margin-bottom:10px;padding:10px;text-align:justify;font-size:12px;">
                        <div class="row">
                            <div class="col-xs-5">
                                <?php echo form_hidden($x . '[rowid]', $product['rowid']); ?>
                                <a href="<?= base_url(urlify($product['name'], $product['id'])); ?>">
                                    <img class="lazy" style="width:130px !important;height:auto !important;"
                                         src="<?= PRODUCTS_IMAGE_PATH . $detail->image; ?>"
                                         alt="<?= $product['name']; ?>"
                                         title="<?= $product['name']; ?>"/>
                                </a></div>
                            <div class="col-xs-7">
                                <div class="col-xs-12" style="font-size: 15px;">
                                    <b><a style="color: #0b6427; text-decoration: none;"
                                            href="<?= base_url(urlify($product['name'], $product['id'])); ?>"><?= word_limiter(htmlentities($product['name']), 7, '...'); ?></a>
                                    </b>
                                </div>
                                <div class="col-xs-12">
                                <span
                                        class="text">Sold By: <?= !empty($detail->store_name) ? $detail->store_name : $detail->name; ?></span>
                                </div>
                                <div class="col-xs-12" style="margin-top:10px;">
                                    <p>Qty Price: <span
                                                style="font-size:14px; font-weight: bolder;"><?php echo ngn($product['subtotal']); ?></span>
                                    </p>
                                    <p>Unit Price: <span
                                                style="font-size:11px; font-weight: bolder;"><?php echo ngn($product['price']); ?></span>
                                        X <?= $product['qty']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php if ($variation_detail->quantity < 1 || in_array($detail->product_status, array('suspended', 'blocked', 'pending')))
                            : ?>
                            <span class="text-center text-semibold text-danger mar-top"
                                  style="margin-top: 10px;"><strong>This product variation is out of stock. or no longer available.</strong></span>
                        <?php else: ?>
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-xs-6">
                                    <ul style="margin-left: -40px;">
                                        <?php $value = ($product['qty'] > $variation_detail->quantity) ? $variation_detail->quantity : $product['qty']; ?>
                                        <li class="product-page-qty-item box_shadow">
                                            <button type="button" data-cid="<?= $product['rowid']; ?>"
                                                    class="product-page-qty product-page-qty-minus">-
                                            </button>
                                            <input data-range="<?= $variation_detail->quantity; ?>" name="quantity"
                                                   id="quan"
                                                   class="product-page-qty product-page-qty-input quantity product-<?= $product['rowid']; ?>"
                                                   type="text"
                                                   value="<?= $value; ?>" disabled/>
                                            <button type="button" data-cid="<?= $product['rowid']; ?>"
                                                    class="product-page-qty product-page-qty-plus">+
                                            </button>
                                        </li>
                                        <span class="text-center text-danger" id="notif_<?= $product['rowid'] ?>"></span>
                                    </ul>
                                </div>
                            </div>
                            <div class="row" style="font-size: 12px;">
                                <?php if ($this->session->userdata('logged_in')):
                                    $favourite = $this->product->is_favourited($this->session->userdata('logged_id'), $product['id']);
                                    if ($favourite) :
                                        ?>
                                        <div class="col-md-6 col-xs-8 col-lg-6">
                                            <a class="btn btn-block btn-default panel-bordered-warning wishlist-cta"
                                               data-pid="<?= $product['id']; ?>"
                                               href="javascript:void(0)"><i class="fa fa-star"></i>Remove From
                                                Wishlist</a>
                                        </div>
                                    <?php else : ?>
                                        <div class="col-md-6 col-xs-8 col-lg-6">
                                            <a class="btn btn-block btn-default panel-bordered-warning wishlist-cta c-hover"
                                               data-pid="<?= $product['id']; ?>"
                                               href="javascript:void(0)"><i class="fa fa-star-o"></i>Add to Wishlist</a>
                                        </div>
                                    <?php endif; ?>
                                <?php else : ?>
                                    <div class="col-md-6 col-xs-6 col-lg-6">
                                        <a class="btn btn-block btn-default panel-bordered-warning c-hover"
                                           href="<?= base_url('login'); ?>"><i
                                                    class="fa fa-star-o"></i>Add to Wishlist</a>
                                    </div>
                                <?php endif; ?>
                                <div class="col-xs-4">
                                    <a style="font-size: 12px;" title="Remove <?= $product['name']; ?> from the cart"
                                       class="btn panel-bordered-danger"
                                       href="<?= base_url('cart/remove/' . $product['rowid']); ?>"><i
                                                class="fa fa-times"></i> Remove
                                    </a>
                                    <?php $total += $product['subtotal']; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php
                    $x++;
                endforeach; ?>
                <button type="submit" style="display: none;"></button>
                <?= form_close(); ?>
                <div class="gap gap-small"></div>
                <div class="col-xs-12">
                    <ul class="shopping-cart-total-list">
                        <li><span>Quantity: </span><span>(<?= $this->cart->total_items(); ?>) items</span>
                        </li>
                        <li><span>Total: </span><span><?= ngn($total); ?></span>
                        </li>
                    </ul>
                    <span class="text-sm text-danger"><strong>Delivery fee not included.</strong></span><br/>
                    <br/>
                    <div class="btn_checkout">
                        <a class="btn btn-primary" href="<?= base_url('checkout/'); ?>" style="width:100%;">Continue to
                            Checkout</a>
                    </div>

                </div>
            </div>
            <a class="btn panel-bordered-default" href="<?= base_url(); ?>" style="width:100%;font-weight: bolder;"><i
                        class="fa fa-shopping-cart"></i> Continue Shopping</a>
        <?php else: ?>
            <div class="custom-fa-cover">
                <img class="img-responsive text-center" style="padding: 10px; margin-top: 10px !important;"
                     src="<?= base_url('assets/img/empty_cart.png') ?>"/>
            </div>
            <div class="text-center">

                <p class="lead custom-text">You haven't fill your shopping cart yet</p>
                <a class="btn btn-primary btn-lg" href="<?= base_url(); ?>">Start Shopping<i
                            class="fa fa-long-arrow-right"></i></a>
            </div>
        <?php endif; ?>


    </div>
    <div class="lds-spinner cst-loader " style="display: none;height:100%;width:100%;">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="gap"></div>
    <!--  Products recently viewed   -->

<?php $this->load->view('landing/resources/mobile/mobile-footer'); ?>
<?php $this->load->view('landing/resources/mobile/mobile-script'); ?>
<script>
    $(function () {
        $('.lazy').lazy();

    });

    function bind_market(src, destination) {
        $(`.${destination}`).html(src);
    }

    let quantity = $('#quan');
    let count = quantity.data('range');
    let plus = $('.product-page-qty-plus');
    let minus = $('.product-page-qty-minus');

    plus.on('click', function () {
        let cid = $(this).data('cid');
        let qty = $(`.product-${cid}`).val() * 1;
        if (quantity.val() > count) {
            plus.prop("disabled", true);
            quantity.val(count);
            $('#notif_' + cid).text(`There are only ${count} item(s) left`);
            return false;
        }
        $('.cst-loader').show();

        plus.prop('disabled', true);
        minus.prop("disabled", false);
        $.ajax({
            url: 'ajax/update_cart_item',
            method: 'POST',
            data: {cid: cid, qty: qty},
            success: function (response) {
                $('.cst-loader').hide();
                if (response) {
                    let x = ($('.cart-read').text() * 1) + 1;
                    notification_message('The Product quantity has been updated.', 'fa fa-info-circle', 'success');
                    bind_market(x, 'cart-read');
                    if (quantity.val() > count) {
                        plus.prop("disabled", true);
                    } else {
                        minus.prop("disabled", false);
                    }
                    $('.cart-row').load(base_url + 'cart');
                }
            },
            error: response => {
                console.log(response);
                if (quantity.val() >= count) {
                    plus.prop("disabled", true);
                } else {
                    plus.prop("disabled", false);
                }
            }
        });
    });

    minus.on('click', function () {
        $('.cst-loader').show();
        let cid = $(this).data('cid');
        let qty = $(`.product-${cid}`).val() * 1;
        minus.prop('disabled', true);
        plus.prop("disabled", false);
        if (quantity.val() <= 1) {
            minus.prop("disabled", true);
        }
        $.ajax({
            url: 'ajax/update_cart_item',
            method: 'POST',
            data: {cid: cid, qty: qty},
            success: function (response) {
                $('.cst-loader').hide();
                if (response) {
                    let x = ($('.cart-read').text() * 1) - 1;
                    notification_message('The Product quantity has been updated.', 'fa fa-info-circle', 'warning');
                    bind_market(x, 'cart-read');
                    if (quantity.val() <= 1) {
                        minus.prop("disabled", true);
                    } else {
                        minus.prop("disabled", false);
                    }
                    $('.cart-row').load(base_url + 'cart');
                    $('.lazy').lazy();
                }
            },
            error: () => {
                if (quantity.val() <= 1) {
                    minus.prop("disabled", true);
                } else {
                    minus.prop("disabled", false);
                }
            }
        });
    });

    quantity.on('input', function () {
        if (quantity.val() > count) {
            quantity.val(count)
        } else if (quantity.val() === '0') {
            quantity.val(1)
        }
    });

    $('.wishlist-cta').on('click', function () {
        let product_id = $(this).data('pid');
        $.ajax({
            url: base_url + 'ajax/favourite',
            method: 'POST',
            data: {
                id: product_id
            },
            success: response => {
                let parsed_response = JSON.parse(response);
                if (parsed_response.action === 'remove') {
                    $('.wishlist-cta').text('Add to Wishlist');
                } else {
                    $('.wishlist-cta').text('Remove from Wishlist');
                }
                notification_message(parsed_response.msg, 'fa fa-info-circle', parsed_response.status);
            },
            error: () => {
                notification_message('Sorry an error occurred please try again. ', 'fa fa-info-circle', 'error');
            }
        })
    });
</script>
</body>
</html>
