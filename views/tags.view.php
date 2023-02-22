<?php 
    $base= $_SERVER["REQUEST_URI"];
    $base = explode('?', $base);
    $base = $base[0];
?>
<form action="/tag" method="post">
    <h2>All Tags</h2>
    <ul>
        <?php foreach ($tags as $tag) : ?>
            
            <li class="tag-item"><input type="submit" name="tag" value = <?= $tag['tag'] ?> ></li>
        <?php endforeach ?>
    </ul>
    <input type="hidden" name="base" value=<?= $base ?>>

</form>

