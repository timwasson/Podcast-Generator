<?php
############################################################
# PODCAST GENERATOR
#
# Created by Alberto Betella
# Improved by Tim Wasson
# 
# This is Free Software released under the GNU/GPL License.
############################################################

include ('checkconfigexistence.php');


$PG_mainbody = NULL; //define
$PG_mainbody = '<form method="post" action="index.php?step=5">	
	';

$PG_mainbody .= '<p><b>'.$SL_enteruserandpwd.'</b></p>
	<label for="username">'.$SL_username.'</label>

	<input name="username" id="username" type="text" size="20" maxlength="20" value=""><hr>

	<label for="password">'.$SL_pwd.'</label>

	<input type="password" id="password" name="password" size="20" maxlength="20"><br />

	<label for="password2">'.$SL_pwdconfirm.'</label>
	<input type="password" id="password2" name="password2" size="20" maxlength="20"><br /><br />

	';


$PG_mainbody .= '
	<div class="form-actions">
	<input type="hidden" name="setuplanguage" value="'.$_POST['setuplanguage'].'">
	<input type="submit" value="'.$SL_next.'" class="btn btn-primary">
	</div>
	</form>';

//print output

echo $PG_mainbody;

?>