// Get the information of followers and tweets
function loadPanel() {
    $.ajax({
        url: 'get_panel_info.php',
        method: 'POST',
        success: function (data) {
            console.log(data);
            var result = JSON.parse(data);
            $('#tweets-qnty').html(result.tweetsQnty);
            $('#followers-qnty').html(result.followersQnty);
        }
    });
}