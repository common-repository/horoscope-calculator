<?php

/*

Plugin name: Horoscope calculator
Description: By this plugin you will be able to calculate your horoscope.
Author: Md. Sarwar-A-Kawsar
Author URI: https://www.fiverr.com/sa_kawsar
Version: 1.0

*/

defined('ABSPATH') or die('You cannot access to this page');

function hor_cal_dataset( $datatype ){
	$date_set = array(
		'set1' => array(
			'start' => '2020-03-21',
			'end' => '2020-04-19',
		),
		'set2' => array(
			'start' => '2020-04-20',
			'end' => '2020-05-20',
		),
		'set3' => array(
			'start' => '2020-05-21',
			'end' => '2020-06-20',
		),
		'set4' => array(
			'start' => '2020-06-21',
			'end' => '2020-07-22',
		),
		'set5' => array(
			'start' => '2020-07-23',
			'end' => '2020-08-22',
		),
		'set6' => array(
			'start' => '2020-08-23',
			'end' => '2020-09-22',
		),
		'set7' => array(
			'start' => '2020-09-23',
			'end' => '2020-10-22',
		),
		'set8' => array(
			'start' => '2020-10-23',
			'end' => '2020-11-21',
		),
		'set9' => array(
			'start' => '2020-11-22',
			'end' => '2020-12-21',
		),
		'set10' => array(
			'start' => '2020-12-22',
			'end' => '2020-12-31',
		),
		'set10a' => array(
			'start' => '2020-01-01',
			'end' => '2020-01-19',
		),
		'set11' => array(
			'start' => '2020-01-20',
			'end' => '2020-02-18',
		),
		'set12' => array(
			'start' => '2020-02-19',
			'end' => '2020-03-20',
		),
	);

	$time_set = array(
		'set1' => array(
			'Sagittarius' => array('22:20','23:59'),
			'_Sagittarius' => array('00:00','00:48'),
			'Capricorn' => array('00:49','02:40'),
			'Aquarius' => array('02:41','04:00'),
			'Pisces' => array('04:01','05:05'),
			'Aries' => array('05:06','06:10'),
			'Taurus' => array('06:11','07:31'),
			'Gemini' => array('07:32','09:22'),
			'Cancer' => array('09:23','11:47'),
			'leo' => array('11:48','14:25'),
			'Virgo' => array('14:26','17:03'),
			'Libra' => array('17:04','19:41'),
			'Scorpio' => array('19:42','22:19'),
		),
		'set2' => array(
			'sagittarius' => array( '21:21', '23:59' ),
			'_sagittarius' => array( '00:00', '00:10' ),
			'capricon' => array( '00:11', '01:41' ),
			'aquarius' => array( '01:42', '03:01' ),	
			'pisces' => array( '03:02', '04:06' ),
			'aries' => array( '04:07', '05:11' ),	
			'taurus' => array( '05:12', '06:32' ),	
			'gemini' => array( '06:33', '08:23' ),	
			'Cancer' => array( '08:24','0:48' ),	
			'Leo' => array( '10:49', '13:26' ),
			'Virgo' => array( '13:27', '16:04' ),
			'Libra' => array( '16:05', '18:42' ),	
			'Scorpio' => array( '18:43', '21:20' ),
		),
		'set3' => array(
			'Aquarius' => array('23:36','23:59'),
			'_Aquarius' => array('00:00','00:59'),
			'Pisces' => array('01:00','02:04'),
			'Aries' => array('02:05','03:09'),
			'Taurus' => array('03:10','04:30'),
			'Gemini' => array('04:31','06:22'),
			'Cancer' => array('06:23','08:46'),
			'Leo' => array('08:47','11:25'),
			'Virgo' => array('11:26','14:02'),
			'Libra' => array('14:03','16:40'),
			'Scorpio' => array('16:41','19:18'),
			'Sagittarius' => array('19:19','21:43'),
			'Capricorn' => array('21:44','23:35'),
		),
		'set4' => array(
			'Pisces' => array( '22:58' , '23:59'),
			'_Pisces' => array( '00:00' , '00:06'),
			'Aries' => array( '00:07' , '01:11'),
			'Taurus' => array( '01:12' , '02:32'),
			'Gemini' => array( '02:33' , '04:24'),
			'Cancer' => array( '04:25' , '06:48'),
			'Leo' => array( '06:49' , '09:27'),
			'Virgo' => array( '09:28' , '12:04'),
			'Libra' => array( '12:05' , '14:42'),
			'Scorpio' => array( '14:43' , '17:20'),
			'Sagittarius' => array( '17:21' , '19:45'),
			'Capricorn' => array( '19:46' , '21:37'),
			'Aquarius' => array( '21:38' , '22:57'),
		),
		'set5' => array(
			'Taurus' => array( '23:06' , '23:59'),
			'_Taurus' => array( '00:00' , '00:30'),
			'Gemini' => array( '00:31' , '02:22'),
			'Cancer' => array( '02:23' , '04:47'),
			'Leo' => array( '04:48' , '07:25'),
			'Virgo' => array( '07:26' , '10:02'),
			'Libra' => array( '10:03' , '12:40'),
			'Scorpio' => array( '12:41' , '15:18'),
			'Sagittarius' => array( '15:19' , '17:43'),
			'Capricorn' => array( '17:44' , '19:35'),
			'Aquarius' => array( '19:36' , '20:55'),
			'Pisces' => array( '20:56' , '22:00'),
			'Aries' => array( '22:01' ,'23:05'),
		),
		'set6' => array(
			'Gemini' => array( '22:25' , '23:59'),
			'_Gemini' => array( '00:00' , '00:20'),
			'Cancer' => array( '00:21' , '02:45'),
			'leo' => array( '02:46' , '05:23'),
			'Virgo' => array( '05:24' , '08:00'),
			'Libra' => array( '08:01' , '10:38'),
			'Scorpio' => array( '10:39' , '13:16'),
			'Sagittarius' => array( '13:17' , '15:41'),
			'Capricorn' => array( '15:42' , '17:33'),
			'Aquarius' => array( '17:34' , '18:54'),
			'Pisces' => array( '18:55' , '19:59'),
			'Aries' => array( '20:00' , '21:04'),
			'Taurus' => array( '21:05' , '22:24'),
		),
		'set7' => array(
			'Leo' => array( '23:44' , '23:59'),
			'_Leo' => array( '00:00' , '02:25'),
			'Virgo' => array( '02:26' , '05:03'),
			'Libra' => array( '05:04' , '07:40'),
			'Scorpio' => array( '07:41' , '10:18'),
			'Sagittarius' => array( '10:19' , '12:43'),
			'Capricorn' => array( '12:44' , '14:35'),
			'Aquarius' => array( '14:36' , '15:56'),
			'Pisces' => array( '15:57' , '17:01'),
			'Aries' => array( '17:02' , '18:06'),
			'Taurus' => array( '18:07' , '19:26'),
			'Gemini' => array( '19:27' , '21:18'),
			'Cancer' => array( '21:19' , '21:43'),
		),
		'set8' => array(
			'Leo' => array( '21:42' , '23:59'),
			'_Leo' => array( '00:00' , '00:23'),
			'Virgo' => array( '00:24' , '03:01'),
			'Libra' => array( '03:02' , '05:38'),
			'Scorpio' => array( '05:39' , '08:16'),
			'Sagittarius' => array( '08:17' , '10:41'),
			'Capricorn' => array( '10:42' , '12:33'),
			'Aquarius' => array( '12:34' , '13:54'),
			'Pisces' => array( '13:55' , '14:59'),
			'Aries' => array( '15:00' , '16:04'),
			'Taurus' => array( '16:05' , '17:24'),
			'Gemini' => array( '17:25' , '19:16'),
			'Cancer' => array( '19:17' , '21:41'),
		),
		'set9' => array(
			'Virgo' => array( '22:22' , '23:59'),
			'_Virgo' => array( '00:00' , '01:03'),
			'libra' => array( '01:04' , '03:40'),
			'Scorpio' => array( '03:41' ,'06:18'),
			'Sagittarius' => array( '06:16' , '08:43'),
			'Capricorn' => array( '08:44' , '10:35'),
			'Aquarius' => array( '10:36' , '11:56'),
			'Pisces' => array( '11:57' , '13:01'),
			'Aries' => array( '13:02' , '14:06'),
			'Taurus' => array( '14:07' , '15:25'),
			'Gemini' => array( '15:27' , '17:18'),
			'Cancer' => array( '17:19' , '19:43'),
			'Leo' => array( '19:44' , '22:21'),
		),
		'set10' => array(
			'Libra' => array( '23:01' , '23:59'),
			'_Libra' => array( '00:00' , '01:41'),
			'Scorpio' => array( '01:42' , '04:20'),
			'Sagittarius' => array( '04:21' , '06:44'),
			'Capricorn' => array( '06:45' , '08:36'),
			'Aquarius' => array( '08:37' , '09:57'),
			'Pisces' => array( '09:58' , '11:02'),
			'Aries' => array( '11:03' , '12:07'),
			'Taurus' => array( '12:08' , '13:27'),
			'Gemini' => array( '13:28' , '15:19'),
			'Cancer' => array( '15:20' , '17:44'),
			'Leo' => array( '17:45' , '20:22'),
			'Virgo' => array( '20:23' , '23:00'),
		),
		'set10a' => array(
			'Libra' => array( '23:01' , '23:59'),
			'_Libra' => array( '00:00' , '01:41'),
			'Scorpio' => array( '01:42' , '04:20'),
			'Sagittarius' => array( '04:21' , '06:44'),
			'Capricorn' => array( '06:45' , '08:36'),
			'Aquarius' => array( '08:37' , '09:57'),
			'Pisces' => array( '09:58' , '11:02'),
			'Aries' => array( '11:03' , '12:07'),
			'Taurus' => array( '12:08' , '13:27'),
			'Gemini' => array( '13:28' , '15:19'),
			'Cancer' => array( '15:20' , '17:44'),
			'Leo' => array( '17:45' , '20:22'),
			'Virgo' => array( '20:23' , '23:00'),
		),
		'set11' => array(
			'Scorpio' => array( '23:37' , '23:59'),
			'_Scorpio' => array( '00:00' , '02:18'),
			'Sagittarius' => array( '02:19' , '04:43'),
			'Capricorn' => array( '04:44' , '06:34'),
			'Aquarius' => array( '06:35' , '07:55'),
			'Pisces' => array( '07:56' , '09:00'),
			'Aries' => array( '09:01' , '10:05'),
			'Taurus' => array( '10:06' , '11:25'),
			'Gemini' => array( '11:26' , '13:17'),
			'Cancer' => array( '13:18' , '15:42'),
			'Leo' => array( '15:43' , '18:20'),
			'Virgo' => array( '18:21' , '20:58'),
			'Libra' => array( '20:59' , '23:36'),
		),
		'set12' => array(
			'Scorpio' => array( '21:43' , '23:59'),
			'_Scorpio' => array( '00:00' , '00:24'),
			'Sagittarius' => array( '00:25' , '02:49'),
			'Capricorn' => array( '02:50' , '04:40'),
			'Aquarius' => array( '04:41' , '06:01'),
			'Pisces' => array( '06:02' , '07:06'),
			'Aries' => array( '07:07' , '08:11'),
			'Taurus' => array( '08:12' , '09:31'),
			'Gemini' => array( '09:32' , '11:23'),
			'Cancer' => array( '11:24' , '13:48'),
			'Leo' => array( '13:49' , '16:26'),
			'Virgo' => array( '16:27' , '19:04'),
			'Libra' => array( '19:05' , '21:42'),
		),
	);

	$dataset = array(
		'date' => $date_set,
		'time' => $time_set
	);
	return $dataset[$datatype];
}

add_action('wp_enqueue_scripts','horcal_enqueue');
function horcal_enqueue(){
	$dir = plugin_dir_url( __FILE__ );
	wp_enqueue_style( 'boot-horcal', $dir.'css/bootstrap.min.css' );
	wp_enqueue_style( 'style-horcal', $dir.'css/style.css' );
	//js
	wp_enqueue_script('hor-script',$dir.'js/script.js');
}
function hor_cal_str_lpad( $str ){
	return str_pad($str, 2,'0',STR_PAD_LEFT);
}
function hor_cal_month_set($serial){
	$month_set = array(
		'January',
		'February',
		'March',
		'April',
		'May',
		'June',
		'July',
		'August',
		'Sepetember',
		'October',
		'November',
		'December',
	);
	return $month_set[$serial-1];
}
add_shortcode( 'horoscope_calculator', 'horoscope_calculator_callback' );
function horoscope_calculator_callback(){
	ob_start();
	?>
	<form method="post">
		<label>Pick your date of birth</label>
		<select name="hor_day" required="true">
			<option value="">Day</option>
			<option value="1">01</option>
			<option value="2">02</option>
			<option value="3">03</option>
			<option value="4">04</option>
			<option value="5">05</option>
			<option value="6">06</option>
			<option value="7">07</option>
			<option value="8">08</option>
			<option value="9">09</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		</select>
		<select name="hor_mon" required="true">
			<option value="">Month</option>
			<option value="1">January</option>
			<option value="2">February</option>
			<option value="3">March</option>
			<option value="4">April</option>
			<option value="5">May</option>
			<option value="6">June</option>
			<option value="7">July</option>
			<option value="8">August</option>
			<option value="9">September</option>
			<option value="10">October</option>
			<option value="11">November</option>
			<option value="12">December</option>
		</select>
		<div class="hor-t-holder">
		  <input type="number" required="true" name="hor_hour" class="hor-num" min="0" max="23" placeholder="23">:
		  <input type="number" required="true" name="hor_min" class="hor-num" min="0" max="59" placeholder="00">
		</div>
		<input type="submit" name="hor_calculator" class="btn btn-sucess" value="Calculate"/>
	</form>
	<?php
	if(isset($_POST['hor_calculator'])):
		$day = hor_cal_str_lpad(sanitize_text_field( $_POST['hor_day'] ));
		$month = hor_cal_str_lpad(sanitize_text_field($_POST['hor_mon']));
		$hor_hour = hor_cal_str_lpad(sanitize_text_field($_POST['hor_hour']));
		$hor_min = hor_cal_str_lpad(sanitize_text_field($_POST['hor_min']));
		$date_str = '2020-'.$month.'-'.$day;
		$date = new DateTime($date_str);
		$time_str = $hor_hour.':'.$hor_min;
		$time = new DateTime($time_str);
		$date_set = hor_cal_dataset('date');
		$time_set = hor_cal_dataset('time');
		$get_key = "";
		foreach ($date_set as $date_key => $date_value):
			$start = new DateTime($date_value['start']);
			$end = new DateTime($date_value['end']);
			if($date >= $start && $date <= $end):
				$get_key = $date_key;
			else:
				continue;
			endif;
		endforeach;
		// echo $get_key;
		$got_times = $time_set[$get_key];
		foreach ($got_times as $key => $value) {
			$start = new DateTime($value[0]);
			$end = new DateTime($value[1]);
			if($time >= $start && $time <= $end):
				$horoscope = $key;
			else:
				continue;
			endif;
		}
		echo 'For: '.$day.', '.hor_cal_month_set($_POST['hor_mon']).' '.$hor_hour.':'.$hor_min.'<br>';
		echo 'Result: '.ucfirst(str_replace('_', '', $horoscope));
	endif;
	return ob_get_clean();
}