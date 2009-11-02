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
	
	<div><h1>Using Jaxer with Jetty</h1></div>

	<p class="note">This page is a bit out of date and will be refreshed soon. Please post to the <a href="http://forums.aptana.com/viewforum.php?f=32">Jaxer forum</a> if you need help getting this running sooner.</p>
	Jaxer support can be added to Apache Tomcat via the inclusion of two WAR files.
	
	<h2>Configuring Tomcat and Jaxer</h2>

	<p>
		Download and copy the <a href="/system/files/jaxer.war">jaxer.war</a> and <a href="/system/files/jaxer-server.war">jaxer-server.war</a> files into the webapps directory 
		inside your Tomcat home directory.
	</p>
	
	<p>
		Configuring the two web.xml files in these war files allows you to connect the Jaxer servlet and Jaxer filter with your running Jaxer server. The two parameters that 
		most commonly need to be changed are the hostname and port of your currently running Jaxer server. The included web.xml files use localhost and 5370 by default, respectively.
	</p>
	
	<h3>Jaxer Filter Parameters configured via the init-param element in the web.xml</h3>

	<ul>
		<li><code>JAXER_PORT</code> - the connector port of the Jaxer server</li>
		<li><code>JAXER_HOSTNAME</code> - the hostname of the Jaxer server</li>
		<li><code>IGNORE_PATHS</code> - a list of path segments that when encountered should bypass being processed by Jaxer</li>
		<li><code>REQUEST_PATH</code> - the request path of the Jaxer callback, only needed when using the JaxerFilter as a callback filter</li>
	</ul>

	<h3>Jaxer Servlet Parameters configured via the init-param element in the web.xml</h3>
	<ul>
		<li><code>REQUEST_PATH</code> - the request path of the Jaxer callback that should be handled exclusively by the Jaxer servlet</li>
	</ul>
	
	<h3>Necessary WAR files</h3>
	<ul>
		<li><code>jaxer-server.war</code>
			<ul>
				<li>This war file is used to handle Jaxer callbacks made by your page</li>
				<li><code>WEB-INF</code>
				<ul>
					<li><code>web.xml</code>: Configures a filter and server for the /callback URL pattern.</li>
					<li><code>lib</code>
						<ul>
							<li>interfaces.jar (Interfaces implemented by the filter and servlet to allow runtime configuration)</li>
							<li>jaxer_servlet.jar (Servlet and filter classes as well as classes to communicate directly with Jaxer)</li>
						</ul>
					</li>
				</ul></li>
			</ul>
		</li>
	</ul>
	
	<ul>
		<li><code>jaxer.war</code>
			<ul>
				<li>This war file contains a sample Jaxer application that uses JSP and HTML</li>
				<li><code>WEB-INF</code>
					<ul>
						<li><code>web.xml</code>
							<ul>
								<li>This file configures a filter that communicates directly with Jaxer for all requests ending in .html, .html, .HTML, .HTM, .jsp, .jspx</li>
							</ul>
						</li>
						<li><code>lib</code>
							<ul>
								<li>interfaces.jar (Interfaces implemented by the filter and servlet to allow runtime configuration)</li>
								<li>jaxer_servlet.jar (Servlet and filter classes as well as classes to communicate directly with Jaxer)</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
	
	<h2>Include Jaxer-Tomcat sample</h2>

	<p>
		The jaxer-server.war is required to run any Tomcat applications through Jaxer becauset provides the handlers needed for any Jaxer callbacks used by your pages. 
		The jaxer.war file contains two samples of integration between Jaxer and Tomcat. Console.html contains a simple console written in HTML that uses 
		Javascript and the Jaxer Framwork to run entered content as a JSP page and view the results. Index.html shows a sample is mixing client-side JavaScript, 
		server-side JavaScript and JSP to create a simple application that allows users to translate date and number formats to their current locale.
	</p>
	
	<p>Once you install the WAR files open a browser to http://&lt;TOMCAT_ADDRESS&gt;/jaxer/ or http://&lt;TOMCAT_ADDRESS&gt;/jaxer/console.html to view the sample applications.</p>
	
	<h2>How do I use Tomcat in Aptana Studio?</h2>

	<ol>
		<li>Open the Servers view via Window->Show View->Other...->Aptana Standard Views->Servers</li>
		<li>Select the Add Server dropdown menu on the Servers view toolbar and select Connect to Generic Web Server</li>
		<li>Enter a server name such as myTomcat</li>
		<li>Enter the hostname (Tomcat default is localhost)</li>
		<li>Enter the port (Tomcat default is 8080)</li>
		<li>You can optionally add a heartbeat URL for monitoring your server status from Aptana Studio (a sample would be http://localhost:8080/jaxer)</li>
		<li>Select OK</li>
		<li>Select File->New->Project...</li>
		<li>Select Default Web Project under the Aptana Projects category and select Next</li>
		<li>Enter jaxer as the project name</li>
		<li>Deselect the Use default location checkbox</li>
		<li>Enter the location &lt;TOMCAT_HOME&gt;/webapps/jaxer and select Next</li>
		<li>Select Default custom preview settings for this project on the HTML Preview Settings wizard page</li>
		<li>Select the Use Server radio button</li>
		<li>Select your Tomcat server from the Server drop-down</li>
		<li>Select the box for Append project name</li>
		<li>Select Finish</li>
	</ol>

	<p>Files inside the project can now be previewed against your Tomcat server inside the HTML editor.</p>
	
	<h2>Servlet Souce code</h2>
	
	<p>The source code for the Jaxer filter and servlet code can be found in the following SVN repositories:</p>
	<ul>
		<li><code>com.aptana.ide.framework.jaxer.server.servlet</code> package: <a href="https://source.aptana.com/aptanarepo/aptana/ide_suite/branches/aptana_studio_1.1/ide_core/plugins/com.aptana.ide.framework.jaxer">Jaxer plugin</a></li>
		<li><code>com.aptana.ide.server.jetty.interfaces</code> package: <a href="https://source.aptana.com/aptanarepo/aptana/ide_suite/branches/aptana_studio_1.1/ide_core/plugins/com.aptana.ide.server.jetty">Jetty plugin</a></li>
	</ul>
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