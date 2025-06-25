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
								<li data-menuanchor="sinyar" class="active menu-item"><a href="#sinyar">Sinyar Hospitality</a></li>
								<li data-menuanchor="about" class="menu-item"><a href="#about">About Us</a></li>
								<li data-menuanchor="specialty" class="menu-item"><a href="#specialty">Our Specialty</a></li>
								<li data-menuanchor="people" class="menu-item"><a href="#people">Our People</a></li>
								<li data-menuanchor="expectation" class="menu-item"><a href="#expectation">Expectations</a></li>
								<li data-menuanchor="values" class="menu-item"><a href="#values">Our Values</a></li>
								<li data-menuanchor="contactus" class="menu-item"><a href="#contactus">Contact Us</a></li>
								<li class="menu-item">Subsidiaries</li>
								<li class="menu-item property"><a href="http://www.sinyarpropertymanagement.ae/">Sinyar Property</a></li>
								<li class="menu-item holding"><a href="http://www.sinyarholding.ae/">Sinyar Holding</a></li>
							</ul>
					  	</div>
					</div>
				</div>

				<div class="col-md-6 col-xs-8 logo">
					<a href="#sinyar">
						<img class="logo img-responsive img-fluid" src="imgs/logo-hospitality.png" />
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
						<img class="logo img-responsive img-fluid" src="imgs/logo-hospitality.png" />
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