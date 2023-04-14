<html>
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	</head>
	<body>
		
<h1 class="text-center  mt-5 mb-2 py-3">Ajouter un projet</h1>

<div class="container">
	<div class="row">
		<div class="col-8 mx-auto">
			<form class="p-5 border mb-5" method="POST" action="../projetController/add">
				<div class="form-group">
					<label for="name">Titre</label>
					<input type="text" required name="titre" class="form-control" id="name" >
				</div>
				<div class="form-group">
					<label for="price">Date Debut</label>
					<input type="date" required class="form-control" name="debut" id="price">
				</div>
				<div class="form-group">
					<label for="price">Date Fin</label>
					<input type="date" required class="form-control" name="fin" id="price">
				</div>

				<div class="form-group">
					<label for="description">Description</label>
					<textarea required class="form-control" name="description" id="description"></textarea>
				</div>

				<button type="submit"  class="btn btn-primary">Ajouter</button>
			</form>
						
		</div>
	</div>
</div>
	</body>

</html>