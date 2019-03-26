export default {

    template: `
    <div>
    <div id="waitCount">
    <div id="donorCount">
        <h3>Become a Donor, Save a Life</h3>
        <p>You can save up to 8 peoples lives by becoming a donor. Every three days someone dies in Ontario because the life-saving organ transplant they need is not available, it's often a matter of life and death.</p>
    </div>
    <p id="number">4500</p>
    <p id="waitList">Waiting on a list for transplant</p>
</div>
    </div>

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

