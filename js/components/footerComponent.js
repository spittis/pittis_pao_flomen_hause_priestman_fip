export default {

    template: `
    <footer>
    <section class="newsletter">
        <section class="newsText">
        <h4>KEEP CONNECTED</h4>
        <h5>SIGN UP FOR OUR<br>NEWSLETTER<h5>
        </section>

        <section class="newsForm">
        <form>
        <input id="newsForm" name="newsForm" placeholder="Email... " required>
        <button type="submit" name="newsSubmit" id="submit" class="button">Submit</button>
        </section>

    </section>

    <section class="footer">
    <ul>
        <li>CONTACT
            <a href="#">How do I register?</a>
            <a href="#">How do I log in?</a>
        </li>

        <li>FAQS
            <a href="#">How do I register?</a>
            <a href="#">How do I log in?</a>
        </li> 

        <li>HEALTH CARE MEMBERS
            <a href="#">Jack Nathan Health</a>
            <a href="#">Sunnybrook Health Sciences Centre</a>
        </li>
    </ul>
    </section>
</footer>
    `,


    data() {
        return {
            input: {
                country: "",
                firstname: "",
                lastname: "",
                email: ""
            }
        }
    },


    methods: {
        signup() {
            console.log('attempting to sign up');

            if (this.input.country != "" && this.input.firstname != "" && this.input.lastname != "" && this.input.email != "") {
                //fetch the data from the server and match passwords
                let url = `./admin/sign-up.php`;

                const formData = new FormData();

                formData.append("country", this.input.country);
                formData.append("firstname", this.input.firstname);
                formData.append("lastname", this.input.username);
                formData.append("email", this.input.email);

                fetch(url, {
                    method: 'POST',
                    body: formData
                })
                    .then(res => res.json())
                    .then(data => {
                        if (data == "Signup Failed") {
                            console.log('login attempt failed');
                            return;
                        } else {
                            
                        }

                    })
                .catch(function(error) {
                    console.log(error);
                })

            } else {
                console.log('blank forms');
            }
        }
    }

    //End of Export Default
}

