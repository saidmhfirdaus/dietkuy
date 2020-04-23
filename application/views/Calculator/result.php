<!DOCTYPE html>
    <html>
    <style>
    body {
        background: -webkit-linear-gradient(to right, #e8cbc0, #636fa4);
        background: linear-gradient(to right, #e8cbc0, #636fa4);
        min-height: 100vh;
    }
    
    .social-link {
        width: 30px;
        height: 30px;
        border: 1px solid #ddd;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #666;
        border-radius: 50%;
        transition: all 0.3s;
        font-size: 0.9rem;
    }
    
    .social-link:hover, .social-link:focus {
        background: #ddd;
        text-decoration: none;
        color: #555;
    }
    </style>

<div class="container py-5">
    <div class="row text-center text-white">
        <div class="col-lg-8 mx-auto">
            <h1 class="display-4" style="font-family: candara;">Calories Calculator</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="jumbotron jumbotron-fluid" style="border-radius: 15px">
        <div class="container">
            <h1 class="text-center display-5">Calculation Result</h1>
            <br>
            <div class="lead text-center" style="font-weight: bold;">Your BMR is...</div>
            <div style="font-size: 45px; text-align: center; color: blue; font-weight: 500;"><?php  echo  $result; ?></div>
            <div class="lead text-center">This is the MINIMUM calorie amount per day to make your body organs can work properly. However...</div>
            <br>
            <br>
            <div class="lead text-center" style="font-weight: bold;">Your daily calorie needs are...</div>
            <div style="font-size: 50px; text-align: center; color: blue; font-weight: 500;"><?php  echo  $finalresult; ?></div>
            <div class="lead text-center">This is the TOTAL calories you need for your daily activities.</div>
        </div>
        <div class="col-sm text-center" style="padding-top: 50px;">
            <a type="submit" class="btn btn-primary" href="<?= base_url(); ?>Calculator">Calculate Again!</a>
        </div>
    </div>
</div>