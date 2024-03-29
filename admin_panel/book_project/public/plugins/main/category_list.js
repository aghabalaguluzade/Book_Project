const _token = $('meta[name="csrf-token"]').attr('content');

const status = (id) => {
    $.ajax({
        type: "POST",
        url: "/admin/category/category_status",
        data: {
            _token,
            id
        },
        success: function(data) {
            if(data.parent_check === false) {
                swal("Təssüf!", "Kateqoriyanın Üst Kateqoriyası deaktiv olduğu üçün aktiv edilə bilmədi!","error").then((result)=> {
                    location.reload();
                });
            }else if(data.status===false) {
                swal("Təssüf!", "Xəta baş verdi yenidən cəhd edin!","error").then((result)=> {
                    location.reload();
                });
            }else if(data.status===true) {
                swal("Uğurlu!", "Status dəyişdirildi!","success").then((result)=> {
                    location.reload();
                });
        }
    }
    })
}

const categoryEdit = (id) => {
    $.ajax({
        type : "POST",
        url : "/admin/category/category_edit_view",
        data : {
            _token, 
            id
        },
        success : function(data) {
            if(data) {
                document.getElementById('id').value = data.id;
                document.getElementById('parent_id').value = data.parent_id;
                document.getElementById('category_name').value = data.category_name;
                $('#edit').modal('show');
            }
        }
    })
}