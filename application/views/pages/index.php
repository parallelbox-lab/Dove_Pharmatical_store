
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('<?= base_url();?>asset/img/marcel-scholte-LPurJnihmQI-unsplash.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Dove Multinational  Investment Limited</h1>
              <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Dove Multinational is making it easier and more affordable for every hospital, clinics and medical practice to have the very best equipment, supplies and service.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('<?= base_url();?>asset/img/Pharm-baby.png');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">
            <div class="col-md-6 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
              <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Modern Achieve Your Desired Perfect Smile</h1>
              <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            </div>
          </div>
        </div>
      </div>
    </section>



	
 <!-- Featured Starts Here -->
    <div class="featured-items spad">
      <div class="container">
               <?php if($data !== Null) { ?>
            <div class="product-cat">
                <div class="text-dark text-left">
                    <h3 style="font-weight:900">Featurd Products</h3>
                </div>
                <div class="text-dark text-left">
                    <p style="font-weight:900"><a href="<?= base_url();?>products">View All</a></p>
                </div>
            </div>
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel owl-theme">
                <?php foreach($data as $row) { ?>
              <a href="<?php echo base_url(); ?>products/<?php echo $row->slug; ?>">
                <div class="featured-item">
                  <img src="<?php echo base_url();?>asset/img/<?= $row->product_image ?>" alt="Item 1">
                  <h4><?php echo word_limiter($row->product_name , 4, '...'); ?></h4>
                  <h6>NGN <?= $row->price; ?></h6>
                </div>
              </a>
            <?php } ?>
            </div>
          </div>
        </div>
        <?php } ?>
               <?php if($data == Null){ ?>
       <?php echo "<p style='font-size:24px;text-align:center' >No Product Available</p>"; ?>
 <?php } ?>

      </div>
    </div>
    
<div class="product-cats spad">
    <div class="container">
         <div class="product-header">
                <h2>Shop By Category</h2>
            </div>
        <div class="rows">
           
            <div class="product-body-c">
                <a href="<?= base_url();?>products/category/Novel-Medical-Equipment">
                    <div class="product-body">
                        <img src="<?= base_url();?>asset/img/7082293.png" class="" alt="Medical Equipments"/>
                        <h4>Medical Equipments</h4>
                    </div>
                </a>
                  <a href="<?= base_url();?>products/category/Novel-teaching-equipment">
                    <div class="product-body">
                        <img src="<?= base_url();?>asset/img/580px-Q16917-hospital.svg.png" class="" alt="Novel Teaching Equipment
"/>
                        <h4>Teaching Equipments
</h4>
                    </div>
                </a>
                  <a href="<?= base_url();?>products/category/Novel-hospital-equipment">
                    <div class="product-body">
                        <img src="<? base_url();?>asset/img/icons8-equipment-64.png" class="" alt="hospital Equipments image"/>
                        <h4>Hospital Equipments</h4>
                    </div>
                </a>
                  <a href="<?= base_url();?>products/category/Laboratory-reagents-and-Hospital%20consumables">
                    <div class="product-body">
                        <img src="<?= base_url();?>asset/img/5383212.png" class="" alt="Medical Equipments"/>
                        <h4>Hospital Consumables</h4>
                    </div>
                </a>
                
            </div>
        </div>
    </div>
</div>
<div class="about-area section-padding2" id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-10">
                <div class="about-caption mb-50">
                    <!-- Section Tittle -->
                    <div class="section-tittle section-tittle2 mb-35">
                        <span>About Us</span>
                        <h2>A Wealth Of Experience To Heal And Help You</h2>
                    </div>
                    <p>
                    Dove Multinational Invesment Limited (RC1795662) is a wholly Nigerian firm engaging in sales of Medical Euqipments, Pharmaceuticals, Laboratory, hospital equipments, and consultancy. We commenced business in 2021 as a Multinational Investment
<span id="dots">...</span><span id="more"> limited in Nigeria. Our head office is located at Abuja and another branch in Ado Ekiti. Our Main Aim is to Provide Affordable Equipments and offer Medical Advisory Services  </span></p>
                   <div class="text-left"> <a onclick="readMore()" class="btn read-more text-white" id="myBtn">Read more</a></div>


                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <!-- about-img -->
                <div class="about-img ">
                    <div class="about-font-img d-none d-lg-block">
                        <img src="<?php echo base_url();?>asset/img/photo-1593086586351-1673fca190cf.jpg" alt="">
                    </div>
                    <div class="about-back-img ">

                        <img src="<?php echo base_url();?>asset/img/all_equipments.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of About us section -->
<!-- Beginning of Our services -->
<div class="department_area section-padding2">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center mb-100">
                    <span>Our Departments</span>
                    <h2>Our Medical Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="depart_ment_tab mb-30 mt-5">
                    <!-- Tabs Buttons -->
                    <ul class="nav" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                <i class="flaticon-teeth"></i>
                                <h4>Novel Medical Equipments</h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                <i class="flaticon-cardiovascular"></i>
                                <h4>Novel Teaching Equipment</h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                <i class="flaticon-ear"></i>
                                <h4>Novel Hospital Equipment</h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Astrology-tab" data-toggle="tab" href="#Astrology" role="tab" aria-controls="contact" aria-selected="false">
                                <i class="zmdi zmdi-bone"></i>
                                <h4>Equipment supply,installation and Maintenance</h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Neuroanatomy-tab" data-toggle="tab" href="#Neuroanatomy" role="tab" aria-controls="contact" aria-selected="false">
                                <i class="flaticon-lung"></i>
                                <h4>Advisory Services</h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Blood-tab" data-toggle="tab" href="#Blood" role="tab" aria-controls="contact" aria-selected="false">
                                <i class="flaticon-cell"></i>
                                <h4>Sales of Pharamaceuticals</h4>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="dept_main_info white-bg">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <!-- single_content  -->
                    <div class="row align-items-center no-gutters">
                        <div class="col-lg-12">
                            <div class="dept_info">
                                <h3>Novel Medical Equipments</h3>
                                <p>The devices or machines that are used in medical surgeries called as Medical Equipments. It is also known as armamentarium. They are used to diagnose certain diseases. Treatment equipment includes infusion pumps, medical lasers and LASIK surgical machines. Medical laboratory equipment automates or helps analyze blood, urine, genes, and dissolved gases in the blood. .
                                </p>
                                
                                <!--             <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a> -->
                            </div>
                        </div>
                        
                    </div>
                    <!-- single_content  -->
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <!-- single_content  -->
                    <div class="row align-items-center no-gutters">
                        <div class="col-lg-12">
                            <div class="dept_info">
                                <h3>Novel Teaching Equipment</h3>
                                <p> A novel teaching method composed of Self-study, Test, Question and Discussion (STQD) sessions uses self-, peer-, co-learning, active learning, inductive teaching, and formative assessment to promote student-centered teaching in pharmacy education. STQD has been implemented within courses focusing on instrumental analysis and analytical chemistry. In a four-year study, qualitative and quantitative approaches were used to evaluate the effectiveness of STQD in facilitating students’ learning
                                </p>
                                <!--             <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a> -->
                            </div>
                        </div>
                       
                    </div>
                    <!-- single_content  -->
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <!-- single_content  -->
                    <div class="row align-items-center no-gutters">
                        <div class="col-lg-12">
                            <div class="dept_info">
                                <h3>Dentist with surgical mask holding <br> scaler near patient</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                                </p>
                                <!--             <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a> -->
                            </div>
                        </div>
                      
                    </div>
                    <!-- single_content  -->
                </div>
                <div class="tab-pane fade" id="Astrology" role="tabpanel" aria-labelledby="Astrology-tab">
                    <!-- single_content  -->
                    <div class="row align-items-center no-gutters">
                        <div class="col-lg-12">
                            <div class="dept_info">
                                <h3>Dentist with surgical mask holding <br> scaler near patient</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                                </p>
                                <!--             <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a> -->
                            </div>
                        </div>
                       
                    </div>
                    <!-- single_content  -->
                </div>
                <div class="tab-pane fade" id="Neuroanatomy" role="tabpanel" aria-labelledby="Neuroanatomy-tab">
                    <!-- single_content  -->
                    <div class="row align-items-center no-gutters">
                        <div class="col-lg-12">
                            <div class="dept_info">
                                <h3>Dentist with surgical mask holding <br> scaler near patient</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                                </p>
                                <!--             <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a> -->
                            </div>
                        </div>
                     
                    </div>
                    <!-- single_content  -->
                </div>
                <div class="tab-pane fade" id="Blood" role="tabpanel" aria-labelledby="Blood-tab">
                    <!-- single_content  -->
                    <div class="row align-items-center no-gutters">
                        <div class="col-lg-12">
                            <div class="dept_info">
                                <h3>Dentist with surgical mask holding <br> scaler near patient</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                                </p>
                                <!--             <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a> -->
                            </div>
                        </div>
                        
                    </div>
                    <!-- single_content  -->
                </div>
                <div class="text-center mt-5 pt-2 p-4">
                    <a href="<?= base_url();?>services" class="btn btn-services">View All Our Services </a>
                </div>
            </div>
        </div>

    </div>
</div>
