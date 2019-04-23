export default {
    template: `
<div id="profiles">
        <div class="testimonial">
            <img src="images/Eye_Profile_FemaleOne.jpg" alt="Eye Image of Donor" class="donorImg">
            <div class="donorOverlay">
            <div class="mobileTest">Click to read her story</div>
            <div class="donorTest">Shortly after celebrating her 32nd wedding anniversary, 53-year-old Anne collapsed from a brain aneurysm. As her family waited anxiously in the hospital that February, they overheard another family, whose young child had just died, discuss donation of their child’s organs.
            <br>
            Anne had never discussed organ donation with her family, but then and there, her family decided that donation would be a meaningful way to realize some good from this tragedy.
            <br>
            </div>
            <div class="donorName">Mary-Anne</div>
            <div class="donorOrgan">Cornea Donor</div>
            </div>
        </div>

        <div class="testimonial">
            <img src="images/Eye_Profile_FemaleTwo.jpg" alt="Eye Image of Recipient" class="donorImg">
            <div class="donorOverlay">
            <div class="mobileTest">Click to read her story</div>
            <div class="donorTest">Today, Brittany is a confident young girl with goals and promise, thanks to the gift of life. But her young life has been filled with challenges.
            <br>
            Since birth, Brittany has experienced many serious health issues. Born with a congenital heart defect, she had open-heart surgery at the age of two, and again at the age of four.
            <br>
            </div>
            <div class="donorName">Brittany</div>
            <div class="donorOrgan">Heart Recipient</div>
            </div>
        </div>

        <div class="testimonial">
            <img src="images/Eye_Profile_MaleOne.jpg" alt="Eye Image of Donor" class="donorImg">
            <div class="donorOverlay">
            <div class="mobileTest">Click to read his story</div>
            <div class="donorTest">In 2004, 20-year-old Alvin began to feel unusually tired for no apparent reason. He also started to lose weight and everyday tasks like walking to class felt like a chore. Alvin managed to finish his first semester before heading to Albany Medical Center, where he was diagnosed with a serious heart muscle disease and was put on drug therapy. Nonetheless, his condition worsened, and in January he returned to the hospital instead of school.<br>Alvin was placed on the transplant waiting list in February 2005.</div>
            <div class="donorName">Alvin</div>
            <div class="donorOrgan">Heart Recipient</div>
            </div>
        </div>

        <div class="testimonial">
            <img src="images/Eye_Profile_MaleTwo.jpg" alt="Eye Image of Recipient" class="donorImg">
            <div class="donorOverlay">
            <div class="donorName">Gene</div>
            <div class="donorOrgan">Organ Donor</div>
            
            <div class="mobileTest">Click to read his story</div>
            <div class="donorTest">Gene was a Hawaiian sound engineer, auto mechanic and talented musician who could play several instruments with ease. In his wife Deborah’s words, he was “a wonderful husband and a very humble man.”<br>Gene became an organ donor after succumbing to a stroke at age 53. His donation took place shortly before his niece Mari began working at the Organ Donor Center of Hawaii. When Gene was honored on the “Stars of Life Float” at the 2009 Rose Parade®, it had special meaning for his entire family.</div>
           
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
