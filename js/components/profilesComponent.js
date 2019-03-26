export default {
    template: `
<div id="profiles">
    <ul>
        <div>
            <li><img src="images/Eye_Profile_FemaleOne.jpg" alt="">
                <!-- <figcaption class="caption">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit velit illum quae vero sit, eligendi modi ipsam odio est facere, molestias vel commodi voluptates repellendus tempora? Soluta eveniet nemo perferendis.</figcaption> -->
            </li>
        </div>
        <div>
            <li><img src="images/Eye_Profile_FemaleTwo.jpg" alt="">
                <!-- <figcaption class="caption">2Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit velit illum quae vero sit, eligendi modi ipsam odio est facere, molestias vel commodi voluptates repellendus tempora? Soluta eveniet nemo perferendis.</figcaption> -->
            </li>
        </div>

        <div>
            <li><img src="images/Eye_Profile_MaleOne.jpg" alt="">
                <!-- <figcaption class="caption">3Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit velit illum quae vero sit, eligendi modi ipsam odio est facere, molestias vel commodi voluptates repellendus tempora? Soluta eveniet nemo perferendis.</figcaption> -->
            </li>
        </div>

        <div>
            <li><img src="images/Eye_Profile_MaleTwo.jpg" alt="">
                <!-- <figcaption class="caption">4Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit velit illum quae vero sit, eligendi modi ipsam odio est facere, molestias vel commodi voluptates repellendus tempora? Soluta eveniet nemo perferendis.</figcaption> -->
            </li>
        </div>
    </ul>
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
