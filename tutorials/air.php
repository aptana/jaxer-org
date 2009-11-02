<?php $sidebar = true; ?>
<?php $active = 'tutorials';?>
<?php $title = 'Jaxer on AIR: Build Desktop & Server Apps in Ajax'; ?>
<?php include('../includes/header.php'); ?>
  <p>Yesterday Adobe announced the availability of Adobe AIR 1.0. At the same time, Aptana released the Adobe AIR plugin for Aptana Studio which simplifies development of Ajax applications that run "on AIR". (<a href="http://www.aptana.com/air/">Adobe AIR Plugin for Aptana Studio</a>)</p>

  <p>If you are not familiar with Adobe AIR, it enables you to use the skills and Web technologies you already know, HTML, CSS, and JavaScript, to write applications that can be deployed to the Windows and Mac desktop, and shortly on Linux desktops too.</p>

  <p>And what is Aptana Jaxer, you ask? Jaxer is an Ajax server that enables you to leverage those same Web skills and technologies, HTML, CSS, and JavaScript, to write server-side code and do a whole new range of things with JavaScript like interact with databases, file systems, and remote data sources, do server-side DOM manipulations, cross-domain data calls, make socket connections, and call server-side JavaScript functions from the client-side, plus lots more. Yes, you write both client and server code using HTML and Ajax. You can even write entire web applications in a single HTML file if you wish.</p>

  <p>With that said, it becomes much clearer as to what 'Jaxer on AIR' is all about -- two systems that enable you to leverage your Ajax skills for building desktop and server apps, unified into a single, very interesting model.  With Jaxer you can implement your server-side to know if an app is running in AIR and thus take advantage of offline synchronization and local access to the client system as permitted, or if you're running on the Web with a subset of the total potential features of your Ajax apps and Web pages.  </p>

  <p>I did a 10-minute screencast showing a simple example of this. I take one of Jack Slocum's great Ext / Adobe AIR demos (<a href="http://extjs.com/blog/2008/02/24/tasks2/">EXT Tasks Demo</a>) and Jaxer-enabled it. I added a single JavaScript function that can query my backend database, and I use the results to fill the user interface.</p>

  <p>This demo just scratches the surface of what is possible, but I hope it opens the doors to your thinking about how to utilize these great technologies - it's my version of their chocolate and our peanut-butter happily together, enjoy!</p>

  <strong><a href="http://aptana.tv/movies/jaxer/PlayQTFlash.html?movie=JaxerOnAIR&width=975&height=750">View 'Jaxer on AIR' Screencast</a></strong>
<?php include('../includes/footer.php'); ?>
