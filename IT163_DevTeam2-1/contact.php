
<?php include 'includes/header162v4.php'?>    

<!-- Need to verify coded propere with name, action etc.  -->
<form id="feedback" name="feedback" method="GET"  action="contact.php" >

<h1>Feedback</h1>
    <div>
        <p>Connect with Us!</p>
    </div>
       
           <!-- label ND UINPUT At 100% with margin -->
        <div class="fieldset"> 
                <label for="name">*Name:</label>
                <input type="text" id="name" required>
                <span id="name-msg"> </span>
        </div>        

        <div class="fieldset"> 
            <label for="email">*Email:</label>
            <input type="text" id="email" name="email" required >
            <span id="email-msg"> </span>
        </div>  

        <div class="fieldset"> 
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required >
            <span id="phone-msg"> </span>
        </div>  

        <div class="fieldset"> 

            <label for="textinput">What's Up?</label>
            <textarea id="textinput" name="textinput" rows="20" cols="50"></textarea>
            
        </div> 

        <div class="fieldset">
            <button type="submit">Submit</button>
        </div>

    </form>


<script src="js/contact.js"></script>


<?php include 'includes/footer163.php'?> 
