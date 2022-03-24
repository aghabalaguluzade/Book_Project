const _token = $('meta[name="csrf-token"]').attr('content');

const writers_view = (id) => {
    
    $.ajax({
        type: "POST",
        url: "/writers/writers_edit_view",
        data: {
            _token,
            id
        },
        success: function (response) {
            document.getElementById('writer_about').innerHTML = response.writer_about;
            document.getElementById('created_at').innerHTML = new Date(response.created_at).toLocaleString();
            $('#writersModal').modal('show')
        }
    });
}

const writers_edit = (id,url) => {

    $.ajax({
        type: "POST",
        url: "/writers/writers_edit_view",
        data: {
            _token,
            id
        },
        success: function (response) {
            document.getElementById('id').value = response.id;
            document.getElementById('writer_img').innerHTML = `<img src="${url+response.writer_img}" style="height:150px; width:auto;" />`;
            document.getElementById('writer_name').value = response.writer_name;
            document.getElementById('about').value = response.writer_about;
            document.getElementById('writer_status').value = response.writer_status;
            $('#writersEdit').modal('show');
        }
    });
}

const writers_delete = (id) => {
            
            swal({
                title: "Diqqət!",
                text: "Silinən informasiya geri qaytarılmır, yenidən əlavə olunmaldır!",
                icon: "warning",
                buttons: ["İmtina et", "Sil"],
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                  location.href = `/writers/writers_delete/${id}`;
                } else {
                  swal("İmtina Edildi!");
                }
              });
        }