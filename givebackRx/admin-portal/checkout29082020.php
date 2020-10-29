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
										<ul class="nav nav-tabs" role="tablist">
											<li class="nav-item">
											  <a class="nav-link active" data-toggle="tab" href="#CD_card">Credit & Debit Card</a>
											</li>
											<li class="nav-item">
											  <a class="nav-link" data-toggle="tab" href="#paypal">Paypal</a>
											</li>
										</ul>
										<div class="tab-content card_filldetail_content">
											<div id="CD_card" class="tab-pane active">
												<div class="profile-field">
													<form>
														<div class="row">
															<div class="form-group col-md-6">
																<label>First Name</label>
																<input type="number" class="form-control" placeholder="">
															</div>
															<div class="form-group col-md-6">
																<label>Last Name</label>
																<input type="email" class="form-control" placeholder="">
															</div>
															<div class="form-group col-md-12">
																<label>Card Number</label>
																<input type="text" class="form-control" placeholder="">
															</div>
															<div class="form-group col-md-6">
																<label>Expiration Date</label>
																<input type="text" class="form-control" placeholder="">
															</div>
															<div class="form-group col-md-6">
																<label>CVV</label>
																<input type="text" class="form-control" placeholder="XXX">
															</div>
														</div>
													</form>
												</div>
											</div>
											
											<div id="paypal" class="tab-pane">
												Paypal
											</div>
										</div>
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
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php require_once 'footer.php'; ?>