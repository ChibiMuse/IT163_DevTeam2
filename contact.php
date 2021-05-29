
<?php include 'includes/header162v4.php'?>    

<!-- NEED TO INPUT WEBSITE HERE -->
<form method="GET"  action="---------form.php" target "_blank" id="feedform">

<h1>Feedback</h1>
    <div>
        <p>Connect with Us!</p>
    </div>
       
    <form>
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
            <label for="email">Title:</label>
            <input type="text" id="email" name="email" required >
            <span id="email-msg"> </span>
        </div>  


        <div class="fieldset"> 

            <label for="feedback">What's Up?</label>
            <textarea id="feedback" name="feedback" rows="20" cols="50"></textarea>
            
        </div> 

        <div class="fieldset">
            <button type="submit">Submit</button>
        </div>

    </form>


<script src="js/contact.js"></script>


<?php include 'includes/footer163.php'?> 
