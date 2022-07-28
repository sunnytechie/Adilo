<template>
  <Head title="Dashboard" />

  <breeze-authenticated-layout>
    <!-- <template #header>
      <h2 class="h4 font-weight-bold">
        Dashboard
      </h2>
    </template> -->

    <div class="container-fluid">
      <div class="row flex-nowrap">
        <!-- Sidebar column -->
          <Sidebar/>


          <div class="col py-3">
            <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">

                  <div class="row-1 my-3">
                    <span>Snapbyte</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right mx-2" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    <span>My recordings</span>
                  </div>

                  <div class="row-2 d-flex justify-content-between">
                    <div>My Recordings 25</div>

                    <div class="btn-group-of-in-row">
                        <button class="btn btn-default" type="button">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-up mx-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"/>
                          </svg>
                          By Date</button>
                        <button class="btn btn-default  mx-3" type="button">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel mx-1" viewBox="0 0 16 16">
                            <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z"/>
                          </svg>
                          Add Filter</button>
                        <button class="btn btn-primary-1" type="button">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video mx-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z"/>
                          </svg>
                          New Request</button>
                        <button class="btn btn-primary-2 mx-3" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-vinyl mx-1" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 6a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM4 8a4 4 0 1 1 8 0 4 4 0 0 1-8 0z"/>
                            <path d="M9 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                          </svg>
                          Start Recording</button>
                      
                    </div>
                  </div>

                  <div class="row-3 mt-4">
                    <div class="table-responsive">
                      <table class="table table-borderless align-middle">
                        <thead>
                          <tr>
                            <th>Recordings</th>
                            <th class="text-left">Title</th>
                            <th>Views</th>
                            <th>Size</th>
                            <th>Last Modified</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <img height="70" width="100" class="img-fluid" src="images/dog.jpg" alt="">
                              <span style="position:absolute; margin-left: -50px; margin-top: 38px; background: #000; color: #fff; padding: 2px 4px">12:10</span>
                            </td>

                            <td>
                              <strong>Getting it right the first time</strong> <br>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisi</span>
                            </td>

                            <td>300</td>

                            <td>923 kb</td>

                            <td>923 kb</td>
                            
                            <td>3 months ago</td>

                            <td>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                              </svg>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <img height="70" width="100" class="img-fluid" src="images/dog.jpg" alt="">
                              <span style="position:absolute; margin-left: -50px; margin-top: 38px; background: #000; color: #fff; padding: 2px 4px">12:10</span>
                            </td>

                            <td>
                              <strong>Getting it right the first time</strong> <br>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisi</span>
                            </td>

                            <td>300</td>

                            <td>923 kb</td>

                            <td>923 kb</td>
                            
                            <td>3 months ago</td>

                            <td>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                              </svg>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <img height="70" width="100" class="img-fluid" src="images/dog.jpg" alt="">
                              <span style="position:absolute; margin-left: -50px; margin-top: 38px; background: #000; color: #fff; padding: 2px 4px">12:10</span>
                            </td>

                            <td>
                              <strong>Getting it right the first time</strong> <br>
                            <span>Lorem ipsum dolor sit amet, consectetur adipisi</span>
                            </td>

                            <td>300</td>

                            <td>923 kb</td>

                            <td>923 kb</td>
                            
                            <td>3 months ago</td>

                            <td>
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                              </svg>
                            </td>
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>

              </div>
            </div>
          </div>
          </div>
      </div>
    </div>

    
    
  </breeze-authenticated-layout>

  <RecordModal/>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3'
import Sidebar from '../Pages/Shared/Sidebar.vue'
import { Link } from '@inertiajs/inertia-vue3'
import RecordModal from '../Pages/Shared/Modal.vue'

export default {
  components: {
    BreezeAuthenticatedLayout,
    Head,
    Sidebar,
    Link,
    RecordModal,
},
}
</script>
