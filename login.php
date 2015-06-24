<?php include("header.php"); ?>
<div class="login-content-container">
	<div class="col-md-12 container-wrap">
		<div class="col-md-4"></div>
		<div class="col-md-4 login-container">
			<div class="login-box">
				<div class="header"><span class="title">Sistem Informasi Gratifikasi</span></div>
				<div class="body">
					<div class="title">LOGIN</div>
					<form action="#" method="POST">
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-8 form-group">
								<input 
									class="form-control"
									type="text" 
									id="input_username" 
									name="username" 
									placeholder="username"
									value="" style="margin-bottom:6px;" >
							</div>
						</div>
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-8 form-group">
								<input 
									class="form-control"
									type="password" 
									id="input_password" 
									name="password" 
									placeholder="password">
							</div>
						</div>
						<div class="centered">
							<input 
								type="checkbox" 
								id="input_keep_login"
								name="keep_login">
							<span style="font-size: 70%;">
								Biarkan saya tetap masuk
							</span>
						</div>
						<div style="padding-top:10px; padding-bottom:10px;">
							<button type="submit" class="btn btn-default" value="Masuk" style="width: 160px; color:#404040;">Masuk</button>
						</div>
					</form>
				</div>
			</div>					
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
<?php include 'javascript.php'; ?>		
<?php include("footer.php"); ?>