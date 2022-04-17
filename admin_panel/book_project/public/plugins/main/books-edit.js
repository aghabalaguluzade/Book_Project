const _token = $('meta[name="csrf-token"]').attr("content");

const priceView = () => {

    document.getElementById('priceView').style.display = "block";

}

const getPrice = (id) => {

    $.ajax({
        type: "POST",
        url: "/books/book-edit/price",
        data: id,
        success: function (response) {
            console.log(response);
        }
    });
}