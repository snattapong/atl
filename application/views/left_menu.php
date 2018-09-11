
<h2>Menu</h2>
<ul id="left-menu">
<?php if( $this->session->has_userdata('user_id') && $this->session->authority == 2): ?>

<?php foreach($menus->result() as $menu): ?>
  <li><a href='<?= site_url("Main/".$menu->menu_link) ?>'><?= $menu->menu_text ?></a></li>
<?php endforeach; ?>

<?php else: ?>

<?php foreach($menus->result() as $menu): ?>
  <li><a href='<?= site_url("Main/".$menu->menu_link) ?>'><?= $menu->menu_text ?></a></li>
<?php endforeach; ?>

<?php endif; 
?>

</ul>
