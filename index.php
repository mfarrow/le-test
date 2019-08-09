<?php define('VERSION', 30); ?>
<?php $site = file_get_contents('/home/ubuntu/site.txt'); ?>
<?php $commit = file_get_contents('/home/ubuntu/commit.txt'); ?>
<?php $asg_ami = file_get_contents('/home/ubuntu/asg_ami.txt'); ?>
<?php $s3 = file_get_contents('/home/ubuntu/s3.txt'); ?>
<?php $s3_url = sprintf('https://%s/%s', trim($s3), 'test1.txt'); ?>
<!doctype html>
<html>
  <head>
    <title>Test version <?php print VERSION; ?></title>
    <style>
      body {
        margin-top: 0;
        padding-top: 0;
      }
      dl {
        border: 3px double #ccc;
        padding: 0.5em;
      }
      dt {
        float: left;
        clear: left;
        width: 150px;
        text-align: right;
        font-weight: bold;
        color: green;
      }
      dt::after {
        content: ":";
      }
      dd {
        margin: 0 0 0 170px;
        padding: 0 0 0.5em 0;
      }
      #header {
        display: block;
      }
    </style>
  </head>
  <body>
    <img src="/shared-files/le_header_1x_0.jpg" id="header">
    <h1>Test version <?php print VERSION; ?></h1>

    <dl>
      <dt>Version</dt>
      <dd><?php print VERSION; ?></dd>
      <dt>Site</dt>
      <dd><?php print $site; ?></dd>
      <dt>Commit</dt>
      <dd><?php print $commit; ?></dd>
      <dt>AMI</dt>
      <dd><?php print $asg_ami; ?></dd>
      <dt>S3 file URL</dt>
      <dd><?php print $s3_url; ?></dd>
      <dt>S3 file content</dt>
      <dd><?php print file_get_contents($s3_url); ?></dd>
    </dl>
    <p>This is a test.</p>
    <pre>
      <?php var_dump($_SERVER); ?>
    </pre>
  </body>
</html>
