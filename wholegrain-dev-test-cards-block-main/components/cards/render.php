<?php if( have_rows('cards') ): ?>
       <section class="cards">
            <div class="row">
    <?php while( have_rows('cards') ): the_row(); ?>
            <div class="col-sm-12 col-md-4 col-lg-4 cards__box py-3">
                <div class="cards__header">
                    <div class="cards__label"><?php the_sub_field('card_label_link'); ?></div>
                    <div class="cards__image">
                     <?php 
                        $image = get_sub_field('card_image');
                        $size = 'medium'; 
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );

                        }
                        ?>
                    </div>
                </div>
                <div class="cards__footer">
                    <div class="cards__title">
                        <h3><?php the_sub_field('card_title'); ?></h3>
                    </div>
                    <div class="cards__description">
                        <p><?php the_sub_field('card_description'); ?></p>
                    </div>
                </div>
          </div>
    <?php endwhile; ?>
            </div>
        </section>
<?php endif; ?>

