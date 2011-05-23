<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" dir="ltr" lang="en-US">
<head>
   <title><?php echo $title ?></title>
   <meta charset="utf-8"/>
   <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), "\n" ?>
   <?php foreach ($scripts as $file) echo HTML::script($file), "\n" ?>
   <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
</head>
<body>
   <div id="page">
      <div id="header"><h1>SiteNetOS</h1></div>
      <div id="navigation">
             <?php
             $session = Session::instance();

             if (Auth::instance()->logged_in()){
		echo '<ul class="menu">';
		echo '<li>'.Html::anchor('appmanager', 'Apps').'</li>';
		echo '<li>'.Html::anchor('appstore', 'Store').'</li>';
                echo '<li>'.Html::anchor('appstore/register', 'Register Application').'</li>';
                echo '<li>'.Html::anchor('user/profile', 'My profile').'</li>';
                echo '<li>'.Html::anchor('user/logout', 'Log out').'</li>';
		echo '</ul>';
             }
           ?>
      </div>
   <div id="content">
    <?php
     // output messages
     if(Message::count() > 0) {
       echo '<div class="block">';
       echo '<div class="content" style="padding: 10px 15px;">';
       echo Message::output();
       echo '</div></div>';
     }
     echo $content ?>
<footer class="block">
	<div class="content">
		All right reserved &copy; SiteNetOS.
	</div>
</footer>
</div>
</div> 
<?php 
// echo '<div id="kohana-profiler">'.View::factory('profiler/stats').'</div>';
?>
</body>
</html>
