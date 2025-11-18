<form class="form-sec mt-4" action="send-form.php" method="POST">
    <div class="controls">
        <div class="row">
            <!-- Name -->
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-with-icon">
                        <i class="fas fa-user"></i>
                        <input id="form_name" type="text" name="name" placeholder="Name" required minlength="3"
                            pattern="[A-Za-z\s]+" title="Name should contain only letters and spaces">
                    </div>
                </div>
            </div>

            <!-- Mobile Number -->
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-with-icon">
                        <i class="fas fa-phone"></i>
                        <input id="form_phone" type="tel" name="phone" placeholder="Mobile Number" required
                            pattern="[0-9]{10}" title="Please enter a valid 10-digit mobile number">
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-with-icon">
                        <i class="fas fa-envelope"></i>
                        <input id="form_email" type="email" name="email" placeholder="Email" required
                            title="Enter a valid email address">
                    </div>
                </div>
            </div>

            <!-- Location -->
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-with-icon">
                        <i class="fas fa-map-marker-alt"></i>
                        <input id="form_location" type="text" name="location" placeholder="Location" required
                            minlength="2">
                    </div>
                </div>
            </div>

            <!-- Message -->
            <div class="col-md-12">
                <div class="form-group">
                    <div class="input-with-icon">
                        <i class="fas fa-comment-dots" style="top: 20%;"></i>
                        <textarea id="form_message" name="message" placeholder="Message" rows="4" required
                            minlength="5"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button type="submit" name="submit" class="btn-curve btn-color"><span>Send
            Message</span></button>
</form>