<?php if (have_rows('cards')): ?>
    <section class="cards">
        <div class="row">
            <?php while (have_rows('cards')): the_row(); ?>
                <div class="col-sm-12 col-md-4 col-lg-4 cards__box py-3">
                    <div class="cards__header">
                        <?php if (get_sub_field('card_label_link')): ?>
                            <div class="cards__label">
                                <?php echo esc_html(get_sub_field('card_label_link')); ?>
                            </div>
                        <?php endif; ?>
                        <div class="cards__image">
                            <?php 
                                $image = get_sub_field('card_image');
                                $size = 'medium';
                                if ($image) {
                                    // Escape the image attributes
                                    echo wp_get_attachment_image($image, $size, false, [
                                        'alt' => esc_attr(get_post_meta($image, '_wp_attachment_image_alt', true))
                                    ]);
                                }
                            ?>
                        </div>
                    </div>
                    <div class="cards__footer">
                        <?php if (get_sub_field('card_title')): ?>
                            <div class="cards__title">
                                <h3><?php echo esc_html(get_sub_field('card_title')); ?></h3>
                            </div>
                        <?php endif; ?>
                        <?php if (get_sub_field('card_description')): ?>
                            <div class="cards__description">
                                <p><?php echo esc_html(get_sub_field('card_description')); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>
