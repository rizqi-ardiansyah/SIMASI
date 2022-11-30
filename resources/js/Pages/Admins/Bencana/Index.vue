<template>
    <div>
        <admin-layout>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Bencana</h3>
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
                                                <th class="text-capitalize">Nama</th>
                                                <th class="text-capitalize">Tanggal </th>
                                                <th class="text-capitalize">Waktu </th>
                                                <th class="text-capitalize">Lokasi</th>
                                                <!-- <th class="text-capitalize">Cuaca</th> -->
                                                <th class="text-capitalize">Korban</th>
                                                <th class="text-capitalize">Kerusakan</th>
                                                <!-- <th class="text-capitalize">Dimensi</th> -->
                                                <!-- <th class="text-capitalize">Bencana</th> -->
                                                <th class="text-capitalize">Posko</th>
                                                <th class="text-capitalize text-right" v-if="$page.props.auth.hasRole.admin">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(bencanas, index) in bencana.data" :key="index">
                                                <td class="text-capitalize">{{ bencanas.nama }}</td>
                                                <td>{{ bencanas.tanggal }}</td>
                                                <td>{{ bencanas.waktu }}</td>
                                                <td>{{ bencanas.lokasi }}</td>
                                                <td>{{ bencanas.korban }}</td>
                                                <td>{{ bencanas.kerusakan }}</td>
                                                <td>{{ bencanas.namaPosko }}</td>

                                                <!-- <td>{{ admin.roles }}</td> -->
                                                <!-- <td>{{ admin.created_at }}</td> -->
                                                <!-- <td>
                                                    <template v-for="role in admin.roles" :key="role.id" >
                                                        {{ role.name }}
                                                    </template>
                                                </td>
                                                <td>Malang 1</td> -->
                                                <td class="text-right" v-if="$page.props.auth.hasRole.admin">
                                                    <button class="btn btn-success text-uppercase" style="letter-spacing: 0.1em;" @click="editModal(bencanas)">Ubah</button>
                                                    <button class="btn btn-danger text-uppercase ml-1" style="letter-spacing: 0.1em;" @click="deleteBencana(bencanas)">Hapus</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer clearfix">
                                    <pagination :links="bencana.links"></pagination>
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
                                            <input type="hidden" class="form-control" placeholder="id" v-model="form.id" :class="{ 'is-invalid' : form.errors.id }" autofocus="autofocus" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama" class="h4">Nama</label>
                                            <input type="text" class="form-control" placeholder="Nama" v-model="form.nama" :class="{ 'is-invalid' : form.errors.nama }" autofocus="autofocus" autocomplete="off">
                                        </div>
                                        <div class="invalid-feedback mb-3" :class="{ 'd-block' : form.errors.nama}">
                                            {{ form.errors.nama }}
                                        </div>

                                        <div class="form-group">
                                            <label for="tanggal" class="h4">Tanggal</label>
                                            <input type="date" class="form-control" placeholder="Tanggal" v-model="form.tanggal" :class="{ 'is-invalid' : form.errors.tanggal }" autofocus="autofocus" autocomplete="off">
                                        </div>
                                        <div class="invalid-feedback mb-3" :class="{ 'd-block' : form.errors.tanggal}">
                                            {{ form.errors.tanggal }}
                                        </div>

                                        <div class="form-group">
                                            <label for="waktu" class="h4">Waktu</label>
                                            <input type="time" class="form-control" placeholder="Waktu" v-model="form.waktu" :class="{ 'is-invalid' : form.errors.waktu }" autofocus="autofocus" autocomplete="off">
                                        </div>
                                        <div class="invalid-feedback mb-3" :class="{ 'd-block' : form.errors.waktu}">
                                            {{ form.errors.waktu }}
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="lokasi" class="h4">Lokasi</label>
                                            <input type="text" class="form-control" placeholder="Lokasi" v-model="form.lokasi" :class="{ 'is-invalid' : form.errors.lokasi }" autofocus="autofocus" autocomplete="off">
                                        </div>
                                        <div class="invalid-feedback mb-3" :class="{ 'd-block' : form.errors.lokasi}">
                                            {{ form.errors.lokasi }}
                                        </div>

                                        <div class="form-group">
                                            <label for="korban" class="h4">Korban</label>
                                            <input type="number" class="form-control" placeholder="Korban" v-model="form.korban" :class="{ 'is-invalid' : form.errors.korban }" autocomplete="off">
                                        </div>
                                        <div class="invalid-feedback mb-3" :class="{ 'd-block' : form.errors.email}">
                                            {{ form.errors.korban }}
                                        </div>

                                        <div class="form-group">
                                            <label for="kerusakan" class="h4">Kerusakan</label>
                                            <input type="text" class="form-control" placeholder="Kerusakan" v-model="form.kerusakan" :class="{ 'is-invalid' : form.errors.kerusakan }" autocomplete="off">
                                        </div>
                                        <div class="invalid-feedback mb-3" :class="{ 'd-block' : form.errors.kerusakan}">
                                            {{ form.errors.kerusakan }}
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" placeholder="id" v-model="form.posko_id" :class="{ 'is-invalid' : form.errors.posko_id }" autofocus="autofocus" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label for="posko" class="h4">Posko</label>
                                            <select class="form-control" v-model="form.posko">
                                                <option selected disabled value="">
                                                    Pilih posko
                                                </option>
                                                <option v-for="(poskos, index) in posko.data" :key="index"
                                                    v-bind:value="poskos.namaPosko">
                                                    {{ poskos.namaPosko }}
                                                    <!-- {{ user.name }} = {{ user.spesialis }} -->
                                                </option>
                                            </select>
                                       
                                        </div>
                                  
                                    </div>

                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-danger text-uppercase" style="letter-spacing: 0.1em;" @click="closeModal">Batal</button>
                                        <button type="submit" class="btn btn-info text-uppercase" style="letter-spacing: 0.1em;" :disabled="!form.nama || !form.tanggal || !form.waktu || !form.lokasi || form.processing">{{ buttonTxt }}</button>
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
        props: ['roles', 'users', 'bencana', 'posko'],
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
                    nama: '',
                    tanggal: '',
                    waktu: '',
                    lokasi: '',
                    korban: '',
                    kerusakan: '',
                    posko: ''

                }),
                // roleOptions: this.roles,
            }
        },
        computed: {
            formTitle() {
                return this.editedIndex === -1 ? 'Tambah Bencana Baru' : 'Ubah Bencana';
            },
            buttonTxt() {
                return this.editedIndex === -1 ? 'Tambah' : 'Ubah';
            },
            // checkMode() {
            //     return this.editMode === false ? this.createUser : this.editUser
            // }
            checkMode() {
                return this.editedIndex === -1 ? this.createBencana : this.editBencana
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
            editModal(bencanas) {
                // this.editMode = true
                this.editedIndex = 1
                $('#modal-lg').modal('show')
                this.editedIndex = this.bencana.data.indexOf(bencanas)
                this.form.id = bencanas.id
                this.form.nama = bencanas.nama
                this.form.tanggal = bencanas.tanggal
                this.form.waktu = bencanas.waktu
                this.form.lokasi = bencanas.lokasi
                this.form.korban = bencanas.korban
                this.form.kerusakan = bencanas.kerusakan
                this.form.posko = bencanas.namaPosko
                this.form.posko_id = bencanas.posko_id
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
            createBencana() {
                this.form.post(this.route('admin.bencana.store'), {
                    preserveScroll: true,
                    onSuccess:() => {
                        this.closeModal()
                        Toast.fire({
                            icon: 'success',
                            title: 'Bencana berhasil ditambahkan!'
                        })
                    }
                })
            },
            editBencana() {
                this.form.patch(this.route('admin.bencana.update', this.form.id, this.form), {
                    preserveScroll: true,
                    onSuccess:() => {
                        Toast.fire({
                            icon: 'success',
                            title: 'Bencana berhasil diubah!'
                        })
                        this.closeModal()
                    }
                })
            },
            deleteBencana(bencanas) {
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
                        this.form.delete(this.route('admin.bencana.destroy', bencanas), {
                            preserveScroll: true,
                            onSuccess: ()=> {
                                Swal.fire(
                                    'Terhapus!',
                                    'Bencana sudah terhapus.',
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
