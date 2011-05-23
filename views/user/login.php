<?php
$form = new Appform();
if(isset($errors)) {
   $form->errors = $errors;
}
if(isset($username)) {
   $form->values['username'] = $username;
}
// set custom classes to get labels moved to bottom:
$form->error_class = 'error block';
$form->info_class = 'info block';

?>
<div id="box">
   <div class="block">
      <h1><?php echo __('Login'); ?></h1>
      <div class="content">
<?php
echo $form->open('user/login');
echo '<table><tr><td style="vertical-align: top;">';
echo '<ul>';
echo '<li>'.$form->label('username', __('Email or Username')).'</li>';
echo $form->input('username', null, array('class' => 'text twothirds'));
echo '<li>'.$form->label('password', __('Password')).'</li>';
echo $form->password('password', null, array('class' => 'text twothirds'));
echo '</ul>';
echo $form->submit(NULL, __('Login'));
echo '<small> '.Html::anchor('user/forgot', __('Forgot your password?')).'<br></small>';
echo $form->close();
echo '</td><td width="5" style="border-right: 1px solid #DDD;">&nbsp;</td><td><td style="padding-left: 2px; vertical-align: top;">';

echo '<ul>';
echo '<li style="height: 61px">'.__('Don\'t have an account?').' '.Html::anchor('user/register', __('Register a new account')).'.</li>';
echo '</ul>';
echo '</td></tr></table>';
?>
      </div>
   </div>
</div>


