<section class="content">
        <div class="col">
            <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
 
            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called called content-___.php
             * (where ___ is the post format) and that will be used instead.
            */
           /* get_template_part( 'content', get_post_format() );*/

           the_content();
 
   
 
            the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
            ) );
 
        // End the loop.
        endwhile;
        ?>
            <button class="btn">Download The PDF</button>
        </div>
        <div class="col">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt a
                error rerum perferendis fugiat facilis! Hic harum consequatur sit!
                Doloribus repellendus possimus maiores impedit! Delectus sit eius
                laborum. Ab, quaerat. Lorem ipsum, dolor sit amet consectetur
                adipisicing elit. Nobis amet, soluta sed, doloribus dicta porro est
                expedita labore veritatis numquam nihil ipsa quam aliquam in maiores
                accusamus minus architecto sint! Lorem ipsum dolor sit, amet
                consectetur adipisicing elit. Architecto ullam soluta cumque earum
                sint, inventore, aspernatur tempore magnam saepe voluptatibus,
                eligendi alias enim provident. Officia, voluptates? Libero ratione
                praesentium vero.
            </p>
        </div>
    </section>