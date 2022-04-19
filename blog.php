<?php require_once 'controller/db.php'; ?>
<th></th>
<!DOCTYPE html>
<html lang="en">
<?php require 'partials/head.php'; ?>
<body id="page-top">
	<!-- Navigation-->
	<?php require 'partials/sidebar.php'; ?>

	<section class="blog-posts grid-system">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">

					<div class="all-blog-posts">
						<div class="row">
							<h4>Our Blogs</h4>
							<?php 
							// if (isset($_GET['id'])) {
							// 	$id = $_GET['id'];

							$blog_sql = "SELECT * FROM blogs ORDER BY id";
							$blog_query = $conn->query($blog_sql);
							if ($blog_query->num_rows > 0) {
								while($blog = $blog_query->fetch_assoc()){

									?>

									<div class="col-lg-12">
										<div class="blog-post">
											<div class="blog-thumb">
												<img src="./admin/upload/<?php echo $blog['image']; ?>" alt="image" style="width: 50%; height: 50%;">
											</div>
											<div class="down-content">
												<span></span>
												<a href="post-detels.php?id=<?php echo $blog['id']; ?><?php echo $blog['title']; ?>"><h4>Donec tincidunt leo</h4></a>
												<ul class="post-info">
													<?php

													$sql = "SELECT * FROM users";
													$query = $conn->query($sql);
													if ($query->num_rows > 0) {
														while ($row = $query->fetch_assoc()) {
															?>
															<li>Post By -> <?php echo  $row['username'] ?></li>
															<?php
														}
													}
													?>
													<li><?php
													date_default_timezone_set("Asia/Dhaka");
													echo $blog['created_at']; ?></li>

												</ul>
												<h3 class="title mb-2"><a href="post-details.php?id=<?php echo $blog['id']; ?>" style="font-size: 14px; color: black;"><?php echo mb_strimwidth($blog['blog'], 0, 50, "..."); ?></a></h3>
												<div class="intro"><?php echo mb_strimwidth($blog['blog'], 0, 350, "..."); ?><a class="font-size:5px" href='post-details.php?id=<?php echo $blog['id']; ?>'>Read more</a>
												</div>
											</div>
										</div>

										<?php

									}
								}else{
									?>
									<h4 style="color: red;">No Blog In This Website</h4>
									<?php  
								}
								


								?>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<script src="js/bootstrap.min.js"></script>
		<!-- Core theme JS-->
		<script src="js/scripts.js"></script>
	</body>
	</html>
