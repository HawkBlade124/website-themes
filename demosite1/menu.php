<?php include 'includes/header.php'; ?>
<style>

#menu{
    margin:35px 0;
}
#menuGallery {
    gap: 25px;
}
.menu-item p {
    text-wrap: wrap;
}
.menu-item, .special-menu-item {
    width: 100%;
    max-width: 500px;
    padding: 20px;
    border: 1px solid var(--border);
    align-items: center;
    display: none; /* Hide by default, show with jQuery */
}
.menu-item-wrapper {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 100%;
    margin-top: 15px;
    align-items: center;
}
.menu-item-wrapper h3 {
    display: flex;
    justify-content: space-between;
    width: 100%;
}
.menuSelection {
    display: flex;
    gap: 25px;
    margin: 45px;
}
.selector {
    background-color: var(--button);
    border: none;
    font-size: 35px;
    margin-bottom: 25px;
    padding: 5px 35px;
    border-radius: 10px;
    color: #fff;
}
.selector:hover {
    background: var(--button-hover);
}
#menu h2 {
    font-size: 4rem;
    text-align: center;
}
#specialMenuWrapper h2 {
    font-size: 2.2rem;
    color: var(--headColor2) !important;
}
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    // Show all menu items by default with Flexbox
    $('.menu-item').css('display', 'flex');
    
    $('.selector').click(function() {
        var category = $(this).text().toLowerCase();
        if (category === 'all') {
            $('.menu-item').css('display', 'flex');
        } else {
            $('.menu-item').css('display', 'none');
            $('.menu-item[data-category="' + category + '"]').css('display', 'flex');
        }
    });
});
</script>
<div id="menu">
    <h2>The Menu</h2>
    <div id="menuWrapper" class="d-flex flex-column align-items-center justify-content-center">
        <div class="menuSelection">
            <button class="selector">All</button>
            <button class="selector">Appetizer</button>
            <button class="selector">Entrée</button>
            <button class="selector">Side</button>
            <button class="selector">Drinks</button>
            <button class="selector">Dessert</button>
            <button class="selector">Special</button>
        </div>
        <div id="menuGallery" class="w-100 d-flex flex-wrap justify-content-center">
            <div class="menu-item flex-wrap justify-content-between" data-category="appetizer">
                <div class="menu-item-image">
                    <img src="images/menu-item4.jpg" alt="Menu Item 1" class="img-fluid">
                </div>
                <div class="menu-item-wrapper">
                    <h3>Menu Item <span class="price">$8.99</span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae placeat quis culpa quod commodi eum nobis?</p>
                </div>
            </div>
            <div class="menu-item flex-wrap justify-content-between" data-category="appetizer">
                <div class="menu-item-image">
                    <img src="images/menu-item2.jpeg" alt="Menu Item 2" class="img-fluid">
                </div>
                <div class="menu-item-wrapper">
                    <h3>Menu Item <span class="price">$12.99</span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae placeat quis culpa quod commodi eum nobis?</p>
                </div>
            </div>
            <div class="menu-item flex-wrap justify-content-between" data-category="dessert">
                <div class="menu-item-image">
                    <img src="images/dessert-1.jpg" alt="Menu Item 3" class="img-fluid">
                </div>
                <div class="menu-item-wrapper">
                    <h3>Menu Item <span class="price">$10.99</span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae placeat quis culpa quod commodi eum nobis?</p>
                </div>
            </div>
            <div class="menu-item flex-wrap justify-content-between" data-category="entrée">
                <div class="menu-item-image">
                    <img src="images/menu-item6.jpg" alt="Menu Item 6" class="img-fluid">
                </div>
                <div class="menu-item-wrapper">
                    <h3>Menu Item <span class="price">$6.99</span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae placeat quis culpa quod commodi eum nobis?</p>
                </div>
            </div>
            <div class="menu-item flex-wrap justify-content-between" data-category="side">
                <div class="menu-item-image">
                    <img src="images/menu-item1.jpg" alt="Menu Item 5" class="img-fluid">
                </div>
                <div class="menu-item-wrapper">
                    <h3>Menu Item <span class="price">$9.99</span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae placeat quis culpa quod commodi eum nobis?</p>
                </div>
            </div>
            <div class="menu-item flex-wrap justify-content-between" data-category="side">
                <div class="menu-item-image">
                    <img src="images/side-1.jpg" alt="Menu Item 6" class="img-fluid">
                </div>
                <div class="menu-item-wrapper">
                    <h3>Menu Item <span class="price">$11.99</span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae placeat quis culpa quod commodi eum nobis?</p>
                </div>
            </div>
            <div class="menu-item flex-wrap justify-content-between" data-category="side">
                <div class="menu-item-image">
                    <img src="images/side-2.jpg" alt="Menu Item 7" class="img-fluid">
                </div>
                <div class="menu-item-wrapper">
                    <h3>Menu Item <span class="price">$7.99</span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae placeat quis culpa quod commodi eum nobis?</p>
                </div>
            </div>
            <div class="menu-item flex-wrap justify-content-between" data-category="drinks">
                <div class="menu-item-image">
                    <img src="images/drink-1.jpg" alt="Drink 1" class="img-fluid">
                </div>
                <div class="menu-item-wrapper">
                    <h3>Menu Item <span class="price">$5.99</span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae placeat quis culpa quod commodi eum nobis?</p>
                </div>
            </div>
            <div class="menu-item flex-wrap justify-content-between" data-category="drinks">
                <div class="menu-item-image">
                    <img src="images/drink-2.jpg" alt="Drink 2" class="img-fluid">
                </div>
                <div class="menu-item-wrapper">
                    <h3>Menu Item <span class="price">$5.99</span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae placeat quis culpa quod commodi eum nobis?</p>
                </div>
            </div>
            <div class="menu-item flex-wrap justify-content-center" data-category="special">
                <h3>SPECIAL</h3>
                <div class="menu-item-image">
                    <img src="images/special.jpg" alt="Menu Item Special" class="img-fluid">
                </div>
                <div class="menu-item-wrapper">
                    <h3>Menu Item <span class="price">$15.99</span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae placeat quis culpa quod commodi eum nobis?</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>