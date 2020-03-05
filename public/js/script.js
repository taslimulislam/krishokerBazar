$(document).ready(function () {
    // alert("aice");
    $(".category").change(function(){
        subCategory(this.value);
    });
    function subCategory(caid)
    {
        $.get('/productUpload/category', {
            caid : caid
        },
        function (data, status) {
            //alert(data);
            // var obj = JSON.parse(data);
            var subCat = "<option disabled selected value='--Select one--' >--Select one--</option>";
            // alert(subCategory);
            $.each(data, function (key, val) {
                subCat += "<option value="+val.id+" >"+val.name+"</option>";
            });
            $("#subCategory").html(subCat);
            
        });
    }

   

});
