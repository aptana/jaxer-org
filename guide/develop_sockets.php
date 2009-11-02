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
										
<div style="display:none;">
	cover sockets and binary sockets
	sockets in Jaxer do not accept requests - they are not server sockets, they are client sockets initiating requests
</div>

<div id="section-content" class="guide guide-content devices">
	<div>
		<h1>Connect to Sockets</h1>
	</div>
	<div>
		<div class="assets-container">
			<div class="assets">
				<div class="assets-header">API Links</div>
				<div class="assets-body">
					<div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Socket" target="api">Jaxer.Socket</a></div>
					<div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.BinarySocket" target="api">Jaxer.BinarySocket</a></div>
				</div>
			</div>
		</div>
		
		<p>Sockets are low-level networking components which can be used to implement higher-level protocols. Sockets are available at the server only and are an advanced topic.</p>
		
		<p>Because Jaxer already provides API objects for making web connections and sending email, socket use is often unnecessary. Sockets could be used to implement protocols for instant messaging or for file transfers using FTP.</p>
		
		<h2>Sockets Types</h2>
		<p>Jaxer provides <a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Socket" target="api">character-based</a> sockets and <a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.BinarySocket" target="api">binary</a>  sockets. Which type you choose will depend on the protocol you need to implement.</p>
		
		<p>The examples illustrate the basic flow when using sockets:</p>
		
		<h3 id="socket">Using a Socket</h3>
		<div class="example">
		<div class="body">
			<textarea name="code" class="brush: js;"><script type="text/javascript" runat="server">
	
	function connectToSocket(hostname, port) {
		
		var socket = new Jaxer.Socket();
		socket.open(hostname, port);
		socket.writeString("command");
		socket.flush();
		
		try  {
			var result = "";
			var string = '0';
			while ((string = socket.readString(256))) {
				result += string;
			}
		} catch (e) {
			Jaxer.Log.info("Exception caught reading from socket.");
			throw (e);
		} finally {
			socket.close();
		}
		
		return result;
	}
	
</script></textarea>
			</div>
		</div>
		
		<h3 id="binary-socket">Using a Binary Socket</h3>
		<div class="example">
			<div class="body">
				<textarea name="code" class="brush: js;"><script type="text/javascript" runat="server">
	
	function connectToBinarySocket(hostname, port) {
		
		var socket = new Jaxer.Socket();
		socket.open(hostname, port);
		socket.writeByteArray([1, 2, 3, 4]);
		socket.flush();
		
		try  {
			var result = [];
			var read = [];
			while ((read = socket.readByteArray(256))) {
				result = Jaxer.Util.concatArrays(result, read);
			}
		} catch (e) {
			Jaxer.Log.info("Exception caught reading from binary socket.");
			throw (e);
		} finally {
			socket.close();
		}
		
		return result;
	}
	
</script></textarea>
			</div>
		</div>
		
		<h2>Bundled Example</h2>
		<p>A complete, runnable example of connecting to sockets resides in the Jaxer tools folder:</p>
		<pre class="snippet">Aptana_Jaxer/jaxer/aptana/tools/hexer/</pre>
		
		<p>If you have Jaxer installed on your system, you can <a href="http://127.0.0.1:8081/aptana/tools/hexer/" target="_blank">run</a> the example.</p>
		
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