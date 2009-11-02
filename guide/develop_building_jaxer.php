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
		<h1>Building Jaxer</h1>
	</div>
	<div id="mainContent">
		
		<div class="assets-container">
			<div class="assets toc">
				<div class="assets-header">Contents</div>
				<ul>
					<li><span><a href="#prerequisites">Prerequisites</a></span></li>
					<li><span><a href="#getSource">Get Jaxer Source</a></span></li>
					<li><span><a href="#buildLibevent">Build libevent</a></span></li>
					<li><span><a href="#buildJaxer">Build Jaxer</a></span></li>
					<li><span><a href="#buildMod_jaxer">Build mod_jaxer</a></span></li>
					<li><span><a href="#buildServletConnector">Build Servlet Connector</a></span></li>
					<li><span><a href="#pullTogether">Pull all the pieces together</a></span></li>
					<li><span><a href="#testRun">Test Run</a></span></li>
					<li><span><a href="#ldSetup">Linux Distro-Specific Setup Notes</a></span></li>
				</ul>
			</div>
		</div>

		<h2 id="prerequisites">Prerequisites</h2>

		<ul>
			<li>Installation generally requires root privileges.</li>
			<li>Jaxer is based on Mozilla's Firefox code base. In order to build Jaxer, you need to Install all prerequisites for building firefox. Follow the instructions on <a href="https://developer.mozilla.org/en/Build_Documentation">https://developer.mozilla.org/en/Build_Documentation</a> for your platform.</li>
			<li>JDK 1.5+.</li>
			<li>On Windows: You must install Mozilla Build (<a href="http://ftp.mozilla.org/pub/mozilla.org/mozilla/libraries/win32/MozillaBuildSetup-1.3.exe">http://ftp.mozilla.org/pub/mozilla.org/mozilla/libraries/win32/MozillaBuildSetup-1.3.exe</a>) and use it to do the build.</li> 
		</ul>

		<h3>We have built Jaxer on the following platforms</h3>

		<ul>
			<li>Windows (32bit)</li>
			<li>Mac (Universal)</li>
			<li>Linux: Ubuntu, CentOS, Fedora and Debian</li>
			<li>Open Solaris</li> 
		</ul>

		<h3>Linux Distro-Specific Setup Notes</h3>

		<ul>
			<li><a href="#centos-5-2">CentOS 5.2/Fedora 9</a></a></li>
			<li><a href="#ubuntu-8-10">Ubuntu 8.10</a></li>
			<li><a href="#debian-lenny">Debian Etch/Lenny</a></li> 
		</ul>

		<h2 id="getSource">Get Jaxer Source</h2>

		<p>You can get the source at <a href="http://aptana.com/jaxer/download">http://aptana.com/jaxer/download</a></p>

		<p>
			The source code version number is included in a top level folder inside the download, like 1.0.0.4284. In these instruction, 
			this folder is referred to as the [JAXER_SRC_ROOT].
		</p>

		<h2 id="buildLibevent">Build libevent (not needed on Windows)</h2>

		<pre name="code" class="brush: bash; toolbar: false;">$cd [JAXER_SRC_ROOT]/products/server/src/libevent/libevent-1.4.2-rc 
$./configure
$make</pre>

		<p>
			When building on Mac OS X, you need to set the CFLAGS environment to "-arch ppc -arch i386" before building. You do not need to install libevent. 
			The build process will simply pick up the library. If you have libevent already installed and would prefer to use it, though, you'll need  
			to modify some of the build scripts to make the build work.
		</p>

		<h2 id="buildJaxer">Build Jaxer</h2>

		<p>First, change directories to [JAXER_SRC_ROOT]/products/server/src/mozilla; in this folder you'll see a few files called .mozconfig-*.</p>

		<p>Second, copy the file appropriate for your OS to .mozconfig (use the .mozconfig-*_crs file instead in order to generate debug symbols): </p>

		<ul>	
			<li><code>$cp .mozconfig-linux .mozconfig</code></li>
			<li><code>$cp .mozconfig-linux64 .mozconfig</code></li> 
			<li><code>$cp .mozconfig-win32 .mozconfig</code></li>
			<li><code>$cp .mozconfig-mac-universal .mozconfig</code></li>
			<li><code>$cp .mozconfig-solaris .mozconfig</code></li>
		</ul>

		<p>Third, run MAKE (except on OpenSolaris, use gmake instead):</p>

		<pre name="code" class="brush: bash; toolbar: false;">$make -f client.mk build</pre>

		<p>The most common reason for build failure is that you don't have all the required software installed/configured.</p>

		<p>The built results are under ./ff-release/dist/bin. This is equivalent to the jaxer folder of the standard Jaxer install (with a few items not yet in place).</p>

		<h2 id="buildMod_jaxer">Build mod_jaxer</h2>

		<p>You need this for Apache (v2.2 and v2.0) to talk to Jaxer. In the standard install, mod_jaxer is in the jaxer/connectors folder.</p>

		<h3>On Windows</h3>

		<p>Switch to [JAXER_SRC_ROOT]/products/server/src/connectors/apache/apache-modules/mod_jaxer, where you'll find an sln file for Visual Studio 2005 for building mod_jaxer; pick release20 for apache 2.0, and release for apache 2.2.</p>

		<p>The result is ./Release/mod_jaxer.so (for apache 2.2) or ./Release20/mod_jaxer20.so (for apache2.0).</p>

		<p>Copy the compiled mod_jaxer to the connectors folder (create the folder if it isn't there already):</p>

		<pre name="code" class="brush: bash; toolbar: false;">$cp -f ./Release/mod_jaxer.so [JAXER_SRC_ROOT]/products/server/src/mozilla/ff-release/dist/bin/connectors/mod_jaxer.so</pre>

		<h3>Other Operating Systems</h3>

		<p>Switch to [JAXER_SRC_ROOT]/products/server/src/connectors/apache/apache-modules/mod_jaxer</p>

		<p>Use the apxs supplied with your Apache installation. If the directory containing apxs is not on your PATH, use the absolute path to the executable.</p>

		<h3>Apache 2.2</h3>

		<pre name="code" class="brush: bash; toolbar: false;">$apxs -c -o mod_jaxer.so *.c</pre>

		<h3>Apache 2.0</h3>

		<pre name="code" class="brush: bash; toolbar: false;">$apxs -D_APACHE20 -c -o mod_jaxer.so *.c</pre>

		<h3>Mac universal executable for Apache 2.2</h3>

		<pre name="code" class="brush: bash; toolbar: false;">32 bit: $apxs -Wc,-arch -Wc,i386 -Wl,-arch -Wl,i386 -c -Wc,-arch -Wc, ppc -Wl,-arch -Wl,ppc -c -o mod_jaxer.so *.c</pre>
		
		<pre name="code" class="brush: bash; toolbar: false;">64 bit: $apxs -Wc,-arch -Wc,ppc64 -Wl,-arch -Wl,ppc64 -c -Wc,-arch -Wc,x86_64 -Wl,-arch -Wl,x86_64 -c -o mod_jaxer.so *.c</pre>

		<h3>Mac universal executable for Apache 2.0</h3>

		<pre name="code" class="brush: bash; toolbar: false;">$apxs -D_APACHE20 -Wc,-arch -Wc,i386 -Wl,-arch -Wl,i386 -c -Wc, -arch -Wc,ppc -Wl,-arch -Wl,ppc -c -o mod_jaxer.so *.c</pre>

		<h3>Copy compiled lib (all non-Windows OSes)</h3>
		
		<p>The built mod_jaxer.so is under .libs/.</p>

		<p>If apxs complains about undefined functions, you may need to add <code>-I &lt;path to your apache header files></code> to the apxs command just after -c.</p>

		<p>Copy the compiled mod_jaxer to the connectors folder (create the folder if not already present):</p>

		<pre name="code" class="brush: bash;">$mkdir [JAXER_SRC_ROOT]/products/server/src/mozilla/ff-release/dist/bin/connectors
$cp -f .libs/mod_jaxer.so [JAXER_SRC_ROOT]/products/server/src/mozilla/ff-release/dist/bin/connectors/mod_jaxer.so</pre>

		<h2 id="buildServletConnector">Build Servlet Connector</h2>

		<p>The servlet lets Tomcat talk to Jaxer. In the standard alone install, the 2 war files are under the jaxer/connectors folder.</p>

		<pre name="code" class="brush: bash;">$cd [JAXER_SRC_ROOT]/products/server/src/connectors/servlet
$./build.sh</pre>

		<p>The generated war files are under ./products, so you should copy them to the connectors folder (create the folder if not already present):</p>

<pre name="code" class="brush: bash;">$mkdir [JAXER_SRC_ROOT]/products/server/src/mozilla/ff-release/dist/bin/connectors
$cp -f ./products/*.war [JAXER_SRC_ROOT]/products/server/src/mozilla/ff-release/dist/bin/connectors/</pre>

		<h2 id="pullTogether">Pull all the pieces together</h2>

		<p>
			You've now compiled all the Jaxer components. The only parts missing are some configuration, which depend on the final Jaxer installation 
			location and how you want Jaxer setup. The simplest way to test your Jaxer build is to use the default installation location since this 
			doesn't require changing the default configuration files (<code>/opt/AptanaJaxer on Linux</code>, 
			<code>/Applications/Aptana_Jaxer</code> on Mac OS X, and <code>&lt;anywhere>\Aptana Jaxer</code> on Windows). The rest of these 
			instructions refer to this folder as [JAXER_INSTALL_ROOT].
		</p>

		<p>You may need root permission to complete some of these instructions, depending on your OS and account privileges.</p>

		<pre name="code" class="brush: bash;">$mkdir [JAXER_INSTALL_ROOT]

### copy main jaxer stuff
$cp -rL [JAXER_SRC_ROOT]/products/server/src/mozilla/ff-release/dist/bin [JAXER_INSTALL_ROOT]/jaxer

### copy static contents
$cp -rLf [JAXER_SRC_ROOT]/products/server/distro/jam/* [JAXER_INSTALL_ROOT]/ 

### copy start/stop scripts
$cp -rLf [JAXER_SRC_ROOT]/products/server/src/scripts/<linux|mac|solaris> [JAXER_INSTALL_ROOT]/scripts</pre>

		<p>
			At this point, your [JAXER_INSTALL_ROOT] should be (almost) identical to the standalone Jaxer that can be downloaded from the Aptana website, 
			without the [JAXER_INSTALL_ROOT]/Apache22 folder. You can download a standalone Jaxer and unzip it to a tmp location, and copy the Apache22 
			folder into [JAXER_INSTALL_ROOT]. The Apache22 folder is only needed for testing your Jaxer build without changing the existing Apache 
			configuration. Once you're familiar with the configuration options, you can configure your Apache to talk to Jaxer instead.
		</p>

		<h2 id="testRun">Test Run</h2>

		<p>After adding the Apache22 from the Jaxer download into [JAXER_INSTALL_ROOT], you can use the scripts in the [JAXER_INSTALL_ROOT]/scripts 
		folder to start and stop Jaxer/apache.</p>

		<pre name="code" class="brush: bash;">$cd [JAXER_INSTALL_ROOT]/scripts
### Start Apache and Jaxer
$./start.sh

### Stop both
$./stop.sh</pre>

		<p class="note">On Windows, the startup script is called [JAXER_INSTALL_ROOT]\StartServers.bat.</p>

		<p>After Apache and Jaxer are started, you should be able to see the Jaxer start page by opening <code>http://localhost:8081</code> in your browser.</p> 

		<h2 id="ldSetup">Linux Distro-Specific Setup Notes</h2>

		<h3>Suggestions</h3>
		
		<ul>
			<li>The lists that follow are all the packages we had to install for the particular Linux. For the Linux distro you use, the actual packages you need to install may be different.</li>
		    <li>Try to avoid building a package from source unless you don't have a choice since compiling a package may itself require additional packages.</li>
		    <li>You can use the OS's package manager (such as synaptic, yum, apt-get and RPM) to see if you have the necessary packages and versions already.</li>
		    <li>Certain package managers require you to very precisely specify package names but the Mozilla web page(s) don't always list them with the required precision. If so use the package manager's <i>list available</i> command to find/figure out the exact package name(s) to install.</li> 
		</ul>

		<p>
			If you don't have JDK 1.5 or later, download JDK 1.5 from <a href="http://java.sun.com/javase/downloads/index_jdk5.jsp">http://java.sun.com/javase/downloads/index_jdk5.jsp</a> 
			(jdk-1_5_0_16-linux-amd64.bin). You should be able to use the latest JDK. After download, make the file executable and run it to install. Edit the PATH environment variable so 
			shell can find the correct java and javac (eg export PATH=&lt;JDK-install-dir>/bin:$PATH). After the PATH is set properly, <code>$which java</code> should give 
			&lt;JDK-install-dir>/bin/java.
		</p>

		<h3 id="centos-5-2">Centos 5.2/Fedora 9</h3>
		
		<p>Install the following packages (yum install &lt;PackageName>):</p>

		<ul>
			<li>gcc</li>
			<li>gcc-c++</li>
			<li>cvs</li>
			<li>libXt-devel</li>
			<li>curl-devel (32-bit only)</li>
			<li>gtk2-devel (32-bit)/gtk2-devel.x86_64 (64-bit)</li>
			<li>libIDL-devel (32-bit)/libIDL-devel.x86_64 (64-bit)</li>
			<li>libXcomposite (required to run Jaxer)</li>
            <li>unixODBC-dev</li>
		</ul>
		
		<p>32-bit: Create this symlink: <code>$ln -s /lib/libexpat.so.0.5 /usr/lib/libexpat.so.1</code></p>

		<p>64-bit: Make libexpat.so.1 available: <code>$ln -s /lib64/libexpat.so.0.5 /usr/lib/libexpat.so.1; $export LD_LIBRARY_PATH=/lib64</code></p>
		
		<h3 id="ubuntu-8-10">Ubuntu 8.10</h3>
		
		<p>Packages:</p> 

		<ul>
			<li>build dependencies for Firefox (apt-get build-dep firefox)</li>
			<li>install libcurl4-openssl-dev</li>
            <li>unixODBC-dev</li>
		</ul>
		
		<h3 id="debian-lenny">Debian Etch/Lenny</h3>
		
		<p class="note"><strong>Etch:</strong> Because of package version requirements we recommend <a href="http://www.go2linux.org/upgrading-debian">upgrading to Lenny</a>; we haven't been able to get Jaxer compiled on Etch.</p>

		<p>Install the following packages:</p> 

		<ul>
			<li>build dependencies for iceweasel (apt-get build-dep iceweasel)</li>
			<li>libidl-deb</li>
			<li>libxt-dev</li>
			<li>libcurl4-openssl-dev (only necessary for 32-bit installs)</li>
            <li>unixODBC-dev</li>
		</ul>
 

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