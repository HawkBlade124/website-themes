<?php include_once 'includes/header.php'; ?>
<main-content class="container">
    <div class="hero" class="even">
        <div class="blue heroContent">
            <h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h1>
            <p>This is where you would replace the content</p>
            <button class="ctaButton">Order Now</button>
        </div>
        <div class="heroImage">
            <img class="w-100" src="images/professional-service.jpg" alt="Hero Image">
        </div>
    </div>
    <section id="menu" class="even">        
        <div id="menuWrapper" class="green wrapperWidth">
            <h2 class="wrapperHead">Food you love</h2>
            <div class="innerWrapper d-flex justify-content-between flex-wrap">
                <div class="menuItem box-sizing-content">
                    <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quis eius amet fugit repellendus laudantium officiis nihil impedit tenetur quos ipsum consectetur eos dicta voluptas cumque tempora, optio quisquam recusandae!</p>
                    <img src="images/hamburger.jpg" alt="Man Eating a Hamburger" class="w-100 foodImage">
                </div>
                <div class="menuItem d-flex flex-column justify-content-between align-items-start">                
                    <img src="images/lady-enjoying-food.jpg" alt="Lady Enjoying Food" class="w-100 foodImage">
                    <h3>Lorem Ipsum</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure laudantium cum autem maiores unde voluptate recusandae, sunt quibusdam reprehenderit error impedit dicta optio ipsum porro. Quas repudiandae et sunt perspiciatis!</p>
                </div>
                <div class="menuItem box-sizing-content">
                    <h3>Lorem Ipsum</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur possimus, saepe omnis quod velit numquam molestiae excepturi, nesciunt quae reprehenderit quis voluptatibus, earum maxime. Odit non quidem blanditiis nulla nobis.</p>
                    <img src="images/group-enjoying-lunch.jpg" alt="Group Enjoying Lunch" class="w-100 foodImage">
                </div>
            </div>
        </div>
    </section>
    <section id="cards" class="odd box-sizing-content">
        <h2 class="wrapperHead">Ways We Serve You</h2>
        <div class="cardContainer wrapperWidth d-flex flex-wrap justify-content-between">
            <div class="card box-sizing-content">
                <div class="cardWrapper">
                    <div class="cardImage">
                        <img src="images/service.jpg" alt="Man Walking with Plate">
                    </div>
                    <div class="cardContent">
                        <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, numquam dolores blanditiis fugiat, explicabo nostrum iste placeat minima repellendus deleniti natus? Ullam nulla fuga non sapiente corporis enim impedit voluptatibus.</p>
                    </div>
                </div>
                <button class="cardButton">Learn More</button>
            </div>
            <div class="card box-sizing-content">
                <div class="cardWrapper">
                    <div class="cardImage">
                        <img src="images/catering.jpg" alt="Table With Food for Catering">
                    </div>
                    <div class="cardContent">
                        <h3>Lorem ipsum dolor sit, amet consectetur.</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, quasi ipsam tempora reprehenderit aspernatur, laborum temporibus atque ex, voluptatibus accusamus repudiandae ab rerum sapiente facilis. Numquam quod aliquam expedita autem.</p>
                    </div>
                </div>
                <button class="cardButton">Learn More</button>
            </div>
            <div class="card box-sizing-content">
                <div class="cardWrapper">
                    <div class="cardImage">
                        <img src="images/careers.jpg" alt="Smiling man with plate of food">
                    </div>
                    <div class="cardContent">
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                        <p>Impedit nobis accusantium consectetur adipisci eaque veritatis cum magni illum debitis, magnam dignissimos quo dolorum labore ullam? Pariatur tenetur cum totam quia</p>
                    </div>
                </div>
                <button class="cardButton">Learn More</button>
            </div>                   
        </div>
    </section>
    <section id="menuCards">
        <div id="menuCardsWrapper">
            <a href="#">
                <img src="images/">
            </a>
        </div>
    </section>
    <section id="testimonials" class="even">
        <h2 class="wrapperHead">What Our Customers Say</h2>
        <div class="testimonialContainer wrapperWidth">
            <div class="testimonial active">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                <h3>John Doe</h3>
            </div>
            <div class="testimonial">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                <h3>Jane Smith</h3>
            </div>
            <div class="testimonial">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                <h3>Bob Johnson</h3>
            </div>
        </div>
    </section>
    <section id="contact">
        <form class="contactForm" action="process_form.php" method="POST">
            <h2>Contact Us</h2>
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>
</main-content>
<?php include_once 'includes/footer.php'; ?>