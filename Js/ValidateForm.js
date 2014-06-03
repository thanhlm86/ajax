/**
 * Created by Thanh@401 on 5/15/14.
 */
$(document).ready(function () {

    <!-- begin validate form Thêm c? quan-->
    var validator = $("#save").validate({
        rules: {
            name: {
                required: true,
                minlength: 6
            },
            age: {
                required: true,
                minlength: 6
            },
            address: {
                required: true
            }
        },
        messages: {
            name: {
                required: "please fill text",
                minlength: "Tối thiểu 6 kí tự"
            },
            age: {
                required: "please fill text",
                minlength: "min word to 6"
            },
            address: {
                required: "please fill text"
            }
        }

    });

});

