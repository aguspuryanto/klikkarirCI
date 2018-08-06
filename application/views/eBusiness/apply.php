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
		
          <!-- <h4>APPLY <?=$data[0]['posisi'];?></h4> -->
          <div class="panel panel-default">
            <div class="panel-body">
			  
				<form id="apply_form" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6 form-group">
							<label class="control-label">Nama Lengkap <small style="display:inline">* wajib</small></label>
							<input type="text" class="form-control" name="author" required="required">
						</div>
						<div class="col-md-6 form-group">
							<label class="control-label">No Handphone <small style="display:inline">* wajib</small></label>
							<input type="text" class="form-control" name="apply_mobile" required="required">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 form-group">
							<label class="control-label">Email <small style="display:inline">* wajib</small></label>
							<input type="email" class="form-control" name="email" required="required">
						</div>
						<div class="col-md-6 form-group">
							<label class="control-label">Pilih Kota <small style="display:inline">* wajib</small></label>
							<input type="text" class="form-control" name="apply_city" required="required">
						</div>
					</div>
					<div class="row">			
						<div class="col-md-4 form-group">
						<label class="control-label">Tahun Lahir</label>
							<select class="form-control" name="apply_ydate" required="required">
								<option value="">Pilih Tahun</option>
								<option value="2003">2003</option>
								<option value="2002">2002</option>
								<option value="2001">2001</option>
								<option value="2000">2000</option>
								<option value="1999">1999</option>
								<option value="1998">1998</option>
								<option value="1997">1997</option>
								<option value="1996">1996</option>
								<option value="1995">1995</option>
								<option value="1994">1994</option>
								<option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option>
							</select>
						</div>
						<div class="col-md-4 form-group">
							<label class="control-label">Kelamin</label>
							<select class="form-control" name="apply_gender" required="required">
								<option value="">Pilih Kelamin</option>
								<option value="Pria">Pria</option>
								<option value="Wanita">Wanita</option>
							</select>
						</div>
						<div class="col-md-4 form-group">
							<label class="control-label">Pendidikan Terakhir</label>
							<select class="form-control" name="apply_edu" required="required">
								<option value="">Pilih Pendidikan</option>
								<option value="SMP">SMP</option>
								<option value="SMA">SMA</option>
								<option value="SMA">SMK</option>
								<option value="STM">STM</option>
								<option value="D1">D1</option>
								<option value="D2">D2</option>
								<option value="D3">D3</option>
								<option value="S1">S1</option>
								<option value="S2">S2</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label>Resume <small style="display:inline">* wajib</small></label>
							<input type="file" id="file" name="apply_File">
							<p class="help-block">Hanya file pdf, doc, docx. Tidak lebih besar 1 Mb.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 form-group">
							<label class="control-label">Perkenalkan Diri Anda, Kenapa Perusahaan harus menerima Anda, Apa kelebihan dan kekurangan Anda, Apa motivasi Anda melamar kerja di Perusahaan PT. NISINDO JAYA!<small style="display:inline">* wajib</small></label>
							<textarea class="form-control" name="comment" cols="45" rows="4" aria-required="true" required="required"></textarea>
						</div>
					</div>
					<input type="hidden" name="comment_post_ID" value="112178">
					<input type="hidden" name="redirect" value="https://surabayajobfair.com/wp-content/themes/gokarir5/apply_form.php" id="redirect">
					<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-send"></i> KIRIM LAMARAN</button>
					
				</form>
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