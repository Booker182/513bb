<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style3.css" />
    <title>Sticky Navigation</title>
  </head>
  <body>
    <nav class="nav">
      <div class="container">
        <img src='logo.png' width="120", height="100";>
      
        <h1 class="logo"><a href="/index3.html">My Website</a></h1>
        <ul>
          <li ><a href="Home.html" accesskey="1" title="">Home</a></li>
				<li class="active"><a href="About US.html" accesskey="2" title="">About US</a></li>
				<li><a href="Careers.html" accesskey="3" title="">Careers </a></li>
				<li><a href="Order online.html" accesskey="4" title="">Order online </a></li>
				<li><a href="Contact Us.html" accesskey="5" title="">Contact Us</a></li>
				<li><a href="Register.html" accesskey="6" title="">Register</a></li>
        </ul>
      </div>
    </nav>

    <div class="hero">
      <div class="container">
        <div class="wrapper">
          <div id="welcome" class="container">
            <div class="title">
                    <h1>Join our team</h1>
                    <p> We are expanding our branches and need experienced baker regularly.</n>
                        Send us your detail with the form below</br>
                    and we will be in contact shortly</p>
        
                    <div id="three-column" class="container">
                   
                        <div class="title">
                            <h2>Fill out the form below and upload your cover letter and resume</h2>
                            <form action="file_upload.php" method="POST"
                    enctype="multipart/form-data">
         
        
                 
                <label for="name">First name:</label>
                <input type="text" id="name" name="name"/><br>
                <label for="email">Last name:</label>
                <input type="text" id="email"name="email" /><br>
                <label for="telephone">Email Address:</label>
                <input type="text" id="telephone" name="telephone"/><br>
                <label for="message">Work experience</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea><br />
        <p>
                    Select files to upload:
                     
                    <!-- name of the input fields are going to
                        be used in our php script-->
                    <input type="file" name="files[]" multiple><br>
                    <input type="file" name="files[]" multiple>
                    <br><br>
                     
                    <input type="submit" name="submit" value="Upload" >
                </p>
         
            </form>
                        
                        </div>
                    
                
                
                    </div>
                    </div>
                    </div>
    <footer class="footer2">
      Booker zhengjie 20ITA1
      </footer>	
    
    <script src="script3.js"></script>
  </body>
</html>
