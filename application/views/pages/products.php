<main class="main">
<section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="<?php echo base_url();?>">Home</a>
                            <a href="<?php echo base_url();?>products">Shop</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                            <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseTwo">Categories</a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__brand">
                                                <ul>
                                                    						<?php foreach ($categories as $category) : ?>

                                                    <li><a href="<?php echo base_url('products/category/' . $category->slug) ?>">									<?php echo $category->category_name ?>
</a></li>
                                            						<?php endforeach; ?>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                            
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option margin-top-5-des">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p><?php echo "Showing 1-9 " . $total_rows; ?> Results</p>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                     <?php $this->load->view('admin/flash'); ?>

                    <div class="row">
                      <?php foreach($data as   $row){ ?>
                           <div class="col-lg-4 col-md-6 col-sm-6">
                           <a href="<?php echo base_url(); ?>products/<?php echo $row->slug; ?>">
                            <div class="product__item">
                                <!-- <div class="product__item__pic set-bg" data-setbg="">
                                    
                                </div> -->
                                <img src="<?php echo base_url();?>asset/img/<?= $row->product_image ?>" alt="<?= $row->product_name ?>" class="w-100 p-img"/>
                                <div class="product__item__text">
                                    <h6><?= $row->product_name ?></h6>
                                   
                                    <h5>NGN <?= number_format($row->price) ?></h5>
                                 
                                </div>
                            </div>
                               </a>
                        </div>
                        <?php } ?>
                          
                    </div>
                    <div class="empty-product text-left">
                        <?php if($data == null){ ?>
  <?php echo "<p style='font-size:24px;text-align:center' >No Product Available</p>"; ?>                      <?php  } ?>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination">
                            <?php echo $links; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
      
         
             





































