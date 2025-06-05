<?php 
$pageTitle="Contact";
$imgPath = "assets/imgs/coding-3.jpg";
$key="contact";
include "inc/header.php"; 

?>

    <section class="section">
        <h3>Lorem Ipsum Dolor</h3>

        <form>      
            <input name="name" type="text" class="feedback-input" placeholder="Name" />   
            <input name="email" type="text" class="feedback-input" placeholder="Email" />
            <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
            <input type="submit" value="SUBMIT"/>
        </form>
    </section>

<?php include "inc/footer.php"; ?>