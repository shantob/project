<th></th>
<!DOCTYPE html>
<html lang="en">
<?php require_once 'admin/partials/auth.php'; ?>
<?php require 'partials/head.php'; ?>
<body id="page-top">
	<!-- Navigation-->
	<?php require 'partials/sidebar.php'; ?>
	<!-- Page Content-->
	<div class="row">
		<div class="container p-5">
			<?php 
			if (isset($_GET['id'])) {
				$id = $_GET['id'];

				$blog_sql = "SELECT * FROM blogs WHERE id='$id'";
				$blog_query = $conn->query($blog_sql);
				if ($blog_query->num_rows > 0) {
					while($blog = $blog_query->fetch_assoc()){

						?>

						<div class="col-lg-12">
							<div class="blog-post">
								<div class="blog-thumb">
									<img src="./admin/upload/<?php echo $blog['image']; ?>" alt="image" style="width: 100%; height: 80vh;">
								</div>
								<div class="down-content">
									<span></span>
									<a href="post-detels.php?id<?php echo $blog['title']; ?>"><h4>Donec tincidunt leo</h4></a>
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
									<p><?php echo $blog['blog']; ?></p>
								</div>
							</div>
						</div>

						<?php

					}
				}
			}else{
				?>
				<div class="container mt-5">
					<span class="d-none d-lg-block">....No Blog is not match is in this same Category</span>
				</div>
				<?php 
			}

			?>
		</div>
	</div>


	<!-- Bootstrap core JS-->
	<script src="js/bootstrap.min.js"></script>
	<!-- Core theme JS-->
	<script src="js/scripts.js"></script>
</body>
</html>
