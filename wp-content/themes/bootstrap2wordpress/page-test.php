
<?php /* Template Name: Test Page */?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>JAVASC</title>
		<style>
			.active {
				background: #ccc;
			}		
</style>
	</head>
	<body>

		<h1 id="our-headline">Click a list item to replace this text</h1>

		<button  id="btn">Add new item</button>

		<ul id="our-list">
			<li>1st item</li>
			<li>2nd item</li>
			<li>3rd item</li>
			<li>4th item</li>
			<li>5th item</li>
		</ul>

		<script type="text/javascript">

			
			var our_headline 	= document.getElementById('our-headline'),
					list_items		= document.getElementById('our-list').getElementsByTagName('li'),
					ourList				= document.getElementById('our-list'),
					btn						= document.getElementById('btn'),
					counter				= 1;

		ourList.addEventListener('click' , activateItem )
			
			function activateItem(e){
				/* e.target serves like (this)  */
				/* its like if this clicked item is equal to nodeName LI */
				/* then we change the  healine title */
				/* e.target == the actual item that we clicked on */
			if( e.target.nodeName == "LI" ) {
				 	our_headline.innerHTML = e.target.innerHTML;
				
				
				/* For Loop removes class from all active elements */
				/* e.target.parentNode.children --> */
				/* it reference the item that we clicked on from getting parent node and its children */
				for(i = 0 ; i < e.target.parentNode.children.length; i++ ){

				e.target.parentNode.children[i].classList.remove('active')
					console.log(e.target.parentNode.children[i])
			}
				
				e.target.classList.add('active')
				 
				 }
			}

			
			btn.addEventListener('click' , createNewItem );
			
			
			function createNewItem(){
				ourList.innerHTML += '<li> Something new '+ counter +'</li>';
				counter++;
			}
			
		</script>
	</body>
</html>