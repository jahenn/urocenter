
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
        <p>
            <?= $notification['Notification']['descripcion'] ?>

        </p>
        <p>
                <a href="<?php echo $this->Html->url(array(
                'controller'=> $notification['Notification']['controller'],
                'action'=>$notification['Notification']['accion'],
                $notification['Notification']['params']
            )) ?>"><?php echo utf8_encode($notification['Notification']['label']) ?></a>
        </p>
        <br>

        

        <!-- <a class="glyph-icon infobox-close icon-remove" title="Close Message" href="#"></a> -->
    </div>
<?php endforeach ?>