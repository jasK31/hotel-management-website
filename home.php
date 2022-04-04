<header class="masthead">

	<div class="container h-100">
		<div class="row h-100 ">
			<div class="col-lg-8 mb-4">


				<div class="container-fluid">
					<form action="index.php?page=list" id="filter" method="POST" onSubmit='return test1()'>

						<div class="col-md-12 restaurant-details">
							<div class="mt-5">
								<div class="row">
									<div class="col-lg-5 ">
										<input type="text" id="checkinDate" class="form-control datepicker  m-4" name="date_in" autocomplete="off" placeholder="Checkin-date">
									</div>
									<div class="col-lg-5">
										<input type="text" id="checkoutDate" class="form-control datepicker  m-4" id="exampleFormControlInput1" name="date_out" autocomplete="off" placeholder="Checkout-date">
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<select class="btn  btn-light w-100 m-4" id="rooms">
											<option value="0">No of rooms</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3">
										<select class="btn  btn-light w-100 m-4" id="adults">
											<option value="0">Adults</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
										</select>
									</div>
									<div class="col-lg-3 m-4">
										<select class="btn  btn-light w-100" id="children">
											<option value="0">Children</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
										</select>
									</div>
								</div>

								<button class="btn btn-secondary m-4">Check Availability</button>
							</div>

						</div>
					</form>

				</div>
			</div>


			<div class="col-lg-4">
				<form action="index.php?page=list" id="filter" method="POST">
					<div class="col-md-2">
						<div class="mt-2">
							<div class="restaurant-details" style="width: 25rem;">
								<div class="card-body">
									<p class="card-text">
										Address: Sector 35, Chandigarh,India
										<br><br>Email: punjabi.haveli@gmail.com
										<br><br>Contact No. +91-98765-43210
										
									</p>
								</div>
							</div>
						</div>

					</div>
				</form>


			</div>
		</div>

	</div>
	</div>
</header>