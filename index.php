<?php //header("Location: http://ficsave.com/maintenance.php"); die(); ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FicSave - An Open-Source Online Fanfiction Downloader</title>
  <link rel="icon" 
      type="image/png" 
      href="http://ficsave.com/favicon.ico" />
  <link rel="stylesheet" href="css/foundation.css" />
  <script src="js/vendor/modernizr.js"></script>  
  <style>
  .top-bar.expanded .toggle-topbar a span {
      box-shadow: none;
  }
  </style>
</head>
<body>

<!-- Navigation -->
<div class="sticky">
    <nav class="top-bar" data-topbar>
        <ul class="title-area">
            <!-- Title Area -->
            <li class="name">
                <h1>
                    <a href="/">
                      FicSave
                    </a>
                </h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
        </ul>
    </nav>
</div>

<a href="https://github.com/waylaidwanderer/FicSave"><img style="position: fixed; top: 0; right: 0; border: 0; z-index: 999" src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png" alt="Fork me on GitHub"></a>

<div class="row" style="margin-top:50px">
    <div class="large-12 columns">
        <p>FicSave is an online fanfiction downloader that allows you to save stories from FanFiction.net (with more to come) for offline reading. Please be patient and only click the Download button once - it will take a while for longer stories to be ready for downloading.<br />
        Problems? <a href="https://github.com/waylaidwanderer/FicSave/issues" target="_blank">Create an issue</a> on GitHub.</p>
        <p>For questions/inquiries and keeping up with the latest news, follow me on Twitter <a href="https://twitter.com/FicSave" target="_blank">@FicSave</a>.<br>Something wrong with the generated file? Please let me know!</p>
        <form action="#" method="POST" id="form" onsubmit="return false;">
            <div class="row">
                <div class="large-6 columns">
                  <label>Fanfic URL</label>
                  <input type="text" name="story_url" placeholder="https://www.fanfiction.net/s/<story_id>/" />
                </div>
                <div class="large-4 columns">
                  <label>Format</label>
                  <select name="format" form="form">
                    <option value="epub">ePub</option>
                    <option value="pdf">PDF</option>
                    <option value="mobi">MOBI</option>
                  </select>
                </div>                
                <div class="large-2 columns" style="margin-top:22px">
                  <input id="download" type="submit" class="button postfix" value="Download">
                </div>
            </div>            
        </form>
        <iframe id="file" width="0" height="0" scrolling="no" frameborder="0" src="" seamless="seamless"></iframe>
        <div style="text-align:center">
        	
        </div>
    </div>
</div>

<div class="row">
    <div class="large-12 columns">
        <h3>Changelog</h3>
        <ul>
          <li>
            <ul><strong>May 29th, 2014</strong>
              <li>Fixed a compatibility issue with mobile browsers causing corrupted files to be sent</li>
            </ul>              
          </li>
          <li>
            <ul><strong>May 22nd, 2014</strong>
              <li>Grabbing fanfics is now asynchronous, meaning timeouts are a thing of the past</li>
              <li>PDFs are now generated with Calibre</li>
            </ul>              
          </li>
          <li>
            <ul><strong>April 3rd, 2014</strong>
              <li>Fixed a case where a chapter would be missing sections of text</li>
              <li>Fixed some UTF-8 characters not being formatted properly</li>
            </ul>              
          </li>
          <li>
            <ul><strong>March 21st, 2014</strong>
              <li>Fixed a case where long chapters would be truncated in the database</li>
              <li>Added error handling for empty chapters</li>
            </ul>              
          </li>
          <li>
            <ul><strong>February 6st, 2014</strong>
            	<li>Open-sourced to <a href="https://github.com/waylaidwanderer/FicSave" target="_blank">GitHub repo</a></li>
              <li>Finalized MOBI support</li>
              <li>Site tweaks</li>
            </ul>              
          </li>
          <li>
            <ul><strong>February 1st, 2014</strong>
              <li>Added PDF support</li>
              <li>Added beta MOBI support</li>
            </ul>              
          </li>
          <li>
            <ul><strong>January 31st, 2014</strong>
              <li>Initial version of FicSave</li>
            </ul>
          </li>
        </ul>
    </div>
</div>

<!-- Footer -->
<footer class="row">
    <div class="large-12 columns"><hr>
        <div class="row">
          <div class="large-6 columns">
              <p>Copyright © 2014 FicSave.com. All Rights Reserved.</p>
          </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
 
<script>
document.write('<script src=js/vendor/jquery.js><\/script>');
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-38190232-3', 'ficsave.com');
ga('send', 'pageview');
</script>
<script src="js/foundation.min.js"></script>
<script src="js/ficsave.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>