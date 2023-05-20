$(document).ready(() => {

    // LOAD YOUR TWEETS AND ADD THEN
    function updateTweet() {
        $.ajax({
            url: 'get_tweet.php',
            method: 'POST',
            success: function (data) {
                $('#tweets').html(data);
            }
        });
    }

    updateTweet();

    // POST TWEET
    $("#btn-tweet").click(() => {
        if ($("#tweet-text").val().length > 0) {
            $.ajax({
                url: "include_tweet.php",
                method: 'POST',
                data: $('#form-tweet').serialize(),
                success: (data) => {
                    $("#tweet-text").val('');
                    updateTweet();
                }

            });
        }
    });
});