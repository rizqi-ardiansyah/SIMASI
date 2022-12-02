<template>
    <footer class="main-footer">
<<<<<<< HEAD
        <strong>Copyright &copy; 2014-{{ currentDate.getFullYear() }} <inertia-link href="#">Admin-O-Matic</inertia-link>.</strong>
=======
        <strong>Copyright &copy; {{ currentDate.getFullYear() }} <inertia-link href="#">SIMASI</inertia-link>.</strong>
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0
        </div>
    </footer>
</template>

<script>
    export default {
        data() {
            return {
                currentDate: new Date,
            }
        }
    }
</script>