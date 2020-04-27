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
  .panel-content {padding: 2em;}
  .panel-nav {width: 20em; border-right: 1px solid #9db7d1; height: 100vh; overflow-y: scroll;}
  .panel-nav-content {padding: 2em;}
  .panel-nav td {padding-right: 1em;}
  .panel-nav h4 {text-align: center;}
</style>
</head>

<body>
  <div class="panel-group">
  <div class="panel panel-nav">
    <div class="panel-nav-content">
    <p>
      The experiment lasts 90 days total. The conversion funnel to be measured has three phases: Discover, Try, and Buy. <a target="_blank" href="https://docs.google.com/presentation/d/1OesC9DGJUAqfLnf4E54czgYdGqtF2pt35sOivuvMaI0/edit?usp=sharing">Research plan</a>
    </p>
  <h1>Discover</h1>
  <p><strong>30 day enrollment window</strong></p>
  <h4>Day 1</h4>
  <p><a href="?email=disc-aware">
    Try Smart Plugin Manager at no cost
  </a><p>
  <h4>Day 14</h4>
  <p><a href="?email=disc-remind">
    Re: Try Smart Plugin Manager at no cost
  </a></p>
  <h4>Day 23</h4>
  <p><a href="?email=disc-expire">
    Trial offer enrollment window ends [Mon DD]
  </a></p>
  <h1>Try</h1>
  <p><strong>30 day trial period</strong>, beginning when a license is enabled</p>
  <p>The customer logged into the Portal and enabled one or more licenses</p>
  <h4>Day 1 of trial</h4>
  <p><a href="?email=try-intro">
    Your SPM trial on [Account Name] has begun
  </a></p>
  <h4>23 days into trial</h4>
  <p>
    <a href="?email=try-expire">
    Your SPM trial for [Account Name] ends [Mon DD]
  </a>
</p>
<p>
Or
</p>
  <p>
  <a href="?email=try-billed">
  [Account Name] will be billed for Smart Plugin Manager [Mon DD]
  </a>
  </p>
  <h4>As updates happen</h4>
  <p><a href="?email=try-use">
    Plugin update: [Environment domain name]
  </a></p>
  <h1>Buy</h1>
  <p><strong>30 day conversion window</strong>, beginning 60 days after initial invitations went out</p>
  <p>All customers who participated in the trial receive a follow-up email.
  <h4>30 days after trial ends</h4>
  <p><a href="?email=buy-feedback">
    How was your Smart Plugin Manager exeperience?
  </a></p>
</div>
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
