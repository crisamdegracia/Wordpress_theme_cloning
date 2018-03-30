
<?php /* Template Name: Test Page */ ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>JAVASC</title>
	</head>
	<body>



		<h1 id="our-headline">Click a list item to replace this text</h1>

		<button>Add new item</button>

		<ul id="our-list">
			<li>1st item</li>
			<li>2nd item</li>
			<li>3rd item</li>
			<li>4th item</li>
			<li>5th item</li>
		</ul>

		<script>

			var our_headline = document.querySelector('#our-headline'),
					listItems = document.querySelectorAll('#our-list li');


			for(i = 0 ; i < listItems.length ; i++){

				listItems[i].addEventListener('click' , function(){

					our_headline.innerHTML = this.innerHTML;

				})
			}
		</script>
	</body>
</html>