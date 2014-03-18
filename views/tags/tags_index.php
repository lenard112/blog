<div class="list-group">
    <? foreach ($tag as $tag): ?>
        <a
            href="<?= BASE_URL ?>tags/view/<?= $tag['tag_id'] ?>" class="list-group-item">
            <?= $tag['tag_name'] ?>
        </a>
    <? endforeach ?>
</div>