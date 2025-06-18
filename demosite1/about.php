<?php include 'includes/header.php' ?>
<div id="aboutUs" class="container"> 
    <style>        
        
h2, h4 {
	text-align: center;
	color:var(--headColor2);
	margin:35px 0;
}
.teamMember p{
    text-align: center;
    color:#fff;
}
#aboutUsImage img {
    margin-bottom: 20px;
}
    </style>   
    <h2>About Us</h2>
    <p>Welcome to our restaurant! We are dedicated to providing you with the best dining experience possible. Our team is passionate about food and service, and we strive to create a warm and inviting atmosphere for all our guests.</p>
    <p>Our menu features a wide variety of dishes made from the freshest ingredients, and we take pride in offering something for everyone. Whether you're looking for a quick bite or a leisurely meal, we have you covered.</p>        

    <div id="aboutUsImage" class="d-flex justify-content-center align-items-center">
        <img src="images/about-images/restaurant-front.jpg" alt="About Us">
    </div>
    <div id="aboutUsTeam">
        <h3>Meet Our Team</h3>
        <p>Our team is made up of talented chefs, friendly servers, and dedicated staff who work together to ensure you have a wonderful dining experience. We are committed to excellence in everything we do.</p>
        <div class="teamMembers d-flex justify-content-around">
            <div class="teamMember">
                <img src="images/about-images/mike.jpg" alt="Team Member 1">
                <h4>John Doe</h4>
                <p>Head Chef</p>
            </div>
            <div class="teamMember">
                <img src="images/about-images/emily.jpg" alt="Team Member 1">
                <h4>Emily Doe</h4>
                <p>Head Chef 2</p>
            </div>
            <div class="teamMember">
                <img src="images/about-images/jane.jpg" alt="Team Member 2">
                <h4>Jane Smith</h4>
                <p>Manager</p>
            </div>
        </div>
    </div>
    <div id="history">
        <h3>Our History</h3>
        <p>Founded in 2020, our restaurant has quickly become a favorite among locals and visitors alike. We are proud to be a part of the community and are committed to supporting local farmers and suppliers.</p>
        <p>Our story began with a passion for food and a desire to create a welcoming space for people to gather and enjoy great meals together. We look forward to continuing this journey with you!</p>
    </div>
</div>
<?php include 'includes/footer.php' ?>