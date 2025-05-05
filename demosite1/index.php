<?php include_once 'includes/header.php'; ?>
<main-content>
    <div class="hero">
        <div class="heroContent">
            <h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h1>
            <p>This is where you would replace the content</p>
            <button class="ctaButton">Order Now</button>
        </div>
        <div class="heroImage">
            <img class="w-100" src="images/hero-banner.jpg" alt="Hero Image">
        </div>
    </div>
    <section id="menu">        
        <div id="menuWrapper" class="wrapperWidth">
            <h2 class="wrapperHead d-flex justify-content-center">Food you love</h2>
            <div id="mainHomeMenu" class="d-flex justify-content-between flex-wrap">
                <div class="menuItem box-sizing-content "data-target="appetizers">
                    <h3>Appetizers</h3>
                    <img src="images/appetizers.jpg" alt="Appetizers" class="w-100 foodImage">
                </div>
                <div class="menuItem box-sizing-content" data-target="entrees">
                    <h3>Entrées</h3>
                    <img src="images/hamburger.jpg" alt="Man Eating a Hamburger" class="w-100 foodImage">                    
                </div>                
                <div class="menuItem box-sizing-content" data-target="salads">                
                    <h3>Salads</h3>
                    <img src="images/lady-enjoying-food.jpg" alt="Lady Enjoying Food" class="w-100 foodImage">                    
                </div>
                <div class="menuItem box-sizing-content" data-target="drinks">
                    <h3>Drinks</h3>
                    <img src="images/group-enjoying-lunch.jpg" alt="Group Enjoying Lunch" class="w-100 foodImage">
                </div>
            </div>
            <div id="appetizers" class="menuPopup">
                <div id="appetizersWrapper" class="innerMenuWrapper box-sizing-content flex-wrap justify-content-between w-100">
                    <div class="triangleDivider"></div>
                    <div class="appetizersLeft">
                        <h3>Appetizers</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                        <ul>
                            <li>Nachos</li>                        
                            <li>Bruschetta</li>
                            <li>Stuffed Mushrooms</li>
                            <li>Garlic Bread</li>
                        </ul>
                    </div>
                    <div class="appetizersRight">
                        <img src="images/appetizers.jpg" alt="Appetizers" class="w-100 menuImage">
                    </div>
                </div>
            </div>
            <div id="entrees" class="menuPopup">
                <div id="entreesWrapper" class="innerMenuWrapper box-sizing-content flex-wrap justify-content-between w-100">
                    <div class="triangleDivider"></div>
                    <div class="entreesLeft">
                        <h3>Entrées</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                        <ul>
                            <li>Grilled Chicken</li>                        
                            <li>Steak</li>
                            <li>Salmon</li>
                            <li>Pasta Primavera</li>
                        </ul>
                    </div>
                    <div class="entreesRight">
                        <img src="images/hamburger.jpg" class="w-100 menuImage">
                    </div>
                </div>
            </div>
            <div id="salads" class="menuPopup">
                <div id="saladsWrapper" class="innerMenuWrapper box-sizing-content flex-wrap justify-content-between w-100">                    
                    <div class="triangleDivider"></div>
                    <div class="saladsLeft">
                        <h3>Salads</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                        <ul>
                            <li>Caesar Salad</li>                        
                            <li>Greek Salad</li>
                            <li>Garden Salad</li>
                            <li>Caprese Salad</li>
                        </ul>
                    </div>
                    <div class="saladsRight">
                        <img src="images/lady-enjoying-food.jpg" alt="Lady Enjoying Food" class="w-100 menuImage">
                    </div>
                </div>
            </div>
            <div id="drinks" class="menuPopup">
                <div id="drinksWrapper" class="innerMenuWrapper box-sizing-content flex-wrap justify-content-between w-100">
                    <div class="triangleDivider"></div>
                    <div class="drinksLeft">
                        <h3>Drinks</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                        <ul>
                            <li>Soda</li>                        
                            <li>Water</li>
                            <li>Beer</li>
                            <li>Wine</li>
                        </ul>
                    </div>
                    <div class="drinksRight">
                        <img src="images/group-enjoying-lunch.jpg" alt="Group Enjoying Lunch" class="w-100 menuImage">
                    </div>
                </div>
            </div>            
        </div>
    </section>
    <section id="cards" class="box-sizing-content">
        <div id="cardWrapper" class="wrapperWidth">
            <h2 class="wrapperHead d-flex justify-content-center">Our Best Sellers</h2>
            <div class="cardContainer  d-flex flex-wrap justify-content-between">
                <div class="card box-sizing-content">
                    <div class="cardWrapper">
                        <div class="cardImage">
                            <img src="images/service.jpg" alt="Man Walking with Plate">
                        </div>
                        <h3 class="d-flex justify-content-between">Bacon Burger<span>$12</span></h3>
                        <div class="cardContent">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, numquam dolores blanditiis fugiat, explicabo nostrum iste placeat minima repellendus deleniti natus? Ullam nulla fuga non sapiente corporis enim impedit voluptatibus.</p>
                        </div>
                    </div>                    
                </div>
                <div class="card box-sizing-content">
                    <div class="cardWrapper">
                        <div class="cardImage">
                            <img src="images/catering.jpg" alt="Table With Food for Catering">
                        </div>
                        <h3 class="d-flex justify-content-between">Burritos<span>$6</span></h3>
                        <div class="cardContent">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi, quasi ipsam tempora reprehenderit aspernatur, laborum temporibus atque ex, voluptatibus accusamus repudiandae ab rerum sapiente facilis. Numquam quod aliquam expedita autem.</p>
                        </div>
                    </div>                    
                </div>
                <div class="card box-sizing-content">
                    <div class="cardWrapper">
                        <div class="cardImage">
                            <img src="images/careers.jpg" alt="Smiling man with plate of food">
                        </div>
                        <h3 class="d-flex justify-content-between">Chips and Salsa <span>$12</span></h3>
                        <div class="cardContent">
                            <p>Impedit nobis accusantium consectetur adipisci eaque veritatis cum magni illum debitis, magnam dignissimos quo dolorum labore ullam? Pariatur tenetur cum totam quia</p>
                        </div>
                    </div>                    
                </div> 
                <div id="cardButton" class="d-flex justify-content-center box-sizing-content w-100">
                    <p>Want to see more? <a id="cardLink" href="menu.php">Checkout our Menu</a></p>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials">
        <div id="testimonialWrapper" class="wrapperWidth">
            <h2 class="wrapperHead d-flex justify-content-center">What Our Customers Say</h2>
            <div  class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                            <h3>John Doe</h3>
                            <div class="rating d-flex justify-content-center">                  
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                            <h3>Jane Smith</h3>
                            <div class="rating d-flex justify-content-center">                  
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                            <h3>Bob Johnson</h3>
                            <div class="rating d-flex justify-content-center">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>        
        </div>
    </section>
    <section id="findUs">
        <div id="testimonialWrapper" class="wrapperWidth">
            <h2 class="wrapperHead d-flex justify-content-center">Our Location</h2>
            <div class="findUsContent d-flex flex-wrap justify-content-between">
                <div class="findUsLeft">
                    <h3>Find Us</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatibus.</p>
                    <div class="findUsHours">
                        <h3>Location 01</h3>
                        <ul>
                            <li>Address: 1234 Street Name, City, State, 12345</li>
                            <li>Phone: 123-456-7890</li>
                            <li>Business Hours: Monday - Saturday 11AM - 9PM</li>
                        </ul>
                        <h5>Lunch Hours</h5>
                        <ul>
                            <li>Monday - Friday: 12PM - 3PM</li>
                            <li>Saturday: 11PM - 4PM</li>
                        </ul>                                
                        <h5>Dinner Hours</h5>
                        <ul>
                            <li>Monday - Friday: 4:30PM - 9PM</li>                    
                        </ul>
                    </div>
                    <div class="findUsButton d-flex justify-content-center">
                        <a href="/contact-us" class="ctaButton">Get Directions</a>
                    </div>
                </div>
                <div class="findUsRight">                    
                    <div class="mapContainer">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.1234567890123!2d-122.4194154846814!3d37.7749292797598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808c8c8c8c8c%3A0x8c8c8c8c8c8c8c8c!2sSan%20Francisco%2C%20CA%2094105%2C%20USA!5e0!3m2!1sen!2sus!4v1616161616161" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main-content>
<?php include_once 'includes/footer.php'; ?>