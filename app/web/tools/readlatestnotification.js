setTimeout(function() {
             Push();
           },
        200);
      /*30轮询读取函数*/
        setInterval(function() {

            Push();

    },
        30000);

/*请求函数的ajax*/

function Push() {

    $.ajax({

        type: "POST",
        url: "/index.php?s=Push&a=index",
        data: {
            t: 3
        },
        beforeSend: function() {},
        success: function(data) {

            var obj = eval("(" + data + ")");
            // alert(obj.sixin);
            if (obj.sixin != 0) {

                $(".tongzhi").html(obj.sixin).show();

            } else {
                $(".tongzhi").html(0).hide();

            }

        }

    });