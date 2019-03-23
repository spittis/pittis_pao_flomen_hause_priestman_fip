export default {
    template: `
    <div id="vidLearn">
    <div id="video">
        <img src="images/Video_Template.jpg">
    </div>
    <div id="learnMore">
        <h1>LEARN MORE</h1>
        <ul>
            <li>One donor can save up to 8 lives through organ donation and enhance the lives of up to 75 more.</li>
            <li>Age alone does not disqualify someone fom becoming a donor. There is always potential to be a donor; it shouldn’t stop you from registering.</li>
            <li>Your current or past medical history does not prevent you from registering to be a donor. Individuals with serious illnesses can be organ donors</li>
            <li>All major religions support organ and tissue donation</li>
            <li>Organ and tissue donation does not impact your funeral plans</li>
        </ul>
    </div>
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
