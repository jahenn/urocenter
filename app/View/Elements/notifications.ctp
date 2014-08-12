<?php foreach($notifications as $notification): ?>

    <div class="infobox infobox-close-wrapper alert <?= $notification['Color']['valor'] ?>">
        <div class="large btn font-black info-icon">
            <!-- <i class="glyph-icon icon-comment"></i> -->
            <?= $this->element('avatar_user', array(
                'custom_user'=>$notification['User'],
                'opciones'=>array(
                    'class'=>'avatar ' . $notification['Color']['valor'],

                    )
            )) ?>
        </div>
        <h4 class="infobox-title">
            <a href="#"><small><?= $notification['User']['username'] ?></small></a>
            <?= $notification['Notification']['titulo'] ?>
        </h4>
        <p>
            <?= $notification['Notification']['descripcion'] ?>
        </p>

        <a class="glyph-icon infobox-close icon-remove" title="Close Message" href="#"></a>
    </div>
<?php endforeach ?>