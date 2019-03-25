export default {
    template: `
    <div id="organsinneed">
    <h2>ORGANS IN NEED</h2>

    <div>
        <img src="images/Organ-01.svg" alt="organ-icon heart">
        <h3>70</h3>
        <h4>Hearts</h4>
    </div>

    <div>
        <img src="images/Organ-02.svg" alt="organ-icon kidneys">    
        <h3>1157</h3>
        <h4>Kidneys</h4>
    </div>

    <div>
        <img src="images/Organ-03.svg" alt="organ-icon Liver">    
        <h3>210</h3>
        <h4>Liver</h4>
    </div>

    <div>
        <img src="images/Organ-04.svg" alt="organ-icon Lungs">    
        <h3>78</h3>
        <h4>Lungs</h4>
    </div>

    <div>
        <img src="images/Organ-05.svg" alt="organ-icon pancreas">    
        <h3>15</h3>
        <h4>Pancreas</h4>
    </div>

    <div>
        <img src="images/Organ-06.svg" alt="organ-icon intestines">    
        <h3>52</h3>
        <h4>Intestines</h4>
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
