<template>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">New Recording</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form @submit.prevent="form.post(route('records.store'))">
          <div class="modal-body">
          <div>Save the recording in</div>
          <div>
              <select class="form-select" aria-label="Default select example">
                  <option value="0" selected disabled>Select a folder</option>
                  <option value="3">Adilo</option>
                  <option value="1">Drive</option>
                  <option value="2">My Computer</option>
              </select>

          

              <div class="form-check form-switch my-3 d-flex justify-content-between">
              <div><label class="form-check-label" for="flexSwitchCheckDefault">Record screen</label></div>
              <div><input class="form-check-input" v-model="form.screen" type="checkbox" role="switch" id="flexSwitchCheckDefault"></div>
              
              </div>

              <div class="form-check form-switch my-3 d-flex justify-content-between">
                <div><label class="form-check-label" for="flexSwitchCheckDefault">Record Camera</label></div>
                <div><input class="form-check-input" type="checkbox" v-model="form.camera" role="switch" id="flexSwitchCheckDefault"></div>
              </div>

              <div class="form-check form-switch my-3 d-flex justify-content-between">
                <div><label class="form-check-label" for="flexSwitchCheckDefault">Record Mic</label></div>
                <div><input class="form-check-input" type="checkbox" v-model="form.mic" role="switch" id="flexSwitchCheckDefault"></div>
              </div>
          </div>
        </div>
        <div class="modal-footer-bottom mx-auto p-3 text-center">
          <button type="submit" class="btn btn-primary mx-auto" style="padding: 10px 30px; border-radius: 30px; color: #fff">Start Recording</button>
        </div>
      </form>
      
    </div>
  </div>
</div>
</template>
<script>
import { Link, useForm } from '@inertiajs/inertia-vue3'
export default {
  components: {
    Link
  },

  setup() {
    let form = useForm({
      location: '',
      screen: false,
      camera: false,
      mic: false,
      
    })
    return {
      form
    }
  }
  
}

</script>

<style>
  .form-check {
    padding-left: 0 !important;
  }

  @media screen and (min-width: 676px) {
        .modal-dialog {
          max-width: 300px; /* New width for default modal */
        }
    }
</style>
