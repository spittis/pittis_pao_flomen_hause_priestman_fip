export default {
    template: `
    <div id="events">

    <h1 id="upcoming">UPCOMING EVENTS</h1>

    <div id="event1" class="event">
        <img src="images/Events_One.jpg">
        <h3>Donor Wanted: A Panel Discussion</h3>
        <p>How do you start a conversation about the need for a living organ donor? What are the benefits and risks of using social media and other public platforms? Are there ethical guidelines or recommended practices to guide patients and families?</p>
        <div class="elocation">
            <div class="location">Toronto General Hospital</div>
            <div class="edate">Friday, March 29</div>
        </div>
    </div>
    <div id="event2" class="event">
            <img src="images/Events_Two.jpg">
            <h3>Pathways to Liver Transplantation</h3>
            <p>Are you considering a liver transplant? Do you have questions about living donor assessment or life after transplant? Would you like to connect with others on the same journey? Join UHN’s liver transplant team for this interactive seminar.</p>
            <div class="elocation">
                    <div class="location">Toronto General Hospital</div>
                    <div class="edate">Tuesday, March 5</div>
            </div>
    </div>
    <div id="event3" class="event">
            <img src="images/Events_Three.jpg">
            <h3>The Annual Kidney Walk and Run 2019</h3>
            <p>Every year, some 15,000 volunteers and participants gather at Kidney Walks in communities throughout the country to raise awareness and funds for those in need of kidney transplants. So, grab your runners and come and join us on this day!</p>
            <div class="elocation">
                    <div class="location">Yonge and Dundas Square</div>
                    <div class="edate">Tuesday, May 4</div>
            </div>
    </div>
</div>
    `,

    data() {
        return{
            message: "hello from the header component",
        }
    },

    methods: {

        

    }
}

// this is a template for the header component
// copy and paste HTML into the template tag
// work in this file, then import it into the main file
// this is just html and js
// every time you make a component make a sass module with it
// template, data, method all moved into one file now
