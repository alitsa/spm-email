<!DOCTYPE html>
<html>
<head>
<title>SPM Trail Email Comms</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<base target="_self">
<style type="text/css">
  html, body {font-family: 'open sans', sans-serif; color: #002838; line-height: 1.6em;}
  a {color: #7E5CEF; text-decoration: none;}
  .panel-group {display:flex;}
  .panel {padding: 2em;}
  .panel-nav {width: 20em; border-right: 1px solid #9db7d1;}
  .panel-nav td {padding-right: 1em;}
</style>
</head>

<body>
  <div class="panel-group">
  <div class="panel panel-nav">
  <h1>Discover</h1>
  <p><strong>30 day offer</strong></p>
  <table>
    <tbody>
      <tr><td>T</td><td><a href="?email=disc-aware">Become aware of trail</a></td></tr>
      <tr><td>T + 14</td><td><a href="?email=disc-remind">Reminder to check it out</a></td></tr>
      <tr><td>T + 21</td><td><a href="?email=disc-expire">Offer expires...</a></td></tr>
    </tbody>
  </table>
  <h1>Try</h1>
  <p><strong>30 day trial</strong>The customer logged into the Portal and enabled one or more licenses</p>
  <table>
    <tbody>
      <tr><td>T</td><td><a href="?email=try-intro">Congrats! Here how it works</a></td></tr>
      <tr><td>T + 23</td><td><a href="?email=try-expire">Trial expiring soon</a></td></tr>
      <tr><td>NA/A</td><td><a href="?email=try-use">SPM update email with feedback solicitation</a></td></tr>
      <tr><td>T + 37</td><td><a href="?email=try-feedback">Why haven't you purchased?</a></td></tr>
    </tbody>
  </table>
  <h1>Buy</h1>
  <p>Customer chose to puchase licenses during trial period</p>
  <table>
    <tbody>
      <tr><td>T</td><td><a href="?email=buy-receipt">Why did you purchase?</a></td></tr>
      <tr><td>T</td><td><a href="?email=buy-feedback">Why did you cancel?</a></td></tr>
    </tbody>
  </table>
</div>
<div class="panel panel-content">
  <?php
  $email = $_GET['email'];
  if (isset($email)) {
      include($email . '.html');
  }else{
      include('disc-aware.html');
  }
  ?>
</div>
</div>
</body>

</html>
