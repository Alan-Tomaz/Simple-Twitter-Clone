$(document).ready(() => {

    // Search People
    $("#btn-search").click(() => {
        if ($("#name-person").val().length > 0) {
            $.ajax({
                url: "get_people.php",
                method: 'POST',
                data: $('#form-search-people').serialize(),
                success: (data) => {
                    $('#people').html(data);
                    $("#name-person").val('');

                    $(".btn-follow").click(function () {
                        var userId = $(this).data('id-user');

                        $('#btn-follow-' + userId).hide()
                        $('#btn-unfollow-' + userId).show()

                        $.ajax({
                            url: 'follow.php',
                            method: 'POST',
                            data: {
                                followIdUser: userId
                            },
                            success: (data) => {}
                        })
                    })

                    $(".btn-unfollow").click(function () {
                        var userId = $(this).data('id-user');

                        $('#btn-follow-' + userId).show()
                        $('#btn-unfollow-' + userId).hide()

                        $.ajax({
                            url: 'unfollow.php',
                            method: 'POST',
                            data: {
                                unfollowIdUser: userId
                            },
                            success: (data) => {}
                        })
                    })
                }

            });
        }
    });
});