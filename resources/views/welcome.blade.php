<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Ecommerce</title>
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/home.css">    
    <style> 
           select{
            background: #eee;
            border-radius: .5rem;
            padding: 1rem;
            font-size: 1.6rem;
            color: var(--black);
            text-transform: none;
            margin-bottom: 1rem;
            width: 100%;
        }
        .inputBox{
            padding-top: 2rem;
        }
        iframe{
           width: 200px;
        }
    </style>
</head>
<body>
 <!--header starts-->
	@include('home.navbar');
 <!--header ends-->

 <<!--home section starts-->
<section class="home" id="home">
	<div class=" swiper mySwipper home-slider ">
		<div class="swiper-wrapper wrapper">
			<div class="swiper-slide slide">
				<div class="content">
					<span></span>
					<h3>True Beauty Can Radiate your uniqueness </h3>
					<p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. expedita aperiam, illum deserunt et eaque distinctio! <p>
					<a href="" class="btn"> Shop Now</a>    <a style="margin-left:10px" href="" class="btn">Learn More </a>
				</div>
				<div class="image">
					<img src="https://st.depositphotos.com/1001877/3814/i/600/depositphotos_38143799-stock-photo-e-commerce-shopping-cart-with.jpg" alt="image">
				</div>
			</div>
		</div>
		   <div class="swiper-pagination"></div>
	</div>
</section>
 <!--home section ends-->
@include('home.whychooseus')
{{-- end of why choose us  --}}

{{-- start of fetured section --}}
@include('home.fetaured')
{{-- end of featured section --}}

<!--footer section starts-->
 @include('home.footer');
<!--footer section ends-->


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if(session()->has('success'))
<script>
    swal("form submitted successfully","Done","success");
</script>
@endif

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<script src="{{asset('js/home.js')}}"></script>
</body>
</html>
