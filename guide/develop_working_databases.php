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
		<h1>Working with Database Content</h1>
	</div>
	<div id="mainContent">
		<div class="assets-container">
			<div class="assets toc">
				<div class="assets-header">Contents</div>
				<ul>
					<li><span><a href="#jxrResultSet">Getting Data: Jaxer.DB.ResultSet</a></span></li>
					<li><span><a href="#functional">A Functional Approach</a></span></li>
					<li><span><a href="#lookupExample">Moving Data into Forms</a></span></li>
					<li><span><a href="#formValidation">Form Validation</a></span></li>
					<li><span><a href="#writingData">Writing to the DB</a></span></li>
				</ul>
			</div>

			<div class="assets">
				<div class="assets-header">Resource and API Links</div>
				<div class="assets-body">
                    <div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.DB" target="api">Jaxer.DB</a></div>
                    <div class="asset"><a href="/reference/jaxer/api/Jaxer.index-frame.html#Jaxer.DB.ResultSet" target="api">Jaxer.DB.ResultSet</a></div>
                    <div class="asset"><a href="http://activerecordjs.org" target="api">ActiveRecordJS.org</a></div>
				</div>
			</div>
		</div>

		<h2 id="jxrResultSet">Getting Data: Jaxer.DB.ResultSet</h2>

		<p>
			To retrieve data from the database you execute an SQL SELECT query which returns a new instance of the Jaxer.DB.ResultSet class. The resultset contains 
			all the data returned from the query, which means you can continue using it even after the connection is closed. The data in it also will not change even if the 
			database data changes after you created the object.
		</p>
		
		<p>
			Jaxer.DB.ResultSet offers multiple ways of getting at its data. A common one is through the rows property, which is an Array of objects, one per returned 
			row. Each row is a simple JavaScript object with a property per column, the value being the value of the row's cell for that column:
		</p>
		
		<pre name="code" class="brush: js; class-name: narrowSH;">var resultset = Jaxer.DB.execute("SELECT * FROM booktest");
var firstTitle = resultset.rows[0].title; // equals "Mary Poppins"</pre>

		<p>Use rows.length to get a count of the returned rows. For each row, you may alternatively want all the cell values in one array, in the order returned by the query 
		so each row has a property called $values that holds an Array of its cells' values.</p>

		<p>To get all the data as a rectangular array (that is, a table), the resultset's rowsAsArrays property is an Array of the rows returned by the query but with each row 
		an Array itself containing the values of the row's cells (the same as $values, above).</p>

		<pre name="code" class="brush: js;">var resultset = Jaxer.DB.execute("SELECT * FROM booktest"); 
resultset.rowsAsArrays.forEach(function(row) { 	
print(row.join(" | ")); }); </pre>

		<p>
			The firstRow/singleRow properties return an object containing the first row from a result set while lastRow conversely is object based on the final row of 
			the result set. Jaxer.DB.ResultSet has matching singleRowAsArray and lastRowAsArray methods that convert the single row objects to an array with the added 
			advantage that the methods take an array parameter which lets you filter the columns included in the return value.
		</p>

		<pre name="code" class="brush: js;">var resultset = Jaxer.DB.execute("SELECT * FROM booktest"); 
resultset.singleRowAsArray([2, 3, 5, 8]).forEach(function(col) { 	
	print('Col value: '+col+'\n'); 
}); </pre>
		
		<p>The singleResult property is your friend if you know a query returned a single result or you only care about the first cell in the first row; singleResult is always null if there is no data to return.</p>

		<p name="code" class="brush: js;">var numBooks = Jaxer.DB.execute("SELECT COUNT(*) FROM booktest").singleResult; </p>

		<p>
			To determine if the resultset has any data, or to distinguish a singleResult that's null because the database had a NULL in that cell versus returned no data 
			from the query, use the hasData property.
		</p>

		<pre name="code" class="brush: js;">var resultset = Jaxer.DB.execute("SELECT * FROM booktest");
if(resultSet.hasData) {
	resultset.rowsAsArrays.forEach(function(row) { 	
	print(row.join(" | ")); });
}</pre>

		<p>
			The resultset's columns property contains an array of the names of the columns returned, in the order returned by the query. If you know a column's name, you can 
			find its index using the resultset's indexOfColumn() function.
		</p>
		
		<h3>Quick Printing</h3>
		
		<p>
			Jaxer.DB.ResultSet also gives you two convenience methods: toHTML and toString. The former returns the result set as an HTML table, the latter returns the result 
			set as a string.
		</p>
		
		<h3>Avoiding SQL Injection Attacks</h3>
		
		<p>
			One of the biggest tar pits in web application development is avoiding the bad guys and hooligans. SQL Injection is the name for a nasty security hole to which web apps 
			can be vulnerable if the developer doesn't take the appropriate precaution. Fortunately, Jaxer makes avoiding this attack very simple: whenever you pass a SQL 
			statement to Jaxer.DB.execute (or any of the APIs which execute SQL on the database) put a ? (question mark) in your SQL where user-supplied input goes and pass the 
			actual values as one or more parameters. Jaxer will sanitize the input value before passing the final statement to your database.
		</p>
		
		<h3>Examples</h3>
		
		<ul>
			<li>Selects: <code>Jaxer.DB.execute('SELECT * FROM Table1 WHERE fieldX = ? AND fieldY = ?', value1, value2)</code></li>
			<li>Updates: <code>Jaxer.DB.execute('UPDATE Table1 SET field1 = ?, field2 = ?, field3 = ? WHERE keyValueField = ?', valA, valB, valC, valD)</code></li>
			<li>Inserts: <code>Jaxer.DB.execute('INSERT INTO Table1 VALUES(?, ?, ?, ?', val1, val2, val3, v4);</code></li>
			<li>Deletes: <code>Jaxer.DB.execute('DELETE FROM Table1 WHERE keyValueField = ?', val6);</code></li>
		</ul>

		<h3>Alternative: Use the Google Gears DB API</h3>

		<p>The Jaxer.DB.ResultSet API currently has approximately 30 methods for accessing the data stored in the properties discussed here. These are convenience methods intended to simplify reading a 
		Jaxer.DB.ResultSet. For example, say you prefer to use the Google Gears DB API; the Jaxer.DB.ResultSet also supports its access methods:</p>

		<div id="gearsSelect">
			<div class="body">
				<textarea name="code" class="brush: js;">
var resultset = Jaxer.DB.execute("SELECT * FROM booktest");
var numFields = resultset.fieldCount();
var header = [];
for (var i=0; i<numFields; i++) {
	header.push(resultset.fieldName(i));
}
print(header.join(" | "));
while (resultset.isValidRow()) {
	var line = [];
	for (var i=0; i<numFields; i++) {
		line.push(resultset.field(i));
	}
	print(line.join(" | "));
	resultset.next();
}
resultset.close();</textarea>
			</div>
		</div>

		<pre name="code" class="brush: js;">
// Results shown in Studio's Jaxer Shell: 

id | title
1 | Mary Poppins
2 | Robinson Crusoe
3 | Harry Potter</pre>

		<h2 id="functional">A Functional Approach</h2>
		<p>Jaxer.DB includes methods to apply against results in a functional approach as well:</p>

		<ul>
			<li>every(Object fn) : Boolean</li>
			<li>filter(Object fn) : Array</li>
			<li>forEach(Object fn) : void </li>
			<li>map(Object fn) : Array</li>
			<li>reduce(Object fn, Object initialValue) : Object</li>
			<li>reduceRight(Object fn, Object initialValue) : Object</li>
			<li>some(Object fn) : Boolean</li>
		</ul><br />

		<h3>Accumulate the sum of IDs from our booktest table</h3>
		<pre name="code" class="brush: js;">var sumOfIds = conn.execute("select * from booktest").reduce(function(previousValue, currentValue) {
	return previousValue + currentValue[0];
});</pre>

		<h3>Double each ID</h3>
		<pre name="code" class="brush: js;">var doubleTheIds = conn.execute("select * from booktest").map(function(row) {
	return 2 * row[0];
});</pre>

		<h2 id="lookupExample">Moving Data into Forms</h2>
	
		<p>
			One of the most common database design patterns is to store lookup data, sets of valid values for a given field, in the database. Jaxer makes it simple to 
			retrieve these values and insert them into, say, select fields on your forms, as shown in the following example.
		</p>
	
		<div id="selectLookup">
			<div class="body">
				<textarea name="code" class="brush: html;">
<html>
	<body>
		<script runat="server-proxy">
			/* Requires a table Lookups with fields:
			 *  ID: Primary key
			 *  DataSet: Group name for a set of lookup values
			 *  luName: Text to display
			 *  luValue: Value to store (optional)
			 */
			
			function getLookups(dSet, useLUV) {
				var selectString = "";
				var lookups = Jaxer.DB.execute("SELECT * FROM Lookups WHERE DataSet=?",dSet);
				if(lookups.rows > 0) {
					selectString += "<select id='dSet"+dSet+"'>";
					// Loop resultset to build select option list
					lookups.forEach(function(curValue, idx, row) {
						if (useLUV) {
							selectString += "<option value='" + row.luValue + ">" + row.luName + "</option>";
						} else {
							selectString += "<option>" + row.luName + "</option>";
						}
					})
					selectString += "</select>";
				} else {
					// error condition
					alert('Could not find any lookups for dataset '+dSet);
				}
				return selectString;
			}
		</script>
		<script>
			window.onload = function() {
				var sel = document.getElementById('setStatus');
				sel.innerHTML = getLookups('statuses', false); 
			}
		</script>
		<select id="setStatus"></select>
	</body>
</html></textarea>
			</div>
		</div>
		
		<h2 id="formValidation">Form Validation</h2>
		
		<p>
			Real- or near-realtime input validation has always been among the more difficult features in web application development, especially when the check 
			requires database access. Jaxer's ability to mix between client and server execution, with the security added by minimizing over the wire database 
			interaction, removes most of the obstacles.
		</p>
			
		<div id="formValidationExample">
			<div class="body">
				<textarea name="code" class="brush: html">
<html>
	<body>
		<script runat="server-proxy">
			function masterValidations() {
				Jaxer.session['ErrorMessage'] = new Array;
				
				// other validations
				employeeUsernameValid(empUsername);
				// other validations
				
				if(Jaxer.session['ErrorMessage'].length > 0) {
					/* handle the accumulated errors
					 * return false to block
					 */
					return false;
				} else {
					return true;
				}
			}
			
			function employeeUsernameValid(empName) {
				/* Validating an employee username has multiple rules:
				 * 
				 * - Must be unique (database test)
				 * - Must be between 10 and 25 characters (length test)
				 * - Must contain only alphabetical characters or underscore (grep test)
				 * 
				 * Return false at the first violation, skipping the remainder
				 */
				
				/* Since this is likely to be one of many validations, 
				 * how the error message is used is outside the scope of this example.
				 * Here we just add it to the session ErrorMessage hash
				 */

				if(empName.length > 9 && empName.length < 26) {
					Jaxer.session['ErrorMessage'] << 'Username must be between 10 and 25 characters long';
					return false;
				}
				if(!Jaxer.Util.String.grep(empName, '/^\w+$/')) {
					Jaxer.session['ErrorMessage'] << 'Username must contain only alphabetical characters or underscore';
					return false;
				}
				var empNames = Jaxer.DB.execute("SELECT username FROM Employees WHERE username="+empName);
				if (empNames.rows > 0) {
					Jaxer.session['ErrorMessage'] << 'Username must be unique';
					return false;
				}
			}
		</script>
		<label for="empUsername">Employee's computer username</label> 
		<input type="text" size="20" id="empUsername">
		<input type="button" value="Submit" onclick="masterValidations()">
	</body>
</html></textarea>
			</div>
		</div>

		<h2 id="writingData">Writing to the DB</h2>

		<h3 id="addRow">Adding a Row or Rows</h3>
		<div class="example">
			<div class="body">
				<textarea name="code" class="brush: html;"><script runat="server-proxy">
	// Add one new row to a table
	// A record in this example has three fields
	function addMyItem(aItem) {
		var rs;
		rs = Jaxer.DB.execute('INSERT into MyItems values(?, ?, ?)', aItem[1], aItem[2], aItem[3])
		if(!rs) {
			alert('Could not insert new Foo');
		}
		return rs;
	}

	// Add mutiple new rows to a table
	// A record in this example has three fields
	// So the parameter is an array of arrays:
	// aSetOfItems = [[val1, val2, val3], [val4, val5, val6], [val7, val8, val9]];
	function addMyItems(aSetOfItems) {
		var rs = new Array;
		rs = Jaxer.DB.mapExecute('INSERT into MyItems values(?, ?, ?)', aSetOfItems)
		if(Jaxer.filterInPlace(rs, function(itm, idx) {return itm > 0}).length > 0) {
			alert('Could not insert new Items');
		}
		return rs;
	}
</script></textarea>
			</div>
		</div>
		
		<h3 id="updateRow">Updating a Row</h3>
		<div class="example">
			<div class="body">
				<textarea name="code" class="brush: html;"><script runat="server-proxy">
	// Update one row in a table
	// A record in this example has three fields
	// fooID parameter is the primary key value of the row to update
	function updateFoo(aFoo, fooID) {
		var rs;
		rs = Jaxer.DB.execute('UPDATE Foo SET fn1=?, fn2=?, fn3=? WHERE id=?', [aFoo[1], aFoo[2], aFoo[3], fooID]);
		if(!rs) {
			alert('Could not update Foo '+aFoo['id']);
		}
		return rs;
	}
</script></textarea>
			</div>
		</div>
		
		<h3 id="deleteRow">Deleting a Row</h3>
		<div class="example">
			<div class="body">
				<textarea name="code" class="brush: html;"><script runat="server-proxy">
	// Delete one row in a table
	// fooID parameter is the primary key value of the row to update
	function deleteFoo(fooID) {
		var rs;
		rs = Jaxer.DB.execute('DELETE Foo WHERE id=?', fooID);
		if(!rs) {
			alert('Could not delete Foo '+fooID);
		}
		return rs;
	}
</script></textarea>
			</div>
		</div>
		
				
	</div> <!-- end main content -->
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