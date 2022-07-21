<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link rel="stylesheet" type="text/css" href="../style/region.css">
  <link  rel = "stylesheet"  href = "https://unpkg.com/aos@next/dist/aos.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="../script/script.js"></script>
  <title>Музей туризму</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<header>
          <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
            <a class="navbar-brand" href="../index.php">
              <img class="logo" src="../img/ukraine-logo.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item">
                  <a class="nav-link" href="../index.php">Головна <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Області
                 </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?
                  include_once "links.php";
                  foreach($regions as $region){
                      in_php_folder($region);
                  }
                ?>
                </div>
               </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Готелі</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Варто відвідати
                  </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="should_visit.php?castle_main=true">Фортеці</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="should_visit.php?resort_main=true">Курорти</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="should_visit.php?park_main=true">Парки</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="should_visit.php?church_main=true">Храми</a>
              <div class="dropdown-divider"></div>
							<a class="dropdown-item" href="should_visit.php?museum_main=true">Музеї</a>
              </div>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#">Cторінка з історії</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#">Наші контакти</a>
                </li>

               <li class="nav-item">

                </li>
                <li>
                <a id="search" class="search-btn">
                  <i class="fa fa-search"></i>
                </a></li>
              </ul>
              <!--form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Знайти</button>
              </form-->
                <div class="search-form">
        <form class="" action="Search.php?go" method="post" id="searchform">
          <input type="text" name="name" value="" placeholder="Пошук">
          <a class="close"><i class="fa fa-times"></i></a>
          <button type="submit" class="search-go" name="submit" value="Search">Знайти</input>
        </form>
      </div>
              </div>
            </div>
            </div>
          </nav>
  </header>
<div class="data_content">
  	<div class="container h100">
        <form action="admin.php?action=<?php echo $_GET['action']?>&id=<? echo $_GET['id']?>" method="post">
            
            <input type="hidden" name="table" value="<?php echo $_GET['table']; ?>"/>
            <label>
                ID
                <input type="text" name="id" value="<?php echo $row['id'];?>" autofocus required>
            </label><br>
            <label>
                Назва місця
                <input type="text" name="place_name" value="<?php echo $row['place_name'];?>">
            </label><br>
            <label>
                Назва зображення
                <input type="text" name="img" value="<?php echo $row['img'];?>">
            </label><br>
            <label>
                Місцезнаходження
                <input type="text" name="location" value="<?php echo $row['location'];?>">
            </label><br>
            <label>
                Інформація
                <textarea name="information"><?php echo $row['information'];?></textarea>
            </label><br>

            <input type="submit" value="Зберегти">
        </form>
    </div>
</div>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul class="sci">
					<li><a href=""><i class="fa fa-facebook"></i></a></li>
					<li><a href=""><i class="fa fa-twitter"></i></a></li>
					<li><a href=""><i class="fa fa-google"></i></a></li>
				</ul>
				<p class="cpryt">
					© 2020 All Rights Reserved | Created by <a href="#">&laquo;ShO‽&raquo;</a></p>
			</div>
		</div>
	</div>
</footer>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
