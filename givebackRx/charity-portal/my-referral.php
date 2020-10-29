<?php require_once 'header.php'; ?>
			<div class="right-content-outer">
				<div class="panel-topheading referral-top">
					<div class="referral-count">
						<p>Total Referral Sent</p>
						<h5>02</h5>
					</div>
					<div class="referral-count">
						<p>Total Accepted</p>
						<h5>05</h5>
					</div>
					<div class="referral-count">
						<p>Total Pending</p>
						<h5>03</h5>
					</div>
				</div>
				
				<div class="panner-tab-wrapper">
					<div class="tab-btn">
						<select class="form-control">
						  <option>All</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select>
					</div>
					<div class="right-search">
						<div class="input-group">
							<div class="input-group-prepend">
							  <div class="input-group-text"><img src="../assets/images/ic_search.png" width="30" alt=""></div>
							</div>
							<input type="text" class="form-control pl-0" placeholder="Search by name">
						</div>
					</div>
				</div>
				
				<div class="referral-table-wrapper">
					<table class="table table-custom">
					  <thead>
						<tr>
						  <th style="text-align:center;">#</th>
						  <th>Name</th>
						  <th>Email</th>
						  <th>Phone Number</th>
						  <th>Referred by</th>
						  <th>Refferal Sent On</th>
						  <th>Status</th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						  <td align="center">1</td>
						  <td>Travis Garrett</td>
						  <td>travis.loma@gmail.com</td>
						  <td>+1 562 111 111</td>
						  <td>Email</td>
						  <td>31 May, 2020</td>
						  <td>
							<button type="button" class="common-btn accepted-btn">Accepted</button>
						  </td>
						</tr>
						<tr>
						  <td align="center">2</td>
						  <td>Corey Glover</td>
						  <td>corey.loma@gmail.com</td>
						  <td>+1 562 111 111</td>
						  <td>Email</td>
						  <td>31 May, 2020</td>
						  <td>
							<button type="button" class="common-btn resend-btn">Pending</button>
							<button type="button" class="common-btn">Pending</button>
						  </td>
						</tr>
						<tr>
						  <td align="center">3</td>
						  <td>Darrell Christensen</td>
						  <td>darrell.loma@gmail.com</td>
						  <td>+1 562 111 111</td>
						  <td>Email</td>
						  <td>31 May, 2020</td>
						  <td>
							<button type="button" class="common-btn accepted-btn">Accepted</button>
						  </td>
						</tr>
						<tr>
						  <td align="center">4</td>
						  <td>Austin Ramirez</td>
						  <td>austin.loma@gmail.com</td>
						  <td>+1 562 111 111</td>
						  <td>Email</td>
						  <td>31 May, 2020</td>
						  <td>
							<button type="button" class="common-btn resend-btn">Pending</button>
							<button type="button" class="common-btn">Pending</button>
						  </td>
						</tr>
					  </tbody>
					</table>
				</div>
			</div>
<?php require_once 'footer.php'; ?>