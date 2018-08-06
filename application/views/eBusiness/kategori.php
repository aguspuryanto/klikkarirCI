<?php require ('header.php');?>

  <?php //require ('slider.php');?>
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron" style="margin-top: 70px">

    <div class="container">
      <div class="row">
		<h4>Kategori</h4>
      </div>
    </div>

  </div>

  <section id="content">
    <div class="container clearfix">
      <div class="row">
        
        <div class="col-md-9">
		
          <div class="panel panel-default">
            <div class="panel-body">
				<div class="col-md-4"><ul>
				<?php $p=0;
				// $ndata = array_unique(explode(',', $data));
				$newdata = array();
				foreach($data as $kat){
					$newdata[] = array_unique(explode(",", $kat['kategori']));
					// $ndata[] = array_unique($newdata);
				}
				// var_dump($newdata);
				$ndata = array_unique($newdata, SORT_REGULAR);
				/* $ndata = array();
				foreach($newdata as $v){
					isset($k[$v]) || ($k[$v]=1) && $ndata[] = $v;
				} */
  
				foreach($ndata as $kat){
					echo "<li>".$kat[0]."</li>";
					if ($p % 10 == 0){
						echo '</ul></div><div class="col-md-4"><ul>';
					}
				} ?>
				</ul></div>
            </div>
          </div>

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