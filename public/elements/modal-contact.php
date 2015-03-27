<!-- Begin contact modal -->
<div id="modal-contact" class="modalDialog">
    <div>	<a href="#close" title="Close" class="close">X</a>

        <h2>Contact Form</h2>

        <form action="scripts/emailFeedback.php" method="post" id="form-contact">
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-input" id="name" type="text" name="name" />
            </div>

            <div class="form-group">
                <label for="emailAddress">Email Address</label>
                <input class="form-input" id="emailAddress" type="text" name="emailAddress" />
            </div>

            <div class="form-group">
                <label for="rating">Website Rating</label>
                <select class="form-input" id="rating" name="rating">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea id="comment" name="comment" cols="40" rows="3"></textarea>
            </div>

            <div class="form-group">
                <button class="button button-default" type="reset">Reset Form</button>
                <button class="button button-default" type="submit">Submit</button>
            </div>


        </form>
    </div>
</div>