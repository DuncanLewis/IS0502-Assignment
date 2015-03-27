/**
 * Created by duncanlewis on 26/03/15.
 */
//Function to validate the form
function validateForm() {
    var name = $('input[name="name"]').val();
    var emailAddress = $('input[name="emailAddress"]').val();
    var rating = $('select[name="rating"]').val();
    var comment = $('textarea[name="comment"]').val();

    //Check all fields have been entered
    if ((name === "") || (emailAddress === "") || (rating === "") || (comment === "")) {
        alert("Please fill out all required fields");
        return false;
        //All fields entered, so submit form via ajax
    } else {
        submitFeedback(name, emailAddress, rating, comment);
    }
}


//Function to submit the feedback, via ajax, to the server-side script
function submitFeedback(name, emailAddress, rating, comment) {
    $.ajax({
        type: "POST",
        url: "/scripts/emailFeedback.php",
        data: {name: name, emailAddress: emailAddress, rating: rating, comment: comment},
        success: function (result) {
            alert("Thanks for your feedback!");
        }
    });
}
