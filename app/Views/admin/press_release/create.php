<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div>
        <form id="form-add-faq">
            <div class="modal-body form">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <input type="hidden" value="" name="id" id="id">
                            <label class="form-label" style="padding-left:15px;">Question</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="question" name="question"  rows="2" required></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="form-label" style="padding-left:15px;">Answer</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="answer" name="answer"  rows="1" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-3 align-self-center mb-0" for="pwd2">Status:</label>
                            <div class="col-sm-12">
                            <select class="form-control form-select" name="is_active">
                                <option value="" disabled selected hidden >Pilihan</option>
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="ri-save-line"></i>Close</a>
                <a href="#" class="btn btn-primary btn-sm" id="btn-add-faq" ><i class="ri-save-line"></i>Save</a>
                <a href="#" class="btn btn-primary btn-sm" id="btn-edit-faq" ><i class="ri-save-line"></i>Save</a>
            </div>
        </form>
</div>

<?= $this->include("js/admin/faqs")?>
