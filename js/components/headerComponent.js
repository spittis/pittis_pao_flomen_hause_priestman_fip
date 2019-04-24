export default {
    template: `
<div>
    <ul id="header">
        <!-- <div class="noMob dual"> -->
          <li> <img id="heads1" class="noMob" src="images/Be_A_Donor.png" alt="header of faces" title="faces"> </li> 
          <li> <img id="heads2" class="noMob" src="images/Save_8_Lives.png" alt="header of faces" title="faces"> </li> 
        <!-- </div> -->
    </ul>

    <div id="header">
        <img id="heads" class="noWeb" src="images/Mobile_Hero.jpg" alt="header of faces" title="faces">
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
