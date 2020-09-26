$( document ).ready(function() {

    console.log( "ready!" );

    $( function() {
        $( "#sortable" ).sortable({
            delay: 150
        });
        $( "#sortable" ).disableSelection();
      });   

    function updateOrder(data) {
        $.ajax({
            url:"ajaxPro.php",
            type:'post',
            data:{position:data},
            success:function(){
                alert('your change successfully saved');
            }
        })
    }

    $( "#save-order" ).click(function() {

        var selectedData = new Array();
        $('#sortable>li').each(function() {
            selectedData.push($(this).text().replace(/ /g,''));
        });
        console.log(selectedData);
       // updateOrder(selectedData);
    });
    
});


