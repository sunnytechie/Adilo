<template>
  <div>
    
    <Nav></Nav>

    <!-- Page Heading -->
    <!-- <header class="d-flex py-3 bg-white shadow-sm border-bottom">
      <div class="container">
        <slot name="header" />
      </div>
    </header> -->

    <!-- Page Content -->
    <main>
      <slot />
    </main>
  </div>
</template>

<script>
import Nav from '../Pages/Shared/Nav.vue'
import BreezeApplicationLogo from '@/Components/ApplicationLogo.vue'
import BreezeDropdown from '@/Components/Dropdown.vue'
import BreezeDropdownLink from '@/Components/DropdownLink.vue'
import BreezeNavLink from '@/Components/NavLink.vue'
import { Link } from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'

export default {
  components: {
    BreezeApplicationLogo,
    BreezeDropdown,
    BreezeDropdownLink,
    BreezeNavLink,
    Link,
    Nav,
  },

  data() {
    return {
      showingNavigationDropdown: false,
    }
  },

  methods: {
    logout() {
      Inertia.post(route("logout"));
    }
  },
}
</script>
