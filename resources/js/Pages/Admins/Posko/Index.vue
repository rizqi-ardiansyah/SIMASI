<template>
    <div>
        <admin-layout>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Posko</h3>
                                    <div class="card-tools" v-if="$page.props.auth.hasRole.admin">
                                        <button type="button" class="btn btn-info text-uppercase" style="letter-spacing: 0.1em;" @click="openModal">
                                            Tambah
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="text-capitalize">Provinsi</th>
                                                <th class="text-capitalize">Kota/Kabupaten</th>
                                                <th class="text-capitalize">Kecamatan</th>
                                                <th class="text-capitalize">Kelurahan</th>
                                                <th class="text-capitalize">Detail</th>
                                                <th class="text-capitalize">Posko</th>
                                                <th class="text-capitalize text-right" v-if="$page.props.auth.hasRole.admin">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(poskos, index) in posko.data" :key="index">
                                                <td class="text-capitalize">{{ poskos.provinsi }}</td>
                                                <td>{{ poskos.kota }}</td>
                                                <td>{{ poskos.kecamatan }}</td>
                                                <td>{{ poskos.kelurahan }}</td>
                                                <td>{{ poskos.detail }}</td>
                                                <td>{{ poskos.namaPosko }}</td>
                                                <!-- <td>{{ admin.roles }}</td> -->
                                                <!-- <td>{{ admin.created_at }}</td> -->
                                                <!-- <td>
                                                    <template v-for="role in admin.roles" :key="role.id">
                                                        {{ role.name }}
                                                    </template>
                                                </td> -->
                                                <td class="text-right" v-if="$page.props.auth.hasRole.admin">
                                                    <button class="btn btn-success text-uppercase" style="letter-spacing: 0.1em;" @click="editModal(poskos)">Ubah</button>
                                                    <button class="btn btn-danger text-uppercase ml-1" style="letter-spacing: 0.1em;" @click="deletePosko(poskos)">Hapus</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer clearfix">
                                    <pagination :links="posko.links"></pagination>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="modal fade" id="modal-lg">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">{{ formTitle }}</h4>
                            <button type="button" class="close" @click="closeModal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body overflow-hidden">
                            <!-- <div class="d-flex flex-column h4">
                                <span>Preview: <span class="text-capitalize">{{ form.name }}</span>
                                </span>
                                <span class="mt-2">Preview E-mail: <span class="text-capitalize">{{ form.email }}</span>
                                </span>
                            </div> -->
                            <div class="card card-primary">
                                <form @submit.prevent="checkMode">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" placeholder="Kota" v-model="form.id" autofocus="autofocus" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="provinsi" class="h4">Provinsi</label>
                                            <input type="text" class="form-control" placeholder="Provinsi" v-model="form.provinsi" :class="{ 'is-invalid' : form.errors.provinsi }" autofocus="autofocus" autocomplete="off">
                                        </div>
                                        <div class="invalid-feedback mb-3" :class="{ 'd-block' : form.errors.provinsi}">
                                            {{ form.errors.provinsi }}
                                        </div>

                                        <div class="form-group">
                                            <label for="kota" class="h4">Kota</label>
                                            <input type="text" class="form-control" placeholder="Kota" v-model="form.kota" :class="{ 'is-invalid' : form.errors.kota }" autofocus="autofocus" autocomplete="off">
                                        </div>
                                        <div class="invalid-feedback mb-3" :class="{ 'd-block' : form.errors.kota}">
                                            {{ form.errors.kota }}
                                        </div>

                                        <div class="form-group">
                                            <label for="kecamatan" class="h4">Kecamatan</label>
                                            <input type="text" class="form-control" placeholder="Kecamatan" v-model="form.kecamatan" :class="{ 'is-invalid' : form.errors.kecamatan }" autocomplete="off">
                                        </div>
                                        <div class="invalid-feedback mb-3" :class="{ 'd-block' : form.errors.kecamatan}">
                                            {{ form.errors.kecamatan }}
                                        </div>

                                        <div class="form-group">
                                            <label for="kelurahan" class="h4">Kelurahan</label>
                                            <input type="text" class="form-control" placeholder="Kelurahan" v-model="form.kelurahan" :class="{ 'is-invalid' : form.errors.kelurahan }" autocomplete="off">
                                        </div>
                                        <div class="invalid-feedback mb-3" :class="{ 'd-block' : form.errors.kelurahan}">
                                            {{ form.errors.kelurahan }}
                                        </div>

                                        <div class="form-group">
                                            <label for="detail" class="h4">Detail</label>
                                            <input type="text" class="form-control" placeholder="Detail" v-model="form.detail" :class="{ 'is-invalid' : form.errors.detail }" autocomplete="off">
                                        </div>
                                        <div class="invalid-feedback mb-3" :class="{ 'd-block' : form.errors.detail}">
                                            {{ form.errors.detail }}
                                        </div>

                                        <div class="form-group">
                                            <label for="namaPosko" class="h4">Nama Posko</label>
                                            <input type="text" class="form-control" placeholder="Nama Posko" v-model="form.namaPosko" :class="{ 'is-invalid' : form.errors.namaPosko }" autocomplete="off">
                                        </div>
                                        <div class="invalid-feedback mb-3" :class="{ 'd-block' : form.errors.namaPosko}">
                                            {{ form.errors.namaPosko }}
                                        </div>

                                        <!-- <div class="form-group">
                                            <label for="email" class="h4">Posko</label>
                                            <input type="email" class="form-control" placeholder="Posko" v-model="form.email" :class="{ 'is-invalid' : form.errors.email }" autocomplete="off">
                                        </div>
                                        <div class="invalid-feedback mb-3" :class="{ 'd-block' : form.errors.email}">
                                            {{ form.errors.email }}
                                        </div> -->

                                        <!-- <div class="form-group" v-if="editMode"> -->

                                        <!-- <div class="invalid-feedback" :class="{ 'd-block' : form.errors.roles}">
                                            {{ form.errors.roles }}
                                        </div> -->
                                    </div>

                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-danger text-uppercase" style="letter-spacing: 0.1em;" @click="closeModal">Batal</button>
                                        <button type="submit" class="btn btn-info text-uppercase" style="letter-spacing: 0.1em;" :disabled="!form.provinsi || !form.kota || !form.kecamatan || !form.kelurahan || !form.detail || !form.namaPosko || form.processing">{{ buttonTxt }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </admin-layout>
    </div>
</template>

<script>
    import AdminLayout from '@/Layouts/AdminLayout'
    import Pagination from '@/Components/Pagination'
    export default {
        props: ['roles', 'posko'],
        components: {
            AdminLayout,
            Pagination,
        },
        data() {
            return {
                editedIndex: -1,
                // editMode: false,
                form: this.$inertia.form({
                    id: '',
                    provinsi: '',
                    kota: '',
                    kecamatan: '',
                    kelurahan: '',
                    detail: '',
                    namaPosko:''
                }),
                // roleOptions: this.roles,
            }
        },
        computed: {
            formTitle() {
                return this.editedIndex === -1 ? 'Tambah Posko Baru' : 'Ubah Posko';
            },
            buttonTxt() {
                return this.editedIndex === -1 ? 'Tambah' : 'Ubah';
            },
            // checkMode() {
            //     return this.editMode === false ? this.createUser : this.editUser
            // }
            checkMode() {
                return this.editedIndex === -1 ? this.createPosko : this.editPosko
            }
        },
        methods: {
            addTag(newRole) {
                let tag = {
                    name: newRole,
                }
                this.roleOptions.push(tag)
                this.form.roles.push(tag)
            },
            editModal(poskos) {
                // this.editMode = true
                this.editedIndex = 1
                $('#modal-lg').modal('show')
                this.editedIndex = this.posko.data.indexOf(poskos)
                this.form.id = poskos.id
                this.form.provinsi = poskos.provinsi
                this.form.kota = poskos.kota
                this.form.kecamatan = poskos.kecamatan
                this.form.kelurahan = poskos.kelurahan
                this.form.detail = poskos.detail
                this.form.namaPosko = poskos.namaPosko
            },
            openModal() {
                this.editedIndex = -1
                $('#modal-lg').modal('show')
            },
            closeModal() {
                this.form.clearErrors()
                // this.editMode = false
                this.form.reset()
                $('#modal-lg').modal('hide')
            },
            createPosko() {
                this.form.post(this.route('admin.posko.store'), {
                    preserveScroll: true,
                    onSuccess:() => {
                        this.closeModal()
                        Toast.fire({
                            icon: 'success',
                            title: 'Posko berhasil ditambah!'
                        })
                    }
                })
            },
            editPosko() {
                this.form.patch(this.route('admin.posko.update', this.form.id, this.form), {
                    preserveScroll: true,
                    onSuccess:() => {
                        Toast.fire({
                            icon: 'success',
                            title: 'Posko berhasil diubah!'
                        })
                        this.closeModal()
                    }
                })
            },
            deletePosko(posko) {
                Swal.fire({
                    title: 'Apakah Kamu yakin?',
                    text: "Data kamu akan terhapus!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Iya, saya yakin!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.form.delete(this.route('admin.posko.destroy', posko.id), {
                            preserveScroll: true,
                            onSuccess: ()=> {
                                Swal.fire(
                                    'Terhapus!',
                                    'Posko sudah terhapus.',
                                    'success'
                                )
                            }
                        })
                    }
                })
            }
        }
    }
</script>
