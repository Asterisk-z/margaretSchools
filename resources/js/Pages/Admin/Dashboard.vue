<template>
    <Head>
        <title>Admin Dashboard</title>
    </Head>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                    <div class="card overflow-hidden bg-primary-gradient text-white">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total Students</h6>
                                    <h2 class="mb-0 number-font">44,278</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                    <div class="card overflow-hidden bg-secondary-gradient text-white " >
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total Course</h6>
                                    <h2 class="mb-0 number-font">67,987</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                    <div class="card overflow-hidden bg-azure text-white">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total Department</h6>
                                    <h2 class="mb-0 number-font">76,965</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                    <div class="card overflow-hidden bg-dark-gradient text-white">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total Dues</h6>
                                    <h2 class="mb-0 number-font">59,765</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-6">
                    <div class="card overflow-hidden bg-gray text-white">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total Acceptance Fee</h6>
                                    <h2 class="mb-0 number-font">59,765</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-6">
                    <div class="card overflow-hidden bg-warning-gradient text-white">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="mt-2">
                                    <h6 class="">Total School Fee</h6>
                                    <h2 class="mb-0 number-font">59,765</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import { Head, Link } from '@inertiajs/inertia-vue3';
import Layout from '~/Shared/Layout.vue';

export default {

    components: {
        Head,
        Link,
    },

    layout: Layout,

    data() {
        return {

        };
    },

    mounted() {

    },

    methods: {

    },

};
</script>
