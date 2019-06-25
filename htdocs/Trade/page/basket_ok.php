<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>쇼핑몰 장바구니 예제</title>
<link rel="stylesheet" type="text/css" href="/css/common.css" />
</head>
<body>
	<?php
		$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
		$sql = mq("select * from slist where idx='".$bno."'"); /* 받아온 idx값을 선택 */
		$shopinfo = $sql->fetch_array();

		$ba_pic = $shopinfo['pro_pic'];
		$ba_name = $shopinfo['pro_name'];
		$ba_price = $shopinfo['price'];

		$sql2 = mq("insert into basket(pro_pic,pro_name,price,date) values('".$ba_pic."','".$ba_name."','".$ba_price."',now())");
		echo "<script>alert('장바구니 등록되어습니다.');</script>";

	?>
	<div id="bg1"></div>
	<div id="main_in">
		<div id="menu">
			<div id="logo"><a href="/"><img src="/shop.png" alt="shop_icon" title="shop_icon"/></a></div>
				<form action="/shop/search.php" method="post">
					<div id="search_ser">
						<ul>
							<li><input type="text" placeholder="상품검색" size="50" id="ser" /></li>
							<li><button id="se_br"><img src="/search.png"></button></li>
						</ul>
					</div>
				</form>
			</div>	
				<div id="content">
					<h2>장바구니</h2>
					 <table class="list-table">
				      <thead>
				          <tr>
				              <th width="350">상품정보</th>
				              <th width="120">상품금액</th>
				              <th width="150">판매자명</th>
				              <th width="100">등록일</th>
				           </tr>
				        </thead>
				        <?php 
				        	$sql3 = mq("select * from basket order by idx desc");
							while($bask = $sql3->fetch_array()){
						?>
				        <tbody>
				        <tr>
				          <td width="300">
				          	<div class="bak_item">
							<div class="pro_img"><img src="/shop/<?php echo $bask['pro_pic'];?>.jpg" alt="propic" title="propic" /></div>
							<div class="pro_nt"><?php echo $bask['pro_name'];?></div>
						</div>
				          </td>
				          <td width="150"><?php echo $bask['price'];?></td>
				          <td width="150">SWR쇼핑</td>
				          <td width="100"><?php echo $bask['date']; ?></td>
				        </tr>
				      </tbody>
				  <?php } ?>
				    </table>
								</div>
							</div>
	<footer></footer>
</body>
</html>