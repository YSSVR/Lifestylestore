<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Life Style Store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.slim.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <link rel="stylesheet" href="index.css" type="text/css"/>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->
      
        
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4  col-md-6  col-sm-12 col-xs-12">
                        
                        <h3>We were born to stand out<br><br></h3>
                        <div class="img-responsive">
                            <img src="img/about.jpg" alt="">
                            <br><br>
                        </div>
                        <h4>Who We Are</h4>
                        <p> The style belongs to India.Lifestyle was founded with the philosophy of going beyond the expected and standing out in the world of fashion as an Indian luxury brand.
                            Using the spirit and rhythm of contemporary India, our mission is to deliver world class quality through deliberate and persistent innovation.
                        </p>
                        <h3></h3>
                        <p>The magic of our diverse, imperfect, yet powerful country is so much a part of <u>who we are.</u>
                            We’d like you to feel a bit of that magic every time you’re wearing one of our creations.
                            Our heritage collections are influenced heavily by this culture, phenomenon, tradition and vibe.
                            Here, you can most directly see how India is inspiring some of our most iconic pieces.
                            </p><br>
                            <h3>RETAIL LIFESTYLE STORES</h3>
                            <p>The Lifestyle stores have a multi-level store format, which is normally spread over two or three floors that provides a square line-of-sight,
                                allowing customers to view the product sections in a single glance.

                                The company sells national and international brands, which make up 75% of their stock, along with its in-house brand labels that bring in about 30% of the revenues and account for the remaining 25% of in-store stock.
                                Lifestyle's private labels include brands like Melange, which is already a 150 crore brand with eight exclusive stores in India.

                                Lifestyle International sees most of its revenue from its brick-and-mortar stores, which consist of 63 Lifestyle stores.
                                The retail chain is already established in 1 tier cities, and plans to develop stores in 2/3-tier cities such as Nagpur, Jaipur and recently, Visakhapatnam and Nashik.
                                Each store is estimated to cost the company around Rs. 10 crore to set up, on an average.</p>
                        
                   
                    </div>
                    
                    <div class="col-lg-4  col-md-6  col-sm-12 col-xs-12">
                        
                        <center><h3>Lifestyle is India's premier fashion destination for the latest trends and hottest styles.<br><br></h3>
                            <h4><strong>OUR HISTORY</strong>
                        </center>
                        
                        <p> Originating in India in the year 1999, Lifestyle is a retail fashion brand which comes under Dubai-based retail and hospitality conglomerate, the Landmark Group.

Lifestyle's inventory consists of several national and international brands, and its product categories include Indian and western apparels, footwear, handbags, beauty products, and fashion
accessories for men, women and children, under the convenience of a single roof.

 Lifestyle provides seamless and hassle-free shopping, offering leading national and international brands along with the convenience of a true omni-channel experience with its online store.
 The company is recipient of numerous awards and accolades, including Most Admired Fashion Retail Destination of the Year at Images Fashion Awards for 5 consecutive years; No. 1 India’s Best
 Company to Work for in the retail industry for 2 consecutive years and Top 10 Best companies to Work for in India in 2015- Great Places to Work Institute®.
 Currently, Lifestyle is present across 77 stores, 44 cities and delivers to over 26000 pin codes,Lifestyle International Pvt. Ltd has witnessed a compounded annual growth rate of 25% over
 the last three years. Lifestyle is a true omni-channel player with its online store where customers can shop from the convenience of their home.
                        </p><br>
                        
                        <h3>LIFESTYLE'S FIRST STORE</h3>
                        <p>
                            Lifestyle opened its first store in Chennai, Tamil Nadu, India in <u><strong>1999</strong>.</u> Each Lifestyle store offers <b>five</b> concepts under one roof</p>
                        <ul type='bullet'>
                            <li>Splash ( Men's, Women's Apparel )</li>
                            <li>Baby Shop ( Kid's Apparel and accessories )</li>
                            <li>Shoe Mart (Footwear)</li>
                            <li>Home Centre ( Furniture and home textiles )</li>
                            <li>Lifestyle accessories consisting of Beauty and Skincare, Fine jewellery and Watches.</li>
                        </ul>
                        <br>
                        <p><strong>Looking for somthing unique.Here, you can most directly see how India is inspiring some of our most iconic pieces.</strong></p>
                        <br>

                        <center><a  href="products.php" class="btn btn-danger btn-lg active">OUR HERITAGE COLLECTION</a></center>
                    
                    </div>
                        
                    <div class="col-lg-4  col-md-6  col-sm-12 col-xs-12">
                        
                        <h3>GROWTH<br><br></h3>
                    
                        
                        <p> Lifestyle International Pvt. Ltd.saw a growth of about 24% in the fiscal year 2016 to cross Rs. 7,000 crore mark.
                            Lifestyle aims to achieve a 20-25% growth annually for the next few years, to make itself a Rs. 8,000-8,500 crore company in the coming years.
                            <br>
                            <br>
                            The company is recipient of numerous awards and accolades, including Most Admired Fashion Retail Destination of the Year at Images Fashion Awards
                            for 5 consecutive years; No. 1 India’s Best Company to Work for in the retail industry for 2 consecutive years and Top 10 Best companies to Work 
                            for in India in 2015- Great Places to Work Institute®.
 Currently, Lifestyle is present across 77 stores, 44 cities and delivers to over 26000 pin codes,Lifestyle International Pvt. Ltd has witnessed a compounded annual growth 
 rate of 25% over the last three years. Lifestyle is a true omni-channel player with its online store where customers can shop from the convenience of their home.
                        </p>
                        
                        <h3>HOME CENTER STORE</h3>
                        <p>Home Centre is a part of the Lifestyle chain of stores in India.
                            Having centres in UAE, Bahrain, Saudi Arabia,Qatar, Oman, Egypt, Kuwait, and India, Home Centre spans over a retail area of over 2.4 million square feet.
                            Home Centre by Lifestyle sells furniture, furnishings and home decorative. The brand has been awarded as the ‘Most Admired Retailer’award in the Home & Office Improvement Category, for two consecutive years in 2008 and 2009.
                        </p><br>
                            <h3>SOCIAL RESPONSIBILITY</h3>
                        <p>Spreading awareness about diabetes, Landmark Group has held multiple editions of the ‘Beat Diabetes’ campaign that involves setting up free
                            glucose screening test counters at Lifestyle and other stores under the brand. The sixth and latest edition of the campaign was held in November 2015
                            and had athlete Anju Bobby George and film actresses Amulya and Samyukta Hornad join in.
                            </p>
                        <h3>You are central to us</h3>
                            <P><i>We thrive on creating the best experience for you.
                                    We look for opportunities where we can earn your trust and we walk the talk on commitments made to you.
                                    Need proof? Give us a <a href="contact.php"><strong><u>call</u></strong></a> . Our customer happiness team is there to make you smile.</i></p>
                        
                    </div>
                </div>
                    </div>
        </div>
             
                <!--Footer start-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
                </body>
                </html>
                