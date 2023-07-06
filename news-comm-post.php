<?php
/**
 * Template Name: News Comm
 * Template Post Type: post
 */
 
get_header(); ?>
<?php /* ?>



+
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">



    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php   */?>

<style>
/* General Styles */

body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    overflow-x: hidden;
    font-family: "textfont";
}

@font-face {
    font-family: "textfont";
    src: url(./Roboto/Roboto-Regular.ttf);
}

/* End Of General Styles */

/* Header Styles */
#main {
    display: flex;
    width: 100%;
    justify-content: space-between;
}

.nav-box {
    width: 50%;
    display: block;
    padding: 2em;
}

.nav-box ul {
    display: flex;
    justify-content: space-between;
}

/* End Of Header Styles */

/* Page Container Styles */
.container {
    margin: 0 auto;
    padding: 5em;
    width: 45%;
}

.container.page-fullwidth {
    max-width: 100%;
}

.container.page {
    max-width: 1024px;
}

.content {
    width: 100%;
}

.col {
    text-align: left;
    padding: 0;
}

.btn {
    margin-left: 0;
    padding: 15px 50px 15px 50px;
    background: #e37232;
    color: #fff;
    border: none;
    border-radius: 5px;
}

/* End Of Page Container Styles */

/* Banner Styles */

#banner_container {
    display: flex;
    align-items: end;
    margin-right: 30em;
    margin-top: 20em;
    position: initial;
    width: 100%;
    height: 638px;
    padding: 0;
    margin: 0;
    background: #000;
    text-align: center;
    color: #fff;
    font-family: "textfont";
    letter-spacing: 0.3em;
}

.title-box {
    display: block;
    width: 50%;
    text-align: left;
    max-width: 875px;
    margin: 0 auto;
    padding-bottom: 65px;
}

.title-box h1 {
    font-size: 50px;
    margin: 0;
    padding-left: 10px;
}

.title-box img {
    margin: 0 0 0 -23px;
}

.date-section {
    font-family: "textfont";
    letter-spacing: 0.2em;
    width: 100%;
    height: 70px;
    background: rgb(0, 115, 125);
    background: linear-gradient(90deg,
            rgba(0, 115, 125, 1) 0%,
            rgba(249, 124, 87, 1) 100%);
    border: none;
    color: #fff;
    text-align: left;
    margin: 0;
    padding: 0;
}

.date-section h2 {
    font-size: 30px;
    padding-top: 20.5px;
    margin: 0 auto;
    max-width: 833px;
}

/* End Of Banner Styles */

/* This is the table styles */

table {
    width: 100%;
    margin: 15px 0;
    border-collapse: collapse;
    display: table;
    height: 200%;
    text-align: left;
}

.company-listing td {
    border-left: none;
    border-right: none;
    padding: 0 10px;
}

.company-listing th {
    padding-left: 20px;
    width: 66%;
}

.company-listing th,
td {
    border: #fe7c56 1px solid;
}

td:last-of-type {
    border-right: #fe7c56 1px solid;
}

.company-listing {
    background: #f2f2f2;
}

/* This is the End Of table styles */

/* footer style  */

#main-foot {
    text-align: center;
    font-size: 15px;
    /* padding: 32px; */
    margin: auto;
}

#main-foot h2 {
    font-size: 15px;
    color: #808080;
    margin-bottom: 0;
}

#main-foot a:last-of-type {
    padding: 0;
    margin: 0;
}

#main-foot p {
    padding: 0;
    margin-top: 0;
}

/* End Of footer style  */

/* Related Posts */

.post-col {
    display: flex;
    justify-content: space-between;
    background: #000;
    padding: 40px;
}

.post-title h2 {
    font-size: 40px;
    color: #000;
    text-align: left;
}

.col-one {
    width: 200px;
    height: 150px;
    background: #fff;
}

.col-two {
    width: 200px;
    height: 150px;
    background: #fff;
}

.col-three {
    width: 200px;
    height: 150px;
    background: #fff;
}

/* End Of Related Posts */

/* Page Footer  */

.page-foot {
    height: 40px;
    padding: 20px 0;
    margin-top: 10px;
    background: #000;
    color: #fff;
    text-align: center;
    font-size: 10px;
}

/* End Of Page Footer  */

.bg_img {
    width: 100%;
    height: 500px;
    background-size: cover;

}
</style>

<?php $backgroundImg = wp_get_attachment_image_url (get_post_thumbnail_id($post->ID), 'full'); ?>

<section id="banner_container" style=" background: url('<?php echo $backgroundImg;?>') no-repeat;">



    <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
    </div>

    <div class="bg_img"></div>
    <div class="title-box">

        <?php the_title( '<h1>', '</h1>' ); ?>

    </div>
</section>

<?php get_template_part( 'template-parts/header', 'example' ); ?>

<div class="date-section container">
    <h2><?php the_time( 'j F Y'  ); ?></h2>
</div>

<!-- End Of Banner Section  -->

<!-- Page Content -->
<section class="container page">
    <!-- ASX  TABLE -->
    <div id="asx">
        <table class="company-listing">
            <tbody>
                <tr>
                    <th rowspan="3">UK, London <?php the_time( 'j F Y'  ); ?>
                    </th>
                    <td>ASX:</td>
                    <td>CUV</td>
                </tr>
                <tr>
                    <td>Level 1 ADR:</td>
                    <td>CLVLY</td>
                </tr>
                <tr>
                    <td>XETRA-DAX</td>
                    <td>RU9</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- ASX TABLE -->

    <!-- Two Collumn Section -->
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
    <!-- Two Collumn Section -->

    <!-- footer -->
    <footer id="main-foot">
        <h3>- End -</h3>
        <div class="col" class="row-one">
            <p>
                1 SCENESSE® (afamelanotide 16mg) is approved in the European Union
                and Australia as an orphan medicinal product for the prevention of
                phototoxicity in adult patients with erythropoietic protoporphyria
                (EPP). SCENESSE® is approved in the USA to increase “pain-free”
                light exposure in adult EPP patients with a history of
                phototoxicity. Information on the product can be found on CLINUVEL’s
                website at www.clinuvel.com.
            </p>

            <h2>About CLINUVEL PHARMACEUTICALS LIMITED</h2>

            <p>
                CLINUVEL (ASX: CUV; ADR LEVEL 1: CLVLY; XETRA-DAX: UR9) is a global
                specialty pharmaceutical group focused on developing and
                commercialising treatments for patients with genetic, metabolic,
                systemic, and life-threatening, acute disorders, as well as
                healthcare solutions for the general population. As pioneers in
                photomedicine and the family of melanocortin peptides, CLINUVEL’s
                research and development has led to innovative treatments for
                patient populations with a clinical need for systemic
                photoprotection, DNA repair, repigmentation and acute or
                life-threatening conditions who lack alternatives.
            </p>
            <p>
                CLINUVEL’s lead therapy, SCENESSE® (afamelanotide 16mg), is approved
                for commercial distribution in Europe, the USA, Israel and Australia
                as the world’s first systemic photoprotective drug for the
                prevention of phototoxicity (anaphylactoid reactions and burns) in
                adult patients with erythropoietic protoporphyria (EPP).
                Headquartered in Melbourne, Australia, CLINUVEL has operations in
                Europe, Singapore and the USA. For more information, please go to
                https://www.clinuvel.com.
            </p>
            <p>
                SCENESSE®, PRÉNUMBRA®, and NEURACTHEL® are registered trademarks of
                CLINUVEL.
            </p>
            <h2>
                Authorised for ASX release by the Board of Directors of CLINUVEL
                PHARMACEUTICALS LTD
            </h2>
            <h2>Media Enquiries</h2>
            <p>
                Monsoon Communications Mr Rudi Michelson, 61 411 402 737,
                rudim@monsoon.com.au
            </p>

            <h2>Head of Investor Relations</h2>

            <p>Mr Malcolm Bull, CLINUVEL PHARMACEUTICALS LTD</p>
            <h2>Investor Enquiries</h2>
            <p>https://www.clinuvel.com/investors/contact-us</p>

            <h2>Forward-Looking Statements</h2>
            <p>
                This release contains forward-looking statements, which reflect the
                current beliefs and expectations of CLINUVEL’s management.
                Statements may involve a number of known and unknown risks that
                could cause our future results, performance or achievements to
                differ significantly from those expressed or implied by such
                forward-looking statements. Important factors that could cause or
                contribute to such differences include risks relating to: our
                ability to develop and commercialise pharmaceutical products; the
                COVID-19 pandemic and/or other world, regional or national events
                affecting the supply chain for a protracted period of time,
                including our ability to develop, manufacture, market and sell
                biopharmaceutical products; competition for our products, especially
                SCENESSE® (afamelanotide 16mg), PRÉNUMBRA® or NEURACTHEL®; our
                ability to achieve expected safety and efficacy results in a timely
                manner through our innovative R&D efforts; the effectiveness of our
                patents and other protections for innovative products, particularly
                in view of national and regional variations in patent laws; our
                potential exposure to product liability claims to the extent not
                covered by insurance; increased government scrutiny in either
                Australia, the U.S., Europe, Israel, China and Japan of our
                agreements with third parties and suppliers; our exposure to
                currency fluctuations and restrictions as well as credit risks; the
                effects of reforms in healthcare regulation and pharmaceutical
                pricing and reimbursement; that the Company may incur unexpected
                delays in the outsourced manufacturing of SCENESSE®, PRÉNUMBRA® or
                NEURACTHEL® which may lead to it being unable to supply its
                commercial markets and/or clinical trial programs; any failures to
                comply with any government payment system (i.e. Medicare) reporting
                and payment obligations; uncertainties surrounding the legislative
                and regulatory pathways for the registration and approval of
                biotechnology and consumer based products; decisions by regulatory
                authorities regarding approval of our products as well as their
                decisions regarding label claims; our ability to retain or attract
                key personnel and managerial talent; the impact of broader change
                within the pharmaceutical industry and related industries; potential
                changes to tax liabilities or legislation; environmental risks; and
                other factors that have been discussed in our 2021 Annual Report.
                Forward-looking statements speak only as of the date on which they
                are made, and the Company undertakes no obligation, outside of those
                required under applicable laws or relevant listing rules of the
                Australian Securities Exchange, to update or revise any
                forward-looking statement, whether as a result of new information,
                future events or otherwise. More information on preliminary and
                uncertain forecasts and estimates is available on request, whereby
                it is stated that past performance is not an indicator of future
                performance.
            </p>

            <a href="#"> www.clinuvel.com</a>
            <p>
                Level 11, 535 Bourke Street, Melbourne, Victoria, Australia, 3000, T
                +61 3 9660 4900, F +61 3 9660 4909
            </p>
        </div>
    </footer>

    <!-- footer -->
    <!-- Related Post   -->

    <div class="post-title">
        <h2>Related Posts</h2>
    </div>
    <section class="post-col">
        <div class="col-one"></div>
        <div class="col-two"></div>
        <div class="col-three"></div>
    </section>
</section>
<!-- End Of Related Post   -->
<!-- End Of Page Content -->

<!-- Page footer -->

<footer class="page-foot">
    <p>CLINUVEL &copy; All Rights Reserved By Hackerlife</p>
</footer>

<!-- End Of Page footer -->

<?php   get_footer();  ?>