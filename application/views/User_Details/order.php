<section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Orders</h4>
                        <div class="breadcrumb__links">
                            <a href="https://dovemultinationalinvnig.org/">Home</a>
                            <a href="https://dovemultinationalinvnig.org/my-orders">My Orders</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
<!-- Profile section -->
<section class="bgwhite p-t-55 p-b-65">
    <div class="container">
        <div class="row">
            <?php if($order_products !== null){ ?>
                
            
         

            <div class="col p-b-50">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Product Name</th>
                        <th>Preview</th>
                        <th>qty</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($order_products as $order_product) :?>
                    <tr>
                        <td> <?php echo $order_product->order_id ;?></td>
                        <td><?php echo $order_product->product_name;?> </td>
                        <td>
                            <div class="cart-img-product b-rad-4 o-f-hidden">
                                <img src="<?php echo base_url()?>asset/img/<?=($order_product->product_img)?>" style="width:100%;">
                            </div>
                        </td>
                        <td><?php echo $order_product->qty;?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php } ?>
            <?php if($order_products == null){ ?>
<div class="col spad">
<div class="user-card">
    <div class="profile-sec" style="">
        <img src="https://dovemultinationalinvnig.org/asset/img/cart.svg" class="mb-4">
        <h4 class="mb-4">You have placed no orders yet!
</h4>All your orders will be saved here for you to access their state anytime.<p></p>
<a href="https://dovemultinationalinvnig.org/products" class="order-btn" style="background-color: #006bae;
    border: none;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    color: #fff;
    display: inline-block;
    font-size: 1rem;
    font-weight: 700;
    letter-spacing: .125px;
    line-height: 24px;
    padding: 15px 60px;
    position: relative;
    text-transform: uppercase;
    height: 55px;
    border-radius: 30px;
    -webkit-transition: none;
    -o-transition: none;
    transition: none;">Continue shopping</a>
    </div>

</div>
</div>
<?php } ?>
        </div>
    </div>

</section>