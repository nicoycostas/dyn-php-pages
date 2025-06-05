<?php 
$pageTitle="Homepage";
$imgPath = "assets/imgs/coding-1.jpg";
$key="homepage";
include "inc/header.php"; 

?>

    <section class="section">
        
        <h3>Project Overview</h3>
        <article class="article-flex">
            <div class="article-content">
                <h4>Project Explanation</h4>
                <p>In this project I used some basic <strong>PHP functionality</strong> to create dynamic pages based on 
                variables and php if statements. I'm using include function to load the header and footer parts on all pages,
                this way I avoid having to write them and repeat the code four times (DRY Principle).

                <p>
                   Before including the header part using include, I define three variables to hold the page title, the image path 
                   and the current page. I then use those variables in the header.php file to change dynamically the title inside the
                   head tag, the cover image and the h2 subheader. Test page has default failover title and image path for when the 
                   variables are not defined. I have achieved this with the help of the isset function.              
                </p>
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam nisi ea maxime sequi animi pariatur, ex voluptatibus illum possimus distinctio voluptates debitis aliquam aperiam ipsam earum laborum itaque molestiae minima, laudantium perspiciatis odio iure repellat! Praesentium, doloremque commodi. Suscipit, aliquam?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qtouisquam nisi ea maxime sequi animi pariatur, ex voluptatibus illum possimus distinctio voluptates debitis aliquam aperiam ipsam earum laborum itaque molestiae minima, laudantium perspiciatis odio iure repellat! Praesentium, doloremque commodi. Suscipit, aliquam?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam nisi ea maxime sequi animi pariatur, ex voluptatibus illum possimus distinctio voluptates debitis aliquam aperiam ipsam earum laborum itaque molestiae minima, laudantium perspiciatis odio iure repellat! Praesentium, doloremque commodi. Suscipit, aliquam?</p> -->
                <p>In addition to that I utilize if statements to enable an active css class
                   on the navigation menu which changes the menu item background color when a page is active.     </p>
            </div>
          
            <img src="assets/imgs/coding-2.jpg" alt="">
        </article>
    </section>

    <section class="services section">
        <h3>Lorem Ipsum</h3>
        <div class="services-imgs">
            <img src="assets/imgs/service-1.png" alt="">
            <img src="assets/imgs/service-2.png" alt="">
            <img src="assets/imgs/service-3.png" alt="">
        </div>
    </section>

  

<?php include "inc/footer.php"; ?>