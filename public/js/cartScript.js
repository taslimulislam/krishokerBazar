$(document).ready(function () {
    // alert();
    total();
    $(".cartBtn").click(function () {
        // alert(this.value);
        addToCart(this.value, 1);
    });
    $(".updateLess").click(function () {
        //alert(this.value);
        // if($("#cartQuantity"+this.value) == 1 &)
        addToCart(this.value, -1, 0);
    });
    $(".updateUp").click(function () {
        // alert(this.value);
        addToCart(this.value, 1, 0);
    });

    function addToCart(pid, quantity, type) {
        //alert(pid+" "+quantity);
        $.get('/cart/add', {
                pid: pid,
                quantity: quantity
            },
            function (data, status) {
                alert ("Cart Added Sucessesfully");
                //alert(data);
                if (type == 0) {
                    //alert("cart updated" + data);
                    $("#cartQuantity" + pid).val(data);
                    total();
                }
            });
    }

    $(".dltBtn").click(function () {
        // alert(this.value);
        deleteCart(this.value);
    });

    function deleteCart(id) {
        $.get('/cart/delete', {
                id: id
            },
            function (data, status) {
                // alert(data);
                location.reload(true);
            });
    }

    // $(".updateQ").change(function () {
    //     // alert(this.value);

    //     addToCart(this.value, 1);
    // });
    function total() {
        $.get('/cart/total',
            function (data, status) {
                // alert(data);
                $("#sub").text(data);
                $("#total").text(data);
            });
    }

});
