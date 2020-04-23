<div class="bout">
    <div class="container py-5">
        <div class="row text-center text-white">
            <div class="col-lg-8 mx-auto">
                <h1 class="display-4" style="font-family: candara;">Team Page</h1>
            </div>
        </div>
    </div><!-- End -->


    <div class="container1">
        <div class="row text-center px-5 m-2">

            <!-- Team item -->
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="assets/said.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Said Muhammad Firdaus</h5><medium class="text-muted">said.mfirdaus@gmail.com</medium>
                    
                </div>
            </div><!-- End -->

            <!-- Team item -->
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="assets/Muchlis.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Muchlis Ramadhan Usman</h5><medium class="text-muted">muchlisusman99@gmail.com</medium>
                    
                </div>
            </div><!-- End -->

            <!-- Team item -->
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="assets/Rafi.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">M. Al Rafi Bhadrika</h5><medium class="text-muted">garudarafi99@gmail.com</medium>
                    
                </div>
            </div><!-- End -->
        </div>

        <div class="row text-center px-5 m-2 ">
            <div class="col-xl-4 col-sm-6 mb-5 ">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="assets/Adrian.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Adrian Putra Perdana</h5><medium class="text-muted">stoneradrian27@gmail.com</medium>
                    
                </div>
            </div><!-- End -->
            <!-- Team item -->
            <div class="col-xl-4 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="assets/Aurora.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">Aurora Stepinit Sazafi</h5><medium class="text-muted">aurorast16@yahoo.com</medium>
                    
                </div>
            </div><!-- End -->
            


        </div>
            <div class="brightness-box" style="margin: auto">
            <i class="far fa-sun"></i>
            <input type="range" id="range" min="10" max="100" value="100">
            <i class="fas fa-sun"></i>
            </div>
            <script>
                rangeInput = document.getElementById('range');
                container = document.getElementsByClassName('bout')[0];

                rangeInput.addEventListener("change",function(){
                    container.style.filter = "brightness(" + rangeInput.value + "%)";
                });
            </script>
    </div>
</div>
