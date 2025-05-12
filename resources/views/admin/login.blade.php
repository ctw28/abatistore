<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login - AbatiStore</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="AdminLTE 4 | Login Page" />
    <meta name="author" content="ColorlibHQ" />
    <meta name="description"
        content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS." />
    <meta name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard" />
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous" />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
        integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg=" crossorigin="anonymous" />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous" />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{ asset('adminlte/css/adminlte.css') }}">

    <script src="https://unpkg.com/vue@3.4.15/dist/vue.global.js"></script>
</head>

<body>
    <div id="app">
        <div class="login-page bg-body-secondary">
            <div class="login-box">
                <div class="card">
                    <div class="card-body login-card-body">
                        <img class="d-block mx-auto mb-2" src="{{ asset('logo.png') }}" width="50%" />
                        <p class="login-box-msg">Login dulu ya</p>
                        <form @submit.prevent="login" method="post">
                            <div class="input-group mb-3">
                                <input type="email" v-model="email" class="form-control" placeholder="Email" />
                                <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" v-model="password" class="form-control" placeholder="Password" />
                                <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                            </div>
                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-8">
                                    <p v-if="error" style="color:red;">@{{ error }}</p>

                                    <!-- <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                    <label class="form-check-label" for="flexCheckDefault"> Remember Me </label>
                                </div> -->
                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Sign In</button>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!--end::Row-->
                        </form>
                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>
        </div>

    </div>

    <script>
    const {
        createApp
    } = Vue

    createApp({
        data() {
            return {
                email: '',
                password: '',
                user: null
            }
        },
        methods: {
            async login() {
                const res = await fetch("{{route('login')}}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        email: this.email,
                        password: this.password
                    })
                })

                const data = await res.json()
                console.log(data.token);

                if (data.token) {
                    localStorage.setItem('jwt', data.token)
                    this.fetchMe()
                    window.location.href = '/dashboard'

                    // alert('suses')
                } else {
                    alert('Login gagal')
                }
            },
            async fetchMe() {
                const token = localStorage.getItem('jwt')
                const res = await fetch('/api/me', {
                    headers: {
                        'Authorization': 'Bearer ' + token
                    }
                })
                this.user = await res.json()
            }
        },
        mounted() {
            const token = localStorage.getItem('jwt');
            if (token) {
                fetch('/api/me', {
                        headers: {
                            'Authorization': 'Bearer ' + token
                        }
                    })
                    .then(res => {
                        if (!res.ok) throw new Error('Token tidak valid');
                        return res.json();
                    })
                    .then(user => {
                        // Sudah login, arahkan ke dashboard
                        window.location.href = '/dashboard';
                    })
                    .catch(() => {
                        // Token tidak valid, hapus dari localStorage
                        localStorage.removeItem('jwt');
                    });
            }
        }
    }).mount('#app')
    </script>
</body>

</html>