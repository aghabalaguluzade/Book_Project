const _token = $('meta[name="csrf-token"]').attr('content');

const banner_edit = (id, url) => {

    $.ajax({
        type: "POST",
        url: "/banners/banner_edit_view",
        data: {
            _token,
            id
        },
        success: function (response) {
            document.getElementById('banner_id').value = response.id;
            document.getElementById('banner_img').innerHTML = `<img src="${url+response.banner_img}" style="height:150px; width:auto;" />`;
            document.getElementById('banner_name').value = response.banner_name;
            document.getElementById('banner_titl').value = response.banner_title;
            document.getElementById('banner_content').value = response.banner_content;
            document.getElementById('banner_link').value = response.banner_link;
            $('#banner_modal_edit').modal('show');
        }
    });

}