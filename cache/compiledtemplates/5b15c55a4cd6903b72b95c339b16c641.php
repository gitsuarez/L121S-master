<h1>New role</h1><?php  if (isset($errors)) : ?><?php  if (isset($errors)) : ?><div data-alert class="alert alert-danger alert-dismissible fade in"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><ul class="validation-ul"><?php  foreach ($errors as $err) : ?><li><?php  echo $err?></li><?php  endforeach;?></ul></div><?php  endif;?><?php  endif; ?><form action="/richard/sites/live121support.com-master/index.php/site_admin/permission/newrole" method="post"><div class="form-group"><label>Title</label><input class="form-control" type="text" name="Name"  value="" /></div><input type="hidden" name="csfr_token" value="<?php  echo erLhcoreClassUser::instance()->getCSFRToken()?>" /><h2>Policy list</h2><table class="table" cellpadding="0" cellspacing="0"><thead><tr><th>&nbsp;</th><th>Module</th><th>Function</th></tr></thead></table><input type="submit" class="btn btn-default" name="New_policy" value="New policy"/><br /><br /><div class="btn-group" role="group" aria-label="..."><input type="submit" class="btn btn-default" name="Save_role" value="Save"/><input type="submit" class="btn btn-default" name="Cancel_role" value="Cancel"/></div></form>