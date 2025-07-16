<div id="header">
	
	<div class="container">

		<div class="row is-equal-row">

			<?php if ($lang =="en") { ?>

				<div class="col-md-3 col-xs-1 menu">
					<div class="dropdown">
					  	<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  		<i class="fas fa-bars"></i> 
					  	</button>

				 		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    		<ul id="menu">
								<li data-menuanchor="sinyar" class="active menu-item"><a href="#section0">Sinyar Hospitality</a></li>
								<li data-menuanchor="about" class="menu-item"><a href="#section1">About Us</a></li>
								<li data-menuanchor="whatwedo" class="menu-item"><a href="#section2">What We Do</a></li>
								<li data-menuanchor="portfolio" class="menu-item"><a href="#section4">Project Portfolio</a></li>
								<li data-menuanchor="process" class="menu-item"><a href="#our_process">Our Process</a></li>
								<li data-menuanchor="services" class="menu-item"><a href="#section6">Our Services</a></li>
								<li data-menuanchor="concept" class="menu-item"><a href="#concept_creation">Concept Creation</a></li>
								<li data-menuanchor="lifestyleevents" class="menu-item"><a href="#section8">Lifestyle & Events</a></li>
								<li data-menuanchor="specialoccasion" class="menu-item"><a href="#special_occasions">Special Occasions</a></li>
								<li data-menuanchor="culinary" class="menu-item"><a href="#culinary_delights">Culinary Delights</a></li>
								<li data-menuanchor="csr" class="menu-item"><a href="#sustainability">Sustainability & CSR</a></li>
								<li data-menuanchor="contact" class="menu-item"><a href="#footer">Contact Us</a></li>
								<li class="menu-item" style="display: none !important;">
									Subsidiaries
									<ul>
										<li class="menu-item property"><a href="http://www.sinyarpropertymanagement.ae/">Sinyar Property Management</a></li>
										<li class="menu-item holding"><a href="http://www.sinyarholding.ae/">Sinyar Holding</a></li>
									</ul>
								</li>
								
							</ul>
					  	</div>
					</div>
				</div>

				<div class="col-md-6 col-xs-8 logo">
					<a href="#sinyar">
						<img class="logo img-responsive img-fluid" src="imgs/sym_logo.png" />
					</a>
				</div>

				<div class="col-md-3 col-xs-1 lang">
					<a class="white" onclick="window.open('<?php echo ($lang=='en' ? '/ar' : './') ?>','_self');">
						<?php echo ($lang == "ar" ? "English" : "عربى") ?>
					</a>
				</div>

			<?php } else {	?>

				<div class="col-md-3 col-xs-1 lang ar">
					<a class="white" onclick="window.open('<?php echo ($lang=='en' ? 'ar' : './') ?>','_self');">
						<?php echo ($lang == "ar" ? "English" : "عربى") ?>
					</a>
				</div>

				<div class="col-md-6 col-xs-8 logo">
					<a href="#sinyar">
						<img class="logo img-responsive img-fluid" src="imgs/sym_logo.png" />
					</a>
				</div>
				
			    <div class="col-md-3 col-xs-1 menu ar">
					
					<div class="dropdown">
					  	<button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  		<i class="fas fa-bars"></i> 
					  	</button>

				 		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    		<ul id="menu">
								<li data-menuanchor="sinyar" class="active menu-item"><a href="#sinyar">سنيار للضيافة</a></li>
								<li data-menuanchor="about" class="menu-item"><a href="#about">نبذة عن الشركة</a></li>
								<li data-menuanchor="specialty" class="menu-item"><a href="#specialty">نقاط تميزنا</a></li>
								<li data-menuanchor="people" class="menu-item"><a href="#people">موظفينا</a></li>
								<li data-menuanchor="expectation" class="menu-item"><a href="#expectation">توقعاتكم</a></li>
								<li data-menuanchor="values" class="menu-item"><a href="#values">قيمنا</a></li>
								<li data-menuanchor="contactus" class="menu-item"><a href="#contactus">تواصل معنا </a></li>
								<li class="menu-item">الشركات التابعة</li>
								<li class="menu-item holding"><a href="http://www.sinyarholding.ae/ar">أعلى معايير الإدارة</a></li>
								<li class="menu-item property"><a href="http://www.sinyarpropertymanagement.ae/ar">سنيار لإدارة العقارات</a></li>
							</ul>
				  		</div>
					</div>
				
				</div>

			<?php } ?>

		</div>
	
	</div>
</div>