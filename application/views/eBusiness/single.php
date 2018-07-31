<?php require ('header.php');?>

  <?php //require ('slider.php');?>
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron" style="margin-top: 70px">

    <div class="container text-center">
      <h3>SIAP MERAIH KARIER IMPIAN ANDA?</h3>
      <form class="form-inline hidden-xs ng-pristine ng-valid" action="https://www.qerja.com/search">
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-search"></i>
              </div>
              <input class="form-control" type="text" name="keyword" placeholder="Ketik nama Perusahaan atau Posisi" autocomplete="off" style="min-width:450px;">
              <span class="input-group-btn">
                <button class="btn btn-warning" type="submit">GO</button>
              </span>
            </div>
          </div>
        </form>

    </div>

  </div>

  <section id="content">
    <div class="container">
      <div class="row">
        
        <div class="col-md-9" ng-controller="myCtrl">

          <?php var_dump($data);?>

        </div>
        <div class="col-md-3"></div>
        
      </div>
    </div>
  </section>

<?php require ('footer.php');?>