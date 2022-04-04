<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end mb-4" style="background: #0000002e;">
                <h1 class="text-uppercase text-white font-weight-bold">Booking Successful</h1>
                <hr class="divider my-4" />
            </div>

        </div>
    </div>
</header>

<section class="page-section">
    <div class="container ">
        <h3>
            <ul>
                <li> Username - <?php echo $_GET['name']; ?></li>
                <li>Contact - <?php echo $_GET['contact']; ?></li>
                <li>Check-in-Date - <?php echo $_GET['date_in']; ?></li>
                <li>Check-in-Time - <?php echo $_GET['date_in_time']; ?></li>
                <li>Days-of-Stay - <?php echo $_GET['days']; ?></li>

            </ul>
        </h3>
        <br>
        <p class="text-center">Booking confirmation will be sent to your Contact Number shortly </p>
    </div>
</section>