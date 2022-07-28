<template>
    <Head title="Recording" />

  <breeze-authenticated-layout>

    <div class="container">
      <div class="row">
        <div class="col-md-5 offset-md-3 mt-5">
          <span>
            <svg style="color: red" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-record-circle my-2" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            </svg>
            Live preview
          </span>

          <div class="card" style="background: #ddd">
            <div class="card-body">
              <h5 class="card-title">Recording screen</h5>
              <p class="card-text">Okay wahala</p>
            </div>
          </div>

          <div class="my-3 mx-auto text-center">
            <button style="padding: 10px 30px; border-radius: 30px; color: #fff" class="btn btn-primary" type="button">Start recording</button>
          </div>
        </div>
      </div>
    </div>

  </breeze-authenticated-layout>

 
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3'

export default {
  components: {
    BreezeAuthenticatedLayout,
    Head,
},

//vue close modal when page rendered
data() {
  return {
    modal: false,
  }
},

}
</script>

<!-- Access camera and open camera on the page -->

<style>
  .modal-backdrop.show {
    display: none !important;
  }
</style>