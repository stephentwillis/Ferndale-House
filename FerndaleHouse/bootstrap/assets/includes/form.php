<div class="form-holder">
    <h2 class="text-center">Get in touch</h2>
    <form id="enquiry-form" name="enquiryform" action="assets/php/enquiry.php" method="post">                                               
        <div class="form-group">
            <label for="name">Full Name:</label><span class="required"><b>*</b> Required</span>
            <input id="name" type="text" name="name" class="form-control" tabindex="1" />
        </div>                            
        <div class="form-group">
            <label for="address">Address and postcode:</label><span class="required"><b>*</b> Required</span>
            <textarea name="address" id="address" class="form-control" tabindex="2" rows="5"></textarea>
        </div>                            
        <div class="form-group">
            <label for="telephone">Telephone:</label><span class="required"><b>*</b> Required</span>
            <input type="telephone" name="telephone" class="form-control" id="telephone" tabindex="3" />
        </div>                            
        <div class="form-group">
            <label for="email">Email address:</label><span class="required"><b>*</b> Required</span>
            <input id="email" type="text" name="email" class="form-control" tabindex="4" />
        </div>                            
        <div class="form-group">
            <label for="enquiry">How can we help?</label><span class="required"><b>*</b> Required</span>
            <textarea id="enquiry" name="enquiry" class="form-control" tabindex="5" rows="10"></textarea>
        </div>                            
        <div class="form-group">
            <p id="form-error" class="bg-danger text-center">Please complete the required fields</p>
            <button id="submit" class="btn btn-default" type="submit" tabindex="6">Submit</button>
        </div>                    
    </form>
</div>

<h4>
    Come and meet us by filling out the form above or give us a call on 01246 232634
</h4>