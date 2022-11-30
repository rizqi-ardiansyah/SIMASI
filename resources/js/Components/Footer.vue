<template>
    <footer class="main-footer">
        <strong>Copyright &copy; {{ currentDate.getFullYear() }} <inertia-link href="#">SIMASI</inertia-link>.</strong>
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