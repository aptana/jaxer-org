<?php $sidebar = true; ?>
<?php $active = 'tutorials';?>
<?php $title = 'Easy File Uploading using Aptana Jaxer'; ?>
<?php include('../includes/header.php'); ?>
  <style>pre { margin:5px; padding:5px;border:#ddd 1px solid;background:#eee}</style>    
  <P>One of the common web tasks that always seems to involve a lot of arcane knowledge of backend systems, is how to upload files. Like most systems, Aptana Jaxer uses the post/receive model, where a web form is posted to the server, and the target of that form will receive and process the content. Where Jaxer makes this really easy is that it is all done with regular JavaScript and HTML. No special enviroment vars, excessive string processing, or finding handles to oddly named temp files is required.</P>
  <P>All you need is a form to present to the user, which contains an input element of type upload, and an HTML page to receive the submitted form containing a "runat=server" script block that retrieves the data from the request. You could have the form and the recipient be the same page, however in this example I'll use two files for clarity. As an aside in Jaxer you can actually send the form directly to a JavaScript function living on the server but we'll look at that configuration in a future blog entry.</P>   
  <h4>Example HTML Upload Form </h4>   
  <P>   
  This example upload form simply allows you to select up to 2 files for upload from the local filesystem. Pressing 'upload' posts the contents of that form to an HTML page containing the JavaScript shown later.   
  </P>   
  <textarea name="code" class="xml" cols='150' rows='15'>   
  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
  <html>
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  	<title>Upload </title>
  </head>
  <body>
  <form id='upload' action="submissions.html" method="post" enctype="multipart/form-data">
      <input type="file" name="myFile1"><br>
      <input type="file" name="myFile2"><input type="submit" value='upload'>
  	<p>
  		'upload' sends the selected file(s) to the server.
  	</p>
  </form>
  </body>	
  </html>
  </textarea>   
  <p>The form will look like the following when viewed in a browser. Pressing the browse button will present you with a file selection dialog, or you can type the path into the input box directly. I've used 2 file slots in this example to demostrate that the files passed in are available as part of an files array contained in the request object (a JavaScript representation of the HTTP request) and are accessed like any other JavaScript array.</p>   
  <!--img src='http://www.aptana.com/system/files/upload_0.png'/-->

  <div style="background-color:white; border:1px solid #f5f5f5; padding:5px; width:80%">
  <input type="file" name="myFile1"><br>
  <input type="file" name="myFile2"><input type="submit" value='upload'>
  <p>
      'upload' sends the selected file(s) to the server.
  </p>
  </div>
  <br>

  <h4>Example Aptana Jaxer code to receive file uploads</h4>   
  <p>   
  To receive the data from the form when submitted we put some Jaxer code into the page the form will be submitted to. The code below should be in script block with a runat = 'server' attribute, which makes the code run serverside and doesn't present it to the client so you don't expose any serverside filenames or folder structures.</p>   
  <textarea name="code" class="javascript" cols='150' rows='15'><script type='text/javascript' runat='server'>
  var message = "";

  for (fileCount=0; fileCount<Jaxer.request.files.length; fileCount++)
  {
      var fileInfo = Jaxer.request.files[fileCount];

  //    prior to Jaxer 0.9.8 use
  //    var destinationFilePath = Jaxer.Dir.resolvePath(fileInfo.originalFileName);
      var destinationFilePath = Jaxer.Dir.resolve(fileInfo.originalFileName);
      fileInfo.save(destinationFilePath);

      message += "<br>" + [ 
  		"Saved to : " 			+ destinationFilePath
  	,	"original filename : " 		+ fileInfo.originalFileName
  	,	"temp filename : "		+ fileInfo.tempFileName
  	,	"contentType : " 		+ fileInfo.contentType
  	,	"size : " 				+ fileInfo.fileSize
  	].join("<br>");

  }
  document.write(message); 
  </script></textarea>

  <P>   
  The data posted by the form is available within the Jaxer.request object.
  </P>
  <P>For the purposes of this example we are specifically interested in the Jaxer.request.files array which contains an array of Jaxer.Request.FileInfo objects, one for each file posted with the form.
  <P></P>  
  The Jaxer.Request.FileInfo object contains some useful properties describing the file, such as fileName, contentType, etc.   
  </P>   
  <P>
  Uploading two files from my filesystem from the form in this example would return a page of output like below. We have uploaded the file to same location as the submission.html file used as the form action in the originating HTML.
  </P>
  <PRE>Saved to : C:\aptana\JaxerDev\public\work\bar.txt
  original filename : bar.txt
  temp filename : C:\aptana\JaxerDev\tmp\tmp
  contentType : text/plain
  size : 15754
  Saved to : C:\aptana\JaxerDev\public\work\foo.txt
  original filename : foo.txt
  temp filename : C:\aptana\JaxerDev\tmp\tmp-1
  contentType : text/plain
  size : 816
  </PRE>
  <P>Well that's really all there is to it. It's simple and easy and you never have to think about anything other than HTML and Javascript.</P>
  <P>
  API docs for the <a href=http://www.aptana.com/reference/jaxer/api/Jaxer.Request.FileInfo.html>FileInfo object</A> and the <a href=http://www.aptana.com/reference/jaxer/api/Jaxer.Request.html>Jaxer.Request object</a> are available online.
  </P>
<?php include('../includes/footer.php'); ?>
