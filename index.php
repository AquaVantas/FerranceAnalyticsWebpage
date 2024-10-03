<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include "Views/Master/header.php"; ?>
	</head>
	<body>
		<header>
			<?php
			include "Views/Master/navigation.php";			
			include "Views/Master/cookies.php";
			?>
		</header>
		<main>
			<?php
			include "Views/Sections/SectionBlock/HeroBanner.php";
			include "Views/Sections/SectionBlock/Statistics.php";
			include "Views/Sections/SectionBlock/Services.php";
			include "Views/Sections/SectionBlock/CallToAction.php";
			include "Views/Sections/SectionBlock/Reviews.php";
			include "Views/Sections/SectionForm/ContactForm.php";
			?>
		</main>
		<footer>
			<?php
			include "Views/Master/bootomer.php";		
			include "Views/Master/footer.php";
			?>
		</footer>
	</body>
</html>