<?php require_once 'header.php'; ?>
			<div class="right-content-outer">
				<div class="row">
					<div class="col-sm-12">
						<div class="panel-topheading">
							<h1><a class="backtopage" href=""><img src="../assets/panel-img/back.png" alt="" width="24"></a> Checkout</h1>
						</div>
						
						<div class="row">
							<div class="col-lg-8">
								<div class="checkout_block shadow-block">
									<h4>Home <a href="delivery-address.php" class="recent_addressbtn">Select Address</a></h4>
									<p>114 Kerluke Parks Suite 149, Kuwait</p>
									<p>+91 09877714789</p>
								</div>
								<div class="choose_payment_method shadow-block">
									<h4>Choose Payment Method</h4>
									<div class="card_filldetail">
										<div class="profile-field">
											<form>
												<div class="row">
													<div class="form-group col-md-6">
														<label>First Name</label>
														<input type="text" class="form-control" placeholder="First Name">
													</div>
													<div class="form-group col-md-6">
														<label>Last Name</label>
														<input type="email" class="form-control" placeholder="Last Name">
													</div>
													<div class="form-group col-md-12 payment_card_number">
														<label>Enter Card Number</label>
														<input type="number" class="form-control" placeholder="xxxx-xxxx-xxxx-xxxx">
														<img class="payment_cardimg" src="../assets/images/visa_card.png" alt="">
													</div>
													<div class="form-group col-6">
														<label>Expiration Date</label>
														<div class="card_dateselect">
															<select class="form-control">
															  <option selected>MM</option>
															  <option>01</option>
															  <option>02</option>
															  <option>03</option>
															  <option>04</option>
															  <option>05</option>
															  <option>06</option>
															  <option>07</option>
															  <option>08</option>
															  <option>09</option>
															  <option>10</option>
															  <option>11</option>
															  <option>12</option>
															</select>
															<select class="form-control">
															  <option selected>YYYY</option>
															  <option>2021</option>
															  <option>2022</option>
															  <option>2023</option>
															  <option>2024</option>
															  <option>2025</option>
															</select>
														</div>
													</div>
													<div class="form-group col-6">
														<label>CVV</label>
														<input type="number" class="form-control" placeholder="XXX">
													</div>
													<div class="col-md-12">
													    <div class="form-check form-check-inline">
														  <input class="form-check-input mr-2" type="checkbox">
														  <label class="form-check-label">Save card for future payments.</label>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="choose_payment_method shadow-block">
									<h4 class="mb-4">Saved Cards</h4>
									<div class="added_card_list">
										<ul>
											<li><input type="radio" name="card_list"> <img src="../assets/images/sbi_logo.png" alt=""> State Bank of India <span class="added_card_number">45xx-xxxx-xxxx-5478</span></li>
											<li><input type="radio" name="card_list"> <img src="../assets/images/hdfc_logo.png" alt=""> HDFC Bank <span class="added_card_number">98xx-xxxx-xxxx-4627</span></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="order_summary">
									<div class="order_summary_total shadow-block mt-0">
										<h6>Our Summary</h6>
										<p>Sibtotal <span>$50</span></p>
										<p>Shopping <span>$5</span></p>
										<p>Estimate Tax <span>$5</span></p>
										<p>Discount <span>-$20</span></p>
										<p class="total_price"><b>Final Total</b><span><b>$40</b></span></p>
										<button class="btn custom_btn red_btn w-100 mt-4" type="button">Pay $40</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php require_once 'footer.php'; ?>