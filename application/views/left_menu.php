<h2>Menu</h2>
<ul id="left-menu">
<?php foreach($menus->result() as $menu): ?>
  <li><a href='<?= site_url("Main/page/".$menu->menu_link) ?>'><?= $menu->menu_text ?></a></li>
<?php endforeach; ?>
</ul>
