<?php
$full_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];
if($page_name=='index.php'){$namepage="Home";}
elseif ($page_name=='about.php') {$namepage="About";}
elseif ($page_name=='services.php') {$namepage="Services";}
elseif ($page_name=='reviews.php') {$namepage="Reviews";}
elseif ($page_name=='projects.php') {$namepage="Projects";}
elseif ($page_name=='thank-you.php') {$namepage="Thank You";}
elseif ($page_name=='404.php') {$namepage="Not Found";}
elseif ($page_name=='contact.php') {$namepage="Contact Us";}
//Info
	$Company="Elegant Cleaning Service Llc";
	$Domain='Www.elegantcleaningservicellc.com ';//No dejar pleca al final del dominio
	$Address='Toms River, Nueva Jersey, EE. UU.';

	$PhoneName="Telefono";
	$Phone='646-353-6274';
	$Phone2='347-248-3357';
	$PhoneConvert = str_replace(str_split('(-)/:*?"<>|\t\n\r\O\f\i\c\e'), '', $Phone);
	$PhoneRef = "tel:".str_replace(str_split(' '), '', $PhoneConvert);

	$SEOConvert= str_replace(str_split(' '), '-', $PhoneConvert);
	$SEOPhone='+1'.$SEOConvert;

	$Mail='francochristian531@gmail.com';$MailRef="mailto:".$Mail;
	$Services="";
	$Estimates="Free Estimates";
	$Payment="cash, cks and zelle";
	$Experience="5 Years of the Experience";
	$Schedule="Monday to Sunday: 7:00am - 7:00pm";	
	$Cover="50 Miles Around";

	$Facebook="https://www.facebook.com";
	$GoogleMap='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d195619.64514044404!2d-74.329421887629!3d39.99600522475763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c19ce4a38e7105%3A0x3f5b6f5b358b3cb0!2sToms%20River%2C%20Nueva%20Jersey%2C%20EE.%20UU.!5e0!3m2!1ses-419!2sni!4v1707490756160!5m2!1ses-419!2sni" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
	$Url_Map = 'https://maps.app.goo.gl/tmqsC6kzi3MuaQHy8';

	//Phrases
	$Description="";	
 	$Phrase = array(	
		"",
		"",
		"",
		"",
	);

	//Home  etc.
	$Home = array(		 
		"About Cleaning Agency",
		"Why will you choose <span>our services?",
		"At $Company, we offer a comprehensive range of cleaning services tailored to meet the needs of both residential and commercial clients.",
		);


	$About = array(
		"$Company ",
		"",
		""	
	);

	$AboutText = array (
		"",
		"",
		"",
		"",
	);




	//Services
	$SN[1]="Residential cleaning"; // listo 
	$SD[1]="Our residential cleaning services are designed to provide homeowners with a pristine living environment. From cleaning kitchens and bathrooms to dusting, vacuuming, and mopping floors, we take care of every detail to ensure your home is clean, fresh, and inviting.";

	$SN[2]="commercial cleaning"; // Listo
	$SD[2]="Create a positive and productive work environment with our commercial cleaning services. Whether you run a small office or a large commercial space, our team is equipped to handle all your cleaning needs, including common areas, offices, restrooms, and more.";

	$SN[3]="Deep Cleaning "; //Listo
	$SD[3]="Our deep cleaning service goes beyond the surface to tackle dirt, grime, and buildup in hard-to-reach areas. From baseboards and light fixtures to behind appliances and under furniture, we leave no corner untouched, revitalizing your space and restoring its sparkle.";

	$SN[4]="Regular Cleaning"; // Listo
	$SD[4] = "Maintain a clean and organized space with our regular cleaning services. Whether you prefer weekly, bi-weekly, or monthly visits, our team will work with you to establish a cleaning schedule that fits your needs and keeps your home or business looking its best.";

	$ChooseUs = array(
		'',
		'',
		'',
		'',
		'',
		'',
	);


	
	$ServicesText = array (
		"",
		"",
		"$Company",
		"",
	);

	$Detail = array(		 
		"",
	);


	
//Excerpt
	if (strlen($Description) > 10){$ExDescription=substr($Description, 0,152).'...';};
	if (strlen($About[0]) > 10){$ExAbout=substr($About[0], 0,145).'...';};
	if (strlen($Home[0]) > 10){$ExHome=substr($Home[0], 0,87).'...';};

	if (strlen($SD[1]) > 10){$ExSD[1]=substr($SD[1], 0,100).'...';};
	if (strlen($SD[2]) > 10){$ExSD[2]=substr($SD[2], 0,135).'...';};
	if (strlen($SD[3]) > 10){$ExSD[3]=substr($SD[3], 0,138).'...';};
	//if (strlen($SD[5]) > 10){$ExSD[4]=substr($SD[4], 0,108).'...';};

?>
