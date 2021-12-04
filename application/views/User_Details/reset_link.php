<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?= $desc; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1462f3">
    <link rel="icon" type="image/png"  href="<?php echo base_url();?>asset/img/dove.jpg">
<link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900&amp;display=swap" rel="stylesheet">
<link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>asset/css/login.css" rel="stylesheet">
<script src="<?php echo base_url();?>asset/js/jquery/jquery-2.2.4.min.js"></script>
<div class="wrapper fadeInDown">
    <header>
    <a href="<?= base_url();?>"><img src="<?php echo base_url();?>asset/img/dove.jpg" alt="Dove  Logo" class="logo mt-2" /></a>
  </header>

  
  <div id="auth_login">
    <div class="container">
        <div class="row">
           
 
    <div class="col-md-12">
            <div class="auth__login">
                <div class="login__heading">
                    <h1 class="heading__title">Forget Password</h1>
                    <!-- <p>Sign in for faster checkout.</p> -->
                </div>
                    
                  <!-- <?php  if($error)
                    {
                        echo '<div class="alert alert-danger timeout" style="" >Invalid Email and Password.<br/> Please try again.</div>';
                    }?> -->
                    
                   <?= form_open();?>
                    <div class="login__form">
                    <?php 
                    $this->load->view('admin/flash'); 
                    ?>
                        <div class="form__body">
                            <div class="form__field ">
                                <label for="auth_email"  <?php if (form_error('email') !=='') { echo 'id="label-error"'; } ?>  class="field__label">E-mail *</label>
                                <input name="email"  <?php if (form_error('email') !=='') { echo 'id="border-danger"'; } ?>  type="email" placeholder="Enter Email Address" value="<?= set_value('email');?>" class="field__input" maxlength="50" autocapitalize="none" autocomplete="email" >
                                      <span class="text-danger"><?php echo form_error('email'); ?></span>

                            </div>
                            <div class="form__actions">
                                <button type="submit" class="actions__cta" name="send">Send Reset link</button>
                            </div>




                        </div>
                </form>
                </div>
                </div>
                </div>
              
            </div>
        </div>
    </div>
  <div id="default_footer">
	<div class="container">
		<div class="footer__wrapper">
			<div class="footer__brand">
			<img src="<?php echo base_url();?>asset/img/dove.jpg" alt="Dove  Logo" class="logo mt-2" />
			</div>
			<div class="footer__aside">
				<div class="aside__wrapper">
						<ul class="aside__legal">
							<li class="legal__item">
								<a href="#" id="popover_trademark-statement" class="legal__link" data-container="body" data-toggle="popover" data-placement="bottom" data-content="All product and company names are trademarks of their respective holders. Use of them does not imply any affiliation with or endorsement or sponsorship by them." data-trigger="hover">Trademark Statement</a>
							</li>
							<li class="legal__item">
								<a href="#" class="legal__link">Privacy Policy</a>
							</li>
							<li class="legal__item">
								<a href="#" class="legal__link">Terms of Use</a>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
  <script>
$(document).ready(function(){
    setTimeout(() => {
        $('.timeout').fadeOut('slow');
    }, 7000);
})

      </script>
  
