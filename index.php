<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KVCNVQB');</script>
		<!-- End Google Tag Manager -->
		<!-- meta's -->
		<meta charset="utf-8">
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="theme-color" content="#0055ff">
		<meta http-equiv="Content-Language" content="en,pt,fr,es,it,de,ja,zh,ru">
		<!-- favicon -->
		<link rel="shortcut icon" href="_assets/images/favicon.ico" />
		<!-- search google -->
		<META NAME="DESCRIPTION" CONTENT="Convert your videos, music, documents, files and many more to other formats and or extensions. Convert YouTube videos to audio and music">
		<META NAME="ABSTRACT" CONTENT="Convert files, audios, videos and documents to other extensions.">
		<META NAME="KEYWORDS" CONTENT="convert, exchange, change, types, videos, music, files, documents, media, extension, convert youtube video, convert pdf, convert docx, download youtube videos, change the image extension, change the type, change extension, download video without audio">
		<META NAME="ROBOT" CONTENT="Index,Follow,Noarchive">
		<META NAME="googlebot" CONTENT="Index,Follow,Noarchive">
		<meta name="google-site-verification" content="kzXe5WP-0o9iDobNk6cYdNNapmM0dA1_Fb68U11j7-8"/>
		<META NAME="DISTRIBUTION" CONTENT="global">
		<META NAME="LANGUAGE" CONTENT="EN">
		<!-- OG facebook -->
		<meta property="og:locale" content="en_US">
		<meta property="og:url" content="index.php">
		<meta property="og:title" content="Convert Type">
		<meta property="og:site_name" content="converttype">
		<meta property="og:description" content="Convert your videos, music, documents, files and many more to other formats and or extensions. Convert YouTube videos to audio and music">
		<meta property="og:image" content="_assets/images/converttype_logo.png">
		<meta property="og:image:secure_url" content="https://converttype.com/_assets/images/converttype_logo.png">
		<meta property="og:image:type" content="image/jpeg">
		<meta property="og:image:width" content="150"> <!-- pixel -->
		<meta property="og:image:height" content="150"> <!-- pixel -->
		<meta property="og:type" content="website">

		<link rel="canonical" href="https://converttype.com/">

		<!-- title -->
		<title>Convert Type - Convert your files</title>
		<!-- Icones materilalize -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- Styles -->
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="_assets/layout/index.min.css">
	</head>
	<body id="begin" class="background">
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KVCNVQB"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<!-- content -->
		<main>
			<div class="container">
				<div class="navbar">
					<nav>
						<div class="nav-wrapper center colorprimary">
							<!-- g translate -->
							<div id="google_translate_element"></div>
							<a href="index.php" class="pos-logo-top"><img src="_assets/images/converttype_negative.png" alt="CONVERTTYPE.com" class="pos-logo-top"></a>
						</div>
					</nav>
				</div>

				<div class="row colorprimary nospacerow title-top">
					<div class="col s12 m12 l12 center white-text">
					<h3 class="convert_to">TO <t id="convert_to">AUDIO</t></h3>
					</div>
				</div>
				<!-- menu -->
				<div class="navbar">
					<nav class="nav-center">
						<div class="nav-wrapper colorprimary">
							<!-- icon open menu no mobile -->
							<a href="#" data-target="mobile-navbar" class="sidenav-trigger">
								<i class="material-icons">menu</i>
							</a>
							<ul id="navbar-items" class="hide-on-med-and-down">
								<li><a href="index.php" class="begin">HOME</a></li>
								<li><a href="about.php" class="about">ABOUT</a></li>
								<li><a href="tutorial.php" class="tutorial">TUTORIAL</a></li>
								<li><a href="contact.php" class="contact">CONTACT</a></li>
								<li><a class="link sel audio" data-target="1">AUDIO</a></li>
								<li><a class="link sel video" data-target="2">VIDEO</a></li>
								<li><a class="link sel image" data-target="3">IMAGES</a></li>
								<li><a class="link sel doc" data-target="5">DOCUMENTS</a></li>
							</ul>
						</div>
					</nav>
				</div>
				<ul id="mobile-navbar" class="sidenav">
					<li><a href="index.php" class="begin">HOME</a></li>
					<li><a href="about.php" class="about">ABOUT</a></li>
					<li><a href="tutorial.php" class="tutorial">TUTORIAL</a></li>
					<li><a href="contact.php" class="contact">CONTACT</a></li>
					<li><a class="link sel" data-target="1">AUDIO</a></li>
					<li><a class="link sel" data-target="2">VIDEO</a></li>
					<li><a class="link sel" data-target="3">IMAGES</a></li>
					<li><a class="link sel" data-target="5">DOCUMENTS</a></li>
				</ul>
			</div>

			<!-- content inside main-->
			<div class="container">
				<div class="row">
					<div class="col s12 m12 l10 offset-l1 white container-input">
						<!-- conteudo principal -->
						<div class="row">
							<div class="col l12">
								<form method="post" id="formconv" enctype="multipart/form-data">
									<div class="row margin_form">
										<!-- options -->
										<div class="col s12 m12 l12">
											<h5>OPTIONS</h5>
											<p class="options">
												<a id="t_url" class="selectedlink link">via url</a> |
												<a id="t_input" class="link">upload</a>
											</p>
										</div>
										<!-- input -->
										<div class="col s12 m12 l10">
											<div class="col s12 m12 l10 col_input" id="div_url">
												<input type="number" class="none disabled" name="type" id="type" value="1">
												<input class="input_target" id="input_url" name="input_url" required placeholder="https://www.youtube.com/watch...."/>
											</div>
											<div class="col s12 m12 l12 col_input none" id="div_file">
												<div class="row">
													<div class="col s12 m8 l8">
														<div id="div_input_file" class="div_input_file disabled none col s12">
															<label for="input_file" class="colorprimary" id="lb_input_file">UPLOAD</label>
															<input type="file" class="input_file disabled none" accept="" id="input_file" name="input_file">
														</div>
													</div>
													<div class="col s6 offset-s3 m4 l4 explictype mgtopmob">
														<p class="convert_to3">TO</p>
														<select class="selecttype none" name="selecttype_video" id="selecttype_video">
															<optgroup label="VIDEO" class="none" id="optgv">
																<option value="mp4">MP4</option>
																<option value="wmv">WMV</option>
																<option value="avi">AVI</option>
																<option value="mov">MOV</option>
																<option value="webm">WEBM</option>
																<option value="ogv">OGV</option>
																<option value="mkv">MKV</option>
																<option value="flv">FLV</option>
																<option value="3g2">3G2</option>
																<option value="3gp">3GP</option>
															</optgroup>
															<optgroup label="AUDIO" class="none" id="optga">
																<option value="aac">AAC</option>
																<option value="aiff">AIFF</option>
																<option value="flac">FLAC</option>
																<option value="m4a">M4A</option>
																<option value="m4r">M4R</option>
																<option value="mmf">MMF</option>
																<option value="mp3">MP3</option>
																<option value="ogg">OGG</option>
																<option value="opus">OPUS</option>
																<option value="wav">WAV</option>
																<option value="wma">WMA</option>
															</optgroup>
														</select>
														<select class="selecttype none" name="selecttype_doc" id="selecttype_doc">
															<optgroup label="DOCUMENTS" class="none" id="optgd">
																<option value="doc" id="op_doc">DOC</option>
																<option value="pdf" id="op_pdf">PDF</option>
																<option value="docx" id="op_docx">DOCX</option>
																<option value="html" id="op_html">HTML</option>
																<option value="csv" id="op_csv">CSV</option>
																<option value="xls" id="op_xls">XLS</option>
																<option value="xlsx" id="op_xlsx">XLSX</option>
																<option value="txt" id="op_txt">TXT</option>
																<option value="rtf" id="op_rtf">RTF</option>
															</optgroup>
															<optgroup label="IMAGE" class="none" id="optgi">
																<option value="png" id="op_png">PNG</option>
																<option value="jpeg" id="op_jpeg">JPEG</option>
															</optgroup>
														</select>
													</div>
												</div>
											</div>
											<div class="col s6 offset-s3 m6 offset-m3 l2 center" id="div_descconvertinput">
												<p class="convert_to2">TO <t id="convert_to2">AUDIO</t></p>
											</div>
										</div>
										<!-- btn -->
										<div class="row margin_form center center-align">
											<div class="col s12 m12 l2 marginline">
												<button type="button" name="btn_convert" id="btn_convert" class="btn-ct btn colorprimary">CONVERT</button>
											</div>
										</div>
									</div>
								</form>
								<div class="row margin_form center center-align">
									<div class="none" id="load">
										<img src="_assets/images/load.gif" alt="load">
										<p>loading, wait.</p>
									</div>
									<div class="col s12 m12 l12 marginline">
										<?php
											if(isset($_GET["back"])){
												if ($_GET["back"] == "error") {
													echo "<p>There was an error converting your document. Try again or contact us.</p>";
												}
											}
										?>
										<p id="containerafter">
										<h4><a href="" download="" class='desc none' id='btn_download_filesaved'>DOWNLOAD</a></a>
										<p id="desc_ca" class="none">Click on the link you want to download (audio, video, video without audio and etc.) and then in the new tab that opens click on <i class="material-icons">more_vert</i> to download.</p>
										</p>
									</div>
								</div>
							</div>
						</div>
						
						<!-- conteudo depois do container de inputs e config -->

						<hr class="line"/>
						<div class="row">
							<div class="col l12">
								<div class="container" id="littleAbbout">
									<h4>ConvertType</h4>
									<p class="desc"> Share with your friends and family, show who you would like to convert your files, music, videos, images and everything else! come check out our tool. Check the <a href="tutorial.php"> tutorial </a> how to do it and what formats are supported. </p>
									<p class="desc"> Comment so that more people can know how the tool is used, and if it helped you! any questions please contact us, read our <a href="about.php"> about </a> page and if you have any questions read our privacy policy at the bottom of the site. </p>
								</div>
							</div>
						</div>

						<!-- propaganda -->
						<div class="row">
							<div class="col s12 m6 offset-m3 l6 offset-l3">
							</div>
						</div>

						<hr class="line"/>
						<div class="row">
							<div class="col l12 comment-fb">
								<div class="container" id="comments">
									<div id="fb-root"></div>
									<div class="fb-comments" data-href="https://converttype.com/" data-numposts="5" data-width=""></div>
								</div>
							</div>
						</div>

						<!-- propaganda -->
						<div class="row">
							<div class="col s12 m6 offset-m3 l6 offset-l3">
							</div>
						</div>

						<hr class="line"/>
						<div class="row">
							<div class="col l12">
								<div class="container" id="contact">
									<h4>CONTACT</h4>
									<p class="desc">Have any questions? have any comments? or want to place an order? contact us.</p>
									<form action="_assets/scripts/contact.php" method="post" class="row" id="formcontact">
										<div class="input-field col s12 m4">
										<input id="email" name="email" type="email" class="validate" required>
										<label for="email">Email</label>
										</div>
										<div class="input-field col s12 m9">
										<label for="msg">Message</label>
										<textarea id="msg" name="msg" rows="3" cols="15"  class="validate txtareacontact" required></textarea>
										</div>
										<div class="col s12 m12">
										<button type="submit" name="button" class="btn-ct btn colorprimary left btncontact">SEND</button>
										<p id="check" class="none"><i class="material-icons">check</i></p>
										<p id="close" class="none"><i class="material-icons">close</i></p>
										</div>
									</form>
								</div>
							</div>
						</div>

						<!-- propaganda -->
						<div class="row">
							<div class="col s12 m6 offset-m3 l6 offset-l3">
							</div>
						</div>

						<!-- footer -->
						<footer class="page-footer colorprimary pos-footer">
							<div class="container">
								<div class="row">
								<div class="col l6 s12">
									<h5 class="white-text">ABOUT</h5>
									<p class="grey-text text-lighten-4 desc">All rights are free, we only do it for the usefulness and daily use of everyone who may need it.</p>
									<a href="policyAndPrivacy.html" class="white-text desc">Click here to read the Privacy Policy</a>
								</div>
								<div class="col l4 offset-l2 s12">
									<h5 class="white-text">MOST USED</h5>
									<ul>
										<li><a class="grey-text text-lighten-3 sel audio" href="#" data-target="1">AUDIO</a></li>
										<li><a class="grey-text text-lighten-3 sel video" href="#" data-target="2">VIDEO</a></li>
										<li><a class="grey-text text-lighten-3 sel pdf" href="#" data-target="5">PDF</a></li>
										<li><a class="grey-text text-lighten-3 sel png" href="#" data-target="3">PNG</a></li>
										<li><a class="grey-text text-lighten-3" href="sitemap.html" data-target="3">SITEMAP</a></li>
									</ul>
								</div>
								</div>
							</div>
							<div class="footer-copyright">
								<div class="container">
								© 2021 Copyright
								<a class="grey-text text-lighten-4 right" href="#!">Ilion Tecnologia</a>
								</div>
							</div>
						</footer>
					</div>
				</div>
			</div>
		</main>
		
		<!-- scripts -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<!-- comments fb -->
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0" nonce="9Ut6Qmnj"></script>
		<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		<script src="_assets/scripts/index.min.js"></script>