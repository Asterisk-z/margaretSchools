<template>
    <Head>
        <title>Admit Student Management</title>
    </Head>
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card p-0">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-xl-5 col-lg-6 col-md-5 col-sm-6">
                                    <h3 class="mt-2">Student Management</h3>
                                </div>
                                <div class="col-xl-7 col-lg-6 col-md-7 col-sm-6">
                                    <div class="float-sm-end float-none my-1">
                                        <Link href="/admin/students-management" class="btn btn-success me-2"><i class="fa fa-arrow-left"></i> Back</Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="row mb-4">
                                    <label class="col-md-3 form-label">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-md-3 form-label">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-md-3 form-label">Price :</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="col-md-2 form-label">Session :</label>
                                    <div class="col-md-4">
                                        <select name="country" class="form-control form-select select2" data-bs-placeholder="Select Country">
                                                <option value="br">Electronics</option>
                                        </select>
                                    </div>
                                    <label class="col-md-2 form-label">Session :</label>
                                    <div class="col-md-4">
                                        <select name="country" class="form-control form-select select2" data-bs-placeholder="Select Country">
                                                <option value="br">Electronics</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <!--Row-->
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <a href="javascript:void(0)" class="btn btn-primary float-end">Admin Student</a>
                                </div>
                            </div>
                            <!--End Row-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Link, Head } from "@inertiajs/inertia-vue3";
import Layout from '~/Shared/Layout.vue';

export default {
    components: {
        Link,
        Head,
    },
    layout: Layout,
}
</script>
