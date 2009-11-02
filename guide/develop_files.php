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
		<h1>Files</h1>
	</div>

	<div class="assets-container">
		<div class="assets toc">
			<div class="assets-header">Contents</div>
			<ul>
					<li><span><a href="#basics">File Basics</a></span></li>
					<li><span><a href="#simpleAccess">Simple File Access</a></span></li>
					<li><span><a href="#fileObjects">Using File Objects</a></span></li>
					<li><span><a href="#fileIO">File IO</a></span></li>
					<li><span><a href="#uploadingFiles">Uploading Files</a></span></li>
					<li><span><a href="#downloadingFiles">Downloading Files</a></span></li>
			</ul>
		</div>
		<div class="assets">
			<div class="assets-header">API Links</div>
			<div class="assets-body">
				<div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.File" target="api">Jaxer.File</a></div>
				<div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Request" target="api">Jaxer.Request</a></div>
				<div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.Request.FileInfo" target="api">Jaxer.Request.FileInfo</a></div>
			</div>
		</div>
	</div>

	<h2><a id="basics"></a>File Basics</h2>

	<h3>Simple Files vs. File Objects</h3>

	<p>
		Whether you create an object or use the static methods, Jaxer creates a File object, so the key reason to use an object boils down to convenience. 
		If you'll only be calling one or two methods against the file then static is simpler; for more complex work create an object and store it in a 
		variable for reuse.
	</p>
	
	<h3>File Modes</h3>
	
	<p>
		When opening a file in Jaxer you pass a file mode to <code>open</code> to control how the the file will be accessed. The options for this are 
		show below. Use the binary mode strings when the data stored is not regular text; this is sometimes referred to as 'binary safe' file access.
	</p>
	
	<h3>Demonstrating the Different File Modes</h3>
	<pre name="code" class="brush: js; class-name: narrowSH">// The following lines assume use of a File object called myfile
var myfile = new File('somefile.ext');
myfile.open('r'); // open for reading
myfile.open('w'); // open for writing, overwrites contents
myfile.open('a'); // open for appending data, new data is added to the file

myfile.open('rb'); // open binary file for reading
myfile.open('wb'); // open binary file for writing, overwrites contents
myfile.open('ab'); // open binary file for appending data, new data is added</pre>

	<h2><a id="simpleAccess"></a>Simple File Access</h2>

	<h3>File Operations</h3>

	<h4>Create</h4>

	<p>Use Jaxer.File.touch(path) to create a file if it doesn't exist and set the last modified timestamp if it does:</p>
	<pre name="code" class="brush: js; toolbar: false;">Jaxer.File.touch('myFile.txt');</pre>

	<h4>Truncate</h4>
	<p>Use Jaxer.File.truncate(path) to empty the file of its current contents:</p>
	<pre name="code" class="brush: js; toolbar: false;">Jaxer.File.truncate('myfile.txt');  </pre>

	<h4>Delete</h4>
	<p>Jaxer.File.remove(path) deletes the file from the filesystem:</p>
	<pre name="code" class="brush: js; toolbar: false;">Jaxer.File.remove('myfile.txt');</pre>

	<h4>Check for Existence</h4>
	<p>Use the Jaxer.File.exists(path) static method:</p>
	<pre name="code" class="brush: js;">if (Jaxer.File.exists('myFile.txt'))  
{  
     // myFile.txt exists  
}  
else  
{  
    // myFile.txt does not exist  
}</pre>
	
	<h4>Copy</h4>
	<p>Jaxer.File.copy(source,destination) will copy the file to a new location, leaving the original file untouched. It will, however, overwrite the destination file if it exists and your application has sufficient privileges.</p>
	<pre name="code" class="brush: js; toolbar: false;">Jaxer.File.copy('myfile.txt','myfile.bak');</pre>
	
	<h4>Move</h4>
	<p>Jaxer.File.move(source,destination) will move the file to a new location and the original file will be deleted. It will, however, overwrite the destination file if it exists and your application has sufficient privileges.</p>
	<pre name="code" class="brush: js; toolbar: false;">Jaxer.File.move('myfile.txt','myfile.bak');</pre>
	
	<h4>Backup</h4>
	<p>Jaxer.File.backup(path) creates a uniquely named copy of the original file and returns the path to the newly created copy:</p>
	<pre name="code" class="brush: js; toolbar: false;">var backupFilePath = Jaxer.File.backup('myfile.txt');</pre>
	
	<h3>File Attributes</h3>
	
	<h4>Size</h4>
	<p>Jaxer.File.size(path) returns the size of the file in bytes:</p>
	<pre name="code" class="brush: js; toolbar: false;">var size = Jaxer.File.size('myfile.txt');</pre>
	
	<h4>Extract parts of the filepath/name</h4>
	<ul>
		<li>Filename portion of the path: Jaxer.File.filename(path)</li>
		<li>File extension: Jaxer.File.extension(path)</li>
		<li>Absolute path to the file: Jaxer.File.absolutePath(path)</li>
		<li>Path to the containing folder: Jaxer.File.parentPath(path)</li>
	</ul>
	<pre name="code" class="brush: js;">var filename= Jaxer.File.filename('c:\\folder1\\folder2\\myfile.txt');
var filename= Jaxer.File.extension('c:\\folder1\\folder2\\myfile.txt');
var absolutePath = Jaxer.File.absolutePath('c:\\folder1\\folder2\\myfile.txt');
var parentPath = Jaxer.File.parentPath('c:\\folder1\\folder2\\myfile.txt');</pre>

	<h4>Last Modified Date</h4>
	<p>Use Jaxer.File.dateModified(path):</p>
	<pre name="code" class="brush: js;">var dateModified = Jaxer.File.dateModified('myfile.txt');   
// returns 'Mon Mar 03 2008 19:13:17 GMT-0800 (Pacific Standard Time)'</pre>
	
	<h4>Access Permissions</h4>
	<p>Jaxer.File.chmod(path,permissions) gets and sets file permissions; the path parameter is required, the permissions parameter is optional. Passing the permissions value is the setter, passing just a path is a getter. The permission value provided/returned is an octal number, in JavaScript this is a numeric literal with a leading 0.</p>
	<pre name="code" class="brush: js;">Jaxer.File.chmod('myfile.txt',0400); // read only  
var permissions = Jaxer.File.chmod('myfile.txt'); // -> '0400' (Windows: 0444)</pre>
	
	<h4>CRC32 Checksum</h4>
	<p>Use Jaxer.File.checksum(path):</p>
	<pre name="code" class="brush: js; toolbar: false;">var checksum = Jaxer.File.checksum('myfile.txt');</pre>
	
	<h3>File Content Operations</h3>
	
	<h4>Get Contents</h4>
	<p>Jaxer.File.read(path) retreives the entire contents of the file into a JavaScript variable:</p>
	<pre name="code" class="brush: js; toolbar: false;">var contents = Jaxer.File.read('myFile.txt');</pre>
	
	<h4>Append Content</h4>
	<p>Jaxer.File.append(path,content, content2, ..., contentN) will add the content to the end of the file and if the file doesn't exist it will be created.</p>
	<pre name="code" class="brush: js; toolbar: false;">Jaxer.File.append('myfile.txt','line1','line2');</pre>
	
	<h4>Append a Line of Content</h4>
	<p>Jaxer.File.appendLine(path,content, content2, ..., contentN) will add the content to the end of the file, appending a new line after each passed content parameter, and if the file doesn't exist it will be created.</p>
	<pre name="code" class="brush: js; toolbar: false;">Jaxer.File.appendLine('myfile.txt','line1','line2');</pre>
	
	<h2><a id="fileObjects"></a>Using File Objects</h2>
	
	<h3>Creating a File Object</h3>
	
	<p>Create a new Jaxer.File(pathToFile) object; the parameter must include the full path to the referenced file system object or else the call will throw a <code>'NS_ERROR_FILE_UNRECOGNIZED_PATH'</code> error. Note that creating a file object does not automatically create the equivalent object on the file system.</p>
	<pre name="code" class="brush: js;">// use Jaxer.Dir.resolve(path) to avoid error
var filePath = Jaxer.Dir.resolve('myFile.txt');  
var myFile = new Jaxer.File(filePath);</pre>
	
	<h3>File Information</h3>
	
	<ul>
		<li>Exists: 
			<pre name="code" class="brush: js;">// if the file doesn't exist create an empty file.  
if (!myFile.exists())  
{  
    myFile.create();          
}</pre></li>
		<li>Size: <code>var size = myFile.size; </code></li>
		<li>Name: <code>var leaf = myFile.leaf;</code></li>
		<li>Extension: <code>var ext = myFile.ext;</code></li>
		<li>Path (includes name): <code>var path = myFile.path;</code></li>
		<li>Parent Path (excludes name): <code>var parentPath = myFile.parentPath;</code></li>
		<li>Last Modified Date: <code>var dateModified = myFile.dateModified;</code></li>
		<li>File URL: <code>var URL = myFile.URL; </code></li>
		<li>MIME Type: <code>var mimeType = Jaxer.File.mimeType(resolvedPathObject);</code></li>
		<li>Attributes: (shown in the next block)</li>
	</ul>
	<pre name="code" class="brush: js;">
var isDir = myFile.isDir(); // false  
var isFile = myFile.isFile(); // true  
var isExec = myFile.isExec(); // false  
var isSymlink = myFile.isSymlink(); // false  
var isWritable = myFile.isWritable(); // true  
var isReadable = myFile.isReadable(); // true  
var isHidden = myFile.isHidden(); // false  
var isSpecial = myFile.isSpecial(); // false </pre>

	<h3>Managing Files</h3>

	<h4>Create</h4>
	<p>Invoke the create() method on a file object:
	<pre name="code" class="brush: js;">var myFile = new Jaxer.File(Jaxer.Dir.resolve('myFile.txt'));  
if (!myFile.exists())   
{  
    myFile.create();  
}</pre>

	<h4>Delete</h4>
	<p>Use the remove() method. Once you delete the file, some methods previously available on the file object will throw exceptions if accessed.</p>
	<pre name="code" class="brush: js;">// if the file exists delete it   
if (!myFile.exists())  
{  
    myFile.remove();          
}</pre>

	<h4>Truncate</h4>
	<p>Use truncate() to empty the file. After truncating, the file size will be zero bytes.</p>
	<pre name="code" class="brush: js;">// if the file exists truncate it   
if (!myFile.exists())  
{  
    myFile.truncate();        
} </pre>

	<h4>Copy</h4>
	<p>The copy() method will copy the file to a provided file location; it throws an exception if the destination file already exists, which is different from the static file copy method's behavior.</p>
	<pre name="code" class="brush: js;">if (myFile.exists() && myFile.isReadable())  
{   
    var to = Jaxer.Dir.resolve('copy.txt');  
    myFile.copy(to);  
      
    to = Jaxer.Dir.combine(Jaxer.System.tempFolder,myFile.leaf);  
    myFile.copy(to);  
}  </pre>

	<h2><a id="fileIO"></a>File IO</h2>

	<h3>Reading from Files</h3>
	<h4>File Reading Setup</h4>
	<pre name="code" class="brush: js;">var readmePath = Jaxer.Dir.combine(Jaxer.System.executableFolder,'README-JAXER.TXT');  
var readme = new Jaxer.File(readmePath); </pre>

	<h4>Entire File</h4>
	<p>Read the entire contents of that file into a string, specifying the 'r' (read) access mode to the open method:</p>
	<pre name="code" class="brush: js;">if (readme.exists() && readme.isReadable())   
{  
    readme.open('r');  
    var contents = readme.read();  
    Jaxer.Log.info(contents);  
    readme.close();  
}  </pre>
	<p><strong>Note:</strong> In a real application you would check that the file exists and is readable before opening it. Also, by default files are opened for read, so in this case, you could simple have omitted the access mode.</p>

	<h4>As an Array of Lines</h4>
	<p>The readAllLines() method returns the contents of a file as an array of individual lines. This method uses platform-specific line terminators when splitting the contents, and so is safer than using the String split('\n') method.</p>
	<pre name="code" class="brush: js;">if (readme.exists() && readme.isReadable())   
{  
    readme.open('r');  
    var contents = readme.readAllLines();  
    Jaxer.Log.info(contents.length);  
    readme.close();  
}</pre>

	<h4>One Character at a Time</h4>
	<p>The read() method takes a parameter representing the number of bytes to read from the file so to read the file one byte at a time, pass the value 1 to read() inside a loop until reaching file's end.</p>
	<pre name="code" class="brush: js;">if (readme.exists() && readme.isReadable())   
{  
    readme.open('r');  
    while ( ch = readme.read(1) )   
    {  
        Jaxer.Log.info(ch);  
    }  
    readme.close();  
}</pre>

	<h3>Writing to Files</h3>

	<h4>Creating an Empty File</h4>
	<p>Use the create() method. This code will create an empty file named 'myFile.txt' in the same folder as the current page.</p>
	<pre name="code" class="brush: js;">if (!myFile.exists())  
{   
    myFile.create();  
} </pre>

	<h4>Appending Content</h4>
	<p>Appending to a file is done by opening a file in 'append mode' and writing data to that file; the 'a' parameter indicates the file should be opened in append mode.</p>
	<pre name="code" class="brush: js;">if (myFile.exists() && myFile.isWritable())  
{   
    myFile.open('a');  
    myFile.write("some text to write");  
    myFile.close();  
}</pre>

	<h4>Replacing the Content</h4>
	<p>Replace the contents of a file (or overwriting) by opening it in write mode, writing data to the file and closing it (this last step is important!).</p>
	<pre name="code" class="brush: js;">if (myFile.exists() && myFile.isWritable())  
{   
    myFile.open('w');  
    myFile.write("some text to write");  
    myFile.close();  
} </pre>

	<h2><a id="uploadingFiles"></a>Uploading Files</h2>

	<p>Uploading files to Jaxer from a web form is a straightforward process. All you need is a form containing an input element of type upload and an html page to receive the submitted form.</p>

	<h3 id="html-upload-form">HTML Upload Form</h3>
	<div class="example">
		<div class="body">
			<textarea name="code" class="brush: html;">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">  
<html>  
<head>  
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />  
    <title>Upload </title>  
</head>  
<body>  
<form id='upload' action="submissions.html" method="post" 
	enctype="multipart/form-data">  
    <input id='fileUpload' type="file" name="myFile1"><BR>  
    <input id='fileUpload' type="file" name="myFile2"><input type="submit" value='upload'>  
    <p>  
        'upload' Sends the selected file(s) to the server.  
    </p>  
</form>  
</body>   
</html></textarea>
		</div>
	</div>

	<h3>Receiving File Uploads</h3>
	<div class="example-description">
		This code goes into the page which receives the data from the submitted form; the posted data is available within the Jaxer.request object. 
		We're specifically interested in <code>Jaxer.Request.files</code>, an array of <code>Jaxer.Request.FileInfo</code> objects, which has descriptive properties such as fileName, contentType and fileSize.
	</div>
	<div class="example" id="receiving-page">
		<div class="body">
			<textarea name="code" class="brush: js;">
var message = "";  
  
for( fileCount=0; fileCount<Jaxer.Request.files.length; fileCount++)  
{  
    var fileInfo = Jaxer.Request.files[fileCount];  
      
    var destinationFilePath = Jaxer.Dir.resolve(fileInfo.originalFileName);  
    fileInfo.save(destinationFilePath);  
  
    message += "<BR>" + [   
        "Saved to : "           + destinationFilePath  
    ,   "original filename : "  + fileInfo.originalFileName  
    ,   "temp filename : "      + fileInfo.tempFileName  
    ,   "contentType : "        + fileInfo.contentType  
    ,   "size : "               + fileInfo.fileSize  
    ].join("<BR>");  
      
}  
document.write(message);</textarea>
			<pre name="code" class="brush: js;">
// outputs something similar to:
Saved to C:\aptana\JaxerDev\public\work\bar.txt
original filename : bar.txt
temp filename : C:\aptana\JaxerDev\tmp\tmp
contentType : text/plain
size : 15754
Saved to : C:\aptana\JaxerDev\public\work\foo.txt
original filename : foo.txt
temp filename : C:\aptana\JaxerDev\tmp\tmp-1
contentType : text/plain
size : 816</pre>
		</div>
	</div>

	<h2 id="downloadingFiles">Downloading Files</h2>
	
	<div class="example" id="receiving-page">
		<div class="body">
			<textarea name="code" class="brush: js;">
// Read in the contents of an RTF and send it to the user
var path = Jaxer.Dir.resolve("example1.rtf", Jaxer.request.currentFolder);
var file = new Jaxer.File(path);
file.open('rb');
var contents = file.read();
file.close();
Jaxer.response.setContentsBinary(contents, "text/rtf"); 

// Grab an image from the current directory and send it to the user
var path = Jaxer.Dir.resolve("image.png", Jaxer.request.currentFolder);
Jaxer.response.setContentsFile(path);</textarea>
		</div>
	</div>
	
<div>

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