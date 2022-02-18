<!-- toolbar bottom -->
<div class="toolbar">
		<div class="container">
			<ul class="toolbar-bottom toolbar-wrap">
				<li class="toolbar-item">
					<a href="/" class="toolbar-link {{ (request()->is('/')) ? 'toolbar-link-active' : '' }}">
						<i class="icon ion-ios-home"></i>
						Beranda
					</a>
				</li>
				<li class="toolbar-item">
					<a href="/kms" class="toolbar-link {{ (request()->is('kms*')) ? 'toolbar-link-active' : '' }}">
						<i class="icon ion-ios-albums"></i>
						KMS
					</a>
				</li>
				<li class="toolbar-item">
					<a href="/blog" class="toolbar-link {{ (request()->is('blog*')) ? 'toolbar-link-active' : '' }}">
						<i class="icon ion-ios-book"></i>
						Blog
					</a>
				</li>
			</ul>
		</div>
	</div>
<!-- end toolbar bottom -->