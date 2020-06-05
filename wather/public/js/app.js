$(document).ready(function () {
    $('.delete-user').on('click', function () {
      let idUser = $(this).attr('data-id');
      // console.log(idUser)
        $.ajax({
            url:'http://localhost:8000/'+idUser+'/destroy',
            dataType:'json',
            success: function (result) {
                if (result.status == 'success'){
                    alert('xoa thanh cong')
                    $('#user-'+idUser).hide();
                }


            }
        })
    })
});