<!-- Modal -->
<div
    class="modal fade"
    id="modal-form"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="post" class="form-horizontal">
            @csrf @method('post')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{-- <h4 class="modal-title"></h4> --}}
                </div>

                <div class="modal-body">
                    <div class="mb-3 row">
                        {{-- <label for="idDepartment" class="form-label">Id Departments</label>
                        <input type="text" class="form-control" id="idDepartment" name="idDepartment"></div> --}}
                        <div class="mb-3 row">
                            <label for="namaChannel" class="form-label">Nama Channel</label>
                            <input
                                type="text"
                                class="form-control"
                                id="namaChannel"
                                name="namaChannel"></div>

                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>

                    </div>
                </div>
            </div>
        </div>
