<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chi tiết sản phẩm</title>
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
				<form action="" method="" class="form-search" />
					<input type="text" class="form-control input-search" placeholder="Tìm kiếm sản phẩm bạn mong muôn">
					<button type="submit" class="btn btn-default search-btn glyphicon glyphicon-search"></button>
				</form>
			</div>
		</div>
	</div>
	<!-- !end_header -->
	<div class="container chitietsp">
		<h1>Con chó nhỏ mang giỏ hoa hồng</h1>
		<p>Tác giả: <span>Nguyễn Nhật Ánh</span></p>
		<div class="contentrating contentrating-chitietsp"> 
			<i class="fa fa-star " aria-hidden="true"></i> 
			<i class="fa fa-star " aria-hidden="true"></i>
			<i class="fa fa-star " aria-hidden="true"></i>
			<i class="fa fa-star " aria-hidden="true"></i> 
			<i class="fa fa-star " aria-hidden="true"></i>
	 	</div>	
	 	<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
			<!-- Indicators -->
			<ol class="carousel-indicators next-img-chitietsp">
				<li data-target="#myCarousel" data-slide-to="0" class="active"><img src="images/sanpham.jpg" alt="img"></li>
				<li data-target="#myCarousel" data-slide-to="1"><img src="images/sanpham.jpg" alt="img"></li>
				<li data-target="#myCarousel" data-slide-to="2"><img src="images/sanpham.jpg" alt="img"></li>
				<li data-target="#myCarousel" data-slide-to="3"><img src="images/sanpham.jpg" alt="img"></li>
				<li data-target="#myCarousel" data-slide-to="4"><img src="images/sanpham.jpg" alt="img"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner slide-chitietsp">
				<div class="item active">
					<img src="images/anhsp.jpg" alt="Los Angeles">
				</div>

				<div class="item">
					<img src="images/anhsp1.jpg" alt="Chicago">
				</div>

				<div class="item">
					<img src="images/anhsp2.jpg" alt="New York">
				</div>
			</div>
		</div>
		<p class="price-chitiet">95.000đ <span><strike>150.000đ</strike></span></p>	
		<p class="traphi">Tra phí vận chuyển <span class="glyphicon glyphicon-option-horizontal" onclick="openNav()"></span></p>
			<div id="mySidenav" class="sidenav">
				<div class="col-xs-12 col-title-traphi">
					<span class="glyphicon glyphicon-menu-left icon_right" onclick="closeNav()"></span>
					<span>Tra phí vận chuyển</span>
				</div>
				 <div class="col-xs-12 box-traphi-vanchuyen">
				 	<p>Tra phí vận chuyển từ <span>Hà Nội</span> đến</p>
				 	<p>Khối lượng vận chuyển <span>150g</span></p>
				 	<div class="col-xs-6">
				 		<select class="form-control">
				 			<option>Hà Nội</option>
				 			<option>TPhcm</option>
				 			<option>Hà Nội</option>
				 			<option>Hà Nội</option>
				 		</select>
				 	</div>
				 	<div class="col-xs-6">
				 		<select class="form-control">
				 			<option>Hà Nội</option>
				 			<option>TPhcm</option>
				 			<option>Hà Nội</option>
				 			<option>Hà Nội</option>
				 		</select>				 		
				 	</div>
				 	<p>chọn dịch vụ vận chuyển</p>
					<div class="col-xs-12 traphi-vanchuyen">
						<p>Giao hàng tiết kiệm</p>
						<p><i>phí vận chuyển 18.000đ - phí thu hộ 0đ</i></p>
						<p><i>Tổng phí <span>18.000đ</span></i></p>
						<p>Thời gian giao hàng dự kiến qua ngày</p>
					</div>				 	
					<p><i>* Thời gian giao hàng phụ thuộc vào thời gian hàng xử lý đơn, có thể chậm hơn thông báo 24h</i></p>
				 </div>				 							 
			</div>		
		<div class="col-xs-12 traphi-thongtin">
			<p>Giao hàng tiết kiệm</p>
			<p><i>phí vận chuyển 18.000đ - phí thu hộ 0đ</i></p>
			<p><i>Tổng phí <span>18.000đ</span></i></p>
			<p>Thời gian giao hàng dự kiến qua ngày</p>
			<p><i>* Thời gian giao hàng phụ thuộc vào thời gian hàng xử lý đơn, có thể chậm hơn thông báo 24h</i></p>
		</div>
</div>
	<!-- !end_chitietsp	 -->
	<div class="container name-gianhang">
		<p>Gianh hàng</p>
		<a href="#">Siêu thị sách Amall</a>
		<div class="contentrating contentrating-chitietsp"> 
			<i class="fa fa-star " aria-hidden="true"></i> 
			<i class="fa fa-star " aria-hidden="true"></i>
			<i class="fa fa-star " aria-hidden="true"></i>
			<i class="fa fa-star " aria-hidden="true"></i> 
			<i class="fa fa-star " aria-hidden="true"></i>
	 	</div>	
	</div>
	<!-- !end_têngianhang -->
	<div class="container gianhangkhac">
		<h2>Giá sản phẩm từ các gian hàng khác</h2>
		<p>160.000đ</p>
		<p><a href="#" class="name-another">demo</a><a href="#" class="add-giohang">thêm vào giỏ hàng</a></p>
		<div class="contentrating contentrating-chitietsp"> 
			<i class="fa fa-star " aria-hidden="true"></i> 
			<i class="fa fa-star " aria-hidden="true"></i>
			<i class="fa fa-star " aria-hidden="true"></i>
			<i class="fa fa-star " aria-hidden="true"></i> 
			<i class="fa fa-star " aria-hidden="true"></i>
	 	</div>	
	</div>
	<!-- !end_sanphamgianhangkhac -->
	<div class="container thongtin-chitietsp">
		<div class="col-xs-12 mota-sp">
			<h2>Mô tả sản phẩm</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, asperiores, deleniti veniam aspernatur voluptatem labore accusamus voluptate, dolore aliquid corrupti ipsam voluptatum sit iusto qui! Cum fugit sequi debitis, vero tempora aut cumque voluptatem odio rem hic inventore fuga nostrum. Harum sapiente atque voluptatibus ea. Dolores laboriosam explicabo nostrum repudiandae!</p>
		</div>
		<div class="col-xs-12 thongtin-sp">
			<table class="table table-bordered">
				<tr>
					<td>Loại sách</td>
					<td>Tình yêu, hôn nhân, gia đình</td>
				</tr>
				<tr>
					<td>Tác giả</td>
					<td>Nguyễn nhật ánh</td>
				</tr>
				<tr>
					<td>Số trang</td>
					<td>260</td>
				</tr>
				<tr>
					<td>Kích cỡ</td>
					<td>13x20cm</td>
				</tr>
				<tr>
					<td>Nhà xuất bản</td>
					<td>trẻ</td>
				</tr>
				<tr>
					<td>Tìm theo vần</td>
					<td>c</td>
				</tr>
				<tr>
					<td>Hình thức bìa</td>
					<td>mềm</td>
				</tr>
				<tr>
					<td>Khối lượng</td>
					<td>100</td>
				</tr>
			</table>
		</div>
		<div class="col-xs-12 danhgiasanpham">
			<h2>Đánh giá sản phẩm</h2>
			<div class="dgsao"> 
					<div class=" col-xs-6 dgtb">
					 	 <p class="diem">5</p>
					</div>
					<div class="col-xs-6 progsess-pr">
					 	<span class="top">5  <span class="glyphicon glyphicon-star"></span></span> 
						<div class="progress">
						 	 <div class="progress-bar progress-bg" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="2" style="width: 100%"> 2 </div>
						</div>
						 	 <span class="top">4 <span class="glyphicon glyphicon-star"></span>	</span>
						<div class="progress">
							<div class="progress-bar progress-bg" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="2" style="width: 0%"> 0 </div>
						</div>
						  	<span class="top">3 <span class="glyphicon glyphicon-star"></span>	</span>
						<div class="progress">
						   <div class="progress-bar progress-bg" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="2" style="width: 0%"> 0 </div>
						</div>
						 	<span class="top">2  <span class="glyphicon glyphicon-star"></span>	</span>
						<div class="progress"> 
							<div class="progress-bar progress-bg" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="2" style="width: 0%"> 0 </div>
						</div> 
							<span class="top">1  <span class="glyphicon glyphicon-star"></span>	</span>
						<div class="progress"> 
							<div class="progress-bar progress-bg" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="2" style="width: 0%"> 0 </div>
					 	</div>
					</div> 
			</div>
		</div>
		<div class="col-xs-12 comment">
			<div class="cm">
				<h4><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span>người dùng ẩn danh</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione fugiat repellendus magnam et sit sed culpa veniam deserunt velit facilis!</p>
			</div>
			<div class="cm">
				<h4><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span>người dùng ẩn danh</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione fugiat repellendus magnam et sit sed culpa veniam deserunt velit facilis!</p>
			</div>			
		</div>
	</div>
	<!-- !end_thongtinchitietsp -->
	<div class="container-fluid list-sanpham list-sanpham-gianhang">
		<div class="col-xs-12 col-title col-title-gianhang">
			<h1 class="title-gianhang">Sản phẩm cùng gian hàng khác</h1>
		</div>
		<div class=" col-sanpham1">
			<div class=" sanpham1 sanpham-gianhang">
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
			<div class="sanpham1 sanpham-gianhang">
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
			<div class=" sanpham1 sanpham-gianhang">
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
			<div class=" sanpham1 sanpham-gianhang">
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
		</div>
	</div>
	<!-- !end_sanphamcunggianhang		 -->
	<div class="container-fluid list-sanpham list-sanpham-gianhang">
		<div class="col-xs-12 col-title col-title-gianhang">
			<h1 class="title-gianhang">Sản phẩm cùng tác giả khác</h1>
		</div>
		<div class=" col-sanpham1">
			<div class=" sanpham1 sanpham-gianhang">
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
			<div class="sanpham1 sanpham-gianhang">
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
			<div class=" sanpham1 sanpham-gianhang">
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
			<div class=" sanpham1 sanpham-gianhang">
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
		</div>
	</div>
	<!-- !end_sanphamcungtacgia		 -->
	<div class="container-fluid list-sanpham list-sanpham-gianhang">
		<div class="col-xs-12 col-title col-title-gianhang">
			<h1 class="title-gianhang">Sản phẩm xem gần đây</h1>
		</div>
		<div class=" col-sanpham1">
			<div class=" sanpham1 sanpham-gianhang">
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
			<div class="sanpham1 sanpham-gianhang">
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
			<div class=" sanpham1 sanpham-gianhang">
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
			<div class=" sanpham1 sanpham-gianhang">
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
		</div>
	</div>
	<!-- !end_sanphamxemganday		 -->
	<div class="container-fluid list-sanpham list-sanpham-gianhang">
		<div class="col-xs-12 col-title col-title-gianhang">
			<h1 class="title-gianhang">Sản phẩm tương tự</h1>
		</div>
		<div class=" col-sanpham1">
			<div class=" sanpham1 sanpham-gianhang">
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
			<div class="sanpham1 sanpham-gianhang">
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
			<div class=" sanpham1 sanpham-gianhang">
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
			<div class=" sanpham1 sanpham-gianhang">
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
		</div>
	</div>
	<!-- !end_sanphamtuongtu		 -->	
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
	<!-- !end-footer -->	
	<script>
		function openNav() {
		    document.getElementById("mySidenav").style.width = "100%";
		}

		function closeNav() {
		    document.getElementById("mySidenav").style.width = "0";
		}		
	</script>		
</body>
</html>