<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>E-Canteen <span class="text-sm">by Tavas Solutions</span></h1>
    {{-- <img src="{{asset('assets/home_1/img/logo.png')}}" alt="Logo"> --}}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                {{-- <a href="/" class="nav-item nav-link active">Home</a> --}}
                {{-- <a href="{{ route('about_us') }}" class="nav-item nav-link">About</a> --}}
                {{-- <a href="service.html" class="nav-item nav-link">Service</a> --}}
                {{-- <a href="menu.html" class="nav-item nav-link">Menu</a> --}}
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="booking.html" class="dropdown-item">Booking</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    </div>
                </div> --}}
                {{-- <a href="contact.html" class="nav-item nav-link">Contact</a> --}}
                {{-- <a href="/login" class="nav-item nav-link">Login</a> --}}
            </div>
            {{-- <a href="/register" class="btn btn-primary py-2 px-4">Register</a> --}}
        </div>
    </nav>

    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 text-white animated slideInLeft">Welcome to a digital<br> E-Canteen experience</h1>
                    {{-- <p class="text-white animated slideInLeft mb-4 pb-2">Tempor erat elitr rebum at clita. Diam
                        dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed
                        stet lorem sit clita duo justo magna dolore erat amet</p> --}}
                        <select class="form-control col-6 mb-2" id="branch" name="branch" onchange="setsite()">
                            <option value="">Select Your Branch</option>
                            <option value="kolhapur">PIS Kolhapur</option>
                            <option value="sangali">PIS Sangli</option>
                        </select>
                    <a id="login" href="" class="btn btn-sm btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Login</a>
                    <a id="register" href="" class="btn btn-sm btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Register</a>
                </div>
                <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                    <img class="img-fluid " src="{{ asset('assets/home_1/img/dish1.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function setsite()
{
    var a = document.getElementById('login');
    var b = document.getElementById('register');
    let branch = document.getElementById('branch').value;
    console.log(branch);
    switch (branch) {
        case "kolhapur":
            a.href = "https://dev.tavassolutions.com/login";
            b.href = "https://dev.tavassolutions.com/register";

            break;
            case "sangali":

                a.href = "https://tavassolutions.com/login";
                b.href = "https://tavassolutions.com/register";
            break;

        default:
            alert("Select Your Branch");
            break;
    }
}
</script>
