$(document).ready(() => {

    // Get the information of followers and tweets
    loadPanel();

    // LOAD YOUR TWEETS AND ADD THEN
    function updateTweet() {
        $.ajax({
            url: 'get_tweet.php',
            method: 'POST',
            success: function (data) {
                $('#tweets').html(data);

                //DELETE TWEETS
                $(".btn-delete-tweet").click(function () {
                    var tweetId = $(this).data('id-tweet');
                    $.ajax({
                        url: "delete_tweets.php",
                        method: 'POST',
                        data: {
                            tweetIdDelete: tweetId
                        },
                        success: (data) => {
                            console.log(data);
                            $("#btn-delete-tweet-" + tweetId).hide();
                            updateTweet();
                            loadPanel();
                        }

                    });
                });
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
                    loadPanel();
                }

            });
        }
    });
});