<div id="questionModal" wire:ignore.self
     class="modal fade"
     tabindex="-1"
     aria-labelledby="questionModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title fs-7" id="questionModalLabel">پرسش خود را درباره این کالا ثبت
                    کنید</h6>
                <button type="button" class="btn-close mx-0" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <textarea id="textArea" class="form-control" rows="5"></textarea>
                    <div id="charCount" class="text-muted fs-9 text-end">0 / 100</div>

                    <hr/>

                    <button id="submitButton" class="btn btn-danger w-100 mt-2" disabled>ثبت پرسش</button>

                    <p class="fs-9 text-center my-3">
                        ثبت دیدگاه به معنی موافقت با<a href="#" class="text-info"> قوانین انتشار
                            دیجی‌کالا </a>است.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
