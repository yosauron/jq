<!DOCTYPE html>
<html>             
<head>
	<meta charset="UTF-8" />

	<title>ThemeRoller | jQuery Mobile</title>
	
	<link rel="canonical" href="index.php" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

	<link rel="stylesheet" type="text/css" href="css/tr.layout.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/jquery.ui.css" />
	<link rel="stylesheet" type="text/css" href="css/farbtastic.css" />
	<link rel="stylesheet" type="text/css" href="css/tr.panel.css" />
	<link rel="stylesheet" type="text/css" href="kuler/kuler.css" />

	<script type="text/javascript" src="js/lib/jquery.js"></script>
	<script type="text/javascript" src="js/lib/jquery.ui.js"></script>
	<script type="text/javascript" src="js/lib/jquery.ui.tabs.paging.js"></script>
	<script type="text/javascript" src="js/lib/jquery.color.js"></script>
	<script type="text/javascript" src="js/lib/json2.js"></script>
	<script type="text/javascript" src="js/lib/farbtastic.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/panel.js"></script>
	<script type="text/javascript" src="js/ui.js"></script>
	<script type="text/javascript" src="js/version.js"></script>
	<script type="text/javascript" src="kuler/kuler.js"></script>
	<script type="text/javascript" src="jqm/1.2.0/panel.js"></script></head>
<body>
	
	<div id="load-mask">
		<div id="load-screen">
				<div id="load-spinner"></div>
		</div>	
	</div>
	
	
	<div id="interface">
		<div id="welcome" class="dialog" title=" ">
			<h1><strong>Welcome</strong> to ThemeRoller for jQuery Mobile</h1>
			<p>
				Create up to 26 theme "swatches" lettered from A-Z, 
				each with a unique color scheme, then mix and
				match for unlimited possibilities. We recommend building themes with at least 3 swatches (A-C). 
			</p>
			<p>
				<strong>To upgrade a 1.0 theme to 1.1:</strong> Click the Import button, paste in your uncompressed 1.0 theme, then tweak and download the 1.1 version. 
			</p>

			<div class="buttonpane">
				<div class="separator"></div>
				<img src="images/target_big.png" alt=" "/>
				<div id="colors">
					<div class="color-drag disabled" style="background-color: #C1272D"></div>
					<div class="color-drag disabled" style="background-color: #ED1C24"></div>
					<div class="color-drag disabled" style="background-color: #F7931E"></div>
					<div class="color-drag disabled" style="background-color: #FFCC33"></div>
					<div class="color-drag disabled" style="background-color: #FCEE21"></div>
					<div class="color-drag disabled" style="background-color: #D9E021"></div>
					<div class="color-drag disabled" style="background-color: #8CC63F"></div>
					<div class="color-drag disabled" style="background-color: #009245"></div>
					<div class="color-drag disabled" style="background-color: #006837"></div>
					<div class="color-drag disabled" style="background-color: #00A99D"></div>
					<div class="color-drag disabled" style="background-color: #33CCCC"></div>
					<div class="color-drag disabled" style="background-color: #33CCFF"></div>
				</div>
			</div>
		</div>

		<div id="upload" class="dialog" title=" ">
			<h1><strong>Import</strong> Theme<span href="#" id="import-default">Import Default Theme</span></h1>
			<label>Upgrade to version:</label><select id="upgrade-to-version"><option value="1.0.1">1.0.1</option><option value="1.1.0">1.1.0</option><option value="1.1.1">1.1.1</option><option value="1.2.0">1.2.0</option></select>			<textarea id="load-css"></textarea>
			<div class="buttonpane">

				<img src="images/target_big.png" alt=" "/>
				<p>
					Copy and paste the contents of any uncompressed 
					jQuery Mobile theme file to load it in for editing.
				</p>
			</div>
		</div>

		<div id="download" class="dialog" title=" ">
			<h1><strong>Download</strong> Theme<input value="" /><label for="theme-name">Theme Name</label></h1>
			<p>
				This will generate a Zip file that contains both a compressed (for production) and uncompressed (for editing) 
				version of the theme.
			</p>
			<p><strong>To use your theme</strong>, add it to the head of your page before the jquery.mobile.structure file, like this:</p>
			<pre>
				<code>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;

  &lt;title&gt;jQuery Mobile page&lt;/title&gt;
  &lt;meta charset="utf-8" /&gt;
  &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
  <b class="highlight">&lt;link rel="stylesheet" href="css/themes/my-custom-theme.css" /&gt;</b>
  &lt;link rel="stylesheet" href="http://code.jquery.com/mobile/<span class="version-num">1.2.0</span>/jquery.mobile.structure-<span class="version-num">1.2.0</span>.min.css" /&gt; 
  &lt;script src="http://code.jquery.com/jquery-1.7.2.min.js"&gt;&lt;/script&gt; 
  &lt;script src="http://code.jquery.com/mobile/<span class="version-num">1.2.0</span>/jquery.mobile-<span class="version-num">1.2.0</span>.min.js"&gt;&lt;/script&gt; 

&lt;/head&gt;
				</code>
			</pre>
			<div class="buttonpane">
				<div class="separator"></div>
				<img src="images/target_big.png" alt=" "/>
				<p>
					Tip: To edit your theme later, use the import feature to paste in the uncompressed theme file
				</p>
			</div>
		</div>
		
		<div id="share" class="dialog" title=" ">
			<h1><strong>Share</strong> Theme</h1>
			<p>
				Use this link to share a copy of your theme. People can download 
				or edit a copy of the theme, but your version won’t be changed. 
			</p>
			<div class="input-wrapper">
			    <input type="text" value="" />
			    <span class="loading-text">
			        <img src="images/ajax-load-black.gif" />
    			    Loading...
			    </span>
			</div>
			<div class="buttonpane">
				<div class="separator"></div>
				<img src="images/target_big.png" alt=" "/>
				<p>
					Important note: We can only store this theme URL on the server for 30 days, then it will be deleted. 
					Download a theme to keep a copy safe that you can import later.
				</p>
			</div>
		</div>

		<div id="help" class="dialog" title=" ">
			<h1 id="help-top"><strong>ThemeRoller Mobile Help</strong></h1>

			<p>The ThemeRoller Mobile tool makes it easy to create custom-designed themes for your mobile site or app. Just pick colors, then share your theme URL, or download the theme and drop it into your site.</p>
			<ul>
				<li><a href="index.php#theme-intro">Theme basics</a></li>
				<li><a href="index.php#getting-started">Getting started</a></li>
				<li><a href="index.php#downloading">Downloading themes</a></li>
				<li><a href="index.php#importing">Importing themes</a></li>
				<li><a href="index.php#sharing">Sharing themes</a></li>
				<li><a href="index.php#supported">Supported browsers</a></li>
			</ul>

			<h3 id="theme-intro">Theme basics <a href="index.php#help-top" class="help-top">^ Top</a></h3>
			<p>A jQuery Mobile theme contains a both global settings for things like rounded corner radius and active (on) state, and up to to 26 "swatches" lettered from A-Z, each with a unique color scheme that can be mixed and matched for unlimited possibilities. Each swatch  sets the colors, textures and font settings for the primary elements: toolbar, content block and button. Buttons have 3 interaction states: normal, hover, pressed. We recommend building themes with at least 3 swatches (A-C).</p>

			<h3 id="getting-started">Getting Started <a href="index.php#help-top" class="help-top">^ Top</a></h3>
			<p>The ThemeRoller interface has 3 major zones: the left column contains the inspector panel, along the top is the QuickSwatch/Kuler bar, and below this is the preview window. </p>
			<p>Use the <strong>inspector pane</strong> to set global theme settings on the first tab and tweak the individual style options for each swatch. Above the tabs, there are links to download, share, or import a theme.</p>
			<p>In the <strong>QuickSwatch bar</strong>, you can turn the inspector feature on to automatically expand the relevant inspector section when you click on an element in the preview pane. Drag and drop a color from the QuickSwatch panel onto an element in the preview pane and the tool with automatically calculate text color and shadow, borders, gradients and even button states. The sliders make it easy to adjust the lightness and saturation of the colors. Click the Adobe Kuler Swatches to load pre-made color palettes from Adobe's popular color palette sharing site.</p>
				<p>The <strong>preview pane</strong> shows a sample of common jQuery Mobile widgets that live update each time you make a change to the theme so you can quickly test and tweak the theme.</p>

				<h3 id="downloading">Downloading themes <a href="index.php#help-top" class="help-top">^ Top</a></h3>
				<p>Once you have created your final theme, click the <strong>Download Theme</strong> link at the top of the inspector panel. In the download dialog, give your theme a name and press the <strong>Download Zip</strong> button. This will generate a zip file that contains both the compressed (production-ready) and uncompressed (editable) theme files and a simple test page (index.html) to show that everything worked (whew) and instructions on how to add the theme to your site. It's pretty simple: link your custom theme in the head of the page followed by the jQuery Mobile structure theme and you're ready to go. </p>

				<h3 id="importing">Importing themes <a href="index.php#help-top" class="help-top">^ Top</a></h3>
				<p>The import feature is primarily designed to make it easy to either edit a theme you've downloaded or to generate an updated version of a theme for a new release of the library. When you download a theme, be sure keep the uncompressed version of the theme CSS file because this is used in the import process. To import a theme, click the <strong>Import</strong> link and paste the entire contents of the uncompressed theme file (select all > copy > paste) into the text input in the dialog, and the system will parse the theme into an editable format for sharing and downloading.</p>

				<h3 id="sharing">Sharing themes <a href="index.php#help-top" class="help-top">^ Top</a></h3>
				<p>To generate a theme URL that can be shared with others, click the <strong>Share</strong> link and copy the URL. Post it on Twitter and become a famous theme artist. Anyone that opens the shared URL can edit or download the theme, but this activity won't affect your original theme. Note that due to the high volume of traffic, we can only store your theme on the server for 30 days so shared links have an expiration date. Be sure to download a copy of your theme for safekeeping.</p>

				<h3 id="supported">Supported browsers <a href="index.php#help-top" class="help-top">^ Top</a></h3>
				<p>This is a beta version of a developer tool so we're committing to supporting the <strong>latest</strong> versions of popular desktop browsers: Chrome, Firefox, Safari. Even though the tool works in IE9, it doesn't support CSS gradients so we don't recommend recommend using this browser to create themes. If you're running into issues, maybe try a different browser or <a href="https://github.com/jquery/web-jquery-mobile-theme-roller/issues" target="new"><strong>log an issue</strong></a> in the tracker.</p>

			<div class="buttonpane">
				<div class="separator"></div>
				<img src="images/target_big.png" alt=" "/>
				<p>
					&nbsp;&nbsp;
				</p>
			</div>
		</div>
		
		<div id="toolbar">
			<div id="tr-logo"></div>
			<div id="button-block-1">
				<div class="tb-button" id="version-select">
					<img src="images/jqm_logo_small.png" alt="jQuery Mobile"/>
					<img id="version-select-arrow" src="images/version_select_arrow.png" alt=" " />
					<div id="current-version">Version 1.2.0</div>
					
					<ul><b>Switch to version:</b><li data-version="1.0.1">1.0.1</li><li data-version="1.1.0">1.1.0</li><li data-version="1.1.1">1.1.1</li></ul>				</div>
				
				<div id="fix-buttons">
					<div id="undo">
						<img src="images/undo.png" alt="Undo" />
						<span>undo</span>
					</div>
					<div id="redo">
						<img src="images/redo.png" alt="Redo" />
						<span>redo</span>
					</div>
				</div>
				<div class="tb-button" id="inspector-button">
					<img src="images/inspector.png" alt=" "/>
					<span>Inspector <strong>off</strong></span>
				</div>
			</div>
			<div id="button-block-2">
				<div class="tb-button" id="download-button">
					<div class="tb-button-inner">
						<img src="images/download.png" alt="Download" />
						<div class="text">
							<span class="big">Download</span>
							<span>theme zip file</span>
						</div>
					</div>
				</div>
				<div class="tb-button" id="import-button">
					<div class="tb-button-inner">
						<img src="images/import.png" alt="Import" />
						<div class="text">
							<span class="big">Import</span>
							<span>or upgrade</span>
						</div>
					</div>
				</div>
				<div class="tb-button" id="share-button">
					<div class="tb-button-inner">
						<img src="images/share.png" alt="Share" />
						<div class="text">
							<span class="big">Share</span>
							<span>theme link</span>
						</div>
					</div>
				</div>
				<div class="tb-button" id="help-button">
					<div class="tb-button-inner">
						<img src="images/help.png" alt="Help" />
						<div class="text">
							<span class="big">Help</span>
							<span>center</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="colorpicker"></div>
		
		<div id="tr_panel">
			<div id="tabs">
				<ul>
				    <!--Tabs and tab panels go here-->
				</ul>
			</div>
		</div>
		
		<div id="wrapper">
			<div id="header-wrapper">
				<div id="header">
					<div id="quickswatch">
						<h2>Drag a color onto an element below</h2>
						<div class="colors">
							<div class="color-drag" style="background-color: #FFFFFF"></div>
							<div class="color-drag" style="background-color: #F2F2F2"></div>
							<div class="color-drag" style="background-color: #E6E6E6"></div>
							<div class="color-drag" style="background-color: #CCCCCC"></div>
							<div class="color-drag" style="background-color: #808080"></div>
							<div class="color-drag" style="background-color: #4D4D4D"></div>
							<div class="color-drag" style="background-color: #000000"></div>
							<div class="color-drag" style="background-color: #C1272D"></div>
							<div class="color-drag" style="background-color: #ED1C24"></div>
							<div class="color-drag" style="background-color: #F7931E"></div>
							<div class="color-drag" style="background-color: #FFCC33"></div>
							<div class="color-drag" style="background-color: #FCEE21"></div>
							<div class="color-drag" style="background-color: #D9E021"></div>
							<div class="color-drag" style="background-color: #8CC63F"></div>
							<div class="color-drag" style="background-color: #009245"></div>
							<div class="color-drag" style="background-color: #006837"></div>
							<div class="color-drag" style="background-color: #00A99D"></div>
							<div class="color-drag" style="background-color: #33CCCC"></div>
							<div class="color-drag" style="background-color: #33CCFF"></div>
							<div class="color-drag" style="background-color: #29ABE2"></div>
							<div class="color-drag" style="background-color: #0071BC"></div>
							<div class="color-drag" style="background-color: #2E3192"></div>
							<div class="color-drag" style="background-color: #662D91"></div>
							<div class="color-drag" style="background-color: #93278F"></div>
							<div class="color-drag" style="background-color: #D4145A"></div>
							<div class="color-drag" style="background-color: #ED1E79"></div>
							<div class="color-drag" style="background-color: #C7B299"></div>
							<div class="color-drag" style="background-color: #736357"></div>
							<div class="color-drag" style="background-color: #C69C6D"></div>
							<div class="color-drag" style="background-color: #8C6239"></div>
							<div class="color-drag" style="background-color: #603813"></div>
						</div>
						<div id="sliders">
							<img src="images/target.png" alt=" "/>
							<span>LIGHTNESS</span><div id="lightness_slider"></div>
							<span>SATURATION</span><div id="saturation_slider"></div>
						</div>
					</div>
					<div id="kuler">
					    <div id="left-panel">
					        <img src="kuler/images/kuler-logo-large.png" alt=" " />
					        <select id="kuler-select">
					            <option value="recent">Newest</option>
					            <option value="popular">Popular</option>
					            <option value="rating">Highest Rated</option>
					            <option value="random">Random</option>
					            <option value="tag">Search Tags</option>
					            <option value="title">Search Title</option>
					            <option value="hex">Search Colors</option>
					        </select>
					        <div id="kuler-search-query">
					            <input />
					            <button id="kuler-search">
					            </button>
					        </div>
					    </div>
					    <div id="center-panel">
					    </div>
					    <div id="right-panel">
					        <div id="kuler-close">
					            <img src="kuler/images/close.png" />
					        </div>
					        <div id="kuler-pages">
					            <div>
					                <br />
					                <br />
					            </div>
					            <div id="kuler-back-page">
					                <img src="kuler/images/arrow-l.png" alt=" " />
					            </div>
					            <div id="kuler-next-page">
					                <img src="kuler/images/arrow-r.png" alt=" " />
					            </div>
					        </div>
					    </div>
					</div>
					<div id="most-recent-colors">
						<div class="picker">
							<h2>Recent Colors</h2>
							<div class="compact">
								<a id="recent-color-picker" href="index.php#">colors...</a>
                <input type="text" class="colorwell-toggle" value="#FFFFFF" data-name="recent" style="display: none" />
							</div>
						</div>
						<div class="clear"></div>
						<div class="colors">
							<div class="color-drag disabled" style="background-color: #ddd"></div>
							<div class="color-drag disabled" style="background-color: #ddd"></div>
							<div class="color-drag disabled" style="background-color: #ddd"></div>
							<div class="color-drag disabled" style="background-color: #ddd"></div>
							<div class="color-drag disabled" style="background-color: #ddd"></div>
							<div class="color-drag disabled" style="background-color: #ddd"></div>
							<div class="color-drag disabled" style="background-color: #ddd"></div>
							<div class="color-drag disabled" style="background-color: #ddd"></div>
							<div class="color-drag disabled" style="background-color: #ddd"></div>
							<div class="color-drag disabled" style="background-color: #ddd"></div>
							<div class="color-drag disabled" style="background-color: #ddd"></div>
							<div class="color-drag disabled" style="background-color: #ddd"></div>
							<div class="color-drag disabled" style="background-color: #ddd"></div>
							<div class="color-drag disabled" style="background-color: #ddd"></div>
							<div class="color-drag disabled" style="background-color: #ddd"></div>
							<div class="color-drag disabled" style="background-color: #ddd"></div>
							<div class="color-drag disabled" style="background-color: #ddd"></div>
							<div class="color-drag disabled" style="background-color: #ddd"></div>
							<div class="color-drag disabled" style="background-color: #ddd"></div>
							<div class="color-drag disabled" style="background-color: #ddd"></div>
						</div>
					</div>
					<div id="back-to-jquery">
						<a href="../index.html">
							<img src="images/jquery-mobile-logo.png" alt="jQuery Mobile" />
							<img id="right-arrow" src="images/right_arrow.png" alt=" "/>
						</a>
					</div>
				</div>
			</div>

			<div id="content">
				<iframe id="frame" src="jqm/1.2.0/preview.html" onload="TR.iframeLoadCallback();">
				</iframe>
			</div>
			
			<div id="version">1.2.0</div>			
						
			<div id="style">/*
* jQuery Mobile Framework Git Build: SHA1: c2d61e2e592c67519d9a9ed0ba796fa44787e136 <> Date: Tue Sep 25 10:38:12 2012 -0700
* http://jquerymobile.com
*
* Copyright 2012 jQuery Foundation and other contributors
* Released under the MIT license.
* http://jquery.org/license
*
*/


/* Swatches */

/* A
-----------------------------------------------------------------------------------------------------------*/

.ui-bar-a {
	border: 1px solid 		#b3b3b3 /*{a-bar-border}*/;
	background: 			#eeeeee /*{a-bar-background-color}*/;
	color: 					#3e3e3e /*{a-bar-color}*/;
	font-weight: bold;
	text-shadow: 0 /*{a-bar-shadow-x}*/ 1px /*{a-bar-shadow-y}*/ 1px /*{a-bar-shadow-radius}*/ 	#ffffff /*{a-bar-shadow-color}*/;
	background-image: -webkit-gradient(linear, left top, left bottom, from( #f0f0f0 /*{a-bar-background-start}*/), to( #dddddd /*{a-bar-background-end}*/)); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #f0f0f0 /*{a-bar-background-start}*/, #dddddd /*{a-bar-background-end}*/); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #f0f0f0 /*{a-bar-background-start}*/, #dddddd /*{a-bar-background-end}*/); /* FF3.6 */
	background-image:     -ms-linear-gradient( #f0f0f0 /*{a-bar-background-start}*/, #dddddd /*{a-bar-background-end}*/); /* IE10 */
	background-image:      -o-linear-gradient( #f0f0f0 /*{a-bar-background-start}*/, #dddddd /*{a-bar-background-end}*/); /* Opera 11.10+ */
	background-image:         linear-gradient( #f0f0f0 /*{a-bar-background-start}*/, #dddddd /*{a-bar-background-end}*/);
}
.ui-bar-a .ui-link-inherit {
	color: 	#3e3e3e /*{a-bar-color}*/;
}

.ui-bar-a a.ui-link {
	color: #7cc4e7 /*{a-bar-link-color}*/;
	font-weight: bold;
}

.ui-bar-a a.ui-link:visited {
    color: #2489ce /*{a-bar-link-visited}*/;
}

.ui-bar-a a.ui-link:hover {
	color: #2489ce /*{a-bar-link-hover}*/;
}

.ui-bar-a a.ui-link:active {
	color: #2489ce /*{a-bar-link-active}*/;
}

.ui-bar-a,
.ui-bar-a input,
.ui-bar-a select,
.ui-bar-a textarea,
.ui-bar-a button {
	font-family: Helvetica, Arial, sans-serif /*{global-font-family}*/;
}
.ui-body-a,
.ui-overlay-a {
	border: 1px solid 		#aaaaaa /*{a-body-border}*/;
	color: 					#333333 /*{a-body-color}*/;
	text-shadow: 0 /*{a-body-shadow-x}*/ 1px /*{a-body-shadow-y}*/ 0 /*{a-body-shadow-radius}*/ #ffffff /*{a-body-shadow-color}*/;
	background: 			#f9f9f9 /*{a-body-background-color}*/;
	background-image: -webkit-gradient(linear, left top, left bottom, from( #f9f9f9 /*{a-body-background-start}*/), to( #eeeeee /*{a-body-background-end}*/)); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #f9f9f9 /*{a-body-background-start}*/, #eeeeee /*{a-body-background-end}*/); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #f9f9f9 /*{a-body-background-start}*/, #eeeeee /*{a-body-background-end}*/); /* FF3.6 */
	background-image:     -ms-linear-gradient( #f9f9f9 /*{a-body-background-start}*/, #eeeeee /*{a-body-background-end}*/); /* IE10 */
	background-image:      -o-linear-gradient( #f9f9f9 /*{a-body-background-start}*/, #eeeeee /*{a-body-background-end}*/); /* Opera 11.10+ */
	background-image:         linear-gradient( #f9f9f9 /*{a-body-background-start}*/, #eeeeee /*{a-body-background-end}*/);
}
.ui-overlay-a {
	background-image: none;
	border-width: 0;
}
.ui-body-a,
.ui-body-a input,
.ui-body-a select,
.ui-body-a textarea,
.ui-body-a button {
	font-family: Helvetica, Arial, sans-serif /*{global-font-family}*/;
}
.ui-body-a .ui-link-inherit {
	color: 	#333333 /*{a-body-color}*/;
}

.ui-body-a .ui-link {
	color: #2489ce /*{a-body-link-color}*/;
	font-weight: bold;
}

.ui-body-a .ui-link:visited {
    color: #2489ce /*{a-body-link-visited}*/;
}

.ui-body-a .ui-link:hover {
	color: #2489ce /*{a-body-link-hover}*/;
}

.ui-body-a .ui-link:active {
	color: #2489ce /*{a-body-link-active}*/;
}

.ui-btn-up-a {
	border: 1px solid 		#cccccc /*{a-bup-border}*/;
	background: 			#eeeeee /*{a-bup-background-color}*/;
	font-weight: bold;
	color: 					#222222 /*{a-bup-color}*/;
	text-shadow: 0 /*{a-bup-shadow-x}*/ 1px /*{a-bup-shadow-y}*/ 0 /*{a-bup-shadow-radius}*/ #ffffff /*{a-bup-shadow-color}*/;
	background-image: -webkit-gradient(linear, left top, left bottom, from( #ffffff /*{a-bup-background-start}*/), to( #f1f1f1 /*{a-bup-background-end}*/)); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #ffffff /*{a-bup-background-start}*/, #f1f1f1 /*{a-bup-background-end}*/); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #ffffff /*{a-bup-background-start}*/, #f1f1f1 /*{a-bup-background-end}*/); /* FF3.6 */
	background-image:     -ms-linear-gradient( #ffffff /*{a-bup-background-start}*/, #f1f1f1 /*{a-bup-background-end}*/); /* IE10 */
	background-image:      -o-linear-gradient( #ffffff /*{a-bup-background-start}*/, #f1f1f1 /*{a-bup-background-end}*/); /* Opera 11.10+ */
	background-image:         linear-gradient( #ffffff /*{a-bup-background-start}*/, #f1f1f1 /*{a-bup-background-end}*/);
}
.ui-btn-up-a:visited,
.ui-btn-up-a a.ui-link-inherit {
	color: 					#2f3e46 /*{a-bup-color}*/;
}
.ui-btn-hover-a {
	border: 1px solid 		#bbbbbb /*{a-bhover-border}*/;
	background: 			#dfdfdf /*{a-bhover-background-color}*/;
	font-weight: bold;
	color: 					#222222 /*{a-bhover-color}*/;
	text-shadow: 0 /*{a-bhover-shadow-x}*/ 1px /*{a-bhover-shadow-y}*/ 0 /*{a-bhover-shadow-radius}*/ #ffffff /*{a-bhover-shadow-color}*/;
	background-image: -webkit-gradient(linear, left top, left bottom, from( #f6f6f6 /*{a-bhover-background-start}*/), to( #e0e0e0 /*{a-bhover-background-end}*/)); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #f6f6f6 /*{a-bhover-background-start}*/, #e0e0e0 /*{a-bhover-background-end}*/); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #f6f6f6 /*{a-bhover-background-start}*/, #e0e0e0 /*{a-bhover-background-end}*/); /* FF3.6 */
	background-image:     -ms-linear-gradient( #f6f6f6 /*{a-bhover-background-start}*/, #e0e0e0 /*{a-bhover-background-end}*/); /* IE10 */
	background-image:      -o-linear-gradient( #f6f6f6 /*{a-bhover-background-start}*/, #e0e0e0 /*{a-bhover-background-end}*/); /* Opera 11.10+ */
	background-image:         linear-gradient( #f6f6f6 /*{a-bhover-background-start}*/, #e0e0e0 /*{a-bhover-background-end}*/);
}
.ui-btn-hover-a:visited,
.ui-btn-hover-a:hover,
.ui-btn-hover-a a.ui-link-inherit {
	color: 					#2f3e46 /*{a-bhover-color}*/;
}
.ui-btn-down-a {
	border: 1px solid 		#bbbbbb /*{a-bdown-border}*/;
	background: 			#d6d6d6 /*{a-bdown-background-color}*/;
	font-weight: bold;
	color: 					#222222 /*{a-bdown-color}*/;
	text-shadow: 0 /*{a-bdown-shadow-x}*/ 1px /*{a-bdown-shadow-y}*/ 0 /*{a-bdown-shadow-radius}*/ #ffffff /*{a-bdown-shadow-color}*/;
	background-image: -webkit-gradient(linear, left top, left bottom, from( #d0d0d0 /*{a-bdown-background-start}*/), to( #dfdfdf /*{a-bdown-background-end}*/)); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #d0d0d0 /*{a-bdown-background-start}*/, #dfdfdf /*{a-bdown-background-end}*/); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #d0d0d0 /*{a-bdown-background-start}*/, #dfdfdf /*{a-bdown-background-end}*/); /* FF3.6 */
	background-image:     -ms-linear-gradient( #d0d0d0 /*{a-bdown-background-start}*/, #dfdfdf /*{a-bdown-background-end}*/); /* IE10 */
	background-image:      -o-linear-gradient( #d0d0d0 /*{a-bdown-background-start}*/, #dfdfdf /*{a-bdown-background-end}*/); /* Opera 11.10+ */
	background-image:         linear-gradient( #d0d0d0 /*{a-bdown-background-start}*/, #dfdfdf /*{a-bdown-background-end}*/);
}
.ui-btn-down-a:visited,
.ui-btn-down-a:hover,
.ui-btn-down-a a.ui-link-inherit {
	color: 					#2f3e46 /*{a-bdown-color}*/;
}
.ui-btn-up-a,
.ui-btn-hover-a,
.ui-btn-down-a {
	font-family: Helvetica, Arial, sans-serif /*{global-font-family}*/;
	text-decoration: none;
}


/* Structure */

/* links within "buttons" 
-----------------------------------------------------------------------------------------------------------*/

a.ui-link-inherit {
	text-decoration: none !important;
}


/* Active class used as the "on" state across all themes
-----------------------------------------------------------------------------------------------------------*/
.ui-btn-active {
	border: 1px solid 		#2373a5 /*{global-active-border}*/;
	background: 			#5393c5 /*{global-active-background-color}*/;
	font-weight: bold;
	color: 					#ffffff /*{global-active-color}*/;
	cursor: pointer;
	text-shadow: 0 /*{global-active-shadow-x}*/ 1px /*{global-active-shadow-y}*/ 1px /*{global-active-shadow-radius}*/ #3373a5 /*{global-active-shadow-color}*/;
	text-decoration: none;
	background-image: -webkit-gradient(linear, left top, left bottom, from( #5393c5 /*{global-active-background-start}*/), to( #6facd5 /*{global-active-background-end}*/)); /* Saf4+, Chrome */
	background-image: -webkit-linear-gradient( #5393c5 /*{global-active-background-start}*/, #6facd5 /*{global-active-background-end}*/); /* Chrome 10+, Saf5.1+ */
	background-image:    -moz-linear-gradient( #5393c5 /*{global-active-background-start}*/, #6facd5 /*{global-active-background-end}*/); /* FF3.6 */
	background-image:     -ms-linear-gradient( #5393c5 /*{global-active-background-start}*/, #6facd5 /*{global-active-background-end}*/); /* IE10 */
	background-image:      -o-linear-gradient( #5393c5 /*{global-active-background-start}*/, #6facd5 /*{global-active-background-end}*/); /* Opera 11.10+ */
	background-image:         linear-gradient( #5393c5 /*{global-active-background-start}*/, #6facd5 /*{global-active-background-end}*/);
	font-family: Helvetica, Arial, sans-serif /*{global-font-family}*/;
}
.ui-btn-active:visited,
.ui-btn-active:hover,
.ui-btn-active a.ui-link-inherit {
	color: 					#ffffff /*{global-active-color}*/;
}


/* button inner top highlight
-----------------------------------------------------------------------------------------------------------*/

.ui-btn-inner {
	border-top: 1px solid 	#fff;
	border-color: 			rgba(255,255,255,.3);
}


/* corner rounding classes
-----------------------------------------------------------------------------------------------------------*/

.ui-corner-tl {
	-moz-border-radius-topleft: 		.6em /*{global-radii-blocks}*/;
	-webkit-border-top-left-radius: 	.6em /*{global-radii-blocks}*/;
	border-top-left-radius: 			.6em /*{global-radii-blocks}*/;
}
.ui-corner-tr {
	-moz-border-radius-topright: 		.6em /*{global-radii-blocks}*/;
	-webkit-border-top-right-radius: 	.6em /*{global-radii-blocks}*/;
	border-top-right-radius: 			.6em /*{global-radii-blocks}*/;
}
.ui-corner-bl {
	-moz-border-radius-bottomleft: 		.6em /*{global-radii-blocks}*/;
	-webkit-border-bottom-left-radius: 	.6em /*{global-radii-blocks}*/;
	border-bottom-left-radius: 			.6em /*{global-radii-blocks}*/;
}
.ui-corner-br {
	-moz-border-radius-bottomright: 	.6em /*{global-radii-blocks}*/;
	-webkit-border-bottom-right-radius: .6em /*{global-radii-blocks}*/;
	border-bottom-right-radius: 		.6em /*{global-radii-blocks}*/;
}
.ui-corner-top {
	-moz-border-radius-topleft: 		.6em /*{global-radii-blocks}*/;
	-webkit-border-top-left-radius: 	.6em /*{global-radii-blocks}*/;
	border-top-left-radius: 			.6em /*{global-radii-blocks}*/;
	-moz-border-radius-topright: 		.6em /*{global-radii-blocks}*/;
	-webkit-border-top-right-radius: 	.6em /*{global-radii-blocks}*/;
	border-top-right-radius: 			.6em /*{global-radii-blocks}*/;
}
.ui-corner-bottom {
	-moz-border-radius-bottomleft: 		.6em /*{global-radii-blocks}*/;
	-webkit-border-bottom-left-radius: 	.6em /*{global-radii-blocks}*/;
	border-bottom-left-radius: 			.6em /*{global-radii-blocks}*/;
	-moz-border-radius-bottomright: 	.6em /*{global-radii-blocks}*/;
	-webkit-border-bottom-right-radius: .6em /*{global-radii-blocks}*/;
	border-bottom-right-radius: 		.6em /*{global-radii-blocks}*/;
	}
.ui-corner-right {
	-moz-border-radius-topright: 		.6em /*{global-radii-blocks}*/;
	-webkit-border-top-right-radius: 	.6em /*{global-radii-blocks}*/;
	border-top-right-radius: 			.6em /*{global-radii-blocks}*/;
	-moz-border-radius-bottomright: 	.6em /*{global-radii-blocks}*/;
	-webkit-border-bottom-right-radius: .6em /*{global-radii-blocks}*/;
	border-bottom-right-radius: 		.6em /*{global-radii-blocks}*/;
}
.ui-corner-left {
	-moz-border-radius-topleft: 		.6em /*{global-radii-blocks}*/;
	-webkit-border-top-left-radius: 	.6em /*{global-radii-blocks}*/;
	border-top-left-radius: 			.6em /*{global-radii-blocks}*/;
	-moz-border-radius-bottomleft: 		.6em /*{global-radii-blocks}*/;
	-webkit-border-bottom-left-radius: 	.6em /*{global-radii-blocks}*/;
	border-bottom-left-radius: 			.6em /*{global-radii-blocks}*/;
}
.ui-corner-all {
	-moz-border-radius: 				.6em /*{global-radii-blocks}*/;
	-webkit-border-radius: 				.6em /*{global-radii-blocks}*/;
	border-radius: 						.6em /*{global-radii-blocks}*/;
}
.ui-corner-none {
	-moz-border-radius: 				   0;
	-webkit-border-radius: 				   0;
	border-radius: 						   0;
}

/* Form field separator
-----------------------------------------------------------------------------------------------------------*/
.ui-br {
	border-bottom: rgb(130,130,130);
	border-bottom: rgba(130,130,130,.3);
	border-bottom-width: 1px;
	border-bottom-style: solid;
}

/* Interaction cues
-----------------------------------------------------------------------------------------------------------*/
.ui-disabled {
	filter: Alpha(Opacity=30);
	opacity: .3;
	zoom: 1;
}
.ui-disabled,
.ui-disabled a {
	cursor: default !important;
	pointer-events: none;
}

/* Icons
-----------------------------------------------------------------------------------------------------------*/

.ui-icon,
.ui-icon-searchfield:after {
	background: 						#666666 /*{global-icon-color}*/;
	background: 						rgba(0,0,0,.4) /*{global-icon-disc}*/;
	background-image: url(images/icons-18-white.png) /*{global-icon-set}*/;
	background-repeat: no-repeat;
	-moz-border-radius: 				9px;
	-webkit-border-radius: 				9px;
	border-radius: 						9px;
}


/* Alt icon color
-----------------------------------------------------------------------------------------------------------*/

.ui-icon-alt {
	background: 						#fff;
	background: 						rgba(255,255,255,.3);
	background-image: url(images/icons-18-black.png);
	background-repeat: no-repeat;
}

/* HD/"retina" sprite
-----------------------------------------------------------------------------------------------------------*/

@media only screen and (-webkit-min-device-pixel-ratio: 1.5),
       only screen and (min--moz-device-pixel-ratio: 1.5),
       only screen and (min-resolution: 240dpi) {
	
	.ui-icon-plus, .ui-icon-minus, .ui-icon-delete, .ui-icon-arrow-r,
	.ui-icon-arrow-l, .ui-icon-arrow-u, .ui-icon-arrow-d, .ui-icon-check,
	.ui-icon-gear, .ui-icon-refresh, .ui-icon-forward, .ui-icon-back,
	.ui-icon-grid, .ui-icon-star, .ui-icon-alert, .ui-icon-info, .ui-icon-home, .ui-icon-search, .ui-icon-searchfield:after, 
	.ui-icon-checkbox-off, .ui-icon-checkbox-on, .ui-icon-radio-off, .ui-icon-radio-on {
		background-image: url(images/icons-36-white.png);
		-moz-background-size: 776px 18px;
		-o-background-size: 776px 18px;
		-webkit-background-size: 776px 18px;
		background-size: 776px 18px;
	}
	.ui-icon-alt {
		background-image: url(images/icons-36-black.png);
	}
}

/* plus minus */
.ui-icon-plus {
	background-position: 	-0 50%;
}
.ui-icon-minus {
	background-position: 	-36px 50%;
}

/* delete/close */
.ui-icon-delete {
	background-position: 	-72px 50%;
}

/* arrows */
.ui-icon-arrow-r {
	background-position: 	-108px 50%;
}
.ui-icon-arrow-l {
	background-position: 	-144px 50%;
}
.ui-icon-arrow-u {
	background-position: 	-180px 50%;
}
.ui-icon-arrow-d {
	background-position: 	-216px 50%;
}

/* misc */
.ui-icon-check {
	background-position: 	-252px 50%;
}
.ui-icon-gear {
	background-position: 	-288px 50%;
}
.ui-icon-refresh {
	background-position: 	-324px 50%;
}
.ui-icon-forward {
	background-position: 	-360px 50%;
}
.ui-icon-back {
	background-position: 	-396px 50%;
}
.ui-icon-grid {
	background-position: 	-432px 50%;
}
.ui-icon-star {
	background-position: 	-468px 50%;
}
.ui-icon-alert {
	background-position: 	-504px 50%;
}
.ui-icon-info {
	background-position: 	-540px 50%;
}
.ui-icon-home {
	background-position: 	-576px 50%;
}
.ui-icon-search,
.ui-icon-searchfield:after {
	background-position: 	-612px 50%;
}
.ui-icon-checkbox-off {
	background-position: 	-684px 50%;
}
.ui-icon-checkbox-on {
	background-position: 	-648px 50%;
}
.ui-icon-radio-off {
	background-position: 	-756px 50%;
}
.ui-icon-radio-on {
	background-position: 	-720px 50%;
}


/* checks,radios */
.ui-checkbox .ui-icon,
.ui-selectmenu-list .ui-icon {
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
}
.ui-icon-checkbox-off,
.ui-icon-radio-off {
	background-color: transparent;	
}
.ui-checkbox-on .ui-icon,
.ui-radio-on .ui-icon {
	background-color: #4596ce /*{global-active-background-color}*/; /* NOTE: this hex should match the active state color. It's repeated here for cascade */
}

/* loading icon */
.ui-icon-loading {
	background: url(images/ajax-loader.gif);
	background-size: 46px 46px;
}


/* Button corner classes
-----------------------------------------------------------------------------------------------------------*/

.ui-btn-corner-tl {
	-moz-border-radius-topleft: 		1em /*{global-radii-buttons}*/;
	-webkit-border-top-left-radius: 	1em /*{global-radii-buttons}*/;
	border-top-left-radius: 			1em /*{global-radii-buttons}*/;
}
.ui-btn-corner-tr {
	-moz-border-radius-topright: 		1em /*{global-radii-buttons}*/;
	-webkit-border-top-right-radius: 	1em /*{global-radii-buttons}*/;
	border-top-right-radius: 			1em /*{global-radii-buttons}*/;
}
.ui-btn-corner-bl {
	-moz-border-radius-bottomleft: 		1em /*{global-radii-buttons}*/;
	-webkit-border-bottom-left-radius: 	1em /*{global-radii-buttons}*/;
	border-bottom-left-radius: 			1em /*{global-radii-buttons}*/;
}
.ui-btn-corner-br {
	-moz-border-radius-bottomright: 	1em /*{global-radii-buttons}*/;
	-webkit-border-bottom-right-radius: 1em /*{global-radii-buttons}*/;
	border-bottom-right-radius: 		1em /*{global-radii-buttons}*/;
}
.ui-btn-corner-top {
	-moz-border-radius-topleft: 		1em /*{global-radii-buttons}*/;
	-webkit-border-top-left-radius: 	1em /*{global-radii-buttons}*/;
	border-top-left-radius: 			1em /*{global-radii-buttons}*/;
	-moz-border-radius-topright: 		1em /*{global-radii-buttons}*/;
	-webkit-border-top-right-radius: 	1em /*{global-radii-buttons}*/;
	border-top-right-radius: 			1em /*{global-radii-buttons}*/;
}
.ui-btn-corner-bottom {
	-moz-border-radius-bottomleft: 		1em /*{global-radii-buttons}*/;
	-webkit-border-bottom-left-radius: 	1em /*{global-radii-buttons}*/;
	border-bottom-left-radius: 			1em /*{global-radii-buttons}*/;
	-moz-border-radius-bottomright: 	1em /*{global-radii-buttons}*/;
	-webkit-border-bottom-right-radius: 1em /*{global-radii-buttons}*/;
	border-bottom-right-radius: 		1em /*{global-radii-buttons}*/;
}
.ui-btn-corner-right {
	 -moz-border-radius-topright: 		1em /*{global-radii-buttons}*/;
	-webkit-border-top-right-radius: 	1em /*{global-radii-buttons}*/;
	border-top-right-radius: 			1em /*{global-radii-buttons}*/;
	-moz-border-radius-bottomright: 	1em /*{global-radii-buttons}*/;
	-webkit-border-bottom-right-radius: 1em /*{global-radii-buttons}*/;
	border-bottom-right-radius: 		1em /*{global-radii-buttons}*/;
}
.ui-btn-corner-left {
	-moz-border-radius-topleft: 		1em /*{global-radii-buttons}*/;
	-webkit-border-top-left-radius: 	1em /*{global-radii-buttons}*/;
	border-top-left-radius: 			1em /*{global-radii-buttons}*/;
	-moz-border-radius-bottomleft: 		1em /*{global-radii-buttons}*/;
	-webkit-border-bottom-left-radius: 	1em /*{global-radii-buttons}*/;
	border-bottom-left-radius: 			1em /*{global-radii-buttons}*/;
}
.ui-btn-corner-all {
	-moz-border-radius: 				1em /*{global-radii-buttons}*/;
	-webkit-border-radius: 				1em /*{global-radii-buttons}*/;
	border-radius: 						1em /*{global-radii-buttons}*/;
}

/* radius clip workaround for cleaning up corner trapping */
.ui-corner-tl,
.ui-corner-tr,
.ui-corner-bl,
.ui-corner-br,
.ui-corner-top,
.ui-corner-bottom,
.ui-corner-right,
.ui-corner-left,
.ui-corner-all,
.ui-btn-corner-tl,
.ui-btn-corner-tr,
.ui-btn-corner-bl,
.ui-btn-corner-br,
.ui-btn-corner-top,
.ui-btn-corner-bottom,
.ui-btn-corner-right,
.ui-btn-corner-left,
.ui-btn-corner-all {
  -webkit-background-clip: padding-box;
     -moz-background-clip: padding;
          background-clip: padding-box;
}

/* Overlay / modal
-----------------------------------------------------------------------------------------------------------*/

.ui-overlay {
	background: #666;
	filter: Alpha(Opacity=50);
	opacity: .5;
	position: absolute;
	width: 100%;
	height: 100%;
}
.ui-overlay-shadow {
	-moz-box-shadow: 0px 0px 12px 			rgba(0,0,0,.6);
	-webkit-box-shadow: 0px 0px 12px 		rgba(0,0,0,.6);
	box-shadow: 0px 0px 12px 				rgba(0,0,0,.6);
}
.ui-shadow {
	-moz-box-shadow: 0px 1px 4px /*{global-box-shadow-size}*/ 			rgba(0,0,0,.3) /*{global-box-shadow-color}*/;
	-webkit-box-shadow: 0px 1px 4px /*{global-box-shadow-size}*/ 		rgba(0,0,0,.3) /*{global-box-shadow-color}*/;
	box-shadow: 0px 1px 4px /*{global-box-shadow-size}*/ 				rgba(0,0,0,.3) /*{global-box-shadow-color}*/;
}
.ui-bar-a .ui-shadow,
.ui-bar-b .ui-shadow ,
.ui-bar-c .ui-shadow  {
	-moz-box-shadow: 0px 1px 0 				rgba(255,255,255,.3);
	-webkit-box-shadow: 0px 1px 0 			rgba(255,255,255,.3);
	box-shadow: 0px 1px 0 					rgba(255,255,255,.3);
}
.ui-shadow-inset {
	-moz-box-shadow: inset 0px 1px 4px 		rgba(0,0,0,.2);
	-webkit-box-shadow: inset 0px 1px 4px 	rgba(0,0,0,.2);
	box-shadow: inset 0px 1px 4px 			rgba(0,0,0,.2);
}
.ui-icon-shadow {
	-moz-box-shadow: 0px 1px 0 				rgba(255,255,255,.4) /*{global-icon-shadow}*/;
	-webkit-box-shadow: 0px 1px 0 			rgba(255,255,255,.4) /*{global-icon-shadow}*/;
	box-shadow: 0px 1px 0 					rgba(255,255,255,.4) /*{global-icon-shadow}*/;
}

/* Focus state - set here for specificity (note: these classes are added by JavaScript)
-----------------------------------------------------------------------------------------------------------*/

.ui-btn:focus, .ui-link-inherit:focus {
	outline: 0;
}
.ui-btn.ui-focus {
	z-index: 1;
}
.ui-focus,
.ui-btn:focus {
	-moz-box-shadow: inset 0px 0px 3px 		#387bbe /*{global-active-background-color}*/, 0px 0px 9px 		#387bbe /*{global-active-background-color}*/;
	-webkit-box-shadow: inset 0px 0px 3px 	#387bbe /*{global-active-background-color}*/, 0px 0px 9px 		#387bbe /*{global-active-background-color}*/;
	box-shadow: inset 0px 0px 3px 			#387bbe /*{global-active-background-color}*/, 0px 0px 9px 		#387bbe /*{global-active-background-color}*/;
}
.ui-input-text.ui-focus,
.ui-input-search.ui-focus {
	-moz-box-shadow: 0px 0px 12px 			#387bbe /*{global-active-background-color}*/;
	-webkit-box-shadow: 0px 0px 12px 		#387bbe /*{global-active-background-color}*/;
	box-shadow: 0px 0px 12px 					#387bbe /*{global-active-background-color}*/;	
}

/* unset box shadow in browsers that don't do it right
-----------------------------------------------------------------------------------------------------------*/

.ui-mobile-nosupport-boxshadow * {
	-moz-box-shadow: none !important;
	-webkit-box-shadow: none !important;
	box-shadow: none !important;
}

/* ...and bring back focus */
.ui-mobile-nosupport-boxshadow .ui-focus,
.ui-mobile-nosupport-boxshadow .ui-btn:focus,
.ui-mobile-nosupport-boxshadow .ui-link-inherit:focus {
	outline-width: 1px;
	outline-style: auto;
}
			</div>

		</div>
	</div>
	
	
	
</body>
</html>
