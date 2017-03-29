<!DOCTYPE html>
<html>
<head>
  <?php if (isset($title)): ?>
    <title> <?= htmlspecialchars($title) ?> </title>
  <?php else: ?>
    <title> <?= htmlspecialchars($controller) ?> </title>
  <?php endif ?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

  <?php $file1 = lcfirst($controller); ?>
  <?php if(file_exists("./../public/css/{$file1}.css")): ?>
    <?php print("<link rel='stylesheet'  href='/css/{$file1}.css' />") ?>
  <?php endif ?>

</head>

<body>

  <div class="page-header">
    <pre><h1>Google Form Submitter <small>Infinite Submissions</small></h1></pre>
    <a href="https://www.000webhost.com/" onClick="this.href='https://www.000webhost.com/955080.html'"  target="_blank">
      <img src="/img/banner_small.gif" alt="Web hosting" width="120" height="60" border="0" />
    </a>
    <h3>Only works with Google Forms which have multiple submisions allowed. Doesn't work with forms which require login.</h3>
    <h3>Please watch the following video if you don't know how to use it.</h3>
  </div>