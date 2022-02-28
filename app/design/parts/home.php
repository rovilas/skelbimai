<h2>Populiarus sklebimai</h2>
<div class="pop-skelbimas-wrap">
    <?php foreach ($this->data['populars'] as $popAd): ?>
        <div class="box">
            <?= $popAd->getTitle() ?>
        </div>
    <?php endforeach; ?>
</div>
<h2>Naujausi sklebimai</h2>
<div class="pop-skelbimas-wrap">
    <?php foreach ($this->data['latest'] as $popAd): ?>
        <div class="box">
            <?= $popAd->getTitle() ?>
        </div>
    <?php endforeach; ?>
</div>
