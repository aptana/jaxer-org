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
        <h1>Databases</h1>
    </div>
    <div>
        <div class="assets-container">
			<div class="assets toc">
				<div class="assets-header">Contents</div>
				<ul>
						<li><span><a href="#managedAccess">Managed Access</a></span></li>
						<li><span><a href="#perApp">Per-Application Managed Access</a></span></li>
						<li><span><a href="#dynamicAccess">Dynamic, Configurable Access</a></span></li>
						<li><span><a href="#jaxerDB">Jaxer.DB</a></span></li>
						<li><span><a href="#dataTypes">Data Types</a></span></li>
						<li><span><a href="#withODBC">Using Jaxer with ODBC Drivers</a></span></li>
				</ul>
			</div>

            <div class="assets">
                <div class="assets-header">API Links</div>
                <div class="assets-body">
                    <div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.DB" target="api">Jaxer.DB</a></div>
                    <div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.DB.ResultSet" target="api">Jaxer.DB.ResultSet</a></div>
                </div><br />
                <div class="assets-header">Resources</div>
                <div class="assets-body">
                    <div class="asset"><a href="http://swatwork.co.uk/jaxer/ado_intro.php#" title="Jaxer and ADO" target="_blank">Using Jaxer with MSFT ADO</a></div>
                    <div class="asset"><a href="http://www.sitepen.com/blog/2008/09/29/jaxer-persevere-via-dojos-jsonreststore/" title="SitePen How-to" target="_blank">Jaxer + Dojo Persevere</a></div>
                </div>
            </div>
        </div>

        <p>
            A key advantage of an Ajax server is access to shared databases. The Jaxer DB API attempts to strike a balance between extreme ease of use and having enough power to get almost any job done.
        </p>

		<p>Jaxer offers two types of DB access:</p>
        <ul>
            <li>Easy pre-configured static access</li>
            <li>Simple but more dynamic object-oriented access</li>
        </ul>
        <p><br>The static functionality is designed to let you execute queries and get data back in a single line without thinking about connections, connection strings, reuse, etc. If you need a bit more than that, it's quite easy to set up a new connection, or multiple connections, and configure them to do your bidding. </p>
		<p>Your applications execute queries using Jaxer.DB and access returned data using Jaxer.DB.ResultSet. If you use the preconfigured static access, Jaxer.DB and Jaxer.DB.ResultSet are the only two classes you'll need. If you use object-oriented access, you'll also use the database-specific classes, Jaxer.DB.SQLite and Jaxer.DB.MySQL.</p>

        <h2><a id="managedAccess"></a>Managed Access</h2>    
        <p>The easiest way to access the DB functionality is with the pre-configured, static (non-object-oriented) API which works <em>out of the box</em>. 
		Jaxer ships with the <a href="http://www.sqlite.org/">SQLite3 database</a> built in, and with an SQLite3 driver as well as a driver for <a href="http://mysql.com">MySQL 5</a>.</p>
		<p>The default configuration of Jaxer uses the built-in SQLite3 so when you fire up 	Jaxer, you can access the DB right away:</p>
        <pre name="code" class="brush: js;">
Jaxer.DB.execute("CREATE TABLE IF NOT EXISTS booktest (id INTEGER PRIMARY KEY AUTO_INCREMENT, title TEXT)");
Jaxer.DB.execute("INSERT INTO booktest (title) VALUES (?)", "Mary Poppins"); 
Jaxer.DB.execute("INSERT INTO booktest (title) VALUES (?)", "Robinson Crusoe"); 
Jaxer.DB.execute("INSERT INTO booktest (title) VALUES (?)", "Harry Potter");
var resultset = Jaxer.DB.execute("SELECT * FROM booktest");</pre>

		<p>Under the cover, Jaxer creates a single (per Jaxer process) connection to the database specified in config.js, and uses it to execute your queries and return any 
		data as a Jaxer.ResultSet. It's called <em>managed access</em> because the connection is managed for you: it's automatically opened when needed, and closed 
		according to configuration parameters, either after each query or after each page, or only when the server shuts down. </p>
		
		<p>Because the connection itself holds essentially no data (other than lastInsertId or lastInsertRowId), it's safe to share it. If you need to access this default connection, which should rarely be true, call:</p>
		<pre name="code" class="brush: js;"> Jaxer.DB.defaultConnections.DEFAULT</pre>

		<p>To configure the managed access differently, you edit the configApps.js file found in the local_jaxer folder; the file holds the connection parameters for 
		your database.</p>
		
		<h3>Sample connection parameters for SQLite3</h3>
		<pre name="code" class="brush: js;">
var sqliteParams = {
	IMPLEMENTATION: "SQLite",
	PATH: "c:\\path\\to\\my\\data.sqlite", 
	CLOSE_AFTER_EXECUTE: false, 
	CLOSE_AFTER_REQUEST: true,  
	MAX_NUM_TRIES: 100, 		
	MILLIS_BETWEEN_TRIES: 37	
}; </pre>

		<h3>Sample connection parameters for MySQL 5</h3>
		<pre name="code" class="brush: js;">
var mysqlParams = {
	IMPLEMENTATION: "MySQL",
	HOST: "127.0.0.1",
	PORT: 3306,
	SOCKET: null, // (or use /path/to/socket)
	NAME: "demos", 
	USER: "root",
	PASS: "",
	CLOSE_AFTER_EXECUTE: false, 
	CLOSE_AFTER_REQUEST: true,  
};</pre>

		<p>Next, point the default database connection to your database. For example, to use the example SQLite connection, add the following to configApps.js:</p>
		<pre name="code" class="brush: js;">Config.DEFAULT_APP.db = sqlite;</pre>

		<h3>Connection parameters common to both connection types</h3>
		<table class="narrow">
			<tr><th>Parameter</th><th>Description</th></tr>
			<tr><td>IMPLEMENTATION</td><td>Required:  "SQLite" or "MySQL."</td></tr>
			<tr><td>CLOSE_AFTER_EXECUTE</td><td>Optional: Whether to close the connection after every call to execute</td></tr>
			<tr><td>CLOSE_AFTER_REQUEST</td><td>Optional: Whether to close the connection at the end of every request</td></tr>
			<tr><td>MAX_NUM_TRIES</td><td>Optional: If locking detected, retry up to this number of times</td></tr>
			<tr><td>MILLIS_BETWEEN_TRIES</td><td>Optional: If locking detected, sleep this many milliseconds between tries</td></tr>
		</table>
		
		<p>
			The only other connection parameter specific to SQLite is PATH—the full path to the SQLite data file. MySQL connections have a few more 
			parameters: HOST (or SOCKET) and PORT parameters refer to the MySQL server, USER and PASS are the credentials used to log on to the MySQL server, 
			AUTORECONNECT determines what to do when the connection to the MySQL server is dropped (default is true) and NAME is the name of the 
			database to use.
		</p>

		<h2><a id="perApp"></a>Per-Application Managed Access</h2>
		<p>When you have multiple applications running within a Jaxer instance, you'll generally want to have a separate database for each application. You can configure static managed access at the application level in configApps.js.</p> 
		<p>The easiest way to configure per-application databases is to use Jaxer's "smart" DB logic. Supply basic connection parameters by editing configApps.js and setting Config.DEFAULT_DB to your connection parameters.</p>
		<pre name="code" class="brush: js;">Config.DEFAULT_DB = mysqlParams;</pre>

		<p>Jaxer will then overwrite the PATH or NAME connection parameters (for SQLite or MySQL, respectively) to application-specific values. Jaxer will automatically select the values.</p>

		<h2><a id="dynamicAccess"></a>Dynamic, Configurable Access</h2>
		<p>When you need more flexibility than a single, preconfigured managed connection for database access, use the dynamic Jaxer DP API using either Jaxer.DB.SQLite or Jaxer.DB.MySQL.</p>
		<h3>Create connection objects and call their methods</h3>
		<h4>SQLite</h4>
		<pre name="code" class="brush: js;">
// Use default settings for MAX_NUM_TRIES and MILLIS_BETWEEN_TRIES
var connectionParams = {IMPLEMENTATION: "SQLite", 
	PATH: Jaxer.Dir.combine(Jaxer.Config.DEFAULT_PATH_BASE, "appdata.sqlite")};
Jaxer.DB.SQLite.createDB(connectionParams); // Only needed if the DB file doesn't exist yet
var conn = new Jaxer.DB.SQLite.Connection(connectionParams);
conn.open(); // optional: executing a query automatically opens the connection if needed
conn.execute("CREATE TABLE IF NOT EXISTS booktest (id INTEGER PRIMARY KEY AUTO_INCREMENT, title TEXT)");
conn.execute("INSERT INTO booktest (title) VALUES (?)", "Mary Poppins"); 
var resultset = conn.execute("SELECT * FROM booktest");
conn.close();</pre>
		<p>The createDB call is necessary only if the database does not yet exist; otherwise, you can just create the connection using the Connection constructor. Opening the connection is optional because execute methods will open the connection if needed.</p>
		<h4>MySQL</h4>
		<pre name="code" class="brush: js;">
var connectionParams = 
{
	HOST: "127.0.0.1",
	PORT: 4417,        // Differs from the default of 3306 to minimize conflicts with existing installs
	NAME: "demo", // The name of the database instance
	USER: "root",
	PASS: "",
};
// Next line only needed if the DB instance doesn't exist yet
Jaxer.DB.MySQL.createDB(connectionParams); 
var conn = new Jaxer.DB.MySQL.Connection(connectionParams);
conn.open(); // This is optional: executing a query automatically opens the connection if needed
conn.execute("CREATE TABLE IF NOT EXISTS booktest (id INTEGER PRIMARY KEY AUTO_INCREMENT, title TEXT)");
conn.execute("INSERT INTO booktest (title) VALUES (?)", "Mary Poppins"); 
var resultset = conn.execute("SELECT * FROM booktest");
conn.close();</pre>

		<p>Since you're managing when these connections open and close, there's no need to specify the CLOSE_AFTER_EXECUTE and CLOSE_AFTER_REQUEST parameters. Also, remember that the names of the connectionParams properties are case-sensitive.</p>
		
		<h2><a id="jaxerDB"></a>Jaxer.DB</h2>
        <p>The API itself is extremely simple. The Jaxer.DB.execute(sql, params) method returns either a Jaxer.DB.ResultSet, an array of Jaxer.DB.ResultSet, or a number.  The execute method returns a Jaxer.DB.ResultSet for SELECT statements. For INSERT, UPDATE, and DELETE statements the number of rows that are affected is returned.</p>
        <p>The SQL parameter is mandatory but you may optionally use "?" to indicate prepared statement parameters (placeholders for data). 
		This is generally a better practice than embedding parameter values directly in the SQL string&mdash;especially if the values come from 
		user data&mdash;since that offers a line of defense against SQL injection attacks. If you use "?" in your SQL, pass a params object as the 
		second argument to execute().</p>
		<p>If you have multiple placeholders in your SQL statement, params should be an array of values with values in the same order as the 
		question marks in your statement; when you have only a single escaped value pass it as itself without wrapping it in an array.</p>

		<p>MySQL supports passing multiple statements in a single execute call; this returns an array of Jaxer.DB.ResultSet objects, one ResultSet per statement. 
		In the next example, two SQL statements are executed in one call so an array containing two ResultSet objects is returned.</p>
		<pre name="code" class="brush: js;">
var conn = new Jaxer.DB.MySQL.Connection(connectionParams);
var rs = conn.execute("SELECT * FROM booktest WHERE id = 1; SELECT * FROM booktest WHERE id = 2");
print(rs);</pre>
		<pre name="code" class="brush: js;">
// Output is:
Columns: id | title
Row 0: 1 | Mary Poppins,
Columns: id | title
Row 0: 2 | Robinson Crusoe</pre>
		<p>You can also invoke MySQL procedures, which similarly returns an array containing a ResultSet for each DML statement passed, along with 
		the number of rows affected. For example, the following code creates (in MySQL only) a stored procedure, invokes it, and then prints out the result set:</p>
		<pre name="code" class="brush: js;">
var conn = new Jaxer.DB.MySQL.Connection(connectionParams);
conn.execute("CREATE PROCEDURE demo_proc() BEGIN select * from booktest; END");
conn.execute("call demo_proc()");
for each (var r in rs) {
	print('Result set:');
	print(r);
}</pre>
		<pre name="code" class="brush: js;">
// Result set:
Columns: id | title
Row 0: 1 | Mary Poppins
Row 1: 2 | Robinson Crusoe
Result set: 0</pre>

		<p>When you need to execute one SQL statement repeatedly but with different parameters, use mapExecute. Most commonly used when there's a single SQL statement 
	you need to invoke with a large list of different bind parameters, mapExecute prepares a SQL statement only once to significantly boost	performance.</p> 
		<p>In the following example an array of parameters is passed on each invocation, where each entry in the array is an array of values to use on a single execution of the statement, then the 
	mapExecute method then returns an array of Jaxer.DB.ResultSet objects:</p>
		<pre name="code" class="brush: js;">
var rs = conn.mapExecute("SELECT * FROM booktest WHERE id = ? AND title = ?", 
	[[2, "Robinson Crusoe"], 
	[3, "Harry Potter"]]);
print(rs);</pre>
		<pre name="code" class="brush: js;">
// Result set:
Columns: id | title
Row 0: 2 | Robinson Crusoe,
Columns: id | title
Row 0: 3 | Harry Potter</pre>

		<p>The mapExecute method returns a Jaxer.DB.ResultSet array with an entry for each set of parameters. You can also flatten the returned array into one ResultSet by setting the flatten option:</p>
		<pre name="code" class="brush: js;">
var rs = conn.mapExecute("SELECT * FROM booktest WHERE id = ? AND title = ?", 
	[[2, "Robinson Crusoe"], 
	[3, "Harry Potter"]],
	{flatten: true});
print(rs);</pre>
		<pre name="code" class="brush: js;">
Columns: id | title
Row 0: 2 | Robinson Crusoe
Row 1: 3 | Harry Potter</pre>

		<p>The last item in the Jaxer.DB API is Jaxer.DB.lastInsertId (<em>synonym:</em> Jaxer.DB.lastInsertRowId), which returns the value of
	AUTO_INCREMENT column automatically set by the database on the most recent insert into a given table. You should retrieve the 
	lastInsertId right after you execute the INSERT statement because otherwise the behavior of lastInsertId may differ based on the database implementation. 
	For example, SQLite always returns the rowid of the last successfully inserted row, whether or not it had an INTEGER PRIMARY KEY AUTO_INCREMENT column.</p>

		<h2><a id="dataTypes"></a>Data Types</h2>
		<p>The execute() method attempts to preserve JavaScript datatypes and data across trips to and from the database for all supported database 
		implementations. If you store a JavaScript Date value in a table with a compatible column type, and retrieve it, you will get back the same JavaScript Date value. 
		The details of how this works vary with the implementation.</p>
		
		<h3>JavaScript values storage in SQLite</h3>
		<p>The SQLite 3 database is fundamentally untyped: unlike most other relational databases, you can store any SQLite data type in any column, regardless of its declared data type. For more information, see the <a href="http://www.sqlite.org/datatype3.html">SQLite 3 datatype documentation</a>.</p>
		<ul>
            <li><strong>Numbers:</strong> double-precision values</li>
			<li><strong>NaN values:</strong> special string codes</li>
            <li><strong>Booleans:</strong> 1 or 0 integer values</li>
            <li><strong>Strings:</strong> strings</li>
            <li><strong>Dates:</strong> 64 bit integers corresponding to the number of milliseconds since midnight 1/1/1970</li>
            <li><strong>Null and undefined:</strong> database NULL values</li>
            <li><strong>Everything else:</strong> NULL, and a warning message is logged</li>
		</ul>

		<h3><br>SQLite Return DataTypes</h3>
		<p>Values retrieved from SQLite are converted to JavaScript data types based on the SQLite data type and the declared type of that column (without regard to case):</p>
		<ul>
            <li><strong>Declared type has "bool" in it:</strong> value is returned as a boolean</li>
            <li><strong>Declared type has "date" or "time" in it, and the SQLite data type is integer:</strong> value is treated as the number of milliseconds since midnight 1/1/1970 and returned as a Date</li>
            <li><strong>Value is a string and matches one of the special string codes representing NaN values:</strong> returned as that number value</li>
            <li><strong>Otherwise, SQLite integer, float (double), text, and blob values:</strong> returned as number, number, string, and string values, respectively</li>
		</ul>

		<h3><br>JavaScript values storage in MySQL</h3>
		<p>MySQL 5 is a strongly typed relational database and so limits just a bit the storage of some JavaScript values, relative to SQLite.</p>
		<ul>
            <li><strong>Numbers:</strong> double-precision values</li>
			<li><strong>NaN values:</strong> database NULLs after logging a warning message</li>
            <li><strong>Booleans:</strong> 1 or 0 integer values</li>
            <li><strong>Strings:</strong> (UTF8) strings</li>
            <li><strong>Dates:</strong> MySQL DateTime values corresponding to the number of seconds since midnight 1/1/1970 (since MySQL DateTimes amazingly only have a precision of a second)</li>
            <li><strong>Null and undefined:</strong> database NULL values</li>
            <li><strong>Anything else:</strong> database NULL value after a warning message is logged</li>
		</ul>

		<h3><br>MySQL Return DataTypes</h3>
		<p>Values retrieved from MySQL don't need the heuristics based on declared types, as was the case for SQLite, because of the strong typing of MySQL columns:</p>
		<ul>
            <li><strong>NULLs:</strong> returned as JavaScript nulls</li>
            <li><strong>Numbers of any type:</strong> returned as JavaScript numbers (always double-precision)</li>
            <li><strong>DateTimes:</strong> returned as JavaScript Date values, to a precision of 1 second</li>
            <li><strong>Dates:</strong> returned as JavaScript Date values with the time portion set to midnight</li>
            <li><strong>Times:</strong> returned as JavaScript Date values with the date portion set to the configurable settings Jaxer.DB.TIME_COLUMN_YEAR, Jaxer.DB.TIME_COLUMN_MONTH, Jaxer.DB.TIME_COLUMN_DAY (defaulting to 1/1/1970)</li>
            <li><strong>TEXT and BLOB values of any type:</strong> returned as JavaScript strings</li>
		</ul>
		
		<h2 id="withODBC">Can I Use Jaxer with ODBC Drivers?</h2>
		
		<p>
			Yes, you can, and the sample code below demonstrates how to use the Mozilla native database support to access an 
			ODBC driver. The code is setup to access a preconfigured DSN ('SQLEXPRESS') and run a query against a table named 
			<code>jaxer</code>; results are shown after the code.
		</p>
		
		<h3>Using an ODBC Driver with Jaxer</h3>
		<pre name="code" class="brush: js;">var log = Jaxer.Log.forModule("odbc");
/*
 * Utility function for padding text
 */
function rightPad(str, width)
{
    var s = str.toString();
    return (s.length < width) ? 
		(s + (new Array(width - s.length)).join(" ")) : s.substring(0, width - 1);
}

/*
 * DSN previously configured in Windows.
 * 
 * ODBC drivers for linux are available 
 * http://www.unixodbc.org/
 * http://www.iodbc.org/
 * 
 * ODBC is even found on MACs - who knew!
 * http://www.stata.com/support/faqs/data/odbcmu.html
 */

// Context-specific values
var dbName = "myDBName";
var usr = "a_user";
var pwd = "a_password";
var query = "SELECT * FROM jaxer";

// Create the connection
var service = Components.classes["@mozilla.org/sql/service;1"]
            .getService(Components.interfaces.mozISqlService);

var connection = service.init("", 0, dbName, usr, pwd);

// Execute the query
var results = connection.executeQuery(query);

var sep = "------------------------------------------------------";
log.info(sep);

var column_count = results.columnCount;
var have_more_data = results.rowCount > 0;
var set = results.enumerate();

// process column names
colHeader = [];
for (var c = 0; c < column_count; c++) 
{
    colHeader.push(rightPad(results.getColumnName(c),40));
}
log.info(colHeader.join(" | "));

log.info(sep);

// process row data
while (have_more_data) 
{
    have_more_data = set.next();
    
    var cols = [];
    for (var i = 0; i < column_count; i++) 
    {
        cols.push(rightPad(set.getVariant(i),40));
    }
    log.info((cols.join(" | ")));
}

log.info(sep);</pre>

		<div class="example-title">Expected Output</div>
		<pre name="code" class="brush: bash;">00:01:48 02/13/2008 [  2204] [INFO] [JS Framework] [odbc.] ------------------------------------------
00:01:48 02/13/2008 [  2204] [INFO] [JS Framework] [odbc.] comment                     | tags        
00:01:48 02/13/2008 [  2204] [INFO] [JS Framework] [odbc.] ------------------------------------------
00:01:48 02/13/2008 [  2204] [INFO] [JS Framework] [odbc.] Jaxer Baby!                 | groovey     
00:01:48 02/13/2008 [  2204] [INFO] [JS Framework] [odbc.] No Sleep til Jaxer          | beastie     
00:01:48 02/13/2008 [  2204] [INFO] [JS Framework] [odbc.] It's Jaxtastic!             | plastic     
00:01:48 02/13/2008 [  2204] [INFO] [JS Framework] [odbc.] ------------------------------------------</pre>

		<h3>Further reading:</h3>
		<ul>
			<li><a href="http://mxr.mozilla.org/mozilla/source/extensions/sql/sqltest/">Mozilla SQL SQLTest extension source</a></li>
			<li><a href="http://xulblog.de/xul/archives/19-SQL-Console-in-Mozilla.html">SQL Console in Mozilla</a></li>
			<li><a href="http://eu.mozdev.org/Brussels2003/talks/jan/index.html">Native Database Support</a></li>
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