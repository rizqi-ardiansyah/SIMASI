<template>
    <div class="dark-mode">
        <div class="wrapper" style="overflow: auto;">
 
        <!-- Preloader -->
<<<<<<< HEAD
    
=======
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" :src="'../images/TechNisi.png'" alt="AdminLTELogo" height="300" width="300">
        </div> -->
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2

        <!-- Navbar -->
            <NavBar />
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
            <SideBar />

        <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <slot name="header"></slot>
                    </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                    <slot></slot>
                <!-- /.content -->
            </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
            <Footer />
        </div>
    </div>
</template>
<script>
    import Footer from '@/Components/Footer'
    import NavBar from '@/Components/NavBar'
    import SideBar from '@/Components/SideBar'
    export default {
        components: {
            Footer,
            NavBar,
            SideBar,
        },
        mounted() {
            // this.init()
        },
        methods: {
            init() {
                let SELECTOR_LOADER = '.preloader'
                setTimeout(() => {
                    let $loader = $(SELECTOR_LOADER)
                    if($loader) {
                        $loader.css('height', 0)
                        setTimeout(() => {
                            $loader.children().hide()
                        }, 200)
                    }
                }, 2000)
            }
        }
    }
</script>
