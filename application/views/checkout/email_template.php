<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Email Invoice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        @media only screen and (max-width: 960px) {
            .container {
                width: 600px;
            }
        }

        @media only screen and (max-width: 600px) {
            .container {
                width: 100%;
            }

            .invoice-left {
                width: 100%;
            }

            .invoice-right {
                width: 100%;
            }

            .total-price {
                padding-right: 10px;
            }
        }
    </style>
</head>

<body style="margin: 0; padding: 0;">
    <table width="100%" border="0" cellpadding="0" cellspacing="0"
        style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">
        <tr>
            <td>
                <!-- // START CONTAINER -->
                <table class="container" width="600px" align="center" border="0" cellpadding="0" cellspacing="0"
                    style="background-color: #ffffff;">
                    <tr>
                        <td>
                            <h4>Dear <?= $cus_details['fullname'];?>,</h4>
                            
                            <p>Thank you for Order here below is the list of items being ordered for</p>
                            <br/>
                          
                            <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0"
                                style="background-color: #ffffff;">
                                <tr>
                                    <td>
                                        <img src="<?php echo base_url();?>asset/img/dove.jpg" alt="DoveMultinational logo" style="width:120px;">
                                    </td>
                                    <td align="right">
                                        <p style="font-size: 32px; color: #888888;">Invoice</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table width="100%" border="0" cellpadding="0" cellspacing="0"
                                style="background-color: #fafafa;">
                                <tr>
                                    <td>
                                        <table class="invoice-left" width="50%" align="left" border="0" cellpadding="0"
                                            cellspacing="0" style="padding-top: 10px; padding-left: 20px;">
                                            <tr>
                                                <td>
                                                    <p
                                                        style="margin: 0; font-size: 10px; text-transform: uppercase; color: #666666;">
                                                        BILLED TO</p>
                                                    <p style="margin: 0; font-size: 12px;"><?= $cus_details['fullname'];?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border: 1px #ffffff solid">
                                                    <p
                                                        style="margin-bottom: 0; font-size: 10px; text-transform: uppercase; color: #666666;">
                                                        INVOICE
                                                        DATE</p>
                                                    <p style="margin-top: 0; font-size: 12px;">14 Feb 2020</p>
                                                </td>
                                                <td align="center" style="border: 1px #ffffff solid">
                                                    <p
                                                        style="margin-bottom: 0; font-size: 10px; text-transform: uppercase; color: #666666;">
                                                        Address</p>
                                                    <p style="margin-top: 0; font-size: 12px;"><?= $cus_details['address'];?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p
                                                        style="margin-bottom: 0; font-size: 10px; text-transform: uppercase; color: #666666;">
                                                        ORDER ID</p>
                                                    <p style="margin-top: 0; font-size: 12px;">MNMEGDR5F</p>
                                                </td>
                                                <td align="center">
                                                    <p
                                                        style="margin-bottom: 0; font-size: 10px; text-transform: uppercase; color: #666666;">
                                                       Phone Number.</p>
                                                    <p style="margin-top: 0; font-size: 12px;"><?= $cus_details['phone'];?></p>
                                                </td>
                                            </tr>
                                        </table>
                                     
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 30px;">
                            <table class="apple-services" border="0" cellpadding="0" cellspacing="0">
                                <p style="padding: 7px; font-size: 14px; font-weight: 500; background-color: #fafafa;">
                                    Products
                                </p>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-left: 20px;">
                            
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="padding: 0 0 15px;">
                                <tr>
                                    <td>
                                                                        <?php foreach ($cart as $items){ ?>
                                        <table align="left" border="0" cellpadding="0" cellspacing="0">
                                            <tr>


                                                <td>
                                                    <img src="<?php echo base_url();?>asset/img/<?php echo $items['options']['pro_image']?>" alt="<?php echo $items['name']?>" style="width:100px;">
                                                </td>
                                                <td align="left" style="padding-left: 20px;">
                                                    <p
                                                        style="margin: 0; font-size: 12px; font-weight: 600; color: #333333;">
                                                        <?php echo $items['name']?>
                                                    </p>
                                                    <div style="display:flex;margin-top:6px">
                                                    <p style="margin: 0; font-size: 12px; color: #666666;">Qty: 
                                                       <?php echo $items['qty']?></p> | <p style="margin: 0px; font-size: 12px; font-weight: 600;color: #333333;">₦ <?php echo number_format($items['price'])?>
                                                    </div>
                                                    
                                                </td>
                                             
                                            </tr>
                                        </table>
                                           <?php } ?>
                                      
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                
                    <tr>
                        <td>
                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="right">
                                        <table border="0" cellpadding="0" cellspacing="0"
                                            style="border-top: 1px solid #eeeeee; border-bottom: 1px solid #eeeeee;">
                                            <tr>
                                                <td width="70%" align="right" style="border-right: 1px solid #eeeeee;">
                                                    <p
                                                        style="padding-right: 35px; font-size: 10px; text-transform: uppercase; color: #666666;">
                                                        TOTAL</p>
                                                </td>
                                                <td width="10%">
                                                    <p class="total-price"
                                                        style="padding-left: 80px; font-size: 12px; font-weight: 600;">₦ <?php echo number_format($this->cart->total());?></p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                  
                    <tr>
                        <td>
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="padding-top: 5px;">
                                <tr>
                                    <td align="center">
                                        <img src="<?php echo base_url();?>asset/img/dove.jpg" alt="DoveMultinational logo" style="width:120px;">
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <table align="center">
                                            <tr>
                                             
                                                <td>
                                                    <p style="font-size: 12px; color: #666666;"><a href="#"
                                                            style="text-decoration: none; color: #007eff;">Terms of
                                                            Sale</a></p>
                                                </td>
                                                <td>
                                                    <p style="font-size: 12px; color: #666666;"><a href="#"
                                                            style="text-decoration: none; color: #007eff;">Privacy
                                                            Policy </a></p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td align="center">
                                                    <p style="margin-bottom: 0; font-size: 12px; color: #666666;">
                                                        Copyright © 2021 DoveMultinational investment Nigeria
                                                        <br> <a href="#"
                                                            style="text-decoration: none; color: #007eff;">All
                                                            rights reserved</a></p>
                                                    <p style="margin-top: 0; font-size: 12px; color: #666666;">Wohem Avenue beside Irewolede estate off ilawe road Ado Ekiti state 
                                                    Reg no: RC1795662
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!-- END CONTAINER \\ -->
    </td>
    </tr>
    </table>
</body>

</html>