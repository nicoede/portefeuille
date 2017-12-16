<?php
include "includes/header.php";
include "includes/contact.php";
?>


<div id="page_effect" style="display:none;">
   <nav id="nave" class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom: -20px;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span>                        
          </button>
          <a class="active navbar-brand" style="font-family: 'Shadows Into Light';" href="#home">Home</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
        	<li class="dropdown">
        	<li><a href="#work">What I do</a></li>
        	<li><a href="#about">About me</a></li>
        	<li><a target="_blank" href="includes/grades.php#grades">Grades</a></li>
        	<li><a href="#contact">Contact Me</a></li>
        	</li>
          </ul>
        </div>
    </nav>
    
    <section id="home" style="background: url(images/header.jpg); background-size: 100% 100%;" class="cl_white text-center">
        <h1><b> My Portfolio </b></h1><br>
        <div class="wrapper">
            <img id="ep" class="img-responsive" src="images/ep.png" style="margin-left: auto; margin-right: auto; width: 40%;" >
        </div>
        <h1><b> Edenilson Jonatas dos Passos </b></h1>  
        <h1><b> Web Projects </b></h1>  
    </section>
    
    <section id="work" style="background: url(images/header.jpg); background-size: 100% 100%;" class="cl_white text-center">
        <div class="page-header">
            <h1 style="font-family: 'Shadows Into Light'; text-align: center;"> My Work </h1>
        </div>
        <h1 style="font-family: 'Shadows Into Light'; text-align: left;"> My CMS </h1><br>
        <p class="col-text">My CMS is a project in order to show off my skills with PHP in a more advanced system involving several functionalities such as creating a new user, creating posts, editing posts, deleting posts, commenting, approving the comment, creating categories, filtering and more. The site can be accessed clicking the image below. If you are intersted in the full functionality of the site, you will need the admin login, that is:</p>
        <ul class="col-text">
            <li>Username: nicoede</li>
            <li>Password: 123</li>
        </ul>
        <a target="_blank" href="https://cmsnico.herokuapp.com/"><img src="images/p1.png" alt="My_CMS" class="work img-thumbnail"></a>

        <hr>
        
        <h1 style="font-family: 'Shadows Into Light'; text-align: left;"> Mes Recettes </h1><br>
        <p class="col-text">Mes Recettes is a project that I have developped in Ruby on Rails. You will be able to register create new recipes, edit them as necessary, rate other recipes and more as can be seen in the link below:</p>
        <a target="_blank" href="https://myrecipesnicoede.herokuapp.com/"><img src="images/p2.png" alt="mesrecettes" class="work img-thumbnail" style="margin-bottom:100px;"></a>
    </section>
    
    <section id="about" style="background: url(images/header.jpg); background-size: 100% 100%;" class="cl_white text-center">
        <div class="page-header">
            <h1>About me</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="col-text">
                    <p>
                        Hello! My name is Edenilson Jonatas dos Passos and I am a computer scientist student from Brazil who really enjoy web development.
                        For the past several months I have been studying HTML, CSS, Bootstrap, Ruby on Rails, PHP and Javascript to really maximize my performance as 
                        a web developper. In spite of having no formal job, I have been creating websites for fun involving several types of technologies. Aside from 
                        the ones I have mentioned, I had to work with database projects and management, that is, mySQL, phpmyadmin, MongoDB, postgreSQL and cleanDB 
                        from Heroku which is the service I use to deploy my projects. Furthermore, I have used amazon web services to store the images that users 
                        upload to my websites, and for that I have used the S3 tool. If you want to know more about my degree, you can click on 
                        <a href="includes/grades.php#grades">grades</a> to see what courses I have taken with their respective grades and duration.
                    
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img id="me" class="img-thumbnail img-responsive" src="images/me.jpg" style="margin-left: auto; margin-right: auto; width: 40%;">
                <p style="font-size: 20px;">Phone: +64 027 508 7707</p>
                <a href="https://github.com/nicoede"><img class="img-responsive" src="images/git.png" style="margin-left: auto; margin-right: auto; width: 5%;" ></a><br>
                <a href="https://www.linkedin.com/in/edenilson-j-dos-passos/"><img class="img-responsive" src="images/linkedin.png" style="margin-left: auto; margin-right: auto; width: 5%;" ></a>
            </div>
        </div>
        <br><br><br><br>
    </section>
    
    
    <div class="col-text" style="margin-right: auto; margin-left: auto;">
    <section id="contact" style="background: url(images/header.jpg); background-size: 100% 100%;" class="cl_white text-center">
        <div class="page-header">
            <h1>Contact me</h1>
        </div>
        <form class="form-horizontal" role="form" method="post" action="index.php#contact">
        	<div class="form-group">
        		<label for="name" class="col-sm-2 control-label">Name</label>
        		<div class="col-sm-10">
        			<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
        			<?php echo "<p class='text-danger'>$errName</p>";?>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="email" class="col-sm-2 control-label">Email</label>
        		<div class="col-sm-10">
        			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
        			<?php echo "<p class='text-danger'>$errEmail</p>";?>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="message" class="col-sm-2 control-label">Message</label>
        		<div class="col-sm-10">
        			<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
        			<?php echo "<p class='text-danger'>$errMessage</p>";?>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
        		<div class="col-sm-10">
        			<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
        			<?php echo "<p class='text-danger'>$errHuman</p>";?>
        		</div>
        	</div>
        	<div class="form-group">
        		<div class="col-sm-10 col-sm-offset-2">
        			<input id="submit" name="submit" type="submit" value="SEND" class="btn btn-primary btn-block btn-disabled">
        		</div>
        	</div>
        	<div class="form-group">
        		<div class="col-sm-10 col-sm-offset-2">
        			<?php echo $result; ?>	
        		</div>
        	</div>
        </form>
        <?php include "includes/footer.php" ?>
    </section>
    </div>
    </div>
    </div>
    
</body>
</html>