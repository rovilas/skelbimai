<div class="wrapper">
    <table>
        <tr>
            <td>#</td>
            <td>ID</td>
            <td>Title</td>
            <td>Views</td>
            <td>Link</td>
            <td>Author</td>
            <td>Price</td>
            <td>action</td>
        </tr>
        <form action="<?= $this->url('admin/massadsupdate') ?>" method="POST">
        <?php
        /**
         * @var \Model\Ad $ad
         */
        foreach($this->data['ads'] as $ad): ?>
        <tr>
            <td><input type="checkbox" name="ad_id[]" value="<?= $ad->getId() ?>"></td>
            <td><?= $ad->getId()?></td>
            <td><?= $ad->getTitle()?></td>
            <td><?= $ad->getViews()?></td>
            <td><?= $ad->getSlug()?></td>
            <td><?= $ad->getUserId()?></td>
            <td><?= $ad->getPrice()?></td>
            <td>
                <a href="<?= $this->url('admin/adedit', $ad->getId())?>">
                    edit
                </a>
            </td>
        </tr>
        <?php endforeach; ?>


    </table>
    <select name="action">
        <option value="">Pasirinkite Actiona</option>
        <option value="1">Ijungti</option>
        <option value="0">Isjungti</option>
        <option value="2">Delete</option>
    </select>
    <input type="submit" value="update">
    </form>
</div>
