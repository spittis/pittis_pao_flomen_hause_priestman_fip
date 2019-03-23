export default {
    template: `

<div>
    <div id="contact">
    <h1>Get In Touch</h1>
    <p>Want to learn more about the ways you can help save someone's life? Ask away! We would love to help inform you more on the topic!
    </p>
    <form action="admin/sendEmail.php" id="contactForm" method="POST">        
            <input v-model="input.name" type="text" id="name" name="name" value="" placeholder="Name" required><br><br>
    
            <input v-model="input.email" type="email" id="email" name="email" value="" placeholder="Email Address" required><br><br>

            <textarea v-model="input.msg" type="msg" id="msg" name="msg" value="" placeholder="Message" required></textarea><br><br>
    
            <button @click.prevent="signup()" type="submit" id="submit" name="submit">Submit</button>
            <span id="error_message" class="text-danger"></span>
            <span id="success_message" class="text-success"></span>
    </form>
<script>
$(function(){
 $('#contactForm').submit(function(e){
    e.preventDefault();
   var name = $('#name').val();
   var msg = $('#msg').val();
   var email = $("#email").val();
   if(name == '' || msg == '' || email == '')
   {
       $('#error_message').html("All Fields are required");
   }
   else
   {
       $('#error_message').html('');
       $.ajax({
           url:"admin/sendEmail.php",
           method:"POST",
           type: "json",
           data:{name:name, msg:msg, email:email},
           success:function(json){ 
               if(!json.success){
                    $("#error_message").fadeIn().html(json.message);
                    setTimeOut(function(){
                        $('#success_message').fadeOut('slow');
                    }, 2000);
                    return console.error(json);
               }//end if
               $("form").trigger("reset");
               $("#success_message").text(json.data).fadeIn(500).delay(5000).fadeOut(250);
           }
       });
   }
 });
});
</script>
</div>
<img src="images/Contact.jpg" id="contactIMG" alt="contactIMG">
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

