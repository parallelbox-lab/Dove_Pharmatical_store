






<section class="appoint-container" >
    <div class="container">
        <div class="row">
            <div class="col-md-7" style="margin-bottom:60px">
                <div class="card p-4">
                <div id="success_msg" class="alert alert-success" style="display: none;">Message Sent. Please Check your mail later to get our response</div>
                        <div id="error_msg" class="alert alert-danger" style="display: none;">Sorry, Message Not Sent. Try again later.</div>
                        <div id="error_message"></div>
                    <h3 class="text-center b-4">Request Appointment with Pharm. Kayode Fasuba</h3>
                    <form class="mt-4" method="POST" id="appoinment_form">
                     
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" id="datepicker" name="datepicker" class="form-control in-md" placeholder="Date of Visit">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input type="time" id="time" name="time" class="form-control in-md" placeholder="Select time">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder="Enter Your Name" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <select name="prefix" id="prefix" class="form-control">
                            <option value="+234">+234</option>
                        </select>
                            </div>
                            <input type="number" id="phone" name="phone" placeholder="Mobile Number" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" id="email" name="email" placeholder="Enter Email ID" class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">@example.com</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <select name="gender" id="gender" class="form-control">
                              <option value>-- Select Gender --</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                          </select>
                                </div>
                            </div>
                           
                        </div>
                        <div class="form-group">
                            <textarea name="description" id="" class="form-control" placeholder="Purpose of Appoinment" style="resize:none;"></textarea>
                        </div>
                        <button class="btn appoinment-btn">Submit Appoinment <img src="<?php echo base_url();?>asset/img/msg_loader.gif" class="img-responsive msg-loader" style="width: 40px; height: 40px;display:none;" alt="loader"></button>
                    </form>
                </div>
            </div>
            <div class="col-md-5">

                <div class="p-4 mb-3 card bg-white">
                    <p class="mb-0 font-weight-bold">Address</p>
                    <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

                    <p class="mb-0 font-weight-bold">Phone</p>
                    <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

                    <p class="mb-0 font-weight-bold">Email Address</p>
                    <p class="mb-0"><a href="#">youremail@domain.com</a></p>

                </div>

                <div class="p-4 mb-3 bg-white">
                    <h3 class="h5 text-black mb-3">More Info</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.</p>
                    <p><a href="#" class="btn btn-primary px-4 py-2 text-white">Get In Touch</a></p>
                </div>

            </div>
        </div>
</section>