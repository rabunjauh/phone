<div class="container box">
	<div class="row text-center">
		<div class="col-lg-6 col-md-6 col-sm-6 col-sx-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
			<h3>Setting</h3>
			<hr>
		</div>
	</div>
	<div class="row" >
		<div class="col-lg-6 col-md-6 col-sm-6 col-sx-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
      <h4>Addresss</h4>
      <button class="btn btn-primary">Add Address</button>
      <br>
      <br>
      <?php
        if($address) {
      ?>
      <p>Address: <?=$address->company ?></p>
      <p>Road: <?=$address->road ?></p>
      <p>Phone: <?=$address->phone ?></p>
      <p>Fax: <?=$address->fax ?></p>
      <?php
        }
      ?>
    </div>
	</div>
</div>	
