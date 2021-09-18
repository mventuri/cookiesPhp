<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</head>
	<style>
		.cookieClass{
			display:none;
		}
	</style>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="mt-5">More Info</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p class="text-justify mt-5">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="card <?php if(isset($_COOKIE['dog'])) echo ' cookieClass'; ?>" style="width: 18rem;">
					<img class="card-img-top" src="https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDl8fHxlbnwwfHx8fA%3D%3D&w=1000&q=80" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">Buy Food for Cats</h5>
						<h6 class="card-subtitle mb-2 text-muted">Excellent Food</h6>
						<p class="card-text">Don't know what else I could say about cat food.</p>
						<a href="#" class="card-link">Buy</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card ml-5 <?php if(isset($_COOKIE['cat'])) echo ' cookieClass'; ?>" style="width: 18rem;">
					<img class="card-img-top" src="https://images.unsplash.com/photo-1561037404-61cd46aa615b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXwxMTU1Mjc2N3x8ZW58MHx8fHw%3D&w=1000&q=80" alt="Card image cap">	
					<div class="card-body">
						<h5 class="card-title">Buy Food for Dogs</h5>
						<h6 class="card-subtitle mb-2 text-muted">Excellent Food</h6>
						<p class="card-text">Don't know what else I could say about dog food.</p>
						<a href="#" class="card-link">Buy</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>