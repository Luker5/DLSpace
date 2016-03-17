 <!doctype html>
<html>
	<head>
		<title>Devin Luker's Portfolio</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />	
		<meta name="description" content="Devin Lukers Portfolio. Charlotte North Carolina.	"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.1.2/material.indigo-pink.min.css">
		<script defer src="https://code.getmdl.io/1.1.2/material.min.js"></script>
        
       
        
        <link rel="stylesheet" href="content/style.css" type="text/css"/>

        	<meta property="og:type"               content="Website" />
			<meta property="og:title"              content="Devin Luker's Portfolio" />
			<meta property="og:description"        content="This is my (Devin Luker) portfolio site,it used Google's MDL framework with some PHP and MySQL for the back end. check it out and let me know what you think. />
			<meta property="og:image"              content="http://dlspace.net/content/picture13.png" />
	</head>
	<body>
        <div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
 		 js = d.createElement(s); js.id = id;
 		 js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
 		 fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
        		
       <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header mdl-layout__header--waterfall portfolio-header">
            <div class="mdl-layout__header-row portfolio-logo-row">
                <span class="mdl-layout__title">
                    <div class="portfolio-logo"></div>
                    <span class="mdl-layout__title">Devin Luker's Portfolio</span>
                </span>
            </div>		
			<div class="mdl-layout__header-row portfolio-navigation-row mdl-layout--large-screen-only">
                <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                    <a class="mdl-navigation__link is-active" href="index.html">Main</a>
                    <a class="mdl-navigation__link" href="about.html">About</a>
                    <a class="mdl-navigation__link" href="connect.php">Connect</a>
                </nav>
            </div>
        </header>
		 <div class="mdl-layout__drawer mdl-layout--small-screen-only">
            <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                <a class="mdl-navigation__link is-active" href="index.html">Main</a>
                <a class="mdl-navigation__link" href="about.html">About</a>
                <a class="mdl-navigation__link" href="connect.php">Connect</a>
            </nav>
        </div>
		<main class="mdl-layout__content">
           
                <div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Connect With Me</h2>
  </div>
  <div class="mdl-card__supporting-text">
     Feel free to contact me through any of the provided channels if you would like to discuss a project or even if you just have comments or suggestions about the site. I would be happy to discuss how I could implement what I have done here to improve or create a site of your own.
                            </br>                 
					</br>
					
                         <div class="mdl-grid portfolio-max-width">
                <div class="mdl-cell mdl-cell--6-col mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text"></h2>
                        <div class="mdl-card__supporting-text">
                            <div id="ls" class="fb-comments" data-href="http://dlspace.net" data-width="500" data-numposts="5">
                            </div>      
                            </div>
                            </div>
                            </div>
                             <div class="mdl-cell mdl-cell--5-col mdl-card mdl-shadow--4dp">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Have Me Contact You</h2>
    </div>
    <div class="mdl-card__supporting-text">
                        <form action="send.php" method="POST" id="getinfo">
                         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                             <input class="mdl-textfield__input" required type="text" name="fname">
                             <label class="mdl-textfield__label" for="sample1">First name</label>                            
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                             <input class="mdl-textfield__input" required type="text" name="lname">
                             <label class="mdl-textfield__label" for="sample1">Last Name</label>                            
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                             <input class="mdl-textfield__input" required type="email" name="email">
                             <label class="mdl-textfield__label" for="sample1">Email</label>                            
                            </div>
                            </br>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                               <textarea class="mdl-textfield__input" type="text" rows= "3" name="note" ></textarea>
                                <label class="mdl-textfield__label" for="sample5">Note</label>
                             </div>
                             <button action="send.php" id="send" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                               Send
                             </button>
                        </form>
                        </div>
                                              
                        <div class="mdl-card__menu">   
                    </div>             
                   </div>
                   <nav id="connect">
					 <a href="mailto:Devinluker5@gmail.com?Subject=Portfolio"><img id="gmail"src="content/gmail.png" /></a>
					 <a href="https://www.linkedin.com/in/devin-luker-a81bb8115?trk=nav_responsive_tab_profile" target="_blank"><img  id="linked" src="content/linked.png"/></a>
					<a href="https://www.facebook.com/profile.php?id=1179174410" target="_blank"><img  id="fb" src="content/fb.png"/></a>                    
					<nav>
                 </div>  
               
                 
                 
                 
                
                
               
                
			 </main>
		<footer class="mdl-mini-footer">
  <div class="mdl-mini-footer__left-section">
    <div class="mdl-logo"></div>
    <ul class="mdl-mini-footer__link-list">
      <li><a >Designed By Devin Luker</a></li>
    </ul>
    <div id="ls"  class="fb-like" data-href="http://devinluker.azurewebsites.net/home.php" data-width="50" data-layout="button" data-action="like" data-show-faces="true" data-share="true">
     </div>
  </div>
  <div class="mdl-mini-footer_right-section">
      <div class="mdl-logo"></div>       
</footer>
			
       
	</body>
</html>