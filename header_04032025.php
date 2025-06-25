<div id="header">
	
	<div class="container">
		<div class="row is-equal-row">

			<?php 
				if ($lang =="en"){ 
				?>

				<div class="col-md-3 col-xs-1 menu">

					<div class="dropdown">

						<button class="btn dropdown-toggle" type="button"id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						 	<i class="fas fa-bars"></i>
						</button>
  						 
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    		<ul id="menu">
								<li data-menuanchor="sinyar" class="active menu-item"><a href="#sinyar">Sinyar Property</a></li>
								<li data-menuanchor="about" class="menu-item"><a href="#about">About Us</a></li>
								<li data-menuanchor="specality" class="menu-item"><a href="#speciality">Our Specialty</a></li>
								<li data-menuanchor="people" class="menu-item"><a href="#people">Our People</a></li>
								<li data-menuanchor="audience" class="menu-item"><a href="#audience">Our Audience</a></li>
								<li data-menuanchor="expectations" class="menu-item"><a href="#expectations">Expectations</a></li>
								<li data-menuanchor="values" class="menu-item"><a href="#values">Our Values</a></li>
								<li data-menuanchor="contact" class="menu-item"><a href="#contactus">Contact Us</a></li>
								<li class="menu-item">Subsidiaries</li>
								<li class="menu-item hospitality"><a href="http://www.sinyarhospitality.ae/">Sinyar Hospitality</a></li>
								<li class="menu-item holding"><a href="http://www.sinyarholding.ae/">Sinyar Holding</a></li>
							</ul>
						</div>
				
					</div>

				</div>

				<div class="col-md-6 col-xs-8 logo">
					<a href="#sinyar">
						<img class="logo img-responsive img-fluid" src="imgs/logo-property.png" />
					</a>
				</div>

				<div class="col-md-3 col-xs-1 lang">
					<a class="white" onclick="window.open('<?php echo ($lang=='en' ? 'ar.php' : './') ?>','_self');">
						<?php echo ($lang == "ar" ? "English" : "عربي  ") ?>
					</a>
				</div>

				<?php }
			    else {	?>

			    <div class="col-md-3 col-xs-1 lang ar">
					<a class="white" onclick="window.open('<?php echo ($lang=='en' ? 'ar.php' : './') ?>','_self');">
					<?php echo ($lang == "ar" ? "English" : "عربي  ") ?>
					</a>
				</div>


				<div class="col-md-6 col-xs-8 logo">
					<a href="#sinyar">
						<img class="logo img-responsive img-fluid" src="imgs/logo-property.png" /></a>
				</div>
				
				<div class="col-md-3 col-xs-1 menu ar">
					
					<div class="dropdown">

					  	<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						  	<i class="fas fa-bars"></i>
						</button>

				 		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    		<ul id="menu">
								<li data-menuanchor="sinyar" class="active menu-item"><a href="#sinyar">سنيار لإدارة العقارات</a></li>
								<li data-menuanchor="about" class="menu-item"><a href="#about">نبذة عن الشركة</a></li>
								<li data-menuanchor="specality" class="menu-item"><a href="#speciality">نقاط تميزننا</a></li>
								<li data-menuanchor="people" class="menu-item"><a href="#people"> موظفينا</a></li>
								<li data-menuanchor="audience" class="menu-item"><a href="#audience"> عملاؤنا</a></li>
								<li data-menuanchor="expectations" class="menu-item"><a href="#expectations"> توقعاتكم</a></li>
								<li data-menuanchor="values" class="menu-item"><a href="#values"> قيمنا</a></li>
								<li data-menuanchor="contact" class="menu-item"><a href="#contactus"> تواصل معنا</a></li>
								<li class="menu-item"> الشركات التابعة</li>
								<li class="menu-item hospitality"><a href="http://www.sinyarhospitality.ae/ar"> أعلى معايير الإدارة</a></li>
								<li class="menu-item holding"><a href="http://www.sinyarholding.ae/ar">سنيار للضيافة</a></li>
							</ul>
						</div>

					</div>

				</div>


			<?php } ?>

		</div>

	</div>
</div>