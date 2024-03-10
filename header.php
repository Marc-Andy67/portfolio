<?php echo ("<nav>
			<div class='profile'>
				<img src='https://i.ibb.co/sQyS665/new-photo-me.jpg' alt='profile photo' />
				<h1>Pivert Marc-Andy</h1>
			</div>
			<ul>
			<li><a href ='index.php'>accueil</a></li>
        <li><a href ='informations.php'>informations personelles</a></li>
        <li><a href ='experience.php'>expériences professionelles</a></li>
        <li><a href ='realisations.php'>Réalisations personnelles et compétences</a></li>
				<li><a href ='news.php'>news<a/></li>
        <li><a href ='charte.php'>les métiers de l'informatique</a></li>
			</ul>
		</nav>");
echo('<style>
nav {
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	align-items: center;
	background-color: grey;
	position: sticky;
	top: 0;
}
nav .profile {
	display: flex;
	align-items: center;
}
nav .profile img {
	width: 100px;
	height: 100px;
	border-radius: 50%;
}
nav .profile h1 {
	margin-left: 10px;
	font-size: 2em;
}
nav ul {
	display: flex;
	list-style-type: none;
}
nav ul li {
	margin-left: 20px;
	cursor: pointer;
	border-bottom: 1px solid #fff;
	font-size: 2em;
}
nav ul li:hover {
	border-bottom-color: #000;
}
</style>') ?>