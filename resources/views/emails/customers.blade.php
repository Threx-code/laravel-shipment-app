<!DOCTYPE html>
<html>
<head>
	<title>Shipping Details</title>
</head>
<body>
	<div>
		<h2>Hi {{ $customer['email']}}</h2>
		<p>Please find below details of your shipment</p>
		<p> Amount: <strong> {{ $customer['amount']}}</strong></p>
		<p> Customer Code: <strong> {{ $customer['customer_code']}}</strong></p>
		<p> Date: <strong> {{ $customer['date']}}</strong></p>
		<p> Ref: <strong> {{ $customer['ref_code']}}</strong></p>
	</div>
	<p> Please keep your Ref code: <h2>{{ $customer['ref_code']}}</h2> you will need it when your package(s) arrive</p>

	<p>Thank you for choosing <strong>SuperFreighters</strong></p>

</body>
</html>