const _token = $('meta[name="csrf-token"]').attr('content');

const blog_view = (id,url) => {
    $.ajax({
        type: "POST",
        url: "/admin/blogs/blog_view",
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
            document.getElementById('created_at').innerHTML = new Date(data.created_at).toLocaleString();
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
          location.href = `/admin/blogs/blog_delete/${id}`;
        } else {
          swal("İmtina Edildi!");
        }
      });
}