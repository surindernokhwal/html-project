<?php require_once 'header.php'; ?>
			<div class="right-content-outer">
				<div class="panel-topheading">
					<h1>FAQ</h1>
				</div>
				<div class="get-help-heading text-center">
					<h1>How can we help?</h1>
					<div class="input-group">
						<div class="input-group-prepend">
						  <div class="input-group-text"><img src="../assets/images/ic_search.png" width="24" alt=""></div>
						</div>
						<input type="text" class="form-control" placeholder="Search the knowledge base">
					</div>
				</div>
				<div class="profile-outer faq-wrapper">
					<div class="profile-left-tab">
						<h4 class="faq-right-heading">I am a</h4>
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
							  <a class="nav-link active" data-toggle="tab" href="#customer">Customer</a>
							  <label class="custom-switch">
								  <input type="checkbox">
								  <span class="slider round"></span>
							  </label>
							</li>
							<li class="nav-item">
							  <a class="nav-link" data-toggle="tab" href="#pharmacy">Pharmacy</a>
							  <label class="custom-switch">
								  <input type="checkbox" checked>
								  <span class="slider round"></span>
							  </label>
							</li>
							<li class="nav-item">
							  <a class="nav-link" data-toggle="tab" href="#charity">Charity</a>
							  <label class="custom-switch">
								  <input type="checkbox">
								  <span class="slider round"></span>
							  </label>
							</li>
						</ul>
					</div>

					<div class="tab-content porfile-right-content">
						<div id="customer" class="tab-pane active">
							<h4 class="faq-right-heading">FAQ's</h4>
							<div class="shadow-block mt-0 py-3">
								<div id="accordion" class="accordion custom-accortion">
									<div class="card mb-0">
										<div class="card-header collapsed" data-toggle="collapse" href="#collapse01">
											<a class="card-title"> How do I change my Password? </a>
										</div>
										<div id="collapse01" class="card-body collapse" data-parent="#accordion">
											<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
										</div>
										<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse02">
											<a class="card-title">How do I sign Up? </a>
										</div>
										<div id="collapse02" class="card-body collapse" data-parent="#accordion">
											<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor. </p>
										</div>
										<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse03">
											<a class="card-title"> Can I remove favourite medicines? </a>
										</div>
										<div id="collapse03" class="card-body collapse" data-parent="#accordion">
											<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
										</div>
										<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse04">
											<a class="card-title"> How do cards work? </a>
										</div>
										<div id="collapse04" class="card-body collapse" data-parent="#accordion">
											<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</p>
										</div>
									</div>
								</div>
							</div>
							<h4 class="faq-right-heading mt-5">Did not find what you need?</h4>
							<div class="shadow-block mt-0 py-3">
								<textarea class="form-control border-0" rows="5" type="text" placeholder="Submit Help desk request here..."></textarea>
							</div>
						</div>
						
						<div id="pharmacy" class="tab-pane">
							<h4 class="faq-right-heading">FAQ's</h4>
						</div>
						
						<div id="charity" class="tab-pane">
							<h4 class="faq-right-heading">FAQ's</h4>
						</div>
					</div>
				</div>
			</div>
<?php require_once 'footer.php'; ?>