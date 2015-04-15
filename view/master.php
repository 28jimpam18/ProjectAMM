<!DOCTYPE html>
	<html>
		<head>
			<meta http-equip="Content-Type" content="text/html; charset=utf-8">
			<title>AlborosieSite</title>
			<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
		</head>
			<body>
				<div id="page">
					<header>
						                   <div class="social">
                        
									<ul>
									    <li id="facebook"><a href="http://www.facebook.com">facebook</a></li>
									    <li id="twitter"><a href="https://twitter.com/">twitter</a></li>
									    <li id="myspace"><a href="http://www.myspace.com/">myspace</a></li>
									    <li id="instagram"><a href="http://www.instagram.com/">instagram</a></li>
									</ul>
											</div>
											<div id="header">
									<div id="logo">
									    <h1>Alborosie site</h1>
									</div>
								    </div>
							
					</header>
					
					<?php
						require($sidebar);
					?>


					<?php	
						require($content);
					?>	

					<div id="footer">
								<p>
								    Sito NON Ufficiale Alborosie.
								</p>
							    </div>
							    <div class="validator">
								<p>
								    <a href="http://validator.w3.org/check/referer" class="xhtml" title="Questa pagina contiene HTML valido">
									<abbr title="eXtensible HyperText Markup Language">HTML</abbr> Valido</a>
								    <a href="http://jigsaw.w3.org/css-validator/check/referer" class="css" title="Questa pagina ha CSS validi">
									<abbr title="Cascading Style Sheets">CSS</abbr> Valido</a>
								</p>
					</div>
				</div>

				
			</body>
	</html>
