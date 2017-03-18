<!-- CODE DES ARTICLES -->

<div class="grid grid-pad">
<?php foreach ($articles as $art) :?>

         <div class="col-1-2">
             <article>
                <h3><?php echo $art->titre;?></h3>
                <div class="description"><?php echo $art->description;?></div>
                <img src="<?php echo $art->image; ?>">
                <div class="legend">
                    <?php echo $art->légende;?>
                </div>
                <div class = "contenu">
                    <?php echo $art->contenu;?>
                </div>
            </article>
        </div>

<?php endforeach;?>
</div>