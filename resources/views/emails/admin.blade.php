<!DOCTYPE html>
<html>
<head>
	<title>New Shipment Notification</title>
</head>
<body>
	<div>
		<h3>A new shipment order has be made</h3>
		<p>Customer Email: {{ $customer['email']}}</p>
		<p> Amount: <strong> {{ $customer['amount']}}</strong></p>
		<p> Customer Code: <strong> {{ $customer['customer_code']}}</strong></p>
		<p> Date: <strong> {{ $customer['date']}}</strong></p>
		<p> Ref: <strong> {{ $customer['ref_code']}}</strong></p>
	</div>
</body>
</html>