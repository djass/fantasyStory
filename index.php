<!DOCTYPE html>
<html>
<head>
	<title>Fantsay Story</title>
	<link type="text/css" href="https://bootswatch.com/paper/bootstrap.min.css" rel="stylesheet">
</head>
<body style='background-image: url("http://www.eklecty-city.fr/wp-content/uploads/2011/02/Assassins-Creed-Brotherhood-DLC-La-Disparition-de-Da-Vinci-Artwork-Le-Chevalier.jpg"); background-position: 183px -372px;'>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
     
      <a class="navbar-brand" href="#">AppTurbo</a>
    </div>
 </nav>	
<div class="container">
<h2>The characters</h2>
<?php     

	require_once 'Characters/Person.php';
	require_once 'Characters/Knight.php';
	require_once 'Characters/King.php';
	require_once 'Story/Story.php';
	
	use FantasyStory\Characters\Person;
	use FantasyStory\Characters\Knight;
	use FantasyStory\Characters\King;
	use FantasyStory\Story\Story;



	///Init of the characters
	$characters = array();
	$p = new Person(23, 50);
	$characters[] = $p;
	echo "<p><b>". get_class($p) ."</b> : ".  $p->presentHimself() ."</p>";

	$p = new Knight('De montesquieu', 23, 50);
	$characters[] = $p;
	echo "<p><b>". get_class($p) ." : </b>". $p->presentHimself() ."</p>"; 

	$p = new King(5,'De Montaigne', 23, 50);
	$characters[] = $p;
	echo "<p><b>". get_class($p) ." : </b>".  $p->presentHimself() ."</p>";

	
	///The story
	echo "<h1>The story</h1>";
	
	$text = "Each characters will present them self : <br/>";
	$story = new Story();
	$story->setCharacters($characters);
	echo "<blockquote style='width: 772px;'>";
	echo "<p>".$story->tellTheStory()."</p>";
	echo "</blockquote>";
 	
?>
</div>
</body>
</html>