export default {
    template: `
<div>
    <div id="header">
        <img id="heads" src="images/HeroImage.jpg" alt="header of faces" title="faces">
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
