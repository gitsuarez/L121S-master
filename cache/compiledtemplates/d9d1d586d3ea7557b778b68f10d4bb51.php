<h1>Questions</h1><?php  if ($pages->items_total > 0) : ?><table class="table" cellpadding="0" cellspacing="0"><thead><tr><th width="1%">ID</th><th>Question</th><th>Location</th><th>Priority</th><th>Active</th><th>Revote</th><th width="1%">&nbsp;</th><th width="1%">&nbsp;</th></tr></thead><?php  foreach ($items as $item) : ?><tr><td><?php  echo $item->id?></td><td><a href="/richard/sites/live121support.com-master/index.php/site_admin/questionary/edit/<?php  echo $item->id?>"><?php  echo htmlspecialchars($item->question)?></a></td><td><?php  echo htmlspecialchars($item->location)?></td><td><?php  echo $item->priority?></td><td><?php  if ($item->active == 1) : ?><b>Y</b><?php  else : ?>N<?php  endif;?></td><td><?php  echo $item->revote > 0 ? $item->revote : 'Off' ; ?></td><td nowrap><a class="btn btn-default btn-xs" href="/richard/sites/live121support.com-master/index.php/site_admin/questionary/edit/<?php  echo $item->id?>">Edit the question</a></td><td nowrap><a onclick="return confirm('Are you sure?')" class="csfr-required btn btn-danger btn-xs" href="/richard/sites/live121support.com-master/index.php/site_admin/questionary/delete/<?php  echo $item->id?>">Delete the question</a></td></tr><?php  endforeach; ?></table><script>lhinst.protectCSFR();</script><?php  if (isset($pages)) : ?><?php  if (isset($pages) && $pages->num_pages > 1) : ?><nav><ul class="pagination paginator-lhc"><?php  if ($pages->current_page != 1) : ?><li class="arrow"><a class="previous" href="<?php  echo $pages->serverURL,$pages->prev_page,$pages->querystring?>">&laquo;</a></li><?php  endif;?><?php  if ($pages->num_pages > 10) : $needNoBolder = false; if ($pages->range[0] > 1) : $i = 1; $pageURL = $i > 1 ? '/(page)/'.$i : ''; $needNoBolder = true; if ($i == $pages->current_page) : ?><li class="current no-b"><a title="Go to page <?php  echo $i?> of <?php  echo $pages->num_pages?>" href="#"><?php  echo $i?></a></li><?php  else : ?><li><a class="no-b" title="Go to page <?php  echo $i?> of <?php  echo $pages->num_pages?>" href="<?php  echo $pages->serverURL,$pageURL,$pages->querystring?>"><?php  echo $i?></a></li><?php  endif; ?><li><a href="#">...</a></li><?php endif; for($i=$pages->range[0];$i<=$pages->lastArrayNumber;$i++) : if ($i > 0) : $pageURL = $i > 1 ? '/(page)/'.$i : ''; $noBolderClass = ($i == 1 || $needNoBolder == true) ? ' no-b' : ''; $needNoBolder = false; if ($i == $pages->current_page): ?><li class="active<?php  echo $noBolderClass?>"><a title="Go to page <?php  echo $i?> of <?php  echo $pages->num_pages?>"  href="#"><?php  echo $i?></a></li><?php  else : ?><li><a class="<?php  echo $noBolderClass?>" title="Go to page <?php  echo $i?> of <?php  echo $pages->num_pages?>" href="<?php  echo $pages->serverURL,$pageURL,$pages->querystring?>"><?php  echo $i?></a></li><?php  endif;endif;endfor; if ($pages->lastArrayNumber < $pages->num_pages) : $i = $pages->num_pages; $pageURL = $i > 1 ? '/(page)/'.$i : ''; ?><li><a href="#">...</a></li><?php  if ($i == $pages->current_page) : ?><li class="active"><a title="Go to page <?php  echo $i?> of <?php  echo $pages->num_pages?>" href="#"><?php  echo $i?></a></li><?php   else : ?><li><a class="no-b" title="Go to page <?php  echo $i?> of <?php  echo $pages->num_pages?>" href="<?php  echo $pages->serverURL,$pageURL,$pages->querystring?>"><?php  echo $i?></a></li><?php  endif; endif; else : for ($i=1;$i<=$pages->num_pages;$i++) : $noBolderClass = ($i == 1) ? ' no-b' : ''; $pageURL = $i > 1 ? '/(page)/'.$i : ''; if ($i == $pages->current_page) :?><li class="active<?php  echo $noBolderClass?>"><a href="#"><?php  echo $i?></a></li><?php  else : ?><li><a class="paginate" href="<?php  echo $pages->serverURL,$pageURL,$pages->querystring;?>"><?php  echo $i?></a></li><?php  endif; endfor; endif; if ($pages->current_page != $pages->num_pages): ?><li class="arrow"><a class="next" href="<?php  echo $pages->serverURL,'/(page)/',$pages->next_page,$pages->querystring?>">&raquo;</a></li><?php  endif;?></ul><div class="found-total pull-right">Page <?php  echo $pages->current_page?> of <?php  echo $pages->num_pages?>, Found - <?php  echo $pages->items_total?></div></nav><?php  endif;?><?php  endif;?><?php  else : ?><p>Empty...</p><?php  endif;?><a class="btn btn-default" href="/richard/sites/live121support.com-master/index.php/site_admin/questionary/newquestion">New question</a>