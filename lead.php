<?php


$name = $_POST['name'];
$eml = $_POST['email'];
$phn = $_POST['phone'];
$message = $_POST['message'];
$utm_src = $_POST['utm_src'];
$utm_med = $_POST['utm_med'];
$utm_camp = $_POST['utm_camp'];
$utm_term = $_POST['utm_term'];
$utm_cont = $_POST['utm_cont'];
$utm_refer = $_POST['utm_refer'];
$ip_add = $_POST['ip_add'];
$project = $_POST['project'];

if($name!='' && $eml!=''  && $phn!='' &&  $message!='')
{
  $data = array(
    'entry.335384999' => $name,
    'entry.589094759' => $eml,
    'entry.2119073509' => $phn,
    'entry.408243926' => $message,
    'entry.340920537' => $utm_src,
    'entry.645661440' => $utm_med,
    'entry.581464738' => $utm_camp,
    'entry.2061945501' => $utm_term,
    'entry.1117961831' => $utm_cont,
    'entry.977089641' => $utm_refer,
    'entry.395617616' => $ip_add,
    'entry.516553552' => $project,
  );

  $ch=curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://docs.google.com/forms/u/0/d/e/1FAIpQLScRnCbNbrqckBtlsWlUuhdVvsewi1u6gi387kHRrjFU81HMug/formResponse');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
  curl_setopt($ch, CURLOPT_TIMEOUT, 15);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
  $response = curl_exec($ch);


  //echo 'https://app.sell.do/api/leads/create?api_key=4e715e1803ba4f82c35d5dacd196dcf9&sell_do[form][lead][name]='.$name.'&sell_do[form][lead][email]='.$eml.'&sell_do[form][lead][phone]='.$phn.'&sell_do[campaign][srd]=';


  $url = 'https://app.sell.do/api/leads/create?api_key=4e715e1803ba4f82c35d5dacd196dcf9&sell_do[form][lead][name]='.$name.'&sell_do[form][lead][email]='.$eml.'&sell_do[form][lead][phone]='.$phn.'&sell_do[campaign][srd]=';
	
	
	 $ch1=curl_init();
  curl_setopt($ch1, CURLOPT_URL, $url);
  curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch1, CURLOPT_CONNECTTIMEOUT, 5);
  curl_setopt($ch1, CURLOPT_TIMEOUT, 15);
  curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
  $response1 = curl_exec($ch1);
	
	//var_dump($response1);

header('Location: https://ideal.in/thank-you?project='.$project);
}
else
{
    // header('Location: /curebay');

}
?>
