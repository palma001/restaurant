 $(document).ready(function (e) {
    $('#client').click(function () {
        var data_id = '';
        var full_name='';
        var email='';
        var date='';
        if (typeof $(this).data('id') !== 'undefined') {
            data_id = $(this).data('id');
            full_name=$(this).data('fullname');
            email=$(this).data('email');
            date=$(this).data('date');
        }
    $('#use').val(data_id);
        document.getElementById("table1").rows[1].cells[0].innerHTML = data_id  
        document.getElementById("table1").rows[1].cells[1].innerHTML = full_name
        document.getElementById("table1").rows[1].cells[2].innerHTML = email       
        document.getElementById("table1").rows[1].cells[3].innerHTML = date   
    })
 });

 
 



