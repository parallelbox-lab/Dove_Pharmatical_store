<div class="page-wrapper">
<div class="col">

                   <section class="spad" style="margin-top:20px;">   
                       <div class="container">  
                           <br/>                   
<h4 class="mb-4">Personal Information</h4>
<?php $this->load->view('admin/flash'); ?>
                                            <form id="personalInformation" method="post" action="<?php echo base_url();?>dashboard/edit-profile">
                                          
    
                                                <div class="form-group">
                                                    <label for="fullName" <?php if (form_error('fullname') !=='') { echo 'style="color:red"'; } ?>>Fullname</label>
                                                    <input type="text"  <?php if (form_error('fullname') !=='') { echo 'id="border-danger"'; } ?>  name="fullname" value="<?php echo set_value('fullname');if(set_value('fullname')==''){echo $account['fullname'];} ?>" class="form-control" required="" placeholder="Full Name">
                                                     <span class="text-danger"><?php echo form_error('fullname'); ?></span>
                                                </div>
                                          
                                              
                                                <div class="form-group">
                                                    <label for="emailID" <?php if (form_error('email') !=='') { echo 'style="color:red"'; } ?> >Email Address</label>
                                                    <input type="email"   readonly  name="email" value="<?php echo set_value('email');if(set_value('email')==''){echo $account['email'];} ?>" class="custom-select"  required="" placeholder="Email Address">
                                                     <span class="text-danger"><?php echo form_error('email'); ?></span>
                                                </div>
                                                
                                                  <div class="form-group">
                                                    <label for="phone" <?php if (form_error('phone') !=='') { echo 'style="color:red"'; } ?> >Phone number</label>
                                                    <input type="number"    name="phone" value="<?php echo set_value('phone');if(set_value('phone')==''){echo $account['phone'];} ?>" class="custom-select"  required="" placeholder="Email Address">
                                                     <span class="text-danger"><?php echo form_error('phone'); ?></span>
                                                </div>
                                                <div class="form-group">
                                                <button class="bt custom-select" type="submit" style="background:green;color:#fff;">Update personal details</button>
 
                                                </div>
                                              
                                                                                                    <br/>
                                                                                            </form>
                                                
                                                                                    </div>
                                            </div>
                                            </section>
                                            </div>