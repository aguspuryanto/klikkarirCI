<?php require ('header.php');?>

  <?php //require ('slider.php');?>
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron" style="margin-top: 70px">

    <div class="container text-center">
      <h3>SIAP MERAIH KARIER IMPIAN ANDA?</h3>
      <form class="form-inline hidden-xs ng-pristine ng-valid" action="https://www.qerja.com/search">
          <div class="form-group">
            <div class="input-group">
              <!-- <div class="input-group-addon">
                <i class="fa fa-search"></i>
              </div> -->
              <input class="form-control input-lg" type="text" name="keyword" placeholder="Ketik nama Perusahaan atau Posisi" autocomplete="off" style="min-width:450px;">
              <span class="input-group-btn">
                <button class="btn btn-lg btn-warning" type="submit">GO</button>
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

          <ul class="list-group">
                <li class="list-group-item" ng-repeat="user in users">

                  <div class="row">
                    <div class="col-md-2">
                      <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNjRkZjI3ZDJiNSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE2NGRmMjdkMmI1Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMi4xNzk2ODc1IiB5PSIzNi41Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" class="media-object">
                    </div>
                    <div class="col-md-10">
                      <div class="pull-right">
                          <i class="glyphicon glyphicon-bookmark"></i>
                          <i class="glyphicon glyphicon-heart"></i>
                          <i class="glyphicon glyphicon-star"></i>
                      </div>
                      <p><a href="<?=site_url('index.php/jobs/{{user.vacid}}'); ?>"><strong>{{user.posisi}}</strong></a></p>
                      <p><i class="glyphicon glyphicon-home"></i> {{user.nama}} </p>
                      <span><i class="glyphicon glyphicon-usd"></i> {{user.gaji}}</span>
                      <span><i class="glyphicon glyphicon-map-marker"></i> {{user.lokasi}}</span> <span class="pull-right"><i class="glyphicon glyphicon-time"></i> {{user.post | date:''}}</span>
                    </div>
                  </div>

                </li>
                <li class="list-group-item">
                  <nav class="text-center" aria-label="Page navigation">
                    <ul class="pagination">
                      <li>
                        <a href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li>
                        <a href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </li>
          </ul>

          <!--Tampilkan pagination-->
          <?php //echo $pagination; ?>

        </div>
        <div class="col-md-3"></div>
        
      </div>
    </div>
  </section>

<?php require ('footer.php');?>