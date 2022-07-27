<template>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">New Recording</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div>Save the recording in</div>
        <div>
            <select class="form-select" aria-label="Default select example">
                <option selected>Select a project</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <div class="form-check form-switch my-3">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Record screen</label>
            </div>

            <div class="form-check form-switch mb-3">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Record Camera</label>
            </div>

            <div class="form-check form-switch mb-3">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Record Mic</label>
            </div>
        </div>
      </div>
      <div class="modal-footer-bottom mx-auto p-3">
        <button type="button" class="btn btn-primary" style="padding: 10px 30px; border-radius: 30px; color: #fff">Start Recording</button>
      </div>
    </div>
  </div>
</div>
</template>