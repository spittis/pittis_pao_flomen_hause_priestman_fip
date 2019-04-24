export default {
    template: `
    <div id="top">
    <img id="logo" src="images/Ontario_Connect_Logo2.svg">

        <div id="emailUs">
            <img src="images/Location.svg">
            <h3>Email Us</h3>
            <p>info@taptap.ca</p>
        </div>

        <div id="callUs">
            <img src="images/Phone.svg">
            <h3>Call Us</h3>
            <p>1-800-319-2312</p>
        </div>


    
        <nav role="navigation">
                <div id="menuToggle">
        <input id="checkbox" type="checkbox"/>
                
        <span></span>
        <span></span>
        <span></span>
       
    <ul id="menu">
        <div id="nav">
            <a href="index.html#nav"><li>Home</li></a>
            <a target="_blank" href="https://beadonor.ca/"><li>Sign Up</li></a>
            <a href="index.html#join"><li>Our Stories</li></a>
            <a href="index.html#events"><li>Events</li></a>
            <a href="index.html#profiles"><li>Testimonies</li></a>
            <a href="index.html#contact"><li>Contact</li></a>
            <a href="admin/index.php"><li>Staff</li></a>
        </div>

        <div id="socialIcons">
                <ul id="socialMed">
                        <li><a href="#"><img src="images/facebook.svg" alt="facebook"></a></li>
                        <li><a href="#"><img src="images/instagram.svg" alt="instagram"></a></li>
                        <li><a href="#"><img src="images/twitter.svg" alt="twitter"></a></li>
                        <li><a href="#"><img src="images/Linkdin.svg" alt="linkedin"></a></li>
                </ul>
        </div>
    </ul>

    
</div>
</nav>
</div>
    `,

    data() {
        return{
            message: "hello from the promotions component",
        }
    },

    methods: {
        
        

    }
}

// this is a template for the promotions component
// copy and paste HTML into the template tag
// work in this file, then import it into the main file
// this is just html and js
// every time you make a component make a sass module with it
// template, data, method all moved into one file now
