<?php get_header();
global $redux_demo;
?>
<section class="bg_city">

	<div class="main-info">
		<p><?php echo $redux_demo['sec_1_num_1']; ?></p>
		<h1><?php echo $redux_demo['sec_1_num_2']; ?></h1>
		<pre class="break cancel"><?php echo $redux_demo['sec_1_num_3']; ?></pre>
		<a href="#name" class="btn_connect no-line"><?php echo $redux_demo['red-button-1']; ?></a>
	</div>
</section>

<section class="container-fluid about-work">
	<div class="row">
		<p class="work-title m-auto"><?php echo $redux_demo['sec_2_num_1']; ?></p>
	</div>
	<div class="container">

		<div id="work-directions" class="work-directions work-nav row">

			<div id="work-direction" class="work-direction work-direction_active col-sm-12 col-md-4 col-lg-4 col-xl-4 align-middle" onclick="openWork(event, 'first')">
				<p class="text-center light"><?php echo $redux_demo['sec_2_num_2_1']; ?></p>
			</div>
			<div id="work-direction" class="work-direction col-sm-12 col-md-4 col-lg-4 col-xl-4" onclick="openWork(event, 'second')">
				<p class="text-center light"><?php echo $redux_demo['sec_2_num_3_1']; ?></p>
			</div>
			<div id="work-direction" class="work-direction col-sm-12 col-md-4 col-lg-4 col-xl-4" onclick="openWork(event, 'third')">
				<p class="text-center light"><?php echo $redux_demo['sec_2_num_4_1']; ?></p>
			</div>
		</div>

		<div id="work-directions" class="work-directions dropdown row">
			<button class="btn btn-info my-btn dropdown-toggle m-auto" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<?php echo $redux_demo['sec_2_num_1']; ?>
			</button>

			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<div id="work-direction" class="work-direction work-direction_active col-sm-12 col-md-4 col-lg-4 col-xl-4 align-middle" onclick="openWork(event, 'first')">
					<p class="text-center light"><?php echo $redux_demo['sec_2_num_2_1']; ?></p>
				</div>
				<div id="work-direction" class="work-direction col-sm-12 col-md-4 col-lg-4 col-xl-4" onclick="openWork(event, 'second')">
					<p class="text-center light"><?php echo $redux_demo['sec_2_num_3_1']; ?></p>
				</div>
				<div id="work-direction" class="work-direction col-sm-12 col-md-4 col-lg-4 col-xl-4" onclick="openWork(event, 'third')">
					<p class="text-center light"><?php echo $redux_demo['sec_2_num_4_1']; ?></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div id="first" class="description description_active">
				<div class="picture col-sm-12 col-md-4 col-lg-4 col-xl-4">
			        <img width="100%" height="100%" src="<?php echo $redux_demo['sec_2_num_2_2']['url']; ?>" >
                </div>
				<div class="col-sm-12 col-md-7 col-lg-7 col-xl-7 desc-margin">
					<?php echo $redux_demo['sec_2_num_2_3']; ?>
				</div>
			</div>
			<div id="second" class="description">
				<div class="picture col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <img width="100%" height="100%" src="<?php echo $redux_demo['sec_2_num_3_2']['url']; ?>" >
				</div>
				<div class="col-sm-12 col-md-7 col-lg-7 col-xl-7 desc-margin">
					<?php echo $redux_demo['sec_2_num_3_3']; ?>
				</div>
			</div>
			<div id="third" class="description">
				<div class="picture col-sm-12 col-md-4 col-lg-4 col-xl-4">
				    <img width="100%" height="100%" src="<?php echo $redux_demo['sec_2_num_4_2']['url']; ?>" >
				</div>
				<div class="col-sm-12 col-md-7 col-lg-7 col-xl-7 desc-margin">
					<?php echo $redux_demo['sec_2_num_4_3']; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid about-all-company p-0">
	<div class="about-company">
		<div class="col-3 m-auto line"></div>
		<div class="company-title m-auto text-center"><?php echo $redux_demo['sec_3_num_1']; ?></div>
		<div class="col-3 my-margin line"></div>
		<div class="row">
			<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 line-r text-center">
				<h3 class="title-about"><?php echo $redux_demo['sec_3_num_2']; ?></h3>
				<p class="text-justify p-4"><?php echo $redux_demo['sec_3_num_3']; ?></p>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 line-r text-center">
				<h3 class="title-about"><?php echo $redux_demo['sec_3_num_4']; ?></h3>
				<p class="text-justify p-4"><?php echo $redux_demo['sec_3_num_5']; ?></p>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
				<h3 class="title-about"><?php echo $redux_demo['sec_3_num_6']; ?></h3>
				<p class="text-justify p-4"><?php echo $redux_demo['sec_3_num_7']; ?></p>
			</div>
		</div>
	</div>
</section>

<section class="container-fluid about-work">

	<?php if( isset( $_GET['status'] ) && 'success' == $_GET['status'] ) : ?>
		<div class="alert success alert-dismissible fade show" role="alert">
			<span>Ваше повідомлення успішно відправлено.</span>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php endif ?>

	<?php if( isset( $_GET['status'] ) && 'error' == $_GET['status'] ) : ?>
		<div class="alert error alert-dismissible fade show" role="alert">
			<span>Заповніть, будь ласка, всі поля.</span>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php endif ?>

	<?php if( isset( $_GET['status'] ) && 'error-2' == $_GET['status'] ) : ?>
		<div class="alert error alert-dismissible fade show" role="alert">
			<span>Щось пішло не так...</span>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php endif ?>

    <div class="p-2">
        <p class="need-call text-center"><?php echo $redux_demo['sec_4_num_1']; ?></p>
        <p class="need-call-2 text-center"><?php echo $redux_demo['sec_4_num_2']; ?></p>
    </div>

	<form action="<?php echo get_stylesheet_directory_uri() ?>/send.php" method="POST">

		<div class="row">
			<div class="m-auto">
				<div class="wrap-input make-center">
					<input id="name" class="input" name="name" type="text" placeholder="Ім'я" required>
				</div>
				<div class="wrap-input make-center">
					<input id="phone" class="input" name="phone" type="tel" placeholder="Номер телефону" required>
				</div>
				<!--                <div class="wrap-input make-center">-->
				<!--                    <input id="phone" class="input" name="phone" type="tel" placeholder="Номер телефону" required>-->
				<!--                </div>-->
				<textarea name="comment1" class="spam-fil"></textarea>
				<textarea name="comment2" class="spam-fil"></textarea>
				<div class="wrap-input make-center">
					<button type="submit" class="btn_connect input">Замовити консультацію</button>
				</div>
			</div>
		</div>

	</form>
</section>

<?php get_footer() ?>
