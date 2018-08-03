<?php require ('header.php');?>

  <?php //require ('slider.php');?>
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron" style="margin-top: 70px">

    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <h3><?=$data[0]['posisi'];?></h3>
          <span><i class="glyphicon glyphicon-home"></i> <?=$data[0]['nama'];?></span>
          <span><i class="glyphicon glyphicon-map-marker"></i> <?=$data[0]['lokasi'];?></span>
          <span><i class="glyphicon glyphicon-tag"></i> <?=$data[0]['kategori'];?></span>
        </div>
        <div class="col-md-3">
          <img class="img-object" src="http://klikkarir.com/Pic_Emp_Logo/<?=$data[0]['empid'];?>.JPG">
        </div>
      </div>
    </div>

  </div>

  <section id="content">
    <div class="container clearfix">
      <div class="row">
        
        <div class="col-md-9">

          <h4>Detail</h4>
          <div class="row">
            <div class="col-md-6">
              <table class="table table-bordered">
                <tr>
                    <td>Gender</td>
                    <td width="1%">:</td>
                    <td><?=$data[0]['kelamin'];?></td>
                </tr>
                <tr>
                    <td>Pengalaman</td>
                    <td width="1%">:</td>
                    <td><?=$data[0]['exp'];?></td>
                </tr>
                <tr>
                    <td>Pendidikan</td>
                    <td width="1%">:</td>
                    <td><?=$data[0]['pendidikan'];?></td>
                </tr>
                <tr>
                    <td>Gaji</td>
                    <td width="1%">:</td>
                    <td><?=$data[0]['gaji'];?></td>
                </tr>
                <tr>
                    <td>Status Karyawan</td>
                    <td width="1%">:</td>
                    <td><?=$data[0]['tipejob'];?></td>
                </tr>
              </table>
            </div>
            <div class="col-md-6"></div>
          </div>

          <h4>Deskripsi</h4>
          <div class="panel panel-default">
            <div class="panel-body">
              <p><?=$data[0]['desjob'];?></p>
              <p><?=nl2br($data[0]['req']);?></p>
            </div>
            <div class="panel-footer clearfix">
              <p class="pull-right">
                <button class="btn btn-primary">Apply</button>
              </p>
            </div>
          </div>

          <!-- <?php var_dump($data);?> -->

        </div>
        <div class="col-md-3">
          
          <div class="panel panel-info">
            <div class="panel-heading">
              <h4 class="panel-title">Lowongan Serupa</h4>
            </div>
            <div class="panel-body">
              
            </div>
          </div>

        </div>
        
      </div>
    </div>
  </section>

<?php require ('footer.php');?>