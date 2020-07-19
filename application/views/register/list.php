<h1 class="cat-judul text-center"><?php echo $title ?></h1>

<div class="container">
    <div class="card-login">
        <div class="col-md-5 mx-auto text-center">
          <h2> Daftar Gratis!</h2>
          <p>Bagi anda yang ingin memasang iklan listing properti anda bisa pasang disini Gratis</p>

                <p class="divider-text"><span class="or">Silahkan Daftar sekarang</span></p>


                <?php
		    	if(validation_errors()){
		    		?>
		    		<div class="alert alert-info text-center">
		    			<?php echo validation_errors(); ?>
		    		</div>
		    		<?php
		    	}

				if($this->session->flashdata('message')){
					?>
					<div class="alert alert-info text-center">
						<?php echo $this->session->flashdata('message'); ?>
					</div>
					<?php
				}
		    ?>
			<h3 class="text-center">Signup Form</h3>
			<form method="POST" action="<?php echo base_url()?>register">
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="text" class="form-control" id="email" name="email" value="<?php echo set_value('email'); ?>">
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" class="form-control" id="password" name="password" value="<?php echo set_value('password'); ?>">
				</div>
				<div class="form-group">
					<label for="password_confirm">Password:</label>
					<input type="password" class="form-control" id="password_confirm" name="password_confirm" value="<?php echo set_value('password_confirm'); ?>">
				</div>
				<button type="submit" class="btn btn-primary">Register</button>
			</form>


        </div>
    </div>
</div>
