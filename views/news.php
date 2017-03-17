
<?php foreach ($articles as $art) :?>


    <div class="grid grid-pad">
         <div class="col-1-2">
             <article class="content">
                <h3><?php echo $art->titre;?></h3>
                <img src="<?php echo $art->image; ?>">
                <div class="description"><?php echo $art->description;?></div>
                <?php echo $art->contenu;?>
            </article>
        </div>
    </div>

<?php endforeach;?>