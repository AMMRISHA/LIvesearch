

<table id="main" border="0px" cellpadding="0">
<tr>
    <td id="table-header">
        <h1>Add admin credentials</h1>

        <div id="search-bar">

                <label >Search:</label>
                <input type="text" id="search" autocomplete="off">
        </div>

    </td>

</tr>


<tr>
    <td id="table-data">
       
    </td>
</tr>

</table>
<script type="text/javascript" src="Javascript/jquery.js"></script>



<script>
        $(document).ready(function(){   

            //load the table
            function loadTable(){
                    $.ajax({
                            url:"ajax-load.php",
                            type:"POST",
                            success:function(data){
                                $("#table-data").html(data);
                            }
                    });
                }
            loadTable();


             //Live search for an element 

                // create a selector for the search id and add on keyup features that means search at the moment when the keyboard up or writing

                $("#search").on("keyup" , function(){


                    var search_term = $(this).val();

                    $.ajax({
                        url:"ajax-live-search.php",
                        type:"POST",
                        data:{search_key : search_term},
                        success:function(data)
                        {
                            $("#table-data").html(data);
                        }
                    })

                });



        });

</script>