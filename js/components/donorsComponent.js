export default {
    template: `
<div id="join">
    <h1>JOIN THESE DONORS</h1>
    <p>Now in Ontario, you can register your consent to become an organ and tissue donor online. It only takes a few minutes to register!</p>
    <img src="images/Donor_Cards.jpg" alt="donors">
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
