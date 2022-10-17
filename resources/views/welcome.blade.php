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

 <!--dishes section begins-->
<section class="dishes" id="models">

	<h3 class="sub-heading">our models</h3>
	<h1 class="heading">popular models</h1>

    <div  class="flex-container">
        <div class="row">

            {{-- @foreach ($model_index as $model)
               <a href="{{ url('individual',$model->id)}}"> <div class="image">
                  <img src="imagemodels/photos/{{$model->photo}}" class="img-responsive" alt="img">
                    <div class="description">
                        <span>
                            <h3 style="font-size:20px !Important">{{$model->fullname}}</h3>
                        </span>

                        <h4 style="font-size:13px !Important">{{$model->category}}</h4>
                        </div>
                    </div>
               </a>
            @endforeach --}}




        </div>
    </div>



</section>

 <!--dishes section ends-->

  <!--about section starts-->
<section class="about" id="about">

	<h3 class="sub-heading">about us</h3>
	<h1 class="heading">why choose us</h1>

	<div class="row">

		<div class="image">
			<img style="border-radius: 5px;" src="{{asset('images/model1.jpg')}}" alt="image">
		</div>

			<div class="content">
				<h3>Best modeling agency in the city</h3>
				<p>Here at Manyatta we identify talents, nurture them with the best skills interms of fashion, modeling and life skills in general. we work and develop our models from scratch to sky </p>
				<p>we're so determined with our team to achieve the great from this fiels. welcome all </p>

			  <div class="icons-container">

				<div class="icons">
					<i class=""></i>
					<a href="{{ url('models')}}"><span>View Models</span></a>
				</div>


			 </div>
		  </div>
	</div>
</section>
 <!--about section ends-->

<!--order section starts-->
<section  class="order" id="contact_us">
    <h3 class="sub-heading">Contact us</h3>
    <h1 class="heading">contact us today to get intouch with our models</h1>

    <form action="{{url('contact_form')}}" method="post">
        @csrf
       <div class="inputBox">
        <div class="input">
            <span>name</span>
            <input type="text" name="name" required placeholder="Enter your name" >
        </div>
        <div class="input">
            <span>phone number</span>
            <input type="number" name="phone" required placeholder="Enter your phone number" >
        </div>
        <div class="input">
            <span>address(location) </span>
            <input type="text"name="address" required placeholder="Enter your address" >
        </div>
        <div class="input">
            <span>subject</span>
            <select  name="subject">
                <option value="">--select option--</option>
                <option value="Query">Query</option>
                <option value="Problem Applying">Problem Applying</option>
                <option value="other">Other option...</option>
            </select>
        </div>


        <div class="input">
            <span>your message</span>
            <textarea name="message" required placeholder="enter your message" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="input">
            <span>Comments(Extra comments)</span>
            <textarea name="comments" required placeholder="enter your comments" id="" cols="30" rows="10"></textarea>
        </div>
      </div>
      <input type="submit" value="Submit"  name="contact-submit" class="btn">

    </form>
</section>
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
