<?php include 'includes/header.php' ?>
<style>

 #contactPage {
	margin:25px 0;
}
#contactWrapper{
	justify-content: space-between;
	flex-wrap: wrap;
}
#contact-left {
	max-width:650px;
}
#contact-top-left {
	max-width:500px;
}
#contact-top-left .socialMedia{
    margin-left:0;
}
#contact-top {
	gap:55px;
}
#contactForm button{
    margin-top:15px;
}
#contactMapBottom{
	display:none;
}
@media screen and (max-width:800px){
	#contact-top{
		flex-direction: column;
	}
	#contact-top-right iframe{
		height:350px;
		margin-bottom:35px;
	}
}

</style>
<div id="contactPage" class="d-flex align-items-center justify-content-center">
    <div id="contactWrapper" class="container d-flex flex-column">        
        <div id="contact-top" class="d-flex justify-content-between">
            <div id="contact-top-left">
                <h2>Get In Touch With Us</h2>
                <p>If you have any questions, please feel free to contact us using the form. We look forward to connecting with you!</p>                
                <p><i class="fa-solid fa-location-dot"></i> 1234 Street Name, City, State, 12345</p>
                <p><i class="fa-solid fa-phone"></i> <a href="tel:1234567890">123-456-7890</a></p>
                <p><i class="fa-solid fa-envelope"></i> <a href="mailto:">youremail@domain.com</a></p>
                <p><i class="fa-solid fa-clock"></i> Mon - Fri: 9am - 5pm</p>
                <p><i class="fa-solid fa-clock"></i> Sat - Sun: Closed</p>

                <h3>Follow Us</h3>
                <div class="socialMedia d-flex align-items-center">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
            <div id="contact-top-right" class="w-100">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d214578.4363597778!2d-117.27256381570214!3d32.824379933783874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d9530fad921e4b%3A0xd3a21fdfd15df79!2sSan%20Diego%2C%20CA!5e0!3m2!1sen!2sus!4v1748552602970!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        
        <form id="contactForm" action="contact.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="innerFormWrap">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" class="form-control" id="phone" name="phone">
                </div>
            </div>    
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="ctaButton">Submit</button>
        </form>
        <div id="contactMapBottom">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d214578.4363597778!2d-117.27256381570214!3d32.824379933783874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80d9530fad921e4b%3A0xd3a21fdfd15df79!2sSan%20Diego%2C%20CA!5e0!3m2!1sen!2sus!4v1748552602970!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>    
</div>

<?php include 'includes/footer.php' ?>