<!DOCTYPE HTML>
<html>
<head>
    <title><?= !isset($title) ? 'Welcome ' : ucwords($title) ?> | <?= lang('app_name'); ?></title>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="utf-8" http-equiv="encoding">
    <meta name="keywords" content="<?= !empty($keywords) ? ucwords($keywords) : ''; ?>"/>
    <meta name="description" content="<?= !empty($description) ? $description : ''; ?>">
    <meta name="robots" content="nofollow,noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Roboto:500,300,700,400italic,400' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>" media="screen">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.css'); ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.png'); ?>" type="image/png">
<style>
    .heading-red{
        color: #ff3434;
        font-weight: bold;
    }

    hr.divider {
        border-color: #49a251;
        height: 3px;
    }

    table {
        border: 1px solid #49a251;
        border-collapse: collapse;
    }
    th,
    td {
        border: 1px solid #49a251;
        font-size: 12px;
        width: 100%;
        padding: 5px;
    }

    td > img {
        width: 20%;
    }

    @media print {
        .invoice {
            font-size: 11px !important;
            overflow: hidden !important
        }

        .invoice footer {
            position: absolute;
            bottom: 10px;
            page-break-after: always
        }

        .invoice > div:last-child {
            page-break-before: always
        }

        a[href]:after {
            visibility: hidden;
        }
    }

</style>
</head>
<body style="background: #fff;">
<div class="global-wrapper clearfix" id="global-wrapper" style="background: #fff;">
    <div class="container">
        <div class="gap-big"></div>
        <div class="row">
            <div id="invoice">
                <div class="col-md-12 col-sm-12 table-responsive">


                    <table align="center" border=0" cellpadding="0" cellspacing="0" width="600"
                           style="border-collapse: collapse;border: 1px solid #cccccc;">

                        <tr>
                            <td align="center" style="padding: 10px 0 10px 0; display: block">
                                <a href="<?= base_url(); ?>">
                                    <img style="width: 40%;" src="<?= base_url('assets/img/onitshamarket-logo.png'); ?>" alt="Onitsha market logo" width="110"
                                                                  height="44"/></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 30px 10px 10px 10px; color: #153643; font-family: Arial, sans-serif; font-size: 13px;">
                                <p>Dear <?= ucwords($profile->first_name) . ' ' . ucwords($profile->last_name); ?>,</p>
                                <p>Thank you for shopping with us. Your order <b><?= $order_code; ?></b> has been placed successfully  here is the
                                    summary of the order:
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 3px 10px 10px 10px; color: #153643; font-family: Arial, sans-serif; font-size: 13px;">
                                <p><b>You ordered for:</b></p>
                                <table cellpadding="0" cellspacing="0" border="0" width="100%"
                                       style="border-collapse: collapse; border: 1px solid #cccccc;">
                                    <thead>
                                    <tr>
                                        <th style="background-color: #f6f6f6; padding-top: 3px; padding-bottom: 3px"></th>
                                        <th style="color: #444444; background-color: #f6f6f6; padding-top: 3px; padding-bottom: 3px; border-left: 1px solid #cccccc;">
                                            ITEM
                                        </th>
                                        <th style="color: #444444; background-color: #f6f6f6; padding-top: 3px; padding-bottom: 3px; border-left: 1px solid #cccccc;">
                                            VARIATION
                                        </th>
                                        <th style="color: #444444; background-color: #f6f6f6; padding-top: 3px; padding-bottom: 3px; border-left: 1px solid #cccccc;">
                                            QUANTITY
                                        </th>
                                        <th style="color: #444444; background-color: #f6f6f6; padding-top: 3px; padding-bottom: 3px; border-left: 1px solid #cccccc;">
                                            PRICE
                                        </th>
                                        <th style="color: #444444; background-color: #f6f6f6; padding-top: 3px; padding-bottom: 3px; border-left: 1px solid #cccccc;">
                                            TOTAL
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $subtotal = $shipping = 0; foreach( $orders as $order ) : ?>
                                        <tr>
                                            <td><img align="center" style="width: 50%" src="<?= PRODUCTS_IMAGE_PATH,$order->image_name; ?>" alt="Onitshamarket"></td>
                                            <td width="80%" align="center"><?= ucwords($order->product_name);?></td>
                                            <td align="center" style="padding: 6px 6px 6px 6px; font-size: 12px"><?= $order->variation; ?></td>
                                            <td align="center" style="padding: 6px 6px 6px 6px; font-size: 12px"><?= $order->qty; ?></td>
                                            <td align="center" style="padding: 6px 6px 6px 6px; font-size: 12px"><?= ngn($order->amount); ?></td>
                                            <td align="center" style="padding: 6px 6px 6px 6px; font-size: 12px"><?= ngn($order->amount  * $order->qty); ?></td>
                                            <?php
                                            $subtotal += $order->amount * $order->qty;
                                            $shipping += $order->delivery_charge;
                                            ?>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">SUBTOTAL</td>
                                        <td colspan="2" style="padding: 6px 6px 6px 6px; font-size: 12px"><?= ngn($subtotal); ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">SHIPPING FEE</td>
                                        <td colspan="2" style="padding: 6px 6px 6px 6px; font-size: 12px"><?= ngn($shipping);?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2">Payment Method</td>
                                        <td colspan="2" style="padding: 6px 6px 6px 6px; font-size: 12px"><?= $ordersingledetail->paymentname;?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td colspan="2" style="font-weight: 800;">GRAND TOTAL</td>
                                        <td colspan="2" style="padding: 6px 6px 6px 6px; font-size: 12px"><?= ngn($subtotal + $shipping);?></td>
                                    </tr>
                                    </tfoot>
                                </table>
                                <br/>
                                <br />
                                <p>If you would like to know more about our services, please also refer to these <a href="<?= lang('shopping_help_url'); ?>" target="_blank">FAQ</a> from our
                                    customers.</p>
                                <p>Happy Shopping!</p>
                                <p><b>Onitshamarket Team</b></p>
                            </td>
                        </tr>

                        <tr>
                            <td style="padding: 30px 10px 10px 10px; color: #153643; font-family: Arial, sans-serif; font-size: 13px;">
                                <p>If you have any questions about this order, please contact us at <b>+234 813 680 3006</b>
                                    Remember to include your reference number - <b><?= $order_code; ?></b> when contacting us.</p>
                                <p><b>Note</b><br>A copy of this invoice has also be sent to the email attached to your account.</p>
                            </td>
                        </tr>

                        <tr style="color: #153643; font-family: Arial, sans-serif; font-size: 12px;">
                            <td style="padding: 10px 10px 10px 10px; border: 1px solid #cccccc;" align="center">
                                <?= lang('company_name'); ?> https://www.onitshamarket.com
                            </td>
                        </tr>

                    </table>

                </div>
            </div>
            <div></div>
        </div>
    </div>

    <script src="<?= base_url('assets/js/jquery.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>

</div>
<script>
    $('#printInvoice').click(function () {
        window.print();
    });
</script>
</body>
</html>

