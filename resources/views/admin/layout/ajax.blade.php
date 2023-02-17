<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $('#mainCat').on('change', function() {
            let id = $(this).val();
            $('#subCat').empty();
            $('#subCat').append(`<option value="0" disabled selected>Processing...</option>`);
            $.ajax({
                type: 'GET',
                url: 'subcat/' + id,
                success: function(response) {
                    var response = JSON.parse(response);
                    $('#subCat').empty();
                    $('#subCat').append(
                        `<option value="0" disabled selected>Select sub Category</option>`
                    );
                    response.forEach(element => {
                        $('#subCat').append(
                            `<option value="${element['id']}">${element['subCategory']}</option>`
                        );
                    });
                }
            });
        });
    });
</script>

