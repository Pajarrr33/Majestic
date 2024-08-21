
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 mb-3">
			<h1>Transaction action</h1>
			<form action="<?php echo site_url()?>transaction/process" method="POST">
						<div class="form-group">
							<label>Order id</label>
							<input class="form-control" value="" size="20" type="text" name="order_id" autocomplete="off"/>
						</div>
					
					<div class="form-group">
						<label>Action</label><br/>
						<input type="radio" class="mr-3" name="action" value="status">Get Status<br>
						<input type="radio" class="mr-3" name="action" value="cancel">Cancel<br>
						<input type="radio" class="mr-3" name="action" value="expire">Expire<br>
					</div>
					<button class="submit-button btn btn-primary" type="submit">Submit Payment</button>
			</form>
		</div>
	</main>
