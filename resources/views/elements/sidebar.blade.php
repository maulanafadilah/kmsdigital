<!-- sidebar -->
<div class="side-overlay"></div>
	<div id="menu" class="panel sidebar" role="navigation">

		<!-- separator -->
		<div class="separator-large"></div>
		<!-- end separator -->

		<div class="list-view list-separate-two list-colored">
			<ul>
				<li>
					<a href="/" class="list-item">
						<div class="list-media">
							<i class="icon ion-ios-home bg-blue"></i>
						</div>
						<div class="list-label">
							<div class="list-title">Beranda</div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</a>
				</li>
				<li>
					<a href="/kms" class="list-item">
						<div class="list-media">
							<i class="icon ion-ios-albums bg-red"></i>
						</div>
						<div class="list-label">
							<div class="list-title">KMS</div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</a>
				</li>
				<li>
					<a href="/blog" class="list-item">
						<div class="list-media">
							<i class="icon ion-ios-book bg-green"></i>
						</div>
						<div class="list-label">
							<div class="list-title">Blog</div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</a>
				</li>
			</ul>
		</div>

		<!-- separator -->
		<div class="separator-large"></div>
		<!-- end separator -->

		<div class="list-view list-separate-two list-colored">
			<ul>
				<li>
					<a href="/profile" class="list-item">
						<div class="list-media">
							<i class="icon ion-ios-information-circle bg-lime"></i>
						</div>
						<div class="list-label">
							<div class="list-title">Data Diri</div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</a>
				</li>
				<li>
					<a href="/account" class="list-item">
						<div class="list-media">
							<i class="icon ion-ios-lock bg-blue"></i>
						</div>
						<div class="list-label">
							<div class="list-title">Akun</div>
							<div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div>
						</div>
					</a>
				</li>
				<li>
					<a href="logout" class="list-item">
						<div class="list-media">
							<i class="icon ion-ios-power bg-red"></i>
						</div>
						<!-- <div class="list-label"> -->
							<form action="/logout" method="post">
							@csrf
							<!-- <div class="list-title"> -->
								<button class="list-label button-outline" type="submit" class="list-title">Keluar</button>
							<!-- </div> -->
							<!-- <div class="list-after"><i class="icon ion-ios-arrow-forward"></i></div> -->
							</form>
						<!-- </div> -->
					</a>
				</li>
			</ul>
		</div>

		<!-- separator -->
		<div class="separator-large"></div>
		<!-- end separator -->

	</div>
	<!-- end sidebar -->