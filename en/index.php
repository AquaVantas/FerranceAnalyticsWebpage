<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include "Master/header.php"; ?>
	</head>
	<body>
		<header>
			<?php
			include "Master/navigation.php";			
			include "Master/cookies.php";
			?>
		</header>
		<main>
			<?php
			include "Sections/SectionBlock/HeroBanner.php";
			include "Sections/SectionBlock/Statistics.php";
			include "Sections/SectionBlock/Services.php";
			include "Sections/SectionBlock/CallToAction.php";
			include "Sections/SectionBlock/Reviews.php";
			include "Sections/SectionForm/ContactForm.php";
			?>
		</main>
		<footer>
			<?php	
			include "Master/footer.php";
			include "Master/bootomer.php";	
			?>
		</footer>
	</body>
</html>