<?php define('VERSION', 21); ?>
<?php $site = file_get_contents('/home/ubuntu/site.txt'); ?>
<!doctype html>
<html>
  <head>
    <title>Test version <?php print VERSION; ?></title>
    <style>
      dl {
        border: 3px double #ccc;
        padding: 0.5em;
      }
      dt {
        float: left;
        clear: left;
        width: 100px;
        text-align: right;
        font-weight: bold;
        color: green;
      }
      dt::after {
        content: ":";
      }
      dd {
        margin: 0 0 0 110px;
        padding: 0 0 0.5em 0;
      }
    </style>
  </head>
  <body>
    <h1>Test version <?php print VERSION; ?></h1>
    <dl>
      <dt>Version</dt>
      <dd><?php print VERSION; ?></dd>
      <dt>Site</dt>
      <dd><?php print $site; ?></dd>
    </dl>
    <p>This is a test.</p>
    <pre>
      <?php var_dump($_SERVER); ?>
    </pre>
  </body>
</html>
