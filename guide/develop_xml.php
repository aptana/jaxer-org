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
		<h1>XML</h1>
	</div>
	
	<p>Jaxer inherits the XML functionality of the core Mozilla engine, including:</p>
	<ul>
		<li>XHTML processing on the server</li>
		<li><a href="http://www.ecma-international.org/publications/standards/Ecma-357.htm">ECMAScript for XML (e4x)</a></li>
		<li><a href="http://www.w3.org/Style/XSL/">XML Stylesheets</a> (XSL) and <a href="http://www.w3.org/TR/xslt.html">XSL Transformations</a> (XSLT)</li>
	</ul>

	<h2>XHTML processing</h2>

	<ul>	
		<li>Content with the application/xhtml+xml MIME type is treated as an XHTML document on the server.</li>
		<li>Script elements with runat attributes will be processed just like HTML script elements.</li>
		<li>The XHTML DOM is properly serialized to preserve well-formedness.</li>
		<li>The XML documentation declaration is preserved when serializing.</li>
	</ul> 
	
	<p>For Jaxer to process XHTML files, the file must have a .xhtml extension.</p>
	
	<h2>ECMAScript for XML</h2>
	
	<p>ECMAScript for XML lets you embed XML within your Javascript to express data structures. This is an alternative to using Javascript's built-in <a href="http://en.wikipedia.org/wiki/Object_literal" target="_blank">object literal</a> notation.</p>
	<pre name="code" class="brush: js;">
var store = &lt;store unit="33"&gt;
	&lt;item type="book" price="4.95" quantity="16"/&gt;
	&lt;item type="dvd" price="17.95" quantity="22"/&gt;
&lt;/store&gt;;</pre>
		
	<p>One benefit of embedding XML is that it allows multi-line elements. When using the database, you could embed your multi-line SQL statements in XML to make them easier to read and edit.</p>
	
	<h3 id="sql-statements">Embedding SQL Statements in XML</h3>
	<div class="example">
		<div class="body">
			<textarea name="code" class="brush: js;">
var statements = <statements>
		<statement id="create-user-table">
			CREATE TABLE IF NOT EXISTS user (
				id INTEGER PRIMARY KEY AUTO_INCREMENT
				username VARCHAR(255) NOT NULL
				password VARCHAR(255) NOT NULL
				created DATETIME NOT NULL
				last_login DATETIME NOT NULL
				UNIQUE (username)
			)
		</statement>
		<statement id="select-user">
			SELECT * FROM users WHERE username = ?
		</statement>
	</statements>;
	
	var createTableStatement = statements.statement.(@id == "create-user-table");
	var selectUserStatement = statements.statement.(@id == "select-user");</textarea>
		</div>
	</div>
		
	<h2>XSL Transformations</h2>
	
	<p>A very common use of XSL transformations is to render XML data to HTML. It's an alternative to using the DOM directly or using a third party Javascript library to render HTML. </p>
	
	<p>You can load the the XML data from a file or it can come from XML embedded in your Javascript.
	
    <p>Mozilla comes with a very convenient XSLTProcessor, which of course means it's available in Jaxer. This example uses it to transform an XML file in a callback and return the resulting HTML; the content is borrowed in part from the <a href="http://developer.mozilla.org/en/docs/The_XSLT/JavaScript_Interface_in_Gecko:Basic_Example">Mozilla XSLT example</a>.</p>
	<p><b>Note</b>: To instantiate an XSLTProcessor during a callback, you must explicitly reference it off the window object! This is only necessary within functions used during callbacks, when they need to reference "global" objects.</p>

	<h3 id="transform-xml">The HTML</div>
	<div class="example">
		<textarea name="code" class="brush: html;"><html>
	<head>
		<title>XSLT Example</title>
		<script runat="server-proxy">
			function transform(xmlFile, xsltFile) {
				
				var xsltProcessor = new window.XSLTProcessor();
				var xslStylesheet = Jaxer.Web.get(xsltFile, { as: "xml" });
				xsltProcessor.importStylesheet(xslStylesheet);
				var xmlDoc = Jaxer.Web.get(xmlFile, { as: "xml" });
				var fragment = xsltProcessor.transformToFragment(xmlDoc, document);
				var container = document.createElement("div");
				container.appendChild(fragment);
				return container.innerHTML;
			}
		</script>
	</head>
	<body>
		<input type="button" value="transform" onclick="document.getElementById('result').innerHTML = transform('original.xml', 'transform.xslt')">
		<div id="result"></div>
	</body>
</html></textarea>
	</div>

	<h3><em>original.xml</em></h3>
	<div class="example">
		<textarea name="code" class="brush: xml;"><?xml version="1.0"?>
<myNS:Article xmlns:myNS="http://devedge.netscape.com/2002/de">
    <myNS:Title>My Article</myNS:Title>
    <myNS:Authors>
        <myNS:Author company="Foopy Corp.">Mr. Foo</myNS:Author>
        <myNS:Author>Mr. Bar</myNS:Author>
    </myNS:Authors>
    <myNS:Body>
        The <b>rain</b> in <u>Spain</u> stays mainly in the plains.
    </myNS:Body>
</myNS:Article></textarea>
	</div>

	<h3><em>transform.xslt</em> XSLT transformation</h3>
	<div class="example">
		<textarea name="code" class="brush: xml;"><?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
	xmlns:myNS="http://devedge.netscape.com/2002/de">
    <xsl:output method="html"/>
    <xsl:template match="/">
        <html>
            <head>
                <title>
                    <xsl:value-of select="/myNS:Article/myNS:Title"/>
                </title>
                <style type="text/css">
                    .myBox {margin:10px 155px 0 50px; border: 1px dotted #639ACE; padding:0 5px 0 5px;}
                </style>
            </head>
            <body>
                <p class="myBox">
                    <span class="title">
                        <xsl:value-of select="/myNS:Article/myNS:Title"/>
                    </span><br/>
                    Authors:<br/>
                    <xsl:apply-templates select="/myNS:Article/myNS:Authors/myNS:Author"/>
                </p>
                <p class="myBox">
                    <xsl:apply-templates select="//myNS:Body"/>
                </p>
            </body>
        </html>
    </xsl:template>
    <xsl:template match="myNS:Author">
        --<xsl:value-of select="."/>
        <xsl:if test="@company">
            :: <b><xsl:value-of select="@company"/></b>
        </xsl:if>
        <br/>
    </xsl:template>
    <xsl:template match="myNS:Body">
        <xsl:copy>
            <xsl:apply-templates select="@*|node()"/>
        </xsl:copy>
    </xsl:template>
    <xsl:template match="@*|node()">
        <xsl:copy>
            <xsl:apply-templates select="@*|node()"/>
        </xsl:copy>
    </xsl:template>
</xsl:stylesheet></textarea>
	</div>

	<h3>Jaxer Output (after clicking the transform button)</h3>
	<div class="example">
		<img src="images/xml-xslt-output.png" title="XSLT Output" class="borderedImg" />
	</div>

	<h2>Expandos make markup composition a snap!</h2>
   	<p>
   		Expandos are properties that come into existence on an object by using the property on the fly; for instance, you can 
		use this capability to easily add a property such as name to an object x by using <code>x.name = 'Jim';</code>. Just 
		start appending extra property tiers, as in the following which can then be injected into the resulting page.
	</p>
	
	<div class="example" id="expandos">
		<pre name="code" class="brush: html;">
var html = <html/>;
html.head.title = "My Page Title";
html.body.@bgcolor = "#e4e4e4";
html.body.form.@name = "myform";
html.body.form.@action = "someurl.jss";
html.body.form.@method = "post";
html.body.form.@onclick = "return somejs();";
html.body.form.input[0] = "";
html.body.form.input[0].@name = "test";</pre>
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