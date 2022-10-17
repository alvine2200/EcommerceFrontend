 <!--header starts-->

	<header>

		<a href="{{url('/')}}"><p class="logo" style="color: #EB5C27;">AMAZE<span  style="color:black !important">AFRICA</span></p></a>

		<nav class="navbar">
			<a class="active" href="#">home</a>
			<a href="#">blog</a>
			<a href="#">shop</a>
			<a href="#">contact us</a>            
		</nav>

        {{-- <div class="icons">
			<i class="fas fa-cart" id="menu-bars"></i>
			<i class="fas fa-search" id="search-icon"></i>
            <i class="fas fa-user" id="login"></i>
		</div> --}}

        @if (Session::has('success'))
            <div style="color:green;" class="sucess">
                {{Session::get('success')}}
            </div>
        @endif
        <?php Session::forget('success'); ?>

        <span class="error">
            @if ($errors->any())
            <div style="margin-left:50px; font-size:16px; color:red;"  class="alert alert-danger">

                    @foreach ($errors->all() as $message)
                        <span style="color:red">{{ $message }}, Not submitted</span>
                    @endforeach

            </div>
           @endif
       </span>
       <?php Session::forget('errors'); ?>

	    <div class="icons">
			<i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-cart-plus" id="cart-icon"></i> 
			<i class="fas fa-search" id="search-icon"></i> 
            <i class="fas fa-user" id="user-icon"></i> 
		</div>

	</header>
 <!--header ends-->

    <!--search form starts-->
    <form action="" method="post" id="search-form">
        <input type="search" placeholder="search here..." id="search-box" name="">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>
    <!--search form ends-->



