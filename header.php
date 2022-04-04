 		<meta charset="utf-8" />
 		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
 		<meta name="description" content="" />
 		<meta name="author" content="" />
 		<title>JASHANJIT SINGH PHP</title>
 		<!-- Favicon-->
 		<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
 		<!-- Font Awesome icons (free version)-->
 		<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
 		<!-- Google fonts-->
 		<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
 		<link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
 		<!-- Third party plugin CSS-->
 		<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
 		<!-- Core theme CSS (includes Bootstrap)-->
 		<link href="admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
 		<link href="css/styles.css" rel="stylesheet" />

 		<script src="admin/assets/vendor/jquery/jquery.min.js"></script>
 		<script src="admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
 		<script>
 			function test1() {
 				var checkinDate = document.getElementById('checkinDate').value;
 				var checkoutDate = document.getElementById('checkoutDate').value;

 				if (!checkinDate || !checkoutDate) {
 					alert('Please Select the dates for booking');
 					return false;
 				}

 				var d_ci = new Date(checkinDate);
 				var d_co = new Date(checkoutDate);

 				var adults = parseInt(document.getElementById('adults').value);


 				if (d_ci.getTime() > d_co.getTime()) {
 					alert('Check In date cannot be greater than checkout date');
 					return false;
 				}

 				if (adults === 0) {
 					alert('Atleast 1 adult must be selected');
 					return false;
 				}

 				var rooms = parseInt(document.getElementsById('rooms').value);
 				if (rooms === 0) {
 					alert('Atleast 1 room must be selected');
 					return false;
 				}

 				return true;

 			}



 			function bookingDetailsValidation() {
 				var name = document.getElementById('booking-name').value;
 				if (!name) {
 					alert('Name cannot be empty');
 					return false;
 				}

 				var contact = document.getElementById('booking-contact').value;
 				if (!contact) {
 					alert('Contact cannot be empty');
 					return false;
 				}

 				return true;
 			}
 		</script>