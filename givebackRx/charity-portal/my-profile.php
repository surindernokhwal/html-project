<?php require_once 'header.php'; ?>
			<div class="right-content-outer">
				<div class="panel-topheading">
					<h1>My Profile</h1>
				</div>
				
				<div class="profile-outer">
					<div class="profile-left-tab">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
							  <a class="nav-link active" data-toggle="tab" href="#account">Account</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" data-toggle="tab" href="#change_password">Change Password</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" data-toggle="tab" href="#notification_prefrences">Notification Prefrences</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" data-toggle="tab" href="#security">Security</a>
							</li>
						</ul>
					</div>

					<div class="tab-content porfile-right-content">
						<div id="account" class="tab-pane active">
							<div class="shadow-block mt-0">
								<h4>Account <button class="btn custom_btn red_btn" type="button">Edit</button></h4>
								<div class="profile-img">
									<div class="account-img">
										<img src="../assets/images/ic_img_4.png" alt="">
										<div class="custom-input-file">
											<input type="file">
											<i class="fas fa-pencil-alt"></i>
										</div>
									</div>
									<div class="account-detail">
										<h3>Travis Garrett</h3>
										<p>travis-lomo@gmail.com</p>
									</div>
								</div>
								<div class="profile-field mt-4">
									<form>
										<div class="row">
											<div class="form-group col-md-6">
												<label>First Name <span class="text-danger">*</span></label>
												<input type="text" class="form-control" placeholder="First Name">
											</div>
											<div class="form-group col-md-6">
												<label>Last Name <span class="text-danger">*</span></label>
												<input type="text" class="form-control" placeholder="Last Name">
											</div>
											<div class="form-group col-md-6">
												<label>Cell Number <span class="text-danger">*</span></label>
												<input type="number" class="form-control" placeholder="+1 562 111 111">
											</div>
											<div class="form-group col-md-6 edit_icon_common">
												<label>Secondary Email <span class="text-danger">*</span></label>
												<input type="email" class="form-control" placeholder="donine.lomo@gmail.com">
												<span data-toggle="modal" data-target="#addemail-popup"><i class="fas fa-pencil-alt"></i></span>
											</div>
											<div class="form-group col-md-6 edit_icon_common">
												<label>Secondary Cell Number <span class="text-danger">*</span></label>
												<input type="number" class="form-control" placeholder="+1 562 222 222">
												<span data-toggle="modal" data-target="#addcellnb-popup"><i class="fas fa-pencil-alt"></i></span>
											</div>
											<div class="form-group col-md-6">
												<label>Address <span class="text-danger">*</span></label>
												<input type="number" class="form-control" placeholder="882 Abdiel Harbors">
											</div>
											<div class="form-group col-md-6">
												<label>City <span class="text-danger">*</span></label>
												<input type="text" class="form-control" placeholder="Los Angeles">
											</div>
											<div class="form-group col-md-6">
												<label>Postal Code <span class="text-danger">*</span></label>
												<input type="number" class="form-control" placeholder="152116">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						
						<div id="change_password" class="tab-pane fade">
							<div class="shadow-block mt-0">
								<h4>Change Password</h4>
								<div class="profile-field mt-4">
									<form>
										<div class="row">
											<div class="form-group col-md-12">
												<label>Current Password <span class="text-danger">*</span></label>
												<input type="password" class="form-control" placeholder="xxxxxxxxxxx">
											</div>
											<div class="form-group col-md-12">
												<label>New Password <span class="text-danger">*</span></label>
												<input type="password" class="form-control" placeholder="xxxxxxxxxxx">
											</div>
											<div class="form-group col-md-12">
												<label>Confirm Password <span class="text-danger">*</span></label>
												<input type="password" class="form-control" placeholder="xxxxxxxxxxx">
											</div>
											<div class="col-md-12 text-center mt-4">
												<button class="btn custom_btn reset_btn" type="button">Reset Password</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						
						<div id="notification_prefrences" class="tab-pane fade">
							<div class="shadow-block mt-0">
								<h4>Notification Prefrences</h4>
								<div class="profile-field mt-4">
									<form>
										<div class="row">
											<div class="form-group col-md-12">
												<label>Coupon Weekly Reminder</label>
												<label class="custom-switch">
												  <input type="checkbox">
												  <span class="slider round"></span>
												</label>
											</div>
											<div class="form-group col-md-12">
												<label>News Update Reminder</label>
												<label class="custom-switch">
												  <input type="checkbox" checked>
												  <span class="slider round"></span>
												</label>
											</div>
											<div class="form-group col-md-12">
												<label>Promotions Reminder</label>
												<label class="custom-switch">
												  <input type="checkbox" checked>
												  <span class="slider round"></span>
												</label>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						
						<div id="security" class="tab-pane fade">
							<div class="shadow-block mt-0">
								<h4>Security</h4>
								<div class="profile-field mt-4">
									<form>
										<div class="row">
											<div class="form-group col-md-12">
												<label>Setup Tow - Factor Authentication</label>
												<label class="custom-switch">
												  <input type="checkbox">
												  <span class="slider round"></span>
												</label>
											</div>
											<div class="form-group col-md-12 pl-5 ml-5">
												<p>OR</p>
											</div>
											<div class="form-group col-md-12">
												<label>Setup 6 digit PIN to Log In.</label>
												<label class="custom-switch">
												  <input type="checkbox" checked>
												  <span class="slider round"></span>
												</label>
											</div>
											<div class="form-group col-md-12 otp_new_plugin">
												<div class="pin_field" data-pin id="pin"></div><br>
												<p class="message"></p>
											</div>
											<div class="col-md-12 text-center mt-3">
												<p class="text-left mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
												<button class="btn custom_btn reset_btn" type="button">Update Security</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php require_once 'footer.php'; ?>