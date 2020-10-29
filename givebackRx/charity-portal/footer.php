		</div>
	</div>
	
	<!-- Add Task Modal -->
	<div class="modal common-popup fade" id="editcharity-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header pb-0">
			<h5 class="modal-title" id="exampleModalLabel">Edit Charity</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<div class="get-started-form charity_signup_form py-0">
				<form>
				  <div class="row">
					<div class="col-md-12 text-left">
					  <h5 class="form_section_heading mt-0">Charity Signee Information</h5>
				    </div>
				    <div class="form-group col-md-6 text-left my-3">
					  <label>First Name</label>
					   <input type="text" class="form-control" placeholder="Enter First Name">
				    </div>
					<div class="form-group col-md-6 text-left my-3">
					  <label>Last Name</label>
					   <input type="text" class="form-control" placeholder="Enter Last Name">
				    </div>
					<div class="form-group col-md-6 text-left my-3">
					  <label>Phone Number</label>
					   <input type="text" class="form-control" placeholder="Enter Phone Number">
				    </div>
					<div class="form-group col-md-6 text-left my-3">
					  <label>Email</label>
					   <input type="text" class="form-control" placeholder="Enter Email">
				    </div>
					<div class="form-group col-md-12 text-left my-3">
					  <label>Organizational Role</label>
					   <input type="text" class="form-control" placeholder="Enter Organizational Role">
				    </div>
					<div class="col-md-12 text-left ">
					  <h5 class="form_section_heading">Charity Information</h5>
				    </div>
				    <div class="form-group col-md-6 text-left my-3">
					  <label>Company Name</label>
					   <input type="text" class="form-control" placeholder="Company Name">
				    </div>
					<div class="form-group col-md-6 text-left my-3">
					  <label>Charity Address</label>
					   <input type="text" class="form-control" placeholder="Charity Address">
				    </div>
					<div class="form-group col-md-6 text-left my-3">
					  <label>Address to which checks should be made</label>
					   <input type="text" class="form-control" placeholder="Address">
					   <span class="loaction-icon"><img src="assets/images/ic_pin.png" alt="" width="20"></span>
					</div>
					<div class="form-group col-md-6 text-left my-3">
					  <label>Charity Main Phone Number</label>
					   <input type="text" class="form-control" placeholder="Enter Here">
				    </div>	
					<div class="form-group col-md-6 text-left my-3">
					  <label>Charity Points of Contact Name</label>
					   <input type="text" class="form-control" placeholder="Enter Here">
				    </div>	
					<div class="form-group col-sm-6 text-left my-3">
					  <label>Charity Points of Contact Number</label>
					   <input type="text" class="form-control" placeholder="Enter Here">
				    </div>
					<div class="form-group col-md-6 text-left my-3">
					  <label>Website URL</label>
					   <input type="text" class="form-control" placeholder="Enter Here">
				    </div>
					<div class="form-group col-md-6 text-left my-3">
					  <label>Federal ID Number</label>
					   <input type="text" class="form-control" placeholder="Enter Here">
				    </div>
					<div class="form-group col-md-6 text-left my-3">
					  <label>501(c)(3) Status</label>
					   <select class="form-control">
						  <option>Status</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select>
				    </div>
					<div class="form-group col-md-6 text-left my-3">
					  <label>Indicate all categories your charity falls under</label>
					  <select class="form-control">
						  <option>Category Name</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
					  </select>
				    </div>
					<div class="form-group col-md-12 text-left my-3">
					  <label>Preferred Payment Method</label>
					   <select class="form-control">
						  <option>Paypal</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select>
				    </div>
					<div class="form-group col-md-12 text-left my-3 d-none">
					  <label></label>
					   <input type="text" class="form-control" placeholder="Enter here...">
				    </div>
					<div class="form-group col-md-6 text-left my-3">
					  <label class="file_label">Upload Company Logo</label>
					  <div class="custom-file">
						<input type="file" class="custom-file-input">
						<label class="custom-file-label"></label>
					  </div>
					  <div class="uploaded_imgshow">
						<img src="../assets/panel-img/placeholder_01.jpg">
					  </div>
				    </div>
					<div class="form-group col-md-6 text-left my-3">
					  <label class="file_label">Additional picture that represent your charity</label>
					  <div class="custom-file">
						<input type="file" class="custom-file-input">
						<label class="custom-file-label"></label>
					  </div>
					  <div class="uploaded_imgshow">
						<img src="../assets/panel-img/placeholder_01.jpg">
					  </div>
				    </div>
					<div class="form-group col-md-12 text-left my-3">
					  <label>Short description of your charity</label>
					   <textarea type="text" class="form-control" rows="3" placeholder="Enter Here"></textarea>
				    </div>
				  </div>
				  <button type="submit" class="btn custom_btn red_btn my-4">Upate Changes</button>
				</form>
			</div>
		  </div>
		</div>
	  </div>
	</div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--script src="../assets/js/jquery-3.5.1.slim.min.js"></script-->
	<script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.pin.min.js"></script>
    <script src="../assets/js/owl.carousel.js"></script>
    <script src="../assets/js/customowl.js"></script>
	
	
  </body>
</html>