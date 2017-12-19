<div class="list-group">
<?php foreach ($data['pages'] as $page_data) { ?>
    <a href="/pages/view/<?=$page_data['alias']?>" class="list-group-item list-group-item-action"><?=$page_data['title']?></a>
<?php } ?>
</div>