<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <link rel="icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/1.png" type="image/x-icon">
    <title>Multikart | Email template </title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <script>
    $(document).ready( function() {
        $('.header-title').each( function() {
            var title = $(this).text();
            console.log(title);
            if(title == 'Order Delivery Status Icons'){
                $(this).parent().parent().parent().hide();
            }
            if(title == 'Home Page Style'){
                $(this).parent().parent().parent().hide();
            }
        })
        
    
    })
</script>

    <style type="text/css">
        body {
            text-align: center;
            margin: 0 auto;
            width: 650px;
            font-family: 'Open Sans', sans-serif;
            background-color: #e2e2e2;
            display: block;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        li {
            display: inline-block;
            text-decoration: unset;
        }

        a {
            text-decoration: none;
        }

        p {
            margin: 15px 0;
        }

        h5 {
            color: #444;
            text-align: left;
            font-weight: 400;
        }

        .text-center {
            text-align: center
        }

        .main-bg-light {
            background-color: #fafafa;
        }

        .title {
            color: #444444;
            font-size: 22px;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 10px;
            padding-bottom: 0;
            text-transform: uppercase;
            display: inline-block;
            line-height: 1;
        }

        table {
            margin-top: 30px
        }

        table.top-0 {
            margin-top: 0;
        }

        table.order-detail {
            border: 1px solid #ddd;
            border-collapse: collapse;
        }

        table.order-detail tr:nth-child(even) {
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
        }

        table.order-detail tr:nth-child(odd) {
            border-bottom: 1px solid #ddd;
        }

        .pad-left-right-space {
            border: unset !important;
        }

        .pad-left-right-space td {
            padding: 5px 15px;
        }

        .pad-left-right-space td p {
            margin: 0;
        }

        .pad-left-right-space td b {
            font-size: 15px;
            font-family: 'Roboto', sans-serif;
        }

        .order-detail th {
            font-size: 16px;
            padding: 15px;
            text-align: center;
            background: #fafafa;
        }

        .footer-social-icon tr td img {
            margin-left: 5px;
            margin-right: 5px;
        }
    </style>
</head>

<body style="margin: 20px auto;">
    <table align="center" border="0" cellpadding="0" cellspacing="0" style="padding: 0 30px;background-color: #fff; -webkit-box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);width: 100%;">
        <tbody>
            <tr>
                <td>
                    <table align="left" border="0" cellpadding="0" cellspacing="0" style="text-align: left;" width="100%">
                        <tr>
                            <td style="text-align: center;">
                                <img src="../assets/images/email-temp/delivery-2.png" alt="" style="margin-bottom: 30px;">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style="font-size: 14px;"><b>Hi {{$mailData['customer_name']}},</b></p>
                                <p style="font-size: 14px;">Order Is Successfully Processsed And Your Order Is On The
                                    Way,</p>
                                <!-- <p style="font-size: 14px;">Transaction ID : 267676GHERT105467,</p> -->
                            </td>
                        </tr>
                    </table>
                    <table cellpadding="0" cellspacing="0" border="0" align="left" style="width: 100%;margin-top: 10px;    margin-bottom: 10px;">
                        <tbody>
                            <tr>
                                <td style="background-color: #fafafa;border: 1px solid #ddd;padding: 15px;letter-spacing: 0.3px;width: 50%;">
                                    <h5 style="font-size: 16px; font-weight: 600;color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;">
                                        Your Shipping Address</h5>
                                    <p style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">
                                        {{$mailData['user_address']['address']}}, <br>{{$mailData['user_address']['state']}}, {{$mailData['user_address']['country']}}
                                        {{$mailData['user_address']['pincode']}}</p>
                                </td>
                                <td><img src="../assets/images/email-temp/space.jpg" alt=" " height="25" width="30">
                                </td>
                                <!-- <td style="background-color: #fafafa;border: 1px solid #ddd;padding: 15px;letter-spacing: 0.3px;width: 50%;">
                                    <h5 style="font-size: 16px;font-weight: 600;color: #000; line-height: 16px; padding-bottom: 13px; border-bottom: 1px solid #e6e8eb; letter-spacing: -0.65px; margin-top:0; margin-bottom: 13px;">
                                        Your Billing Address:</h5>
                                    <p style="text-align: left;font-weight: normal; font-size: 14px; color: #000000;line-height: 21px;    margin-top: 0;">
                                        268 Cambridge Lane New Albany,<br> IN 47150268 Cambridge Lane <br>New Albany, IN
                                        47150</p>
                                </td> -->
                            </tr>
                        </tbody>
                    </table>
                    @foreach($mailData['cartData']['products'] as $product)
                        <h4>Vendor: {{$product['vendor']['name']}}</h4>
                        <table class="order-detail" border="0" cellpadding="0" cellspacing="0" align="left" style="width: 100%;    margin-bottom: 50px;">
                            <tr align="left">
                                <th>PRODUCT</th>
                                <th style="padding-left: 15px;">DESCRIPTION</th>
                                <th>QUANTITY</th>
                                <th>PRICE </th>
                            </tr>
                                @php
                                    $total_products = 0;
                                @endphp
                                @foreach($product['vendor_products'] as $vendor_product)
                                    <tr>
                                        <td>
                                            <img src="{{$vendor_product['product']['media'][0]['image']['path']['image_fit']}}100/100{{$vendor_product['product']['media'][0]['image']['path']['image_path']}}" alt="" width="80">
                                        </td>
                                        <td valign="top" style="padding-left: 15px;">
                                            <h5 style="margin-top: 15px;">{{$vendor_product['product']['translation_one']['title']}}</h5>
                                        </td>
                                        <td valign="top" style="padding-left: 15px;">
                                            <h5 style="font-size: 14px; color:#444;margin-top: 10px;">QTY : <span>{{$vendor_product['quantity']}}</span></h5>
                                        </td>
                                        <td valign="top" style="padding-left: 15px;">
                                            <h5 style="font-size: 14px; color:#444;margin-top:15px"><b>${{$vendor_product['pvariant']['price']}}</b></h5>
                                            @php
                                                $total_products += $vendor_product['pvariant']['price'];
                                            @endphp
                                        </td>
                                    </tr>
                                @endforeach
                            <tr class="pad-left-right-space ">
                                <td class="m-t-5" colspan="2" align="left">
                                    <p style="font-size: 14px;">Subtotal : </p>
                                </td>
                                <td class="m-t-5" colspan="2" align="right">
                                    <b style>${{$total_products}}</b>
                                </td>
                            </tr>
                            <tr class="pad-left-right-space">
                                <td colspan="2" align="left">
                                    <p style="font-size: 14px;">TAX :</p>
                                </td>
                                <td colspan="2" align="right">
                                    <b>${{$product['taxable_amount']}}</b>
                                </td>
                            </tr>
                            <tr class="pad-left-right-space">
                                <td colspan="2" align="left">
                                    <p style="font-size: 14px;">SHIPPING Charge :</p>
                                </td>
                                <td colspan="2" align="right">
                                    <b>${{$product['delivery_fee_charges']}}</b>
                                </td>
                            </tr>
                            <tr class="pad-left-right-space">
                                <td colspan="2" align="left">
                                    <p style="font-size: 14px;">Discount :</p>
                                </td>
                                <td colspan="2" align="right">
                                    <b> ${{$product['discount_amount']}}</b>
                                </td>
                            </tr>
                            <tr class="pad-left-right-space ">
                                <td class="m-b-5" colspan="2" align="left">
                                    <p style="font-size: 14px;">Total :</p>
                                </td>
                                <td class="m-b-5" colspan="2" align="right">
                                    <b>${{$product['payable_amount']}}</b>
                                </td>
                            </tr>
                        </table>
                    @endforeach
                </td>
            </tr>
        </tbody>
    </table>
    <table class="main-bg-light text-center top-0" align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td style="padding: 30px;">
                <div>
                    <h4 class="title" style="margin:0;text-align: center;">Follow us</h4>
                </div>
                <table border="0" cellpadding="0" cellspacing="0" class="footer-social-icon" align="center" class="text-center" style="margin-top:20px;">
                    <tr>
                        <td>
                            <a href="#"><img src="../assets/images/email-temp/facebook.png" alt=""></a>
                        </td>
                        <td>
                            <a href="#"><img src="../assets/images/email-temp/youtube.png" alt=""></a>
                        </td>
                        <td>
                            <a href="#"><img src="../assets/images/email-temp/twitter.png" alt=""></a>
                        </td>
                        <td>
                            <a href="#"><img src="../assets/images/email-temp/gplus.png" alt=""></a>
                        </td>
                        <td>
                            <a href="#"><img src="../assets/images/email-temp/linkedin.png" alt=""></a>
                        </td>
                        <td>
                            <a href="#"><img src="../assets/images/email-temp/pinterest.png" alt=""></a>
                        </td>
                    </tr>
                </table>
                <div style="border-top: 1px solid #ddd; margin: 20px auto 0;"></div>
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 20px auto 0;">
                    <tr>
                        <td>
                            <a href="#" style="font-size:13px">Want to change how you receive these emails?</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="font-size:13px; margin:0;">2018 - 19 Copy Right by Themeforest powerd by Pixel
                                Strap</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#" style="font-size:13px; margin:0;text-decoration: underline;">Unsubscribe</a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>