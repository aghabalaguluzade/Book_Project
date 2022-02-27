const questionsDelete = (id) => {

    swal({
        title: "Diqqət!",
        text: "Silinən informasiya geri qaytarılmır, yenidən əlavə olunmaldır!",
        icon: "warning",
        buttons: ["İmtina et", "Sil"],
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          location.href = `/questions/delete/${id}`;
        } else {
          swal("İmtina Edildi!");
        }
      });


}