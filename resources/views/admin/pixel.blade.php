<div class="modal fade" id="pixelModal" tabindex="-1" role="dialog" aria-labelledby="invoiceFormTitle" aria-hidden="true">
    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100" id="invoiceFormTitle">Edit Pixel</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <form id="editReviewForm" action="{{ route('addPixel') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                                {{ csrf_field() }}
                                <div class="md-form input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Pixel ID</span>
                                    </div>
                                    <input type="text" name="pixel_id" id="pixel_id" class="form-control" data-value="pixel_id" value="" autocomplete="off">
                                </div>
                                <div class="md-form input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Name</span>
                                    </div>
                                    <input type="text" name="pixel_name" id="pixel_name" class="form-control" data-value="pixel_name" value="" autocomplete="off">
                                </div>
                                <div class="md-form input-group input-group-sm mb-3">
                                    <button type="submit" class="btn btn-primary btn-sm waves-effect">Add pixel</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-8 ms-auto">
                            <div id="tablePixelDetails">
                                <table class="table table-responsive-sm table-striped text-center">
                                    <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Pixel ID</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center"></th>
                                    </tr>
                                    </thead>
                                    <tbody id="tablePixelDetailsBody">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editPixel" tabindex="-1" role="dialog" aria-labelledby="invoiceFormTitle" aria-hidden="true">
    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100" id="invoiceFormTitle">Edit Pixel</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="deletePixelForm" action="{{ route('deletePixel') }}" method="POST">
                {{ csrf_field() }}
                <div class="col-md-12 ms-auto text-center" style="margin-top: 20px;">
                    <input type="hidden" name="pixelIdHidden" id="pixelIdHidden" value=""/>
                    <span class="table-remove"><button type="submit" class="btn btn-danger btn-rounded btn-sm my-0 deletePixelBtn">DELETE THIS PIXEL</button></span>
                </div>
            </form>
            <form id="editPixelForm" action="{{ route('editPixel') }}" method="POST" autocomplete="off">
                {{ csrf_field() }}
                <div class="modal-body">
                        <input type="hidden" name="pixelIdHiddenModal" id="pixelIdHiddenModal" value=""/>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Pixel ID</span>
                            </div>
                            <input type="text" name="pixelIdModal" id="pixelIdModal" class="form-control" data-value="pixelIdModal" value="" autocomplete="off">
                        </div>
                        <div class="md-form input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">Name</span>
                            </div>
                            <input type="text" name="pixelNameModal" id="pixelNameModal" class="form-control" data-value="pixelNameModal" value="" autocomplete="off">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm waves-effect">Edit pixel</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.pixelMenu').click(function () {
            let text = "";
            $.ajax({
                type: "GET",
                url: baseURL + "getPixels/",
                dataType: 'json',
                success: function (data) {
                    for (let i = 0; i < data.length; i++) {
                        text += '<tr>';
                        text += '<td class="pt-3-half">' + data[i].id_pixel + '</td>';
                        text += '<td class="pt-3-half">' + data[i].fb_pixel + '</td>';
                        text += '<td class="pt-3-half">' + data[i].pixel_name + '</td>';
                        text += '<td>';
                        text += '<span class="table-edit"><button type="button" class="btn btn-primary btn-rounded btn-sm my-0 editPixelBtn" data-toggle="modal" data-target="#editPixel" value="' + data[i].id_pixel + '">EDIT</button></span>';
                        text += '</td>';
                        text += '</tr>';
                    }
                    $('#tablePixelDetailsBody').html(text);

                    $('.editPixelBtn').click(function(){
                        let id = $(this).val();
                        $.ajax({
                            type: "GET",
                            url: baseURL + "getPixel/" + parseInt(id),
                            dataType: 'json',
                            success: function (data) {
                                $('#pixelIdHiddenModal').val(data.id_pixel);
                                $('#pixelIdHidden').val(data.id_pixel);
                                $('#pixelIdModal').val(data.fb_pixel);
                                $('#pixelNameModal').val(data.pixel_name);

                                $('.deletePixelBtn').click(function () {
                                    return confirm('Are you sure that you want to delete this pixel?');
                                });
                            },
                            error: function (req, err) {
                                console.log(req);
                            }
                        })
                    });
                },
                error: function (req, err) {
                    console.log(req);
                }
            })
        });
    });
</script>