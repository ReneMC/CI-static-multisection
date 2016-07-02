<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>
<style>
	body,
	html {
		padding: 0;
		margin: 0;
		width: 100%;
		height: 100%;
		overflow: hidden;
		background-color: #212121;
		font-family: 'Montserrat', sans-serif;
		color: #fff
	}

	html {
		background: url('https://static.pexels.com/photos/818/sea-sunny-beach-holiday.jpg');
		background-size: cover;
		background-position: bottom
	}

	.error {
		text-align: center;
		padding: 16px;
		position: relative;
		top: 50%;
		transform: translateY(-50%);
		-webkit-transform: translateY(-50%)
	}

	h1 {
		margin: -10px 0 -30px;
		font-size: calc(17vw + 40px);
		opacity: .8;
		letter-spacing: -17px;
	}

	p {
		opacity: .8;
		font-size: 20px;
		margin: 8px 0 38px 0;
		font-weight: bold
	}

	input,
	button,
	input:focus,
	button:focus {
		border: 0;
		outline: 0!important;
	}

	input {
		width: 300px;
		padding: 14px;
		max-width: calc(100% - 80px);
		border-radius: 6px 0 0 6px;
		font-weight: 400;
		font-family: 'Montserrat', sans-serif;
	}

	.srchBtn {
		border: 0;
		border-radius: 7px;
		padding: 0 17px;
		background: #e74c3c;
		width: 160px;
		border-bottom: 5px solid #c0392b;
		color: #fff;
		height: 65px;
		font-size: 1.5rem;
		cursor: pointer;
	}

	.fa-arrow-left {
		position: fixed;
		top: 30px;
		left: 30px;
		font-size: 2em;
		color:white;
		text-decoration:none
	}
</style>
	</head>

<a href="" class="fa fa-arrow-left"></a>
<div class="error">
	<h1>404</h1>
	<p><?php echo $heading . $message; ?></p>
	<button class="srchBtn" onclick="window.location.href='http://dolly.thechickenchaser.com/'">Go home</button>
</div>

