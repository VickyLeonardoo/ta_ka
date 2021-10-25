<?php 
if (isset($_GET['url'])) 
{
	$url = $_GET['url'];

	switch($url)
	{

        case 'profile';
        include 'profile.php';
        break;

        case 'home';
        include 'home.php';
        break;
        
        case 'contact';
        include 'contact.php';
        break;

        case 'competition';
        include 'competition.php';
        break;

        case 'portofolio';
        include 'portofolio.php';
        break;

        case 'movie';
        include 'movie.php';
        break;
        
        case 'magazine';
        include 'magazine.php';
        break;

        case 'scientific';
        include 'scientific.php';
        break;

        case 'calligraphy';
        include 'calligraphy.php';
        break;

        case 'tartil';
        include 'tartil.php';
        break;

        case 'tilawah';
        include 'tilawah.php';
        break;

        case 'speech';
        include 'speech.php';
        break;

	}
}
 
     else
    
        ?>