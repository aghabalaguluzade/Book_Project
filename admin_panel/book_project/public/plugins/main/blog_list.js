const _token = $('meta[name="csrf-token"]').attr('content');

const blog_view = (id,url) => {
    $.ajax({
        type: "POST",
        url: "/blogs/blog_view",
        data: {
            _token,
            id
        },
        success: function(data) {
            document.getElementById('img').innerHTML = `<img src="${url+data.img}" style="height:150px; width:auto;" />`;
            document.getElementById('title').innerHTML = data.title;
            document.getElementById('author').innerHTML = data.author;
            document.getElementById('status').innerHTML = data.status === "1" ? "Aktiv" : "Deaktiv";
            document.getElementById('contents').innerHTML = data.contents;
            document.getElementById('created_at').innerHTML = data.created_at;
            $('#blog_modal').modal('show')
        }
    });
} 

const blog_delete = (id) => {

    swal({
        title: "Diqqət!",
        text: "Silinən informasiya geri qaytarılmır, yenidən əlavə olunmaldır!",
        icon: "warning",
        buttons: ["İmtina et", "Sil"],
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          location.href = `/blogs/blog_delete/${id}`;
        } else {
          swal("İmtina Edildi!");
        }
      });
}


const blog_edit = (id,url) => {
    $.ajax({
        type: "POST",
        url: "/blogs/blog_view",
        data: {
            _token,
            id
        },
        success: function(data) {
            document.getElementById('edit_img').innerHTML = `<img src="${url+data.img}" style="height:150px; width:auto;" />`;
            document.getElementById('edit_title').value = data.title;
            document.getElementById('edit_author').value = data.author;
            document.getElementById('edit_status').value = data.status;
            document.getElementsByClassName('note-editable')[0].innerHTML = data.contents;
            document.getElementById('edit_id').value = id;
            $('#blog_modal_edit').modal('show')
        }
    });
} 