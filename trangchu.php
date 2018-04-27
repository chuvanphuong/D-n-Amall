<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Amall</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"><!-- dung cho dien thoai phóng to thu nhỏ màn hình -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- link icon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container header">
		<div class="row">
			<div class="col-xs-6 logo">
				<img src="images/logo.jpg" alt="img" />
			</div>
			<div class="col-xs-6 thongtinuser">
				<img src="images/gianhang.jpg" alt="img" />
				<img src="images/cart.png" alt="img" />
				<img src="images/user.png" alt="img" />
			</div>
			<div class="col-xs-12 search">
				<form action="" method="" class="form-search">
					<input type="text" class="form-control input-search" placeholder="Tìm kiếm sản phẩm bạn mong muôn">
					<button type="submit" class="btn btn-default search-btn glyphicon glyphicon-search"></button>
				</form>
			</div>
		</div>
	</div>
	<!-- !end_header -->
	<div class="container-fluid slide">
		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img src="images/slide.jpg" alt="Los Angeles">
				</div>

				<div class="item">
					<img src="images/slide.jpg" alt="Chicago">
				</div>

				<div class="item">
					<img src="images/slide.jpg" alt="New York">
				</div>
			</div>
		</div>
	</div>
	<!-- !end_slide -->
	<div class="container list-sanpham">
		<div class="col-xs-12 col-title">
			<h1>Mới khuyến mại</h1>
		</div>
		<div class="col-xs-12 col-sanpham">
			<div class="col-xs-6 sanpham">
				<a href="#"><img src="images/sanpham.jpg" alt="img" /></a>
				<p class="title-sanpham" title=" Khi lỗi thuộc về những vì sao " >
					<a href="#"> Khi lỗi thuộc về những vì sao</a>
				</p>
				<div class="contentrating"> 
					<i class="fa fa-star " aria-hidden="true"></i> 
					<i class="fa fa-star " aria-hidden="true"></i>
					<i class="fa fa-star " aria-hidden="true"></i>
					<i class="fa fa-star " aria-hidden="true"></i> 
					<i class="fa fa-star " aria-hidden="true"></i>
			 	</div>
			 	<p class="price">89.000đ</p>				
			</div>
			<div class="col-xs-6 sanpham">
				<a href="#"><img src="images/sanpham.jpg" alt="img" /></a>
				<p class="title-sanpham" title=" Khi lỗi thuộc về những vì sao " >
					<a href="#"> Khi lỗi thuộc về những vì sao </a>
				</p>
				<div class="contentrating"> 
					<i class="fa fa-star " aria-hidden="true"></i> 
					<i class="fa fa-star " aria-hidden="true"></i>
					<i class="fa fa-star " aria-hidden="true"></i>
					<i class="fa fa-star " aria-hidden="true"></i> 
					<i class="fa fa-star " aria-hidden="true"></i>
			 	</div>
			 	<p class="price">89.000đ</p>				
			</div>
			<div class="col-xs-6 sanpham">
				<a href="#"><img src="images/sanpham.jpg" alt="img" /></a>
				<p class="title-sanpham" title=" Khi lỗi thuộc về những vì sao " >
					<a href="#"> Khi lỗi thuộc về những vì sao</a>
				</p>
				<div class="contentrating"> 
					<i class="fa fa-star " aria-hidden="true"></i> 
					<i class="fa fa-star " aria-hidden="true"></i>
					<i class="fa fa-star " aria-hidden="true"></i>
					<i class="fa fa-star " aria-hidden="true"></i> 
					<i class="fa fa-star " aria-hidden="true"></i>
			 	</div>
			 	<p class="price">89.000đ</p>				
			</div>
			<div class="col-xs-6 sanpham">
				<a href="#"><img src="images/sanpham.jpg" alt="img" /></a>
				<p class="title-sanpham" title=" Khi lỗi thuộc về những vì sao " >
					<a href="#"> Khi lỗi thuộc về những vì sao </a>
				</p>
				<div class="contentrating"> 
					<i class="fa fa-star " aria-hidden="true"></i> 
					<i class="fa fa-star " aria-hidden="true"></i>
					<i class="fa fa-star " aria-hidden="true"></i>
					<i class="fa fa-star " aria-hidden="true"></i> 
					<i class="fa fa-star " aria-hidden="true"></i>
			 	</div>
			 	<p class="price">89.000đ</p>				
			</div>
			<div class="col-xs-12 col-sanpham">
			</div>			
			<div class="col-xs-12 view-more-sanpham">
				<p id="loadmore-new"  class="viewmore-sp load-on">Xem thêm <i class="fa fa-angle-double-down"></i></p>
			</div>
			
		</div>
	</div>
	<!-- !end_listsanpham -->
	<div class="container list-sanpham">
		<div class="col-xs-12 col-title">
			<h1>Sản phẩm mới</h1>
		</div>
		<div class="col-xs-12 col-sanpham">
			<div class="col-xs-6 sanpham">
				<a href="#"><img src="images/sanpham.jpg" alt="img" /></a>
				<p class="title-sanpham" title=" Khi lỗi thuộc về những vì sao " >
					<a href="#"> Khi lỗi thuộc về những vì sao</a>
				</p>
				<div class="contentrating"> 
					<i class="fa fa-star " aria-hidden="true"></i> 
					<i class="fa fa-star " aria-hidden="true"></i>
					<i class="fa fa-star " aria-hidden="true"></i>
					<i class="fa fa-star " aria-hidden="true"></i> 
					<i class="fa fa-star " aria-hidden="true"></i>
			 	</div>
			 	<p class="price">89.000đ</p>				
			</div>
			<div class="col-xs-6 sanpham">
				<a href="#"><img src="images/sanpham.jpg" alt="img" /></a>
				<p class="title-sanpham" title=" Khi lỗi thuộc về những vì sao " >
					<a href="#"> Khi lỗi thuộc về những vì sao </a>
				</p>
				<div class="contentrating"> 
					<i class="fa fa-star " aria-hidden="true"></i> 
					<i class="fa fa-star " aria-hidden="true"></i>
					<i class="fa fa-star " aria-hidden="true"></i>
					<i class="fa fa-star " aria-hidden="true"></i> 
					<i class="fa fa-star " aria-hidden="true"></i>
			 	</div>
			 	<p class="price">89.000đ</p>				
			</div>
			<div class="col-xs-6 sanpham">
				<a href="#"><img src="images/sanpham.jpg" alt="img" /></a>
				<p class="title-sanpham" title=" Khi lỗi thuộc về những vì sao " >
					<a href="#"> Khi lỗi thuộc về những vì sao</a>
				</p>
				<div class="contentrating"> 
					<i class="fa fa-star " aria-hidden="true"></i> 
					<i class="fa fa-star " aria-hidden="true"></i>
					<i class="fa fa-star " aria-hidden="true"></i>
					<i class="fa fa-star " aria-hidden="true"></i> 
					<i class="fa fa-star " aria-hidden="true"></i>
			 	</div>
			 	<p class="price">89.000đ</p>				
			</div>
			<div class="col-xs-6 sanpham">
				<a href="#"><img src="images/sanpham.jpg" alt="img" /></a>
				<p class="title-sanpham" title=" Khi lỗi thuộc về những vì sao " >
					<a href="#"> Khi lỗi thuộc về những vì sao </a>
				</p>
				<div class="contentrating"> 
					<i class="fa fa-star " aria-hidden="true"></i> 
					<i class="fa fa-star " aria-hidden="true"></i>
					<i class="fa fa-star " aria-hidden="true"></i>
					<i class="fa fa-star " aria-hidden="true"></i> 
					<i class="fa fa-star " aria-hidden="true"></i>
			 	</div>
			 	<p class="price">89.000đ</p>				
			</div>
				<div class="ccol-xs-12 col-sanpham">
				</div>	
			<div class="col-xs-12 view-more-sanpham">
				<p id="loadmore-new1" class=" viewmore-sp1 load-on">Xem thêm <i class="fa fa-angle-double-down"></i></p>
			</div>
			
		</div>
	</div>
	<!-- !end_listsanpham -->
	<div class="container-fluid footer">
		<div class="col-xs-12 col-footer">
			<p class="logo-footer"><img src="images/logo.jpg" alt=""></p>
			<p class="title-amall">Amall sàn thương mại điện tử</p>
			<p>Trực thuộc công ty cổ phần vật giá Việt Nam.</p>
			<p>102 Thái Thịnh, phường Trung Liệt, quận Đống Đa, Hà Nội</p>
			<p class="lienhe"><a href="#"><img src="images/hotline.jpg" alt="hotline">Hotline: 19002025</a><a href="#"><img src="images/email.jpg" alt="email">suport@vatgia.com</a></p>
			
		</div>
		<div class="col-xs-12 design">
			<p>@ 2018 Design by vatgia</p>
		</div>
	</div>
	<script>

		$('.viewmore-sp').click(function(){
			if($('#loadmore-new').hasClass('load-on')){
				$('.col-sanpham').eq(1).load('sanphamkhuyenmai.php');
				$('#loadmore-new').html('Thu gọn <i class="fa fa-angle-double-up"></i>');
				$('#loadmore-new').removeClass('load-on');	
			}
			else{
				$('.product-load').remove();
				$('#loadmore-new').addClass('load-on');
				$('#loadmore-new').html('Xem thêm <i class="fa fa-angle-double-down"></i>');	
			}
		});
		$('.viewmore-sp1').click(function(){
			if($('#loadmore-new1').hasClass('load-on')){
				$('.col-sanpham').last().load('sanphammoi.php');
				$('#loadmore-new1').html('Thu gọn <i class="fa fa-angle-double-up"></i>');
				$('#loadmore-new1').removeClass('load-on');	
			}
			else{
				$('.product-load').remove();
				$('#loadmore-new1').addClass('load-on');
				$('#loadmore-new1').html('Xem thêm <i class="fa fa-angle-double-down"></i>');	
			}
		});
	</script>	
</body>
</html>