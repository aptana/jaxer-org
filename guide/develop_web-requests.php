<?php ob_start(); ?>
		<link rel="stylesheet" type="text/css" href="style/jquery.treeview.css"/>
		<link rel="stylesheet" type="text/css" href="style/guide.css"/>
		<link rel="stylesheet" type="text/css" href="style/devices.css"/>
		<link rel="stylesheet" type="text/css" media="screen" href="style/highslide.css"/>
		<link rel="stylesheet" type="text/css" media="screen" href="style/highslide-html.css"/>
		<script type="text/javascript" src="lib/jquery/jquery-1.2.6.js"></script>
		<script type="text/javascript" src="lib/jquery/jquery.cookie.js" ></script>
		<script type="text/javascript" src="lib/jquery/jquery.treeview.js" ></script>
		<script type="text/javascript" src="lib/jquery/jquery.bigtarget.1.0.1.js"></script>
		<script type="text/javascript" src="lib/highslide/highslide-full.js"></script>
		<script type="text/javascript" src="lib/aptana/jxrGuideFull.js"></script>
<?php $head = ob_get_clean(); ?>
<?php $active = 'guide';?>
<?php include('../includes/header.php'); ?>
					<div id="content">
						<table id="holdsContent" cellpadding="0" cellspacing="0">
							<tr style="padding-top:0px;">
								<td id="leftSidebar">
									<div class="guide guide-navigation">
										<div class="navigation" id="mainTOC">
											<h3 class="navigation-master">Jaxer Guide</h3>
											<ul id="navigation-tree" class="filetree bigTarget">
												<li class="area"><span class="file"><a href="index.php" class="published">Introduction</a></span></li>
												<li class="area"><span class="folder"><a href="setup.php" class="published">Setup</a></span></li>
												<li class="area"><span class="folder">Develop</span>
													<ul id="develop">
														<li class="area"><span class="folder">Application Level Concepts</span>
														<ul>
															<li><span class="file"><a href="develop_basics.php" class="published">Basics</a></span></li>
															<li><span class="file"><a href="develop_lifecycle.php" class="published">Page Lifecycle</a></span></li>
															<li><span class="file"><a href="develop_applications.php" class="published">Applications</a></span></li>
															<li><span class="file"><a href="develop_requests.php" class="published">Requests and Responses</a></span></li>
															<li><span class="file"><a href="develop_proxies.php" class="published">Proxy Functions</a></span></li>
															<li><span class="file"><a href="develop_state.php" class="published">State and Event Handlers</a></span></li>
															<li><span class="file"><a href="develop_sandbox.php" class="published">Sandbox</a></span></li>
															<li><span class="file"><a href="develop_security.php" class="published">Security</a></span></li>
														</ul>
														</li>
														<li class="area"><span class="folder">Persistent Storage</span>
														<ul>
															<li><span class="file"><a href="develop_folders.php" class="published">Folders</a></span></li>
															<li><span class="file"><a href="develop_files.php" class="published">Files</a></span></li>
															<li><span class="file"><a href="develop_databases.php" class="published">Databases</a></span>
															<li><span class="file"><a href="develop_working_databases.php" class="published">Working with Database Content</a></span><!--
																<ul>
																	<li><span class="file"><a href="develop_databases.php/#managedAccess" class="published">Managed Access</a></span></li>
																	<li><span class="file"><a href="develop_databases.php/#perApp" class="published">Per-Application Managed Access</a></span></li>
																	<li><span class="file"><a href="develop_databases.php/#dynamicAccess" class="published">Dynamic, Configurable Access</a></span></li>
																	<li><span class="file"><a href="develop_databases.php/#jaxerDB" class="published">Jaxer.DB</a></span></li>
																	<li><span class="file"><a href="develop_databases.php/#jxrResultSet" class="published">Queries That Return Data: Jaxer.DB.ResultSet</a></span></li>
																	<li><span class="file"><a href="develop_databases.php/#dataTypes" class="published">Data Types</a></span></li>
																</ul> -->
															</li>
															<li><span class="file"><a href="develop_logging.php" class="published">Logging</a></span></li>
														</ul>
														</li>
														<li class="area"><span class="folder">Communications</span>
														<ul>
															<li><span class="file"><a href="develop_web_services.php" class="published">Web Services</a></span></li>
															<li><span class="file"><a href="develop_web-requests.php" class="published">Web Requests</a></span></li>
															<li><span class="file"><a href="develop_urls.php" class="published">URLs</a></span></li>
															<li><span class="file"><a href="develop_email.php" class="published">Email</a></span></li>
															<li><span class="file"><a href="develop_sockets.php" class="published">Sockets</a></span></li>
														</ul>
														</li>
														<li class="area"><span class="folder">Utilities</span>
														<ul>
															<li><span class="file"><a href="develop_utility.php" class="published">The Utility Namespaces</a></span></li>
															<li><span class="file"><a href="develop_processes.php" class="published">Processes</a></span></li>
															<li><span class="file"><a href="develop_command-line.php" class="published">Command Line Interface</a></span></li>
															<li><span class="file"><a href="develop_xml.php" class="published">XML</a></span></li>
															<li><span class="file"><a href="develop_mozilla.php" class="published">Mozilla Features</a></span></li>
															<li><span class="file"><a href="develop_building_jaxer.php" class="published">Building Jaxer</a></span></li>
														</ul>
														<li class="area"><span class="folder">Advanced Topics</span>
														<ul>
															<li><span class="file"><a href="advanced.php#nsm" class="published">Using __noSuchMethod__</a></span></li>
															<li><span class="file"><a href="advanced.php#jExts" class="published">Writing Jaxer Extensions</a></span></li>
														</ul>
													</li>
												</ul>
												</li>
												<li class="area"><span class="folder">Debug</span>
													<ul id="debug">
														<li><span class="file"><a href="debug_debug_settings.php" class="published">Debug Settings</a></span></li>
														<li><span class="file"><a href="debug_apache.php" class="published">Apache</a></span></li>
														<li><span class="file"><a href="debug_ssl-errors.php" class="published">SSL Errors</a></span></li>
													</ul>
												</li>
												<li class="area" style="display: none;"><span class="file"><a href="configure/" class="not-drafted">Configure</a></span></li>
												<li class="area" style="display: none;"><span class="file"><a href="extend/" class="not-drafted">Extend</a></span></li>
												<li class="area" style="display: none;"><a href="architecture/" class="not-drafted">Architecture</a></li>
											</ul>
										</div>
										
									</div>
								</td>
								<td valign="top">
									<div id="section-container">
										<div id="section-content" class="guide guide-content devices">
	<div>
		<h1>Web Requests</h1>
	</div>
	<div>
		<div class="assets-container">
			<div class="assets">
				<div class="assets-header">API Links</div>
				<div class="assets-body">
					<div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Web" target="api">Jaxer.Web</a></div>
					<div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.XHR.SendOptions" target="api">Jaxer.XHR.SendOptions</a></div>
					<div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.XHR.ResponseData" target="api">Jaxer.XHR.ResponseData</a></div>
				</div>
			</div>
		</div>
		
		<p>On the server side, you can connect to remote web sites to retrieve content or data. These web features can be used for screen scraping and creating <a href="http://en.wikipedia.org/wiki/Mashup_(web_application_hybrid)" target="_blank">web mashups</a>. The server runs with full privileges, so it's not restricted from interacting with other domains.</p>
		
		<h2>Connection Types</h2>
		<p>Jaxer offers two main API objects for establishing HTTP connections to remote sites:
		<ul>
			<li><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Web" target="api">Jaxer.Web</a> performs HTTP requests and directly returns the body of the response.</li>
			<li><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Sandbox" target="api">Jaxer.Sandbox</a> performs HTTP requests and then populates the response inside a secure, sandboxed DOM.</li>
		</ul>
		</p>
		
		<p>Internally each uses the <a href="http://en.wikipedia.org/wiki/XMLHttpRequest" target="_blank">XMLHttpRequest</a> object as the basis for the connection.</p>
		
		<h2>Web Connections</h2>

		<p>
			<code>Jaxer.Web</code> provides methods for opening connections to get or post data. The remote server, the one to which the connection is made, will see the 
			IP address of the server running your Jaxer application in its log, not the IP address of the client browser using your Jaxer application.
		</p>
		
		<h3>Setting Headers and Other Options</h3>
		
		<p>
			All methods in the Jaxer.Web namespace take as a last, optional parameter a <code>Jaxer.XHR.SendOptions</code> object (except <code>Jaxer.Web.resolve</code>, which 
			doesn't and <code>Jaxer.Web.open</code>, which takes the very similar <code>Jaxer.Sandbox.OpenOptions</code> object). This enables you to, for instance, specify 
			the HTTP headers sent with the request.
		</p>

		<h3 id="web-get">Get a Page</h3>
		<div class="example">
			<div class="body">
				<textarea name="code" class="brush: js;"><html>
	<head>
		<script type="text/javascript" runat="server">
			
			window.onserverload = function() {
				
				var response = Jaxer.Web.open("http://www.google.com/");
				Jaxer.Log.info("response: " + response);
			}
			
		</script>
	</head>
</html></textarea>
			</div>
		</div>

		<h3 id="web-open">Get a Page using a Query</h3>
		<div class="example">
			<div class="body">
				<textarea name="code" class="brush: js;"><html>
	<head>
		<script type="text/javascript" runat="server">
			
			window.onserverload = function() {
				
				var data = {
					"hl" : "en",
					"safe" : "on",
					"q" : "aptana+jaxer"
				}
				var response = Jaxer.Web.open("http://www.google.com/search", data);
				Jaxer.Log.info("response: " + response);
			}
		</script>
	</head>
</html></textarea>
			</div>
		</div>
		
		<h3 id="web-post">Post to a URL</h3>
		<div class="example">
			<div class="body">
				<textarea name="code" class="brush: js;"><html>
	<head>
		<script type="text/javascript" runat="server">
			
			window.onserverload = function() {
				
				var data = {
					"hl" : "en",
					"safe" : "on",
					"q" : "aptana+jaxer"
				}
				var response = Jaxer.Web.post("http://www.google.com/search", data);
				Jaxer.Log.info("response: " + response);
			}
		</script>
	</head>
</html></textarea>
			</div>
		</div>
		
		<h2>Customized Web Connections</h2>
		<p>To have greater control over each connection,  <a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.XHR.SendOptions" target="api">Jaxer.XHR.SendOptions</a> can be used as an additional parameter. The send options allow control over: </p>
		<ul>
			<li>setting the HTTP method of the request</li>
			<li>setting the content type of the request</li>
			<li>setting authentication parameters of the request (e.g. username and password)</li>
			<li>how the response is returned: as text or as xml</li>
			<li>whether the response is returned as an extended response, <a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.XHR.ResponseData" target="api">Jaxer.XHR.ResponseData</a></li>
		</ul>

		<h3 id="web-get-customized">Get a Page (Customized)</h3>
		<div class="example">
			<div class="description">This example illustrates one reason you might want to use send options. When logging in to a remote site, a redirect could occur. The testSuccess function allows this.</div>
			<div class="body">
				<textarea name="code" class="brush: js;"><html>
	<head>
		<script type="text/javascript" runat="server">
			
			window.onserverload = function() {
				
				var existingCookie = window.cookie;
				loginToRemoteSite(existingCookie);
			}
			
			function loginToRemoteSite(cookie) {
				
				try {
					var url = "http://www.domain.com/login";
					var data = "username=bullwinkle&password=moose";
					var extendedResponse  = Jaxer.Web.post(url, data, {
						extendedResponse : true,
						as : "text",
						cookie : cookie,
						testSuccess : function(xhr) {
							if (xhr.status == 200) {
								Jaxer.Log.info("200 OK Status");
								return true;
							} else if (xhr.status == 307) {
								Jaxer.Log.info("307 Temporary Redirect Status");
								return true;
							} else {
								return false;
							}
						}
					});
					Jaxer.Log.info("extendedResponse.response: " + extendedResponse.response);
				} catch (e) {
					Jaxer.Log.error(e);
				}
			}
		</script>
	</head>
</html></textarea>
			</div>
		</div>

	</div>
</div>

									</div>
									<div id="example-template" style="display:none;">
										<a onclick="return showHighslide(this);" class="highslide example-link"></a>
										<div class="highslide-html-content">
											<div class="highslide-header">
												<ul>
													<li class="highslide-move"><a href="#" onclick="return false">Move</a></li>
													<li class="highslide-close"><a href="#" onclick="return hs.close(this)">Close</a></li>
												</ul>
											</div>
											<div class="highslide-body">
												<div class="example-title"></div>
												<div class="example-description"></div>
												<div class="example-body" style="overflow-y:scroll;"></div>
											</div>
											<div class="highslide-footer">
												<div>
													<span class="highslide-resize" title="Resize">
														<span></span>
													</span>
												</div>
											</div>
											<div id="closebutton" class="highslide-overlay closebutton" onclick="return hs.close(this)" title="Close"></div>
										</div>
									</div>
								</td>
							</tr>
						</table>	
					</div>
<?php include('../includes/footer.php'); ?>