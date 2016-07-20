	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.php"><span>Libreria <small>(<?php echo $profile['tipo']; ?>)</small></span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> <?php echo $profile['nombre'] . ' ' . $profile['apellido_pat']; ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" style="width: 180px;">
								<li class="dropdown-menu-title">
 									<span>Configuraciones</span>
								</li>
								<li>
									<a href="cambiar-pass"><i class="halflings-icon edit"></i> Cambiar Contraseña</a>
									<?php if($profile['tutorial'] == "0"): ?>
										<div class="tut8">
											<div class="arrow-right"></div>
											Le sugerimos cambiar su contraseña para una mayor seguridad en su cuenta.
											<a href="#" class="next8" style="float: right;">Finalizar</a>
										</div>
									<?php endif; ?>
								</li>
								<li><a href="includes/php/logout.php"><i class="halflings-icon off"></i> Salir</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>