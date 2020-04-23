<div class="container py-5">
    <div class="row text-center text-white">
        <div class="col-lg-8 mx-auto">
            <h1 class="display-4" style="font-family: candara;">Calories Calculator</h1>
        </div>
    </div>
</div>

<div class="container">

<form method="post" action="<?php echo site_url('Calculator/CalCalculate');?>">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label"v>Age</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Usia" name="Usia" placeholder="Age">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Weight (kg)</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="BeratBadan" name="BeratBadan" placeholder="Weight">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Height (cm)</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="TinggiBadan" name="TinggiBadan" placeholder="Height">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Sex</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="kelamin" id="Pria" value="Pria" checked>
          <label class="form-check-label">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="kelamin" id="Wanita" value="Wanita">
          <label class="form-check-label">
            Female
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-2">Aktivity</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="aktivitas" id="Sedentari" value="Sedentari" checked>
        <label class="form-check-label" for="gridRadios1"> Sedentary (little or no exercise) </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="aktivitas" id="Ringan" value="Ringan">
          <label class="form-check-label" for="gridRadios1"> Light (Exercise 1-2 times/week)</label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="aktivitas" id="Sedang" value="Sedang">
          <label class="form-check-label" for="gridRadios1"> Normal (Exercise 3-4 times/week) </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="aktivitas" id="Berat" value="Berat">
          <label class="form-check-label" for="gridRadios1"> Heavy (Exercise 5-6 times/week) </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="aktivitas" id="SangatBerat" value="SangatBerat">
          <label class="form-check-label" for="gridRadios1"> Intense (Exercise 7 times/week) </label>
      </div>
        </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10 text-center">
      <button type="submit" class="btn btn-primary" >Calculate</button>
    </div>
  </div>
</div>