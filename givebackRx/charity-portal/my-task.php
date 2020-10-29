<?php require_once 'header.php'; ?>
			<div class="right-content-outer">
				<div class="panel-topheading">
					<h1>My Task</h1>
				</div>
				<div class="panner-tab-wrapper">
					<div class="tab-btn">
						<button class="btn custom_btn grey_btn active" type="button">Active</button>
						<button class="btn custom_btn grey_btn" type="button">Completed</button>
						<button class="btn custom_btn grey_btn" type="button">Overdue</button>
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
				
				<div class="row">
					<div class="col-lg-6">
						<div class="shadow-block task-block">
							<h4><span>Task Name Task Name Task Name Task Name Task Name</span>  <button type="button" class="mark_complete-btn" data-toggle="modal" data-target="#addtask-popup">Mark As Complete</button></h4>
							<h6>Assigned on: 03 May, 2020</h6>
							<h6 class="red_color">Due on: 20 May, 2020</h6>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="shadow-block task-block">
							<h4>Task Name <button type="button" class="mark_complete-btn">Mark As Complete</button></h4>
							<h6>Assigned on: 03 May, 2020</h6>
							<h6 class="red_color">Due on: 20 May, 2020</h6>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="shadow-block task-block">
							<h4>Task Name <button type="button" class="mark_complete-btn">Mark As Complete</button></h4>
							<h6>Assigned on: 03 May, 2020</h6>
							<h6 class="red_color">Due on: 20 May, 2020</h6>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
						</div>
					</div>
				</div>
			</div>
<?php require_once 'footer.php'; ?>