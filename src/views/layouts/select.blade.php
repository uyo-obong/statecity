<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
    function listState() {
        $.ajax({
            type: "get",
            url: "/state",
            success: function (res) {
                if (res) {
                    $.each(res,function(key,value){
                        $(".state").append('<option value="'+value+'">'+value+'</option>');
                    });
                }
            }
        });
    }
    listState();
</script>


@yield('content')

<script>
    $('.state').change(function(){
        var cid = $(this).val();

        let dropdown = document.getElementsByClassName("default");
        for (var i = 0; i < dropdown.length; i++) {
            var city = $(dropdown[i].querySelector('.city'));
        }

        if(cid){
            $.ajax({
                type:"get",
                url:"/city/"+cid,
                success:function(res)
                {
                    if(res)
                    {
                        // $('.city').empty();
                        city.empty();
                        city.append('<option>Select City</option>');
                        $.each(res,function(key,value){
                            city.append('<option value="'+value+'">'+value+'</option>');
                        });

                    }
                }

            });
        }
    });
</script>
