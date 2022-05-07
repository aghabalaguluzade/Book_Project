const blog_delete = (user_id,role_id) => {

    swal({
        title: "Diqqət!",
        text: "Silinən informasiya geri qaytarılmır, yenidən əlavə olunmaldır!",
        icon: "warning",
        buttons: ["İmtina et", "Sil"],
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          location.href = `/admin/users/user_delete/${user_id}/${role_id}`;
        } else {
          swal("İmtina Edildi!");
        }
      });
}