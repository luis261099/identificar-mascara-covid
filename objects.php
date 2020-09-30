<div class="row">
    <div class="col-12">
        <ol>
            <?php if ($objects): ?>
                <?php foreach ($objects as $key => $objects): ?>
                    <li><h6><?php echo ucfirst($objects->info()['description']) ?></h6> Confidence: <strong><?php echo number_format($object->info()['score']*100, 2) ?></strong><br><br></li>
                <?php endforeach ?>
            <?php endif ?>
        </ol>
    </div>
</div>